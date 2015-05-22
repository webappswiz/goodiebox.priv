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
        foreach ($users as $u) {
            $this->users[$u->id] = $u->customer_lastname . ' ' . $u->customer_firstname;
        }
        $this->set_filename('admin/coupons/form');
        if (!$this->is_post()) {
            return;
        }
        if (Arr::get($_REQUEST, 'user_id') <> '' && Arr::get($_REQUEST, 'user_id') <> '') {
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
        foreach ($users as $u) {
            $this->users[$u->id] = $u->customer_lastname . ' ' . $u->customer_firstname;
        }
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
        $this->set_filename('admin/coupons/form');
        if (Arr::get($_REQUEST, 'user_id') <> '' && Arr::get($_REQUEST, 'user_id') <> '') {
            $this->model->user_id = Arr::get($_REQUEST, 'user_id');
            $this->model->coupon_code = Arr::get($_REQUEST, 'coupon_code');
            $this->model->save();
            $this->redirect('/admin/coupons/');
        }
    }

    public function action_add_user() {
        if (!$this->is_post()) {
            return;
        }
        $user = ORM::factory('User')
                ->where('email', '=', $_POST['customer_email'])
                ->or_where('username', '=', $_POST['customer_email'])
                ->find();
        if (!$user->loaded()) {
            $user = ORM::factory('User');
            $user->username = $_POST['customer_email'];
            $user->email = $_POST['customer_email'];
            $user->password = $_POST['customer_password'];
            $user->customer_firstname = $_POST['customer_firstname'];
            $user->customer_lastname = $_POST['customer_lastname'];
            $user->customer_address = $_POST['customer_address'];
            $user->customer_address2 = $_POST['customer_address2'];
            $user->customer_city = $_POST['customer_city'];
            $user->customer_zip = $_POST['customer_zip'];
            $user->customer_telephone = $_POST['customer_telephone'];
            if (isset($_POST['customer_company'])) {
                $user->customer_company = $_POST['customer_company'];
                $user->customer_company_address = $_POST['customer_company_address'];
                $user->customer_company_zip = $_POST['customer_company_zip'];
                $user->customer_company_city = $_POST['customer_company_city'];
                $user->customer_taxcode = $_POST['customer_taxcode'];
            }

            $user->save();
            $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
        }
    }

}
