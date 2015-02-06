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
                    'items_per_page' => 50,
        ));
        $this->pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        $this->data = $this->orders->offset($this->pagination->offset)->limit($this->pagination->items_per_page)->order_by('date_purchased', 'DESC')->find_all()->as_array();
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
        if (!$this->status->loaded())
            $this->redirect('/admin/orders/');

        $this->model = ORM::factory('Order', $id);
        if ($this->model->orders_status == $_REQUEST['status_name'])
            return;
        $this->model->orders_status = $_REQUEST['status_name'];
        $this->model->save();
        if ($_REQUEST['status_name'] == 2) {
            if($this->model->payment_status==5){
                $flcode = true;
                $cost = $this->model->total_price;
            } else {
                $flcode = false;
                $cost = 0;
            }
            $date = strtotime(date('Y.m.d'));
            $pickup = date('Y.m.d', $date + 86400);
            $shipping = new Shipping();
            $data_string = '{"REQUEST": {"flDebug": "false","cdLang": "HU","txEmail": "info@goodiebox.hu","txPassword": "D!ngd0ng","ORDER": {"dtPickup": "' . $pickup . '.",
      "flCOD": "'.$flcode.'",
	  "nmRecipientCOD": "' . $this->model->delivery_firstname . ' ' . $this->model->delivery_lastname . '",
	  "nmBankCOD": "GiveMeAllYourMoney Bank",
	  "txBankAccountNumberCOD": "12345678-12345678-12345678",
      "flNothingProhibited": "true",
      "flAgreedToTermsAndConditions": "true",

	  "DESTINATIONADDRESS": {
		"nmCompanyOrPerson": "' . $this->model->delivery_firstname . ' ' . $this->model->delivery_lastname . '",
		"cdCountry": "HU",
		"txAddress": "' . $this->model->delivery_address . '",
		"txAddressNumber": "",
		"txPost": "' . $this->model->delivery_postcode . '",
		"txCity": "' . $this->model->delivery_city . '",
		"nmContact": "' . $this->model->delivery_firstname . ' ' . $this->model->delivery_lastname . '",
		"txPhoneContact": "' . $this->model->delivery_telephone . '",
		"txEmailContact": "' . $this->model->user->email . '",
		"txInstruction": ""
	  },
      "PACKAGES":
	  {
        "PACKAGE":
		[
		{
          "ctPackage": "1",
          "amContent": "'.$cost.'",
          "txContent": "' . $this->model->package->package_name . '",
          "idOrder": "' . $this->model->id . '"
        }
      ]}
    }
  }
}';
            $result = $shipping->send_request($data_string);
            $label = json_decode($result, true);
            $label = $label['Order']['Labels'][0];
            $pdf_decoded = base64_decode($label);
            $pdf = fopen(DOCROOT . 'shipping/label_order_' . $this->model->id . '.pdf', 'w');
            fwrite($pdf, $pdf_decoded);
            fclose($pdf);
        }
        $this->redirect('/admin/orders/');
    }

    public function action_delete() {
        $this->find_model();
        if ($this->model->loaded())
            $this->model->delete();
        $this->redirect('/admin/orders/');
    }

    public function action_receipt() {
        $id = (int) $this->request->param('id');
        if (file_exists(DOCROOT . 'orders/order_' . $id . '.pdf')) {
            $file = DOCROOT . 'orders/order_' . $id . '.pdf';
            $filename = 'Order_#' . $id . '_Reciept.pdf'; /* Note: Always use .pdf at the end. */
            header('Content-type: application/pdf');
            header('Content-Disposition:attachment; filename="' . $filename . '"');
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: ' . filesize($file));
            header('Accept-Ranges: bytes');
            @readfile($file);
            $this->render_nothing();
        } else
            $this->redirect('/admin/orders/');
    }

    public function action_shipping() {
        $id = (int) $this->request->param('id');
        if (file_exists(DOCROOT . 'shipping/label_order_' . $id . '.pdf')) {
            $file = DOCROOT . 'shipping/label_order_' . $id . '.pdf';
            $filename = 'Order_#' . $id . '_Reciept.pdf'; /* Note: Always use .pdf at the end. */
            header('Content-type: application/pdf');
            header('Content-Disposition:attachment; filename="' . $filename . '"');
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: ' . filesize($file));
            header('Accept-Ranges: bytes');
            @readfile($file);
            $this->render_nothing();
        } else {
            $this->redirect('/admin/orders/');
        }
    }

}
