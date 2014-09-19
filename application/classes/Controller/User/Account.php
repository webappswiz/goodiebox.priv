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
        $user = $this->current_user;
        if (isset($_POST['edit_shipping'])) {
            $user->customer_firstname = $_POST['first-name'];
            $user->customer_lastname = $_POST['last-name'];
            $user->customer_telephone = $_POST['telephone'];
            $user->customer_zip = $_POST['zip'];
            $user->customer_city = $_POST['city'];
            $user->customer_address = $_POST['address'] . ' ' . $_POST['address2'];
            $user->save();
            Flash::set('notice', 'Your shipping data has been successfully updated');
            if (isset($_POST['password']) && !empty($_POST['password'])) {
                $user->password = $_POST['password'];
                $user->save();
                Flash::set('notice', 'Your password has been successfully updated');
            }
            $this->redirect('/user_account');
        } else
            $this->redirect('/user_account');
    }

    public function action_removeDog()
    {
        $user = $this->current_user;
        $id = (int) $this->request->param('id');
        if (!$id)
            $this->redirect('/user_account');
        $puppy = ORM::factory('Puppy')
                ->where('id', '=', $id)
                ->and_where('user_id', '=', $this->current_user->id)
                ->find();
        if ($puppy->loaded()) {
            $puppy->delete();
            Flash::set('notice', 'The puppy has been successfully removed');
        }
        $this->redirect('/user_account');
    }

    public function action_addDog()
    {
        $user = $this->current_user;
        if (isset($_POST['order1'])) {
            $puppy = ORM::factory('Puppy');
            $puppy->user_id = $user->id;
            $puppy->puppy_name = $_POST['puppy_name'];
            $puppy->gender = $_POST['gender'];
            $puppy->years = (int) $_POST['years'];
            $puppy->months = (int) $_POST['months'];
            $puppy->alerg = (int) $_POST['alerg'];
            $puppy->alerg_descr = $_POST['alerg_descr'];
            $puppy->selected_size = $_POST['size'];
            $puppy->save();
            Flash::set('notice', 'The puppy has been successfully added');
            $this->redirect('/user_account');
        }
    }

    public function action_order()
    {
        $user = $this->current_user;
        if (isset($_POST['submit']) && empty($_POST['gift'])) {
            $puppy = ORM::factory('Puppy', (int) $_POST['puppy_id']);
            if (!$puppy->loaded())
                $this->redirect('/user_account');
            $puppy1['order1'] = 1;
            $puppy1['puppy_name'] = $puppy->puppy_name;
            $puppy1['gender'] = $puppy->gender;
            $puppy1['years'] = $puppy->years;
            $puppy1['months'] = $puppy->months;
            $puppy1['alerg'] = $puppy->alerg;
            $puppy1['alerg_descr'] = $puppy->alerg_descr;
            $puppy1['selected_size'] = $puppy->selected_size;
            Session::instance()->set('step1', $puppy1);
            $order = ORM::factory('Order')
                    ->where('puppy_id', '=', (int) $_POST['puppy_id'])
                    ->find();
            $selected_box['selected_box'] = 1;
            if ($order->loaded())
                $selected_box['selected_box'] = $order->selected_box;
            Session::instance()->set('step2', $selected_box);
            $this->redirect('/order/step3');
        } elseif (!empty($_POST['gift'])) {
            $coupon_code = $_POST['gift'];
            $puppy_id = $_POST['puppy_id'];
            $friend = ORM::factory('Friend')
                    ->where('coupon_code', '=', $coupon_code)
                    ->find();
            if (!$friend->loaded()) {
                Flash::set('alert', 'Wrong coupon code. Please try again');
                $this->redirect('/user_account');
            }
            $puppy = ORM::factory('Puppy', (int) $_POST['puppy_id']);
            if (!$puppy->loaded())
                $this->redirect('/user_account');
            $puppy1['order1'] = 1;
            $puppy1['puppy_id'] = $puppy->id;
            $puppy1['puppy_name'] = $puppy->puppy_name;
            $puppy1['gender'] = $puppy->gender;
            $puppy1['years'] = $puppy->years;
            $puppy1['months'] = $puppy->months;
            $puppy1['alerg'] = $puppy->alerg;
            $puppy1['alerg_descr'] = $puppy->alerg_descr;
            $puppy1['selected_size'] = $puppy->selected_size;
            $puppy1['coupon_code'] = $coupon_code;
            Session::instance()->set('step1', $puppy1);
            $this->redirect('/order/step2');
        }
        $this->render_nothing();
    }

    public function action_gift()
    {
        if (isset($_POST['submit_form'])) {
            if (empty($_POST['gift']))
                $this->redirect('/user_account');
            $friend = ORM::factory('Friend', (int) $_POST['gift']);
            if (!$friend->loaded())
                $this->redirect('/user_account');
            $fr['order2'] = 1;
            $fr['email'] = $friend->friends_email;
            $fr['first-name'] = $friend->friends_name;
            $fr['selected_size'] = 0;
            Session::instance()->set('step1', $fr);
            $this->redirect('/order/step2');
        } else {
            $this->redirect('/user_account');
        }
    }

    public function action_shelter()
    {
        if (isset($_POST['submit_shelter'])) {
            print_r($_POST);
            if (empty($_POST['shelter']))
                $this->redirect('/user_account');
            $shelter = ORM::factory('User_Shelter')
                    ->where('shelter_id','=',(int)$_POST['shelter'])
                    ->find();
            if (!$shelter->loaded())
                $this->redirect('/user_account');
            $sh['order3'] = 1;
            $sh['option-name'] = $shelter->shelter_id;
            $sh['doggy_name'] = $shelter->doggy_name;
            $sh['gender'] = $shelter->doggy_gender;
            $sh['selected_size'] = $shelter->selected_size;
            Session::instance()->set('step1', $sh);
            Session::instance()->set('step2', array('selected_box' => $shelter->selected_box));
            $this->redirect('/order/step3');
        } else {
            $this->redirect('/user_account');
        }
    }

}
