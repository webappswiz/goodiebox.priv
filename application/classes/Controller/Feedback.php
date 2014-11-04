<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Feedback extends Controller_Core {

    protected $check_access = FALSE;
    
    public function before()
    {
        parent::before();
        $this->set_title('Feedback');
        $this->template->active_menu = 'feedback';
    }

    public function action_index() {
        
    }

}
