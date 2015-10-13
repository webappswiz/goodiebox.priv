<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Hogyan extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->set_title(__('Hogyan'));
        $this->template->active_menu = 'hogyan';
    }

    public function action_index()
    {

    }

}
