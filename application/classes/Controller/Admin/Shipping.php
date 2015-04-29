<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Shipping extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'shipping';
    }

    public function action_index() {
        $this->model = ORM::factory('ShippingCost', 1);
        if (!$this->is_post()) {
            return;
        }
        $cost = Arr::get($_REQUEST, 'shipping_cost');
        if (!empty($cost) && is_numeric($cost)) {
            $this->model->cost = $cost;
            $this->model->save();
        } else {
            return;
        }
    }

}
