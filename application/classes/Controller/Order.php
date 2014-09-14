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
        print_r($_POST);
        if(isset($_POST['order'])){
            Session::instance()->set('step1', $_POST);
            $this->redirect('order/step2');
        }
        //

    }

    public function action_step2()
    {
        $this->set_title('Order - Step 2');
        if(isset($_POST['order'])){
            Session::instance()->set('step2', $_POST);
            $this->redirect('order/step3');
        }
    }

    public function action_step3()
    {
        $this->set_title('Order - Step 3');
    }

    public function action_gift()
    {
        $this->set_title('Claim a gift');
    }

}
