<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Special extends Controller_Core {
    public function before()
    {
        parent::before();
        $this->set_title(__('Speciális ajánlatok'));
        $this->template->active_menu = 'special';
    }
    public function action_index()
    {

    }

}
