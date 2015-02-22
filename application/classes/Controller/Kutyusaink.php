<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Kutyusaink extends Controller_Core {

    public function before() {
        parent::before();
        $this->set_title('Kutyusaink');
        $this->template->active_menu = 'kutyusaink';
    }

    public function action_index() {
        
    }

}
