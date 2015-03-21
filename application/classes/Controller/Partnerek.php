<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Partnerek extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->set_title('Partnerek');
        $this->template->active_menu = 'partnerek';
    }

    public function action_index()
    {

    }

}
