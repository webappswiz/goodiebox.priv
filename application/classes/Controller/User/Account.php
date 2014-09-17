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
            $address_book = ORM::factory('AddressBook')
                    ->where('user_id', '=', $user->id)
                    ->find();
            if (!$address_book->loaded()) {
                $address_book = ORM::factory('AddressBook');
                $address_book->user_id = $user->id;
            }
            $address_book->customer_firstname = $_POST['first-name'];
            $address_book->customer_lastname = $_POST['last-name'];
            ;
            $address_book->customer_telephone = $_POST['telephone'];
            ;
            $address_book->customer_zip = $_POST['zip'];
            ;
            $address_book->customer_city = $_POST['city'];
            ;
            $address_book->customer_address = $_POST['address'] . ' ' . $_POST['address2'];
            $address_book->save();
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
        if ($puppy->loaded()){
            $puppy->delete();
            Flash::set('notice', 'The puppy has been successfully removed');
        }
        $this->redirect('/user_account');
    }

}
