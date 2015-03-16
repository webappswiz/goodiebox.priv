<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Invoice extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->active_menu = 'invoice';
    }

    public function action_index() {
        $this->redirect('/admin/invoice/page/?page=1');
        $total_items = ORM::factory('Order')->count_all();
        $this->orders = ORM::factory('Order')
                ->with('status', 'package')
                ->where('order.type', '=', 4)
                ->order_by('date_purchased', 'DESC')
                ->find_all();
    }

    protected function find_model() {
        $this->model = ORM::factory('Order', (int) $this->request->param('id'));

        if (!$this->model->loaded())
            throw new Kohana_HTTP_Exception_404;
        $this->current_user = ORM::factory('User', (int) $this->model->user_id);
    }

    public function action_page() {
        $this->orders = ORM::factory('Order')
                ->with('status', 'package')
                ->where('order.type', '=', 4);
        $this->pagination = Pagination::factory(array(
                    'total_items' => $this->orders->count_all(),
                    'items_per_page' => 50,
        ));
        $this->pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        $this->data = $this->orders->offset($this->pagination->offset)->limit($this->pagination->items_per_page)->where('order.type', '=', 4)->order_by('date_purchased', 'DESC')->find_all()->as_array();
    }

    public function action_add() {
        $this->set_filename('admin/invoice/form');
        $this->model = ORM::factory('Order');
        if (!$this->is_post()) {
            return;
        }
        if (Arr::get($_REQUEST, 'product') != 0) {
            $this->model->selected_box = Arr::get($_REQUEST, 'product');
                if($this->model->package->term==1){
                   $ship_cost = Arr::get($_REQUEST, 'shipping_cost');
                } elseif($this->model->package->term==2){
                   $ship_cost = Arr::get($_REQUEST, 'shipping_cost')*3;
                } elseif($this->model->package->term==3){
                   $ship_cost = Arr::get($_REQUEST, 'shipping_cost')*6;
                }
             
        } else {
            $this->model->selected_box = 0;
            $this->model->prod_name = Arr::get($_REQUEST, 'prod_name');
            $ship_cost = Arr::get($_REQUEST, 'shipping_cost');
        }
        
        $this->model->delivery_firstname = Arr::get($_REQUEST, 'firstname');
        $this->model->delivery_lastname = Arr::get($_REQUEST, 'lastname');
        $this->model->delivery_address = Arr::get($_REQUEST, 'address');
        $this->model->delivery_city = Arr::get($_REQUEST, 'city');
        $this->model->delivery_postcode = Arr::get($_REQUEST, 'postcode');
        $this->model->delivery_telephone = Arr::get($_REQUEST, 'telephone');
        $this->model->company_name = Arr::get($_REQUEST, 'company_name');
        $this->model->company_address = Arr::get($_REQUEST, 'company_address');
        $this->model->company_zip = Arr::get($_REQUEST, 'company_zip');
        $this->model->company_city = Arr::get($_REQUEST, 'company_city');
        $this->model->tax_code = Arr::get($_REQUEST, 'tax_code');
        $this->model->total_price = Arr::get($_REQUEST, 'total_price') + $ship_cost;
        $this->model->user_id = $this->current_user->id;
        $this->model->last_modified = date('Y-m-d H:i:s');
        $this->model->date_purchased = date('Y-m-d H:i:s');
        $this->model->type = 4;
        $o = ORM::factory('Order')
                ->where('invoice_num', '<>', '')
                ->order_by('invoice_num', 'DESC')
                ->find();
        $this->model->invoice_num = $o->invoice_num + 1;
        $this->model->save();
        $this->receipt_email($this->model, Arr::get($_REQUEST, 'size'), $ship_cost, Arr::get($_REQUEST, 'pmethod'));
        $this->redirect('/admin/invoice/');
    }

    private function receipt_email($order, $size, $shipping, $pmethod) {
        if ($size == 1) {
            $s = 'GOODIEBOX Icipici' . '<br/>' . $order->package->package_name;
        } elseif ($size == 2) {
            $s = 'GOODIEBOX Éppen jó' . '<br/>' . $order->package->package_name;
        } elseif ($size == 3) {
            $s = 'GOODIEBOX Igazi óriás' . '<br/>' . $order->package->package_name;
        } else {
            $s = $order->prod_name;
        }
        if ($pmethod == 1) {
            $method = 'Átutalás';
        } else {
            $method = 'Készpénz';
        }

        $discount = $order->total_price - $order->total_price;
        $total_price = $order->total_price - $discount;
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
        } elseif ($order->package->term == 3) {
            $term = '6';
        } else {
            $term = '1';
        }

        $one_item = ($order->total_price -$shipping) / $term;
        $full_item = $order->total_price - $shipping;

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
                <td style="padding: 5px;width:50%;text-align: right;vertical-align: top;border: 0px;border-right: 0px; font-size: 22px; font-weight: 600;letter-spacing: 5px;" colspan="2">SZÁMLA</td>
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
                    Telefon: ' . $order->delivery_telephone . '
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
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . $s . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . $term . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">db</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . number_format((float) $one_item, 2, ',', '') . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . number_format((float) $full_item, 2, ',', '') . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">AM</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">0,00</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-right: 2px solid;">' . number_format((float) $full_item, 2, ',', '') . '</td>
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
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;padding-bottom: 5px;margin: 0px;width:13%;height: 30px;font-size: 10px;border-right: 2px solid;text-align:right;">' . number_format((float) $discount, 2, ',', '') . '&nbsp;&nbsp;<br/><br/>' . number_format((float) $shipping, 2, ',', '') . '&nbsp;&nbsp;</td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="margin: 0px;width:25%;height: 30px;"></td>
                <td style="border-top: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;font-size: 14px;">Összesen:</td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;margin: 0px;width:13%;height: 30px;font-size: 14px;border-right: 2px solid;text-align:right;">' . number_format((float) $total_price, 2, ',', '') . '&nbsp;&nbsp;</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: bottom;padding: 0px;margin: 0px;width:50%;height: 65px;border-left: 2px solid;font-size: 10px;border-bottom: 2px solid;border-right: 2px solid;" colspan="5">Az ÁFA kulcs: AM (alanyi mentes)</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;height: 45px;font-weight: 800" colspan="5">Köszönjük a vásárlást!</td>
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
        file_put_contents(DOCROOT . 'orders/order_' . $order->id . '.pdf', $output);
    }

}
