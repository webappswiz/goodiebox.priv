<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Kapcsolat extends Controller_Core {

    public function before() {
        parent::before();
        $this->set_title('Kapcsolat');
        $this->template->active_menu = 'kapcsolat';
    }

    public function action_index() {
        print_r($this->current_user);
    }

}
