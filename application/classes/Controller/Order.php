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
        if (isset($_POST['order'])) {
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
        $this->set_title('Order - Step 3');
        print_r($_POST);
        if (isset($_POST['message'])) {
            //User registration for not registered
            if (!Auth::instance()->logged_in()) {
                if(empty($_POST['password']) || $_POST['password']!=$_POST['password_confirm']){
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
                    $user->password = md5($_POST['password']);
                    $user->save();
                }
            }
            foreach ($_POST as $key => $value) {
                echo $key . ' = ' . $value . '<br/>';
            }
            echo View::factory('template/thankyou', get_defined_vars())->render();
            $this->render_nothing();
        }
        $step1 = $session->get('step1');
        $step2 = $session->get('step2');

        if (empty($step1) && empty($step2)) {
            Flash::set('alert', 'Please fill the form');
            $this->redirect('order/index');
        }

    }

    public function action_gift()
    {
        $this->set_title('Claim a gift');
    }

}
