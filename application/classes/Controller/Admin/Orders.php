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
        if($_REQUEST['status_name']==2){
            $shipping = new Shipping();
            $data_string = '{"REQUEST": {"flDebug": "true","cdLang": "HU","txEmail": "info@goodiebox.hu","txPassword": "D!ngd0ng","ORDER": {"dtPickup": "2014.09.24.",
      "flCOD": "true",
	  "nmRecipientCOD": "Gipsz Jakab",
	  "nmBankCOD": "GiveMeAllYourMoney Bank",
	  "txBankAccountNumberCOD": "12345678-12345678-12345678",
      "flNothingProhibited": "true",
      "flAgreedToTermsAndConditions": "true",

	  "DESTINATIONADDRESS": {
		"nmCompanyOrPerson": "Gipsz Jakab",
		"cdCountry": "HU",
		"txAddress": "Fő utca",
		"txAddressNumber": "123",
		"txPost": "1234",
		"txCity": "Budapest",
		"nmContact": "Gipsz Jakab",
		"txPhoneContact": "0123456789",
		"txEmailContact": "gipszjakab@gmail.com",
		"txInstruction": "Ha nem vagyok otthon, hagyja a szomszédnál!"
	  },
      "PACKAGES":
	  {
        "PACKAGE":
		[
		{
          "ctPackage": "2",
		  "amContent": "5000",
          "txContent": "Content of package1. The amContent is only mandatory if COD is set to TRUE",
		  "idOrder": "1"
        },
		{
          "ctPackage": "1",
          "amContent": "50000",
          "txContent": "Content of Package2. idOrder is not mandatory, but could be useful to send, as it will get printed on the waybill, and it’s easier to identify when you are printing waybill and taping them on the package. ",
		  "idOrder": "2"
        }
      ]}
    }
  }
}';
            $result = $shipping->send_request($data_string);
        }
        $this->redirect('/admin/orders/');
    }

    public function action_delete() {
        $this->find_model();
        if ($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/orders/');
    }

}
