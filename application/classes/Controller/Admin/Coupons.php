<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Coupons extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'coupons';
    }
    
    public function action_index() {
        $this->model = ORM::factory('CouponCodes')->find_all();
    }
    
    public function action_add() {
        $this->model = ORM::factory('CouponCodes');
        $users = ORM::factory('User')->find_all();
        foreach ($users as $u){
            $this->users[$u->id] = $u->customer_lastname.' '.$u->customer_firstname;
        }
        $this->set_filename('admin/coupons/form');
        if (!$this->is_post()) {
            return;
        }
        if (Arr::get($_REQUEST, 'user_id') <> '' && Arr::get($_REQUEST, 'user_id')<>'') {
            $this->model->user_id = Arr::get($_REQUEST, 'user_id');
            $this->model->coupon_code = Arr::get($_REQUEST, 'coupon_code');
            $this->model->count = 0;
            $this->model->save();
            $this->redirect('/admin/coupons/');
        }
    }
    
    public function action_edit() {
        $this->model = ORM::factory('CouponCodes', (int) $this->request->param('id'));
        $users = ORM::factory('User')->find_all();
        foreach ($users as $u){
            $this->users[$u->id] = $u->customer_lastname.' '.$u->customer_firstname;
        }
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
        $this->set_filename('admin/coupons/form');
        if (Arr::get($_REQUEST, 'user_id') <> '' && Arr::get($_REQUEST, 'user_id')<>'') {
            $this->model->user_id = Arr::get($_REQUEST, 'user_id');
            $this->model->coupon_code = Arr::get($_REQUEST, 'coupon_code');
            $this->model->save();
            $this->redirect('/admin/coupons/');
        }
    }

}
