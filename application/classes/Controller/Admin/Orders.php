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
        $this->orders->reset(FALSE);
        if (isset($_REQUEST['filter_by_fname']) && isset($_REQUEST['filter_by_lname'])) {
            $this->orders->where('delivery_firstname', 'LIKE', '%' . $_REQUEST['filter_by_fname'] . '%');
            $this->orders->and_where('delivery_lastname', 'LIKE', '%' . $_REQUEST['filter_by_lname'] . '%');
        }
        if (isset($_REQUEST['date_from']) && isset($_REQUEST['date_to']) && !empty($_REQUEST['date_from']) && !empty($_REQUEST['date_to'])) {
            $date_from = date('Y-m-d H:i:s', strtotime($_REQUEST['date_from']));
            $date_to = date('Y-m-d', strtotime($_REQUEST['date_to']));
            $this->orders->and_where('date_purchased', '>=', $date_from);
            $this->orders->and_where('date_purchased', '<=', $date_to.' 23:59:00');
        }
        if (isset($_REQUEST['status_name']) && $_REQUEST['action'] == 0 && $_REQUEST['status_name'] != 0) {
            $this->orders->and_where('orders_status', '=', $_REQUEST['status_name']);
        }
        $count = $this->orders->count_all();
        $this->pagination = Pagination::factory(array(
                    'total_items' => $count,
                    'items_per_page' => 50,
        ));
        if (isset($_REQUEST['action']) && $_REQUEST['action'] != 0 && isset($_REQUEST['orders'])) {
            if (!is_array($_REQUEST['orders']))
                return;
            if ($_REQUEST['action'] == 1) {
                //print_label
            }
            if ($_REQUEST['action'] == 2) {
                foreach ($_REQUEST['orders'] as $ord) {
                    $o = ORM::factory('Order', $ord);
                    $o->orders_status = 7;
                    $o->save();
                    $user = ORM::factory('User', $o->user_id);
                    $this->cancel_order($o, $user, 1);
                }
            }
            if ($_REQUEST['action'] == 3) {
                foreach ($_REQUEST['orders'] as $ord) {
                    $o = ORM::factory('Order', $ord);
                    $o->orders_status = $_REQUEST['status_name'];
                    $o->save();
                }
            }
            if ($_REQUEST['action'] == 4) {
                
            }
        }
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
            if ($this->model->payment_status == 5) {
                $flcode = "true";
                $cost = $this->model->total_price;
            } else {
                $flcode = "false";
                $cost = 0;
            }
            if (isset($_REQUEST['freeshipping']) && $_REQUEST['freeshipping'] == 1) {
                $flcode = "false";
                $cost = 0;
            }
            $date = strtotime(date('Y.m.d'));
            $pickup = date('Y.m.d', $date + 86400);
            $shipping = new Shipping();
            $data_string = '{"REQUEST": {"flDebug": "false","cdLang": "HU","txEmail": "info@goodiebox.hu","txPassword": "D!ngd0ng","ORDER": {"dtPickup": "' . $pickup . '.",
      "flCOD": "' . $flcode . '",
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
          "amContent": "' . $cost . '",
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

        if ($_REQUEST['status_name'] == 7) {
            $user = ORM::factory('User', $this->model->user_id);
            $this->cancel_order($this->model, $user, 1);
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
    
    public function action_cancel() {
        $id = (int) $this->request->param('id');
        if (file_exists(DOCROOT . 'orders/cancelled_order_' . $id . '.pdf')) {
            $file = DOCROOT . 'orders/cancelled_order_' . $id . '.pdf';
            $filename = 'Order_#' . $id . '_Cancel_Reciept.pdf'; /* Note: Always use .pdf at the end. */
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

    private function cancel_order($order, $user, $type) {
        if ($order->puppy_id > 0) {
            $size = $order->puppy->selected_size;
            if ($size == 1) {
                $s = 'Icipici';
            } elseif ($size == 2) {
                $s = 'Éppen jó';
            } elseif ($size == 3) {
                $s = 'Igazi óriás';
            } else {
                $s = '';
            }
        } else
            $s = 0;
        if ($order->payment_status == 5) {
            $cost = ORM::factory('ShippingCost', 1);
            if ($order->package->term == 1) {
                $cod = $cost->cost;
            } elseif ($order->package->term == 2) {
                $cod = $cost->cost * 3;
            } elseif ($order->package->term == 3) {
                $cod = $cost->cost * 6;
            }
            $pr = $cod;
            $method = 'Készpénz';
        } else {
            $pr = 0;
            $method = 'Átutalás';
        }


        $discount = $order->package->price - $order->total_price + $pr;
        $total_price = $order->package->price - $discount;
        if ($order->company_name <> '') {
            $company = 'Cégnév: ' . $order->company_name . '<br/>
                    Cím: ' . $order->company_zip . ', ' . $order->company_city . '<br/>
                        ' . $order->company_address . '<br/>
                    Adószám: ' . $order->tax_code . '<br/>';
            $user_details = '';
        } else {
            $company = '';
            $user_details = 'Név:	' . $order->delivery_lastname . ' ' . $order->delivery_firstname . '<br/>
                     Cím:	' . $order->delivery_postcode . ', ' . $order->delivery_city . '<br/>' . $order->delivery_address . '<br/>';
        }

        if ($order->package->term == 1) {
            $term = '1';
        } elseif ($order->package->term == 2) {
            $term = '3';
        } else {
            $term = '6';
        }

        $invoice = '<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            body {
                font-family: Arial, Helvetica, sans-serif;
                color: #330000;
                min-height: 100%;
                padding-top: 25px;
                padding-bottom: 25px;
        </style>
    </head>
    <body>
        <table style="border:0 0 2px solid 0;border-top:0px;border-left:0px;border-right:0px;width: 670px;padding: 0px;margin: 0px" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td style="width:50%;padding: 5px;border: 0px;border-left: 0px;" colspan="2"><img src="' . URL::base(TRUE, FALSE) . 'assets/img/logo_invoice.png"></td>
                <td style="padding: 5px;width:50%;text-align: right;vertical-align: top;border: 0px;border-right: 0px; font-size: 20px; font-weight: 600;letter-spacing: 5px;" colspan="2">STORNÓ SZÁMLA</td>
            </tr>
            <tr>
                <td style="height: 40px" colspan="4"></td>
            </tr>
            <tr>
                <td style="width:50%;border-left: 0px;border-right: 0px; font-size: 12px;font-size: 16px;font-weight: 600;text-align: left;vertical-align: bottom;letter-spacing: 5px;padding-left: 15px;" colspan="2">Szállító</td><td style="width:50%;font-size: 16px;font-weight: 600;text-align: left;vertical-align: bottom;letter-spacing: 5px;padding-left: 15px;" colspan="2">Vevo</td>
            </tr>
            <tr style="padding: 0px">
                <td style="padding: 10px;margin: 0px;width:50%;height: 80px;border-left: 2px solid;border-top: 2px solid;border-right: 2px solid;font-size: 12px;font-weight: 600;letter-spacing: 3px;line-height: 2em;" colspan="2">
                    Név:	Web Apps Consult Kft <br/>
                    Cím:	1053 Budapest<br/>
                        Kossuth Lajos utca 7-9.<br/>
                    Adószám: 25005813-1-41<br/>
                    Bankszámla: 11707000-20488804<br/>
                    Telefon: +36 30 233 7401
                </td>
                <td style="padding: 10px;margin: 0px;width:50%;height: 80px;border-top: 2px solid;line-height: 2em;border-right: 2px solid;font-size: 12px;font-weight: 600;letter-spacing: 3px;" colspan="3">
                    ' . $user_details . '
                    ' . $company . '
                    Telefon: ' . $user->customer_telephone . '
                </td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;letter-spacing:2px;text-align: center">Fizetési mód <br/>' . $method . '</td>
                <td style="border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Számla kelte<br/> ' . date('Y-m-d', strtotime($order->date_purchased)) . '</td>
                <td style="border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Teljesítés dátuma<br/> ' . date('Y-m-d', strtotime($order->date_purchased)) . '</td>
                <td style="border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Esedékesség Dátuma<br/> ' . date('Y-m-d', strtotime($order->date_purchased)) . '</td>
                <td style="border-right: 2px solid;border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Számla sorszáma<br/> ' . $order->invoice_num . '</td>
            </tr>
            <tr style="padding: 0px">
                <td colspan="5">
                    <table style="width: 100%;padding: 0px;margin: 0px" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-left: 2px solid;">Termék kód</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Termék leírása</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Menny.</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Menny. egys.</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Egységár <br/>(ÁFA nélkül)<br/> Forint</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Érték <br/>(ÁFA nélkül)<br/> Forint</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">ÁFA kulcsa</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Áthárított <br/>ÁFA összege Forint</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-right: 2px solid;">Érték <br/> (ÁFA-val együtt) <br/> Forint</td>
                        </tr>
                        <tr>
                            <td colspan="9" style="height: 15px; border-left: 2px solid; border-right: 2px solid;"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-left: 2px solid;">' . $order->package->product_number . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">GOODIEBOX ' . $s . '<br/>' . $order->package->package_name . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">-' . $term . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">db</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">-' . number_format((float) $order->package->price / $term, 2, ',', '') . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">-' . number_format((float) $order->package->price, 2, ',', '') . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">AM</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">-0,00</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-right: 2px solid;">-' . number_format((float) $order->package->price, 2, ',', '') . '</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="padding: 0px">
                <td style="padding: 0px;margin: 0px;width:50%;height: 45px;border-left: 2px solid; border-right: 2px solid;" colspan="5"></td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="margin: 0px;width:25%;height: 30px;"></td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;padding-bottom: 5px;margin: 0px;width:25%;height: 30px;font-size: 10px;">Kedvezmény:<br/><br/>Házhozszállítás:</td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;padding-bottom: 5px;margin: 0px;width:13%;height: 30px;font-size: 10px;border-right: 2px solid;text-align:right;">-' . number_format((float) $discount, 2, ',', '') . '&nbsp;&nbsp;<br/><br/>-' . number_format((float) $pr, 2, ',', '') . '&nbsp;&nbsp;</td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="margin: 0px;width:25%;height: 30px;"></td>
                <td style="border-top: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;font-size: 14px;">Összesen:</td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;margin: 0px;width:13%;height: 30px;font-size: 14px;border-right: 2px solid;text-align:right;">-' . number_format((float) ($total_price + $pr), 2, ',', '') . '&nbsp;&nbsp;</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: bottom;padding: 0px;margin: 0px;width:50%;height: 65px;border-left: 2px solid;font-size: 10px;border-bottom: 2px solid;border-right: 2px solid;" colspan="5">Az ÁFA kulcs: AM (alanyi mentes)</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;height: 45px;font-weight: 800" colspan="5">MEGJEGYZÉS:<br/>Ez a stornó számla a '.$order->invoice_num.' számú számla helyesbitése.</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;height: 105px;" colspan="5"></td>
            </tr>
            <tr style="padding: 0px">
                <td style="height:50px;vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;font-size: 10px;font-weight: 600" colspan="2">A számla 2 példányban került kinyomtatásra.</td>
                <td style="height:50px;vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;text-align: right;font-size: 10px;;font-weight: 600" colspan="3"></td>
            </tr>
        </table>
    </body>
</html>';
        $pdf = new DOMPDF();
        $invoice = str_replace('ő', 'o', $invoice);
        $invoice = str_replace('Ő', 'O', $invoice);
        $pdf->load_html($invoice);
        $pdf->render();
        $output = $pdf->output();
        file_put_contents(DOCROOT . 'orders/cancelled_order_' . $order->id . '.pdf', $output);
    }

}
