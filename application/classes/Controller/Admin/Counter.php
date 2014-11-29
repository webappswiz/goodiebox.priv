<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Counter extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'counter';
    }

    protected function find_model() {
        $this->model = ORM::factory('Options', 1);
        if (!$this->model->loaded()) {
            $this->model = ORM::factory('Options');
        }
    }

    public function action_index() {
        $this->find_model();
        if($this->is_post())
            $this->update();
    }

    public function update() {
        $this->model->text = arr::get($_REQUEST, 'counting_text');
        $this->model->end_date = arr::get($_REQUEST, 'end_date');
        $this->model->status = arr::get($_REQUEST, 'status');
        $this->model->save();
        
        if($this->model->status==1){
            $text = 'Successfully enabled';
        } else {
            $text = 'Successfully disabled';
        }
        
        Flash::set('notice', $text);
        $this->redirect('/admin/counter/');
    }

}
