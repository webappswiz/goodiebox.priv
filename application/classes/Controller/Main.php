<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->set_title('Home');

    }

        public function action_index()
    {
    }

}
