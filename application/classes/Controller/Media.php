<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Media extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->set_title('Média');
        $this->template->active_menu = 'media';
    }

    public function action_index()
    {

    }

}
