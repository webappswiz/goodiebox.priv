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
            $puppy->years = (int)$_POST['years'];
            $puppy->months = (int)$_POST['months'];
            $puppy->alerg = (int)$_POST['alerg'];
            $puppy->alerg_descr = $_POST['alerg_descr'];
            $puppy->selected_size = $_POST['size'];
            $puppy->save();
            $this->redirect('/user_account');
        }
    }

}
