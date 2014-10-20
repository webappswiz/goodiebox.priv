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
        $email_template = ORM::factory('Templates', 5);
        $http_link = HTML::anchor(URL::base(TRUE, TRUE) . 'user_session/newpass/?hash=' . $link);
        $email_template = str_replace('[link]', $http_link, $email_template->template_text);
        $this->send($email_model->email, 'info@goodiebox.hu', 'Jelszó helyreállítás', $email_template);
    }
    
    public function action_newpass() {
        echo $hash = Arr::get($_REQUEST, 'hash');
        $this->render_nothing();
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
