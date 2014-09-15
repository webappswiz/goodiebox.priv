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
        if($step1->order1==1)
            $order = ORM::factory ('Order');
        if($step1->order2==1)
            $order = ORM::factory ('Friends');
        if($step1->order3==1)
            $order = ORM::factory ('Friends');
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
                    Auth::instance()->login($_POST['email'], $_POST['password']);
                }
                //ordering
                print_r($step1);
                print_r($step2);
            } else {
                print_r($step1);
                print_r($step2);
            }
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
