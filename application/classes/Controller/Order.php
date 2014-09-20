<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Order extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->set_title('Order');
        $this->template->active_menu = 'kapcsolat';
    }

    private function send($to, $from, $subject, $body)
    {
        $email = new PHPMailer();
        $email->ContentType = 'text/plain';
        $email->AddAddress($to);
        $email->SetFrom($from);
        $email->Subject = $subject;
        $email->Body = $body;
        $email->Send();
    }

    public function action_index()
    {
        $this->set_title('Order - Step 1');
        if (isset($_POST['order1']) || isset($_POST['order2']) || isset($_POST['order3'])) {
            Session::instance()->set('step1', $_POST);
            $this->redirect('order/step2');
        }
    }

    public function action_step2()
    {
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

    public function action_step3()
    {
        $session = Session::instance();
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');
        $this->set_title('Order - Step 3');
        if (isset($_POST['form'])) {
            //User registration for not registered
            if (!Auth::instance()->logged_in()) {
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
                    if(isset($_POST['company'])){
                        $user->customer_company = $_POST['company_name'];
                        $user->customer_taxcode = $_POST['tax_code'];
                    }
                    $user->save();
                    $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
                    $current_user = Auth::instance()->login($_POST['customer_email'], $_POST['customer_password']);
                    $this->current_user = Auth::instance()->get_user();
                }
            }
            if (isset($step1['order1'])) {
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
                    $order->puppy_id = $puppy->id;
                    $order->selected_box = $step2['selected_box'];
                }
                $order->last_modified = date('Y-m-d H:i:s');
            }
            if (isset($step1['order2'])) {
                $order = ORM::factory('Friend')
                        ->where('friends_email', '=', $step1['email'])
                        ->and_where('friends_name', '=', $step1['first-name'])
                        ->find();
                if (!$order->loaded()) {
                    $order = ORM::factory('Friend');
                    $order->friends_email = $step1['email'];
                    $order->friends_name = $step1['first-name'];
                }
                $order->coupon_code = $this->generateRandomString();

                if(!isset($step1['delay'])){
                    $this->send($step1['email'], 'karam@karam.org.ua', 'You got a gift coupon code', 'Your gift code: '.$order->coupon_code);
                } else {
                    $this->send($this->current_user->email, 'karam@karam.org.ua', 'Here is your gift coupon code', 'Your gift code: '.$order->coupon_code);
                }
            }
            if (isset($step1['order3'])) {
                $order = ORM::factory('User_Shelter');
                $order->selected_size = $step1['selected_size'];
                $order->shelter_id = $step1['option-name'];
                $order->doggy_name = $step1['doggy_name'];
                $order->doggy_gender = $step1['gender'];
                $order->selected_box = $step2['selected_box'];
                $order->last_modified = date('Y-m-d H:i:s');
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

            $order->user_id = $this->current_user->id;
            $order->date_purchased = date('Y-m-d H:i:s');
            //shipping not filled

            if (isset($_POST['customer_firstname']) && !isset($_POST['shipping']) && !isset($step1['order2'])) {
                $order->delivery_firstname = $_POST['customer_firstname'];
                $order->delivery_lastname = $_POST['customer_lastname'];
                $order->delivery_address = $_POST['customer_address'];
                $order->delivery_address2 = $_POST['customer_address2'];
                $order->delivery_city = $_POST['customer_city'];
                $order->delivery_postcode = $_POST['customer_zip'];
                $order->delivery_telephone = $_POST['customer_telephone'];
            } elseif (!isset($_POST['customer_firstname']) && !isset($_POST['shipping'])) {
                $order->delivery_firstname = $this->current_user->customer_firstname;
                $order->delivery_lastname = $this->current_user->customer_lastname;
                $order->delivery_address = $this->current_user->customer_address;
                $order->delivery_address2 = $this->current_user->customer_address2;
                $order->delivery_city = $this->current_user->customer_city;
                $order->delivery_postcode = $this->current_user->customer_zip;
                $order->delivery_telephone = $this->current_user->customer_telephone;
            } elseif (isset($_POST['shipping']) && !isset($step1['order2'])) {
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
                $address->message = $_POST['message'];
                $address->save();
            }


            $order->save();
            $this->send($this->current_user->email, 'karam@karam.org.ua', 'Thank you for your order', 'Thank you for your order');
            $session->delete('step1');
            $session->delete('step2');
            echo View::factory('template/thankyou', get_defined_vars())->render();
            $this->render_nothing();
        }
        if (empty($step1) && empty($step2) && !isset($_POST['message'])) {
            Flash::set('alert', 'Please fill the form');
            $this->redirect('order/index');
        }
    }

    public function action_gift()
    {
        $this->set_title('Claim a gift');
        if (Auth::instance()->logged_in())
            $this->redirect('/user_account');
        if (isset($_POST['coupon_code'])) {
            $coupon = ORM::factory('Friend')
                    ->where('coupon_code', '=', $_POST['coupon_code'])
                    ->find();
            if (!$coupon->loaded()) {
                Flash::set('alert', 'Wrong coupon code. Please try again');
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
                Flash::set('alert', 'Wrong username or password.');
            }
        }
    }

    public function action_gift2()
    {
        if (Auth::instance()->logged_in())
            $this->redirect('/user_account');
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
            $order->save();
            $order = ORM::factory('Friend')
                    ->where('coupon_code', '=', $ses)
                    ->find();
            if ($order->loaded()) {
                $order->coupon_code = '';
                $order->save();
            }

            $session->delete('coupon_code');

            echo View::factory('template/thankyou', get_defined_vars())->render();
            $this->render_nothing();
        }
    }

    private function generateRandomString($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

}
