<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Api_User extends Controller_Core {

    public function action_check()
    {
        $email = Arr::get($_REQUEST, 'email');
        if(!$email){
            echo json_encode(array('error'=>'email incorrect'));
            return;
        } else
            echo 1;

    }

}
