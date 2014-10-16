<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_users extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'users';
    }

    protected function find_model() {
        $this->model = ORM::factory('User', (int) $this->request->param('id'));

        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
        $this->disc = ORM::factory('Discounts')
                ->where('user_id', '=', (int) $this->request->param('id'))
                ->find();
        $this->discount = ($this->disc->loaded()) ? $this->disc->discount : 0;
    }

    public function action_index() {
        
    }

    public function action_info() {
        $this->set_filename('admin/users/form');
        $this->find_model();
        if (!$this->is_post())
            return;
        $this->update();
    }

    public function update() {
        $id = (int) Arr::get($_REQUEST, 'id');
        if ($id) {
            $this->user = ORM::factory('User', $id);
            if (!$this->user->loaded())
                throw new Kohana_HTTP_Exception_404;
            $discount = ORM::factory('Discounts')
                    ->where('user_id','=',$id)
                    ->find();
            if($discount->loaded()){
                $discount->discount = (int)Arr::get($_REQUEST, 'customer_discount');
                $discount->save();
            } else {
                $discount = ORM::factory('Discounts');
                $discount->discount = (int)Arr::get($_REQUEST, 'customer_discount');
                $discount->user_id = $id;
                $discount->save();
            }
        }
        $this->redirect('/admin/users/');
    }

    public function action_delete() {
        $this->find_model();
        if ($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/users/');
    }

}
