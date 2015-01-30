<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Order extends Controller_Core {

    public function before() {
        parent::before();
        $this->set_title('Order');
        $this->template->active_menu = 'order';
    }

    private function send($to, $from, $subject, $body, $file = '') {
        $email = new PHPMailer();
        $email->ContentType = 'text/plain';
        $email->AddAddress($to);
        $email->CharSet = 'UTF-8';
        $email->SetFrom($from, 'Goodiebox');
        $email->Subject = $subject;
        $email->Body = $body;
        $email->IsHTML(true);
        if (!empty($file)) {
            $email->AddAttachment(DOCROOT . 'orders/' . $file, $file);
        }
        $email->Send();
    }

    private function receipt_email($order, $user, $type) {
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
        if($order->payment_status==5){
            $cost = ORM::factory('ShippingCost',1);
            $pr = $cost->cost;
        } else {
            $pr = 0;
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
            $user_details = 'Név:	' . $user->customer_lastname . ' ' . $user->customer_firstname . '<br/>
                     Cím:	' . $user->customer_zip . ', ' . $user->customer_city . '<br/>' . $user->customer_address . '<br/>';
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
                    Telefon: ' . $user->customer_telephone . '
                </td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;letter-spacing:2px;text-align: center">Fizetési mód <br/>Átutalás</td>
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
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . $term . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">db</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . number_format((float) $order->package->price / $term, 2, ',', '') . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">' . number_format((float) $order->package->price, 2, ',', '') . '</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">AM</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">0,00</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-right: 2px solid;">' . number_format((float) $order->package->price, 2, ',', '') . '</td>
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
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;padding-bottom: 5px;margin: 0px;width:13%;height: 30px;font-size: 10px;border-right: 2px solid;text-align:right;">' . number_format((float) $discount, 2, ',', '') . '&nbsp;&nbsp;<br/><br/>'.number_format((float) $pr, 2, ',', '').'&nbsp;&nbsp;</td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="margin: 0px;width:25%;height: 30px;"></td>
                <td style="border-top: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;font-size: 14px;">Összesen:</td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;margin: 0px;width:13%;height: 30px;font-size: 14px;border-right: 2px solid;text-align:right;">' . number_format((float) ($total_price+$pr), 2, ',', '')  . '&nbsp;&nbsp;</td>
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
        //$pdf = new TCPDF();
        //$pdf->AddPage();
        //$pdf->writeHTML($invoice, true, false, false, false, '');
        //$pdf->Output(DOCROOT . 'orders/order_' . $order->id . '.pdf', 'F');
        file_put_contents(DOCROOT . 'orders/order_' . $order->id . '.pdf', $output);


        $template = ORM::factory('Templates', 2);
        $body = str_replace('[firstname]', $user->customer_firstname, $template->template_text);
        $this->send($user->email, 'info@goodiebox.hu', 'Sikeres megrendelés', $body, 'order_' . $order->id . '.pdf');
    }

    public function action_index() {
        $this->set_title('Order - Step 1');
        if (isset($_POST['order1']) || isset($_POST['order2']) || isset($_POST['order3'])) {
            Session::instance()->set('step1', $_POST);
            $this->redirect('order/step2');
        } elseif (isset($this->current_user)) {
            $this->redirect('/user_account');
        }
    }

    public function action_step2() {
        $session = Session::instance()->as_array();
        $this->set_title('Order - Step 2');
        if (isset($_POST['order']) && isset($session['step1'])) {
            Session::instance()->set('step2', $_POST);
            $this->redirect('order/step3');
        }
        if (!isset($session['step1'])) {
            Flash::set('alert', 'Please fill the form');
            $this->redirect('order/index');
        }
    }

    private function register() {
        if (empty($_POST['customer_password']) || $_POST['customer_password'] != $_POST['password_confirm']) {
            Flash::set('alert', 'Please fill email and password');
            $this->redirect('order/step3');
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
            if (isset($_POST['company'])) {
                $user->customer_company = $_POST['company_name'];
                $user->customer_company_address = $_POST['company_address'];
                $user->customer_company_zip = $_POST['company_zip'];
                $user->customer_company_city = $_POST['company_city'];
                $user->customer_taxcode = $_POST['tax_code'];
            }

            $user->save();
            $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
            $invites = ORM::factory('Invites')
                    ->where('email', '=', $_POST['customer_email'])
                    ->find_all();
            if (count($invites) > 0) {
                $i = 0;
                foreach ($invites as $inv) {
                    if ($i == 0) {
                        $inv->is_registered = 1;
                        $inv->save();
                    } else {
                        $inv->delete();
                    }
                    $i++;
                }
            }
            $current_user = Auth::instance()->login($_POST['customer_email'], $_POST['customer_password']);
            $template = ORM::factory('Templates', 1);
            $this->current_user = Auth::instance()->get_user();
            $body = str_replace('[firstname]', $this->current_user->customer_firstname, $template->template_text);
            $body = str_replace('[login]', $this->current_user->email, $body);
            $this->send($this->current_user->email, 'info@goodiebox.hu', 'Sikeres regisztráció', $body);
        }
    }

    private function regular_order() {
        $session = Session::instance();
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');

        if ($this->current_user) {
            $global_discount = ORM::factory('Discounts')
                    ->where('user_id', '=', $this->current_user->id)
                    ->find();
            if ($global_discount->loaded()) {
                $g_discount = $global_discount->discount;
            } else {
                if (isset($_POST['invite_code'])) {
                    $coupon = ORM::factory('Coupons')
                            ->where('coupon', '=', $_POST['invite_code'])
                            ->find();
                    if ($coupon->loaded()) {
                        $global_discount = 10;
                        $coupon->delete();
                    } else {
                        $g_discount = 0;
                    }
                } else {
                    $g_discount = 0;
                }
            }
            $invites = ORM::factory('Invites')
                    ->where('user_id', '=', $this->current_user->id)
                    ->and_where('is_used', '=', 0)
                    ->and_where('is_paid', '=', 1)
                    ->and_where('is_registered', '=', 1)
                    ->find_all();
            $inv_count = $invites;
            $this->discount = 0;
            if (count($invites) > 0 || $g_discount > 0) {
                $this->discount = $this->price->price * ((count($invites) * 5 + $g_discount) / 100);
            }
            $this->append_js_var('discount', round($this->discount));
        } else {
            $invites = 0;
        }


        $order = ORM::factory('Order');
        $puppy = ORM::factory('Puppy');
        if (!isset($step1['puppy_id'])) {
            $puppy->puppy_name = $step1['puppy_name'];
            $puppy->gender = $step1['gender'];
            $puppy->years = $step1['years'];
            $puppy->months = $step1['months'];
            $puppy->alerg = $step1['alerg'];
            $puppy->alerg_descr = $step1['alerg_descr'];
            $puppy->selected_size = $step1['selected_size'];
            $puppy->user_id = $this->current_user->id;
            $puppy->save();
        }
        $order->puppy_id = (isset($step1['puppy_id'])) ? $step1['puppy_id'] : $puppy->id;
        $order->selected_box = $step2['selected_box'];
        $order->last_modified = date('Y-m-d H:i:s');
        $order->date_purchased = date('Y-m-d H:i:s');
        $order->type = 1;
        $order->user_id = $this->current_user->id;
        $address = ORM::factory('AddressBook')
                ->where('user_id', '=', $this->current_user->id)
                ->find();
        if (isset($_POST['customer_firstname']) && !isset($_POST['shipping'])) {
            $order->delivery_firstname = ($address->loaded()) ? $address->customer_firstname : $_POST['customer_firstname'];
            $order->delivery_lastname = ($address->loaded()) ? $address->customer_lastname : $_POST['customer_lastname'];
            $order->delivery_address = ($address->loaded()) ? $address->customer_address : $_POST['customer_address'];
            $order->delivery_address2 = ($address->loaded()) ? $address->customer_address2 : $_POST['customer_address2'];
            $order->delivery_city = ($address->loaded()) ? $address->customer_city : $_POST['customer_city'];
            $order->delivery_postcode = ($address->loaded()) ? $address->customer_zip : $_POST['customer_zip'];
            $order->delivery_telephone = ($address->loaded()) ? $address->customer_telephone : $_POST['customer_telephone'];
            $order->company_name = $_POST['company_name'];
            $order->company_address = $_POST['company_address'];
            $order->company_zip = $_POST['company_zip'];
            $order->company_city = $_POST['company_city'];
            $order->tax_code = $_POST['tax_code'];
            $order->message = $_POST['msg'];
        } elseif (isset($_POST['shipping'])) {
            if (empty($_POST['delivery_firstname']) || empty($_POST['delivery_lastname']) || empty($_POST['delivery_city']) || empty($_POST['delivery_address']) || empty($_POST['delivery_zip'])) {
                Flash::set('alert', 'Please the shipping form');
                $this->redirect('order/step3');
            }
            $order->delivery_firstname = $_POST['delivery_firstname'];
            $order->delivery_lastname = $_POST['delivery_lastname'];
            $order->delivery_address = $_POST['delivery_address'];
            $order->delivery_address2 = $_POST['delivery_address2'];
            $order->delivery_city = $_POST['delivery_city'];
            $order->delivery_postcode = $_POST['delivery_zip'];
            $order->delivery_telephone = $_POST['delivery_telephone'];
            $order->company_name = $_POST['company_name'];
            $order->company_address = $_POST['company_address'];
            $order->company_zip = $_POST['company_zip'];
            $order->company_city = $_POST['company_city'];
            $order->tax_code = $_POST['tax_code'];
            $order->message = $_POST['msg'];
            $address = ORM::factory('AddressBook', $this->current_user->id);
            if (!$address->loaded()) {
                $address = ORM::factory('AddressBook');
            }
            $address->user_id = $this->current_user->id;
            $address->customer_firstname = $_POST['delivery_firstname'];
            $address->customer_lastname = $_POST['delivery_lastname'];
            $address->customer_zip = $_POST['delivery_zip'];
            $address->customer_city = $_POST['delivery_city'];
            $address->customer_address = $_POST['delivery_address'];
            $address->customer_address2 = $_POST['delivery_address2'];
            $address->customer_telephone = $_POST['delivery_telephone'];
            $address->save();
        }
        if (!empty($step1['coupon_code'])) {
            $friend = ORM::factory('Friend')
                    ->where('coupon_code', '=', $step1['coupon_code'])
                    ->find();
            if ($friend->loaded()) {
                $order->coupon_code = $step1['coupon_code'];
                $order->puppy_id = $step1['puppy_id'];
                $friend->coupon_code = '';
                $order->selected_box = $step2['selected_box'];
                $friend->save();
            } else
                $this->redirect('/user_account');
        }
        $discount = 0;
        if ($_POST['discount'] == 1) {
            if (count($inv_count) > 0 && empty($step1['coupon_code'])) {
                echo 1;
                $order->discount = 1;
                $pkg = ORM::factory('Packages', $step2['selected_box']);
                $discount = ($pkg->price * (((count($invites) * 5) + $g_discount) / 100));
            } elseif ($g_discount > 0) {
                $order->discount = 1;
                $pkg = ORM::factory('Packages', $step2['selected_box']);
                $discount = $pkg->price * ($g_discount / 100);
            }
        }
        $order->orders_status = 1;
        if($_POST['pt']=='cod'){
            $order->payment_status = 5;
        } else 
            $order->payment_status = 0;
        $order->save();
        if (!empty($step1['coupon_code'])) {
            $order->total_price = 0;
        } else {
            if($_POST['pt']=='cod'){
                $cost = ORM::factory('ShippingCost',1);
                $order->total_price = round($order->package->price - $discount+$cost->cost);
            } else {
                $order->total_price = round($order->package->price - $discount);
            }
            
        }
        $order->save();
        return $order;
    }

    private function gift_order() {
        $session = Session::instance();
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');
        if ($this->current_user) {
            $global_discount = ORM::factory('Discounts')
                    ->where('user_id', '=', $this->current_user->id)
                    ->find();
            if ($global_discount->loaded()) {
                $g_discount = $global_discount->discount;
            } else {
                if (isset($_POST['invite_code'])) {
                    $coupon = ORM::factory('Coupons')
                            ->where('coupon', '=', $_POST['invite_code'])
                            ->find();
                    if ($coupon->loaded()) {
                        $global_discount = 10;
                        $coupon->delete();
                    } else {
                        $g_discount = 0;
                    }
                } else {
                    $g_discount = 0;
                }
            }
            $invites = ORM::factory('Invites')
                    ->where('user_id', '=', $this->current_user->id)
                    ->and_where('is_used', '=', 0)
                    ->and_where('is_paid', '=', 1)
                    ->and_where('is_registered', '=', 1)
                    ->find_all();
            $inv_count = $invites;
            $this->discount = 0;
            if (count($invites) > 0 || $g_discount > 0) {
                $this->discount = $this->price->price * ((count($invites) * 5 + $g_discount) / 100);
            }
            $this->append_js_var('discount', round($this->discount));
        } else {
            $invites = 0;
        }

        $order = ORM::factory('Order');
        $friend = ORM::factory('Friend')
                ->where('friends_email', '=', $step1['friend_email'])
                ->and_where('friends_firstname', '=', $step1['firstname'])
                ->and_where('friends_lastname', '=', $step1['lastname'])
                ->find();
        if (!$friend->loaded()) {
            $friend = ORM::factory('Friend');
            $friend->friends_email = $step1['friend_email'];
            $friend->friends_firstname = $step1['firstname'];
            $friend->friends_lastname = $step1['lastname'];
            $friend->user_id = $this->current_user->id;
        }
        $friend->selected_box = $step2['selected_box'];
        $friend->coupon_code = $this->generateRandomString();
        $friend->date_purchased = date('Y-m-d H:i:s');
        $friend->save();
        $order->user_id = $this->current_user->id;
        $order->selected_box = $step2['selected_box'];
        $order->puppy_id = 0;
        $order->friend_id = $friend->id;
        $order->last_modified = date('Y-m-d H:i:s');
        $order->date_purchased = date('Y-m-d H:i:s');
        $order->type = 2;
        $order->delivery_firstname = $_POST['customer_firstname'];
        $order->delivery_lastname = $_POST['customer_lastname'];
        $order->delivery_address = $_POST['customer_address'];
        $order->delivery_address2 = $_POST['customer_address2'];
        $order->delivery_city = $_POST['customer_city'];
        $order->delivery_postcode = $_POST['customer_zip'];
        $order->delivery_telephone = $_POST['customer_telephone'];
        $order->message = $_POST['msg'];
        $order->orders_status = 1;
        $order->company_name = $_POST['company_name'];
        $order->company_address = $_POST['company_address'];
        $order->company_zip = $_POST['company_zip'];
        $order->company_city = $_POST['company_city'];
        $order->tax_code = $_POST['tax_code'];
        $order->payment_status = 0;
        $discount = 0;
        if ($_POST['discount'] == 1) {
            if (count($invites) > 0 && empty($step1['coupon_code'])) {
                echo 1;
                $order->discount = 1;
                $pkg = ORM::factory('Packages', $step2['selected_box']);
                $discount = ($pkg->price * (((count($invites) * 5) + $g_discount) / 100));
            } elseif ($g_discount > 0) {
                $order->discount = 1;
                $pkg = ORM::factory('Packages', $step2['selected_box']);
                $discount = $pkg->price * ($g_discount / 100);
            }
        }
        $order->save();
        if($_POST['pt']=='cod'){
            $cost = ORM::factory('ShippingCost',1);
            $order->total_price = round($order->package->price - $discount+$cost->cost);
        } else {
            $order->total_price = round($order->package->price - $discount);
        }
        
        $order->save();
        return $order;
    }

    private function shelter_order() {
        $session = Session::instance();
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');

        if ($this->current_user) {
            $global_discount = ORM::factory('Discounts')
                    ->where('user_id', '=', $this->current_user->id)
                    ->find();
            if ($global_discount->loaded()) {
                $g_discount = $global_discount->discount;
            } else {
                if (isset($_POST['invite_code'])) {
                    $coupon = ORM::factory('Coupons')
                            ->where('coupon', '=', $_POST['invite_code'])
                            ->find();
                    if ($coupon->loaded()) {
                        $global_discount = 10;
                        $coupon->delete();
                    } else {
                        $g_discount = 0;
                    }
                } else {
                    $g_discount = 0;
                }
            }
            $invites = ORM::factory('Invites')
                    ->where('user_id', '=', $this->current_user->id)
                    ->and_where('is_used', '=', 0)
                    ->and_where('is_paid', '=', 1)
                    ->and_where('is_registered', '=', 1)
                    ->find_all();
            $inv_count = $invites;
            $this->discount = 0;
            if (count($invites) > 0 || $g_discount > 0) {
                $this->discount = $this->price->price * ((count($invites) * 5 + $g_discount) / 100);
            }
            $this->append_js_var('discount', round($this->discount));
        } else {
            $invites = 0;
        }

        $shelter = ORM::factory('ShelterDog')
                ->where('shelter_id', '=', $step1['option-name'])
                ->and_where('doggy_name', '=', $step1['doggy_name'])
                ->and_where('doggy_gender', '=', $step1['gender'])
                ->and_where('selected_size', '=', $step1['selected_size'])
                ->find();
        if (!$shelter->loaded()) {
            $shelter = ORM::factory('ShelterDog');
            $shelter->selected_size = $step1['selected_size'];
            $shelter->shelter_id = $step1['option-name'];
            $shelter->doggy_name = $step1['doggy_name'];
            $shelter->doggy_gender = $step1['gender'];
            $shelter->user_id = $this->current_user->id;
            $shelter->save();
        }
        $s_order = ORM::factory('User_Shelter');
        $s_order->user_id = $this->current_user->id;
        $s_order->dog = $shelter->id;
        $s_order->selected_box = $step2['selected_box'];
        $s_order->delivery_address = '';
        $s_order->delivery_address2 = '';
        $s_order->delivery_city = '';
        $s_order->delivery_postcode = '';
        $s_order->delivery_telephone = '';
        $s_order->last_modified = date('Y-m-d H:i:s');
        $s_order->date_purchased = date('Y-m-d H:i:s');
        $s_order->save();
        $order = ORM::factory('Order');
        $order->user_id = $this->current_user->id;
        $order->selected_box = $step2['selected_box'];
        $order->delivery_firstname = $this->current_user->customer_firstname;
        $order->delivery_lastname = $this->current_user->customer_lastname;
        $order->delivery_address = $this->current_user->customer_address;
        $order->delivery_address2 = $this->current_user->customer_address2;
        $order->delivery_city = $this->current_user->customer_city;
        $order->delivery_postcode = $this->current_user->customer_zip;
        $order->delivery_telephone = $this->current_user->customer_telephone;
        $order->company_name = $this->current_user->customer_company;
        $order->tax_code = $this->current_user->customer_taxcode;
        $order->type = 3;
        $order->orders_status = 1;
        $order->shelter_order = $s_order->id;
        $order->last_modified = date('Y-m-d H:i:s');
        $order->message = $_POST['msg'];
        $order->payment_status = 0;
        $order->date_purchased = date('Y-m-d H:i:s');
        if ($_POST['discount'] == 1) {
            if (count($invites) > 0 && empty($step1['coupon_code'])) {
                $order->discount = 1;
                $pkg = ORM::factory('Packages', $step2['selected_box']);
                $discount = ($pkg->price * (((count($invites) * 5) + $g_discount) / 100));
            } elseif ($g_discount > 0) {
                $order->discount = 1;
                $pkg = ORM::factory('Packages', $step2['selected_box']);
                $discount = $pkg->price * ($g_discount / 100);
            }
        }
        $order->save();
        $order->total_price = round($order->package->price - $discount);
        $order->save();
        return $order;
    }

    public function action_step3() {
        $session = Session::instance();
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');
        $this->set_title('Order - Step 3');
        $this->price = ORM::factory('Packages', $step2['selected_box']);
        $this->append_js_var('total_price', round($this->price->price));

        if ($this->is_post()) {
            if (!Auth::instance()->logged_in()) {
                $this->register();
            }

            if (isset($step1['order1'])) {
                $order = $this->regular_order();
                Session::instance()->set('success', '1');
                Session::instance()->set('order', $order);
                if (!empty($step1['coupon_code']) || $_POST['pt']=='cod') {
                    $this->redirect('/order/success');
                } else {
                    $this->redirect('/order/payment');
                }
            }

            if (isset($step1['order2'])) {
                $order = $this->gift_order();
                Session::instance()->set('success', '1');
                Session::instance()->set('order', $order);
                $this->redirect('/order/payment');
            }

            if (isset($step1['order3'])) {
                $order = $this->shelter_order();
                Session::instance()->set('success', '1');
                Session::instance()->set('order', $order);
                $this->redirect('/order/payment');
            }
        }
    }

    public function action_gift() {
        $this->set_title('Claim a gift');
        if (Auth::instance()->logged_in()) {
            $this->redirect('/user_account');
        }
        if (isset($_POST['coupon_code'])) {
            $coupon = ORM::factory('Friend')
                    ->where('coupon_code', '=', $_POST['coupon_code'])
                    ->find();
            if (!$coupon->loaded()) {
                Flash::set('alert', 'Helytelen kupon kód. Kérlek, próbáld meg mégegyszer!');
                $this->redirect('order/gift');
            } else {
                Session::instance()->set('coupon_code', $_POST['coupon_code']);
                $this->redirect('order/gift2');
            }
        }
        if (isset($_POST['customer_email']) && isset($_POST['customer_password'])) {
            $ok = Auth::instance()->login($_POST['customer_email'], $_POST['customer_password']);
            if ($ok) {
                $requested_url = Cookie::get('auth_required_url');
                Cookie::get('auth_required_url', NULL);
                $this->redirect($requested_url? : Kohana::$base_url . '/user_account');
            } else {
                Flash::set('alert', 'Helytelen felhasználónév vagy jelszó!');
            }
        }
    }

    public function action_gift2() {
        if (Auth::instance()->logged_in()) {
            $this->redirect('/user_account');
        }
        $session = Session::instance();
        $ses = $session->get('coupon_code');
        if (!isset($ses)) {
            $this->redirect('order/gift');
        }
        if (isset($_POST['submit_form'])) {
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
            $user->save();
            $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
            $current_user = Auth::instance()->login($_POST['customer_email'], $_POST['customer_password']);
            $template = ORM::factory('Templates', 1);
            $this->current_user = Auth::instance()->get_user();
            $body = str_replace('[firstname]', $this->current_user->customer_firstname, $template->template_text);
            $body = str_replace('[login]', $this->current_user->email, $body);
            $this->send($this->current_user->email, 'info@goodiebox.hu', 'Registration', $body);
            $puppy = ORM::factory('Puppy');
            $puppy->puppy_name = $_POST['puppy_name'];
            $puppy->gender = $_POST['gender'];
            $puppy->years = $_POST['years'];
            $puppy->months = $_POST['months'];
            $puppy->alerg = $_POST['alerg'];
            $puppy->alerg_descr = $_POST['alerg_descr'];
            $puppy->selected_size = $_POST['selected_size'];
            $puppy->user_id = $user->id;
            $puppy->save();
            $order = ORM::factory('Order');
            $order->puppy_id = $puppy->id;
            $order->last_modified = date('Y-m-d H:i:s');
            $order->date_purchased = date('Y-m-d H:i:s');
            $order->delivery_firstname = $_POST['customer_firstname'];
            $order->delivery_lastname = $_POST['customer_lastname'];
            $order->delivery_address = $_POST['customer_address'];
            $order->delivery_address2 = $_POST['customer_address2'];
            $order->delivery_city = $_POST['customer_city'];
            $order->delivery_postcode = $_POST['customer_zip'];
            $order->delivery_telephone = $_POST['customer_telephone'];
            $order->selected_box = 1;
            $order->user_id = $user->id;
            $order->coupon_code = $ses;
            $order->total_price = 0;
            $order->save();
            Session::instance()->set('order', $order);
            $order = ORM::factory('Friend')
                    ->where('coupon_code', '=', $ses)
                    ->find();
            if ($order->loaded()) {
                $order->coupon_code = '';
                $order->save();
            }
            $session->delete('coupon_code');
            Session::instance()->set('success', '1');
            $this->redirect('/order/success');
        }
    }

    private function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    public function action_success() {
        $session = Session::instance();
        $success = $session->get('success');
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');
        if ($success != 1) {
            $session->delete('success');
            $this->redirect('/');
        }
        $order = $session->get('order', false);
        if ($order) {
            $order = $order->as_array();
            $ord = ORM::factory('Order', $order['id']);
            if (isset($_REQUEST['RC']) && $_REQUEST['RC'] != 000 && $ord->loaded()) {
                $ord->payment_status = 2;
                $ord->save();
            } elseif ($ord->loaded() && $ord->total_price == 0) {
                $ord->payment_status = 3;
                $ord->save();
                $this->receipt_email($ord, $ord->user, 1);
            } elseif($ord->type==1 && $ord->payment_status=5){
                $this->receipt_email($ord, $ord->user, 1);
            }
        }
        $session->delete('order');
        $session->delete('step1');
        $session->delete('step2');
        $session->delete('success');
    }

    public function action_payment() {
        $session = Session::instance();
        $order = $session->get('order', false);
        if ($order) {
            $order = $order->as_array();
        } else {
            echo 1;
            //$this->redirect('/user_account');
        }
        require_once DOCROOT . 'application/vendor/payu/config.php';
        $this->payment = new PayULiveUpdate($config);
        if (!empty($order['id'])) {
            $this->order = $order;
        }
    }

    public function action_timeout() {
        $session = Session::instance();
        $order = $session->get('order', false);
        if ($order) {
            $order = $order->as_array();
            $ord = ORM::factory('Order', $order['id']);
            $ord->orders_status = 6;
            $ord->save();
        }
        $this->redirect('/user_account');
    }

    public function action_ipn() {
        require_once DOCROOT . 'application/vendor/payu/config.php';
        $ipn = new PayUIpn($config);
        if ($ipn->validateReceived()) {
            echo $ipn->confirmReceived();
            $orderno = Arr::get($_REQUEST, 'REFNOEXT');
            $order = ORM::factory('Order', (int) $orderno);
            if ($order->loaded()) {
                $order->payment_status = 1;
                $o = ORM::factory('Order')
                        ->where('invoice_num', '<>', '')
                        ->order_by('invoice_num', 'DESC')
                        ->find();
                $order->invoice_num = $o->invoice_num + 1;
                $order->save();
                if ($order->discount == 1) {
                    $invites = ORM::factory('Invites')
                            ->where('user_id', '=', $order->user_id)
                            ->and_where('is_used', '=', 0)
                            ->and_where('is_paid', '=', 1)
                            ->and_where('is_registered', '=', 1)
                            ->find_all();
                    foreach ($invites as $inv) {
                        $inv->is_used = 1;
                        $inv->save();
                    }
                }
                $invite = ORM::factory('Invites')
                        ->where('email', '=', $order->user->email)
                        ->and_where('is_used', '=', 0)
                        ->and_where('is_paid', '=', 0)
                        ->and_where('is_registered', '=', 1)
                        ->find();
                if ($invite->loaded()) {
                    $invite->is_paid = 1;
                    $invite->save();
                }
                $global_discount = ORM::factory('Discounts')
                        ->where('user_id', '=', $order->user_id)
                        ->find();
                if ($global_discount->loaded()) {
                    $global_discount->discount = 0;
                    $global_discount->save();
                }
                if ($order->type == 2) {
                    $friend = ORM::factory('Friend', $order->friend_id);
                    
                    if ($friend->loaded()) {
                        $current_user = ORM::factory('User',$friend->user_id);
                        $date = strtotime(date('Y-m-d'));
                        $final = date("Y-m-d", strtotime("+3 month", $date));

                        $file = '<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	
        <style>
            @font-face {
                font-family: \'gillsansmt\';
                src: url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/gillsansmt.eot\');
                src: local(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/gillsansmt\'), url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/gillsansmt.woff\') format(\'woff\'), url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/gillsansmt.ttf\') format(\'truetype\');}
            @font-face {
                font-family:\'GilgongoKaps-Regular\';
                src: url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoKaps_latin+latin-ext_gdi.eot\');
                src: url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoKaps_latin+latin-ext_gdi.eot?#iefix\') format(\'embedded-opentype\'),
                    url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoKaps_latin+latin-ext_gdi.woff\') format(\'woff\'),
                    url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoKaps_latin+latin-ext_gdi.ttf\') format(\'truetype\'),
                    url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoKaps_latin+latin-ext_gdi.svg#GilgongoKaps-Regular\') format(\'svg\');}
            @font-face {
                font-family:\'GilgongoMutombo-Regular\';
                src: url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.eot\');
                src: url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.eot?#iefix\') format(\'embedded-opentype\'),
                    url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.woff\') format(\'woff\'),
                    url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.ttf\') format(\'truetype\'),
                    url(\'' . URL::base(TRUE, FALSE) . 'assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.svg#GilgongoMutombo-Regular\') format(\'svg\');}
            .box{width:290px; height:145px; float:left;font-family: \'gillsansmt\';letter-spacing:2px;}
            @media only screen and (max-width:480px){ img{width: 100%; height: auto;}.box-row td{padding: 10px !important;}h2{font-size: 24px!important;} h2 span{font-size: 16px!important;}}
        </style>	
    </head>
    <body>				
        <table border="0" cellpadding="0" cellspacing="0"  align="center" style="max-width:600;background-color:#ffffc1;text-align:center;">
            <tr Style="background-color:#e12258;width:100%;">
                <td colspan="2"><img src="' . URL::base(TRUE, FALSE) . 'assets/img/logo_gift.png" style="text-align:center;"></td>
            </tr>
            <tr Style="background-color:#e12258;width:100%;">
                <td colspan="2"><h2 style="text-align:center;font-family:\'GilgongoKaps-Regular\';font-size:50px; color:#ffffc1;letter-spacing:8px; margin:0;padding:0;">Ajándék<span style="font-family:\'GilgongoMutombo-Regular\';font-size:35px;">kupon</span></h2></td>
            </tr>
            <tr><td colspan="2" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="2" background="' . URL::base(TRUE, FALSE) . 'assets/img/design_bg.png" height:47px;">
                </td>
            </tr>
            <tr style="width:100%;" class="box-row">
                <td style="padding:0px 0 0 10px;width:50%; border-top:6px solid #e12258;border-left:6px solid #e12258;border-right:6px solid #e12258; text-align:left;color:#e12258;">Ki kapja:</td>
                <td style="width:50%;border-top:6px solid #ffffc1;border-left:6px solid #ffffc1;border-right:6px solid #ffffc1;text-align:left;padding:15px;padding-bottom: 0px; background-color:#e12258;color:#ffffc1;">Kuponkód:</td>
            </tr>
            <tr style="width:100%;" class="box-row">
                <td style="padding:5px 0 0 15px;width:50%; border-left:6px solid #e12258;border-right:6px solid #e12258; text-align:left;color:#e12258;">' . $friend->friends_lastname . ' ' . $friend->friends_firstname . '</td>
                <td style="width:50%;border-left:6px solid #ffffc1;border-right:6px solid #ffffc1;text-align:left;padding:15px;padding-bottom: 0px; background-color:#e12258; color:#ffffc1;">' . $friend->coupon_code . '</td>
            </tr>
            <tr style="width:100%;" class="box-row">
                <td style="padding:10px 0 0 10px;width:50%; border-left:6px solid #e12258;border-right:6px solid #e12258; text-align:left; color:#e12258;">Ki adja:</td>
                <td style="width:50%;border-left:6px solid #ffffc1;border-right:6px solid #ffffc1;text-align:left;padding:15px;padding-bottom: 0px; background-color:#e12258; color:#ffffc1;">Érvényes:</td>
            </tr>
            <tr style="width:100%;" class="box-row">
                <td style="padding:10px 0 15px 15px;width:50%; border-left:6px solid #e12258;border-right:6px solid #e12258;border-bottom:6px solid #e12258; text-align:left;color:#e12258;">' . $current_user->customer_lastname . ' ' . $current_user->customer_firstname . '</td>
                <td style="width:50%;border-left:6px solid #ffffc1;border-right:6px solid #ffffc1;border-bottom:6px solid #ffffc1;text-align:left;padding:15px;padding-bottom: 0px; background-color:#e12258;color:#ffffc1;">' . $final . '</td>
            </tr>
            <tr style=" width:100%;">
                <td  colspan="2" style=" text-align: center; padding-top:8px;"><img src="' . URL::base(TRUE, FALSE) . 'assets/img/main_bg.png" width="336" height="123"></td>
            </tr>
        </table>
    </body>
</html>';

                        $pdf = new DOMPDF();
                        $pdf->load_html($file);
                        $pdf->render();
                        $output = $pdf->output();
                        file_put_contents(DOCROOT . 'orders/gift_' . $order->id . '.pdf', $output);
                        $template = ORM::factory('Templates', 3);
                        $body = str_replace('[firstname]', $friend->firstname, $template->template_text);
                        if (isset($step1['delay'])) {
                            $to = $current_user->email;
                        } else {
                            $to = $friend->friend_email;
                        }
                    }
                    $this->send($to, 'info@goodiebox.hu', 'Ajándék a barátodtól!', $body, 'gift_' . $order->id . '.pdf');
                }
                $this->receipt_email($order, $order->user, 1);
            }
        }
        $this->render_nothing();
    }

}
