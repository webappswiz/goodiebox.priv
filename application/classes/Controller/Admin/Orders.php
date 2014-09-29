<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Orders extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'orders';
    }

    protected function find_model() {
        $this->model = ORM::factory('Order', (int) $this->request->param('id'));

        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
        $this->current_user = ORM::factory('User', (int) $this->model->user_id);
    }

    public function action_index() {
        $this->redirect('/admin/orders/page/?page=1');
        $total_items = ORM::factory('Order')->count_all();
        $this->orders = ORM::factory('Order')->with('status', 'package')->order_by('date_purchased', 'DESC')->find_all();
    }

    public function action_page() {
        $this->orders = ORM::factory('Order')->with('status', 'package');
        $this->pagination = Pagination::factory(array(
                    'total_items' => $this->orders->count_all(),
                    'items_per_page' => 5,
        ));
        $this->pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        $this->data = $this->orders->offset($this->pagination->offset)->limit($this->pagination->items_per_page)->order_by('date_purchased', 'DESC')->find_all()->as_array();
        //$pdf = new TCPDF;
        //$html = "<b>test</b>";
        //$pdf->AddPage();
        //$pdf->writeHTML($html);
        //$pdf->Output('example_001.pdf', 'FD');
    }

    public function action_edit() {
        $this->find_model();
        if (!$this->is_post())
            return;
        $this->update();
    }

    public function update() {
        $id = (int) $this->request->param('id');
        if ($id && $_REQUEST['status_name']) {
            $this->status = ORM::factory('OrderStatus', $_REQUEST['status_name']);
        } else {
            $this->redirect('/admin/orders/');
        }
        if(!$this->status->loaded())
            $this->redirect('/admin/orders/');
        
        $this->model = ORM::factory('Order',$id);
        $this->model->orders_status = $_REQUEST['status_name'];
        $this->model->save();
        $this->redirect('/admin/orders/');
    }

    public function action_delete() {
        $this->find_model();
        if ($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/orders/');
    }

}
