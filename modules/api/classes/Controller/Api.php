<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller {

    protected $auth;
    protected $user;

    public function before() {
        $this->account_model = ORM::factory('Account');
        $this->auth = Auth::instance();
        parent::before();
    }

    public function action_index() {
        $this->response->body(array('msg' => 'index', 'code' => '10001'));
    }

    public function action_login() {
        if ($this->request->jpost('login') && $this->request->jpost('password')) {
            $login = $this->request->jpost('login');
            $password = $this->auth->hash_password($this->request->jpost('password'));
            $user = $this->account_model->existsAccount($login);
            if ($user != FALSE) {
                $check = $this->account_model->checkLoginPass($user['id'], $password);
                if ($check) {
                    $session = $this->account_model->registerSession($user['id']);
                    $this->response->body(array('msg' => 'Ok', 'code' => '10001', 'data' => array('ssid' => $session)));
                } else {
                    $this->response->body(array('error' => 'pass incorrect', 'code' => '00002'));
                }
            } else {
                $this->response->body(array('error' => 'not exists', 'code' => '00001'));
            }
        }
    }

}
