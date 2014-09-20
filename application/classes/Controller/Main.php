<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->template->active_menu = 'home';
        $this->set_title('Home');

    }

        public function action_index()
    {
    }

}
