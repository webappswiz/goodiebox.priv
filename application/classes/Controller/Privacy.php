<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Privacy extends Controller_Core {
    public function before()
    {
        parent::before();
        $this->set_title('Adatvédelem');
    }
    public function action_index()
    {

    }

}