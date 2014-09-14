<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User_Account extends Controller_Core {

    protected $check_access = true;

    public function action_index()
    {
        $this->check_access();
    }

}
