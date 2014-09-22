<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Packages extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'packages';
    }

    protected function find_model() {
        $this->model = ORM::factory('Packages', (int) $this->request->param('id'));
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
    }

    public function action_index() {

    }

    public function action_edit() {
        $this->set_filename('admin/packages/form');
        $this->find_model();
        if (!$this->is_post())
            return;
        $this->update();
    }

    public function action_add() {
        $this->set_filename('admin/settings/form');
        $this->model = ORM::factory('OrderStatus');
        if (!$this->is_post()) {
            return;
        }
        $this->update();
    }

     public function update()
    {
        $id = (int)Arr::get($_REQUEST, 'id');
        if ($id) {
            $this->model = ORM::factory('Packages', $id);
        } else {
            $this->redirect('/admin/packages/');
        }
        $this->model->package_name = $_REQUEST['package_name'];
        $this->model->price = $_REQUEST['package_price'];
        if(isset($_REQUEST['package_enabled'])){
            $this->model->enabled = 1;
        } else
            $this->model->enabled = 0;
        $this->model->save();
        $this->redirect('/admin/packages/');
    }

}
