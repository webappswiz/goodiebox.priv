<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_API extends Controller_Core {

    protected $check_access = FALSE;

    public function action_check()
    {
        $email = Arr::get($_REQUEST, 'email');

        if (!$email) {
            echo json_encode(array('error' => 'email incorrect'));
        } else {
            $user = ORM::factory('User')
                    ->where('username', '=', $email)
                    ->or_where('email', '=', $email)
                    ->find();
            if ($user->loaded()) {
                echo json_encode(array('msg' => '1'));
            } else {
                echo json_encode(array('msg' => '0'));
            }
        }
        $this->render_nothing();
    }

}
