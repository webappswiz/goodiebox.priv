<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Order extends Controller_Core {

    public function before()
    {
        parent::before();
        $this->set_title('Order');
        $this->template->active_menu = 'kapcsolat';
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
        $this->set_title('Order - Step 2');
        if (isset($_POST['order'])) {
            Session::instance()->set('step2', $_POST);
            $this->redirect('order/step3');
        }
        $session = Session::instance()->as_array();
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
        if (isset($_POST['message'])) {
            //User registration for not registered
            if (!Auth::instance()->logged_in()) {
                if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
                    Flash::set('alert', 'Please fill email and password');
                    $this->redirect('order/step3');
                }
                $user = ORM::factory('User')
                        ->where('email', '=', $_POST['email'])
                        ->or_where('username', '=', $_POST['email'])
                        ->find();
                if (!$user->loaded()) {
                    $user = ORM::factory('User');
                    $user->username = $_POST['email'];
                    $user->email = $_POST['email'];
                    $user->password = $_POST['password'];
                    $user->customer_firstname = $_POST['customer_firstname'];
                    $user->customer_lastname = $_POST['customer_lastname'];
                    $user->customer_address = $_POST['address'] . ' ' . $_POST['address2'];
                    $user->customer_city = $_POST['customer_city'];
                    $user->customer_zip = $_POST['customer_zip'];
                    $user->customer_telephone = $_POST['customer_telephone'];
                    $user->save();
                    $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
                    $current_user = Auth::instance()->login($_POST['email'], $_POST['password']);
                    $this->current_user = Auth::instance()->get_user();
                }
            }
            if (isset($step1['order1'])) {
                $order = ORM::factory('Order');
                $puppy = ORM::factory('Puppy');
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
            }
            if (isset($step1['order2'])) {
                $order = ORM::factory('Friend');
                $order->friends_email = $step1['email'];
                $order->friends_name = $step1['first-name'];
                $order->selected_size = $step1['selected_size'];
            }
            if (isset($step1['order3'])) {
                $order = ORM::factory('User_Shelter');
                $order->selected_size = $step1['selected_size'];
                $order->shelter_id = $step1['option-name'];
                $order->doggy_name = $step1['doggy_name'];
                $order->doggy_gender = $step1['neme'];
                $order->selected_size = $step1['selected_size'];
            }
            $order->selected_box = $step2['selected_box'];
            $order->user_id = $this->current_user->id;
            $order->comment = $_POST['message'];
            $order->last_modified = date('Y-m-d H:i:s');
            $order->date_purchased = date('Y-m-d H:i:s');

            if (isset($_POST['customer_firstname'])) {
                $order->delivery_name = $_POST['customer_firstname'] . ' ' . $_POST['customer_lastname'];
                $order->delivery_street_address = $_POST['address'] . ' ' . $_POST['address2'];
                $order->delivery_city = $_POST['customer_city'];
                $order->delivery_postcode = $_POST['customer_zip'];
                $order->delivery_telephone = $_POST['customer_telephone'];
            } else {
                $order->delivery_name = $this->current_user->customer_firstname.' '.$this->current_user->customer_lastname;
                $order->delivery_street_address = $this->current_user->customer_address;
                $order->delivery_city = $this->current_user->customer_city;
                $order->delivery_postcode = $this->current_user->customer_zip;
                $order->delivery_telephone = $this->current_user->customer_telephone;
            }

            $order->save();
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
    }

}
