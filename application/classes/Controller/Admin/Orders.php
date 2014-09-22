<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Orders extends Controller_Admin {

    public function before()
    {
        parent::before();
        $this->template->active_menu = 'orders';
    }

    protected function find_model()
    {
        $this->model = ORM::factory('OrderStatus', (int) $this->request->param('id'));
        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
    }

    public function action_index()
    {
        $this->redirect('/admin/orders/page/?page=1');
        $total_items = ORM::factory('Order')->count_all();
        $this->orders = ORM::factory('Order')->with('status', 'package')->order_by('date_purchased', 'DESC')->find_all();
    }

    public function action_page(){
        $this->orders = ORM::factory('Order')->with('status', 'package');
        $this->pagination = Pagination::factory(array(
                    'total_items' => $this->orders->count_all(),
                    'items_per_page' => 5,
        ));
        $this->pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        $this->data = $this->orders->offset($this->pagination->offset)->limit($this->pagination->items_per_page)->order_by('date_purchased','DESC')->find_all()->as_array();
    }

    public function action_edit()
    {
        $this->set_filename('admin/settings/form');
        $this->find_model();
        if (!$this->is_post())
            return;
        $this->update();
    }

    public function action_add()
    {
        $this->set_filename('admin/settings/form');
        $this->model = ORM::factory('OrderStatus');
        if (!$this->is_post()) {
            return;
        }
        $this->update();
    }

    public function update()
    {
        $id = (int) Arr::get($_REQUEST, 'id');
        if ($id) {
            $this->model = ORM::factory('OrderStatus', $id);
        } else {
            $this->model = ORM::factory('OrderStatus');
        }
        $this->model->status_name = $_REQUEST['status_name'];
        $this->model->save();
        $this->redirect('/admin/settings/');
    }

    public function action_delete()
    {
        $this->find_model();
        if ($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/settings/');
    }

}
