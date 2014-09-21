<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Kapcsolat extends Controller_Core {

    public function before() {
        parent::before();
        $this->set_title('Kapcsolat');
        $this->template->active_menu = 'kapcsolat';
    }

    public function action_index() {
        $this->user = ($this->current_user)?$this->current_user:'';
    }

}
