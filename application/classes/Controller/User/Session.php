<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User_Session extends Controller_Core {

    protected $check_access = False;
    public function before()
    {
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
            Flash::set('alert', 'Wrong username or password.');
        }
    }

    public function action_logout() {
        Session::instance()->destroy();
        $this->redirect();
    }

}
