<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Shelters extends Controller_Admin {

    public $template = 'admin_core/core';

    public function before() {
        parent::before();
        $this->template->active_menu = 'shelters';
    }

    protected function find_model() {
        $this->model = ORM::factory('Shelter', (int) $this->request->param('id'));
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
    }

    public function action_index() {
        
    }

    public function action_edit() {
        $this->set_filename('admin/shelters/form');
        $this->find_model();
        if (!$this->is_post())
            return;
        $this->update();
    }

    public function action_add() {
        $this->set_filename('admin/shelters/form');
        $this->model = ORM::factory('Shelter');
        if (!$this->is_post()) {
            return;
        }
        $this->update();
    }
    
     public function update()
    {
        $id = (int)Arr::get($_REQUEST, 'id');
        if ($id) {
            $this->model = ORM::factory('Shelter', $id);
        } else {
            $this->model = ORM::factory('Shelter');
        }
        $this->model->shelter_name = $_REQUEST['shelter_name'];
        $this->model->email = $_REQUEST['shelter_email'];
        $this->model->save();
        $this->redirect('/admin/shelters/');
    }
    
    public function action_delete(){
        $this->find_model();
        if($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/shelters/');
    }

}
