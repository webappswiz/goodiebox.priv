<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Core {

    public $template = 'admin_core/core';

    public function before() {
        parent::before();
        $this->template->active_menu = 'dashboard';
        if (!$this->current_user) {
            throw new HTTP_Exception_403('Access deny');
        }
        if(!$this->current_user->is_admin()){
            throw new HTTP_Exception_403('Access deny');
        }
    }
    
    public function action_index(){
        
    }
}
