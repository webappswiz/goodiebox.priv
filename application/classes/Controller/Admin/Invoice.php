<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Invoice extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'invoice';
    }

    public function action_index() {
        
    }

}
