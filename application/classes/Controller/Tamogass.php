<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Tamogass extends Controller_Core {
public function before()
    {
        parent::before();
        $this->set_title('Tamogass');
        $this->template->active_menu = 'tamogass';
    }
    public function action_index()
    {

    }

}
