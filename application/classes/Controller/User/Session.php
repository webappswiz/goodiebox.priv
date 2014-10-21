<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User_Session extends Controller_Core {

    protected $check_access = False;

    public function before() {
        parent::before();
        $this->set_title('Belépés');
        $this->template->active_menu = 'login';
    }

    public function action_login() {
        if (!$this->is_post())
            return;

        $username = Arr::get($_REQUEST, 'username');
        $password = Arr::get($_REQUEST, 'password');
        $ok = Auth::instance()->login($username, $password);
        if ($ok) {
            $requested_url = Cookie::get('auth_required_url');
            Cookie::get('auth_required_url', NULL);
            $this->user = Auth::instance()->get_user();
            if ($this->user->is_admin()) {
                $this->redirect(Kohana::$base_url . '/admin');
            } else
                $this->redirect($requested_url? : Kohana::$base_url . '/user_account');
        }
        else {
            Flash::set('alert', 'Helytelen felhasználónév vagy jelszó!');
        }
    }

    public function action_reset() {
        if (!$this->is_post())
            return;
        $email = Arr::get($_REQUEST, 'email');
        $email_model = ORM::factory('User')
                ->where('email', '=', $email)
                ->find();
        if (!$email_model->loaded()) {
            Flash::set('alert', 'Ez az e-mail cím nincs a rendszerünkben');
            $this->redirect('/user_session/reset');
        }
        $link = md5(2014 * 10 * 20 + $email_model->id);
        $token = ORM::factory('User_Token');
        $token->user_id = $email_model->id;
        $token->token = $link;
        $token->save();
        $email_template = ORM::factory('Templates', 5);
        $http_link = HTML::anchor(URL::base(TRUE, TRUE) . 'user_session/reset2/?hash=' . $token->token);
        $email_template = str_replace('[link]', $http_link, $email_template->template_text);
        $this->send($email_model->email, 'info@goodiebox.hu', 'Jelszó helyreállítás', $email_template);
    }

    public function action_reset2() {
        $hash = Arr::get($_REQUEST, 'hash');
        if (!$hash) {
            Flash::set('alert', 'érvénytelen link');
            $this->redirect('/user_session/login');
        }
        $user = ORM::factory('User_Token')
                ->where('token', '=', $hash)
                ->find();
        if (!$user->loaded()){
            Flash::set('alert', 'érvénytelen link');
            $this->redirect('/user_session/login');
        }
        if (!$this->is_post()) {
            $this->set_filename('/user_session/form');
        } else {
            $password = Arr::get($_REQUEST, 'customer_password');
            $password_confirm = Arr::get($_REQUEST, 'password_confirm');
            if ($password != $password_confirm) {
                Flash::set('alert', 'A jelszó nem egyezik');
                $this->redirect('/user_session/reset/?hash' . $hash);
            }
            $user_id = $user->user_id;
            $usr = ORM::factory('User', $user_id);
            $usr->password = $password;
            $usr->save();
            $user->delete();
            Flash::set('notice', 'A jelszavadat sikeresen megváltoztattad!');
            $this->redirect('/user_session/login');
        }
    }

    public function action_logout() {
        Session::instance()->destroy();
        $this->redirect();
    }

    private function send($to, $from, $subject, $body, $file = '') {
        $email = new PHPMailer();
        $email->ContentType = 'text/plain';
        $email->AddAddress($to);
        $email->CharSet = 'UTF-8';
        $email->SetFrom($from, 'Goodiebox');
        $email->Subject = $subject;
        $email->Body = $body;
        $email->IsHTML(true);
        if (!empty($file)) {
            $email->AddAttachment(DOCROOT . 'orders/' . $file, $file);
        }
        $email->Send();
    }

}
