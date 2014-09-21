<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Tos extends Controller_Core {
    public function before()
    {
        parent::before();
        $this->set_title('ÁSZF');
    }
    public function action_index()
    {

    }

}
