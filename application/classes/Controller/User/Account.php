<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User_Account extends Controller_Core {

    protected $check_access = true;

    public function before()
    {
        parent::before();
        $this->check_access();
    }

    public function action_index()
    {

    }

    public function action_editShipping()
    {
        if (isset($_POST['edit_shipping'])) {
            $user = $this->current_user;
            $user->customer_firstname = $_POST['first-name'];
            $user->customer_lastname = $_POST['last-name'];;
            $user->customer_telephone = $_POST['telephone'];;
            $user->customer_zip = $_POST['zip'];;
            $user->customer_city = $_POST['city'];;
            $user->customer_address = $_POST['address'].' '.$_POST['address2'];
            $user->save();
            Flash::set('notice', 'Your shipping data has been successfully updated');
            if(isset($_POST['password']) && !empty($_POST['password'])){
                $user->password = $_POST['password'];
                $user->save();
                Flash::set('notice', 'Your password has been successfully updated');
            }
            $this->redirect('/user_account');
        }
    }

}
