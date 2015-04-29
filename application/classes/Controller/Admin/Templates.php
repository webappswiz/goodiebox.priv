<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Templates extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'templates';
    }

    protected function find_model() {
        $this->model = ORM::factory('Templates', (int) $this->request->param('id'));
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
    }

    public function action_index() {

    }

    public function action_edit() {
        $this->set_filename('admin/templates/form');

        $this->find_model();
        if (!$this->is_post())
            return;
        $this->update();
    }

     public function update()
    {
        $id = (int)Arr::get($_REQUEST, 'id');
        if ($id) {
            $this->model = ORM::factory('Templates')
                    ->where('type','=',(int)$id)
                    ->find();
        } else {
            $this->redirect('/admin/templates/');
        }
        $this->model->template_text = $_REQUEST['template_text'];
        $this->model->save();
        $this->redirect('/admin/templates/');
    }

}
