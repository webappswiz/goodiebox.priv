<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_users extends Controller_Admin {

    public $template = 'admin_core/core';

    public function before() {
        parent::before();
        $this->template->active_menu = 'users';
    }

    protected function find_model() {
        $this->model = ORM::factory('User', (int) $this->request->param('id'));
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
    }

    public function action_index() {
        
    }

    public function action_info() {
        $this->set_filename('admin/users/form');
        $this->find_model();
    }
    
    public function action_delete(){
        $this->find_model();
        if($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/users/');
    }

}
