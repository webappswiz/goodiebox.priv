<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User_Account extends Controller_Core {

    protected $check_access = true;

    public function before()
    {
        parent::before();
        $this->set_title('Profilom');
        $this->template->active_menu = 'arcél';
        $this->check_access();

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

    public function action_index()
    {
        $this->shipping = ORM::factory('AddressBook')
                ->where('user_id', '=', $this->current_user->id)
                ->find();
        if(!$this->shipping->loaded())
            $this->shipping = NULL;
    }

    public function action_editShipping()
    {
        $user = $this->current_user;
        if (isset($_POST['edit_shipping'])) {
            $this->shipping = ORM::factory('AddressBook')
                ->where('user_id', '=', $this->current_user->id)
                ->find();
            if(!$this->shipping->loaded()){
                $this->shipping = ORM::factory('AddressBook');
                $this->shipping->user_id = $this->current_user->id;
            }
            $this->shipping->customer_firstname = $_POST['first-name'];
            $this->shipping->customer_lastname = $_POST['last-name'];
            $this->shipping->customer_telephone = $_POST['telephone'];
            $this->shipping->customer_zip = $_POST['zip'];
            $this->shipping->customer_city = $_POST['city'];
            $this->shipping->customer_address = $_POST['address'] . ' ' . $_POST['address2'];

            $this->shipping->save();
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
            $puppy1['puppy_id'] = $puppy->id;
            $puppy1['order1'] = 1;
            $puppy1['puppy_name'] = $puppy->puppy_name;
            $puppy1['gender'] = $puppy->gender;
            $puppy1['years'] = $puppy->years;
            $puppy1['months'] = $puppy->months;
            $puppy1['alerg'] = $puppy->alerg;
            $puppy1['alerg_descr'] = $puppy->alerg_descr;
            $puppy1['selected_size'] = $puppy->selected_size;
            Session::instance()->set('step1', $puppy1);
            $this->redirect('/order/step2');
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
            $step2['order'] = 1;
            $step2['selected_box'] = $friend->selected_box;
            Session::instance()->set('step2', $step2);
            $this->redirect('/order/step3');
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
            $fr['friend_email'] = $friend->friends_email;
            $fr['firstname'] = $friend->friends_firstname;
            $fr['lastname'] = $friend->friends_lastname;
            if(isset($_POST['delay']))
              $fr['delay'] = 1;
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
            $shelter = ORM::factory('User_Shelter')->with('shelter')
                    ->where('shelter.shelter_id','=',(int)$_POST['shelter'])
                    ->find();
            if (!$shelter->loaded())
                $this->redirect('/user_account');
            $sh['order3'] = 1;
            $sh['option-name'] = $shelter->shelter->shelter_id;
            $sh['doggy_name'] = $shelter->shelter->doggy_name;
            $sh['gender'] = $shelter->shelter->doggy_gender;
            $sh['selected_size'] = $shelter->shelter->selected_size;
            Session::instance()->set('step1', $sh);
            Session::instance()->set('step2', array('selected_box' => $shelter->selected_box));
            $this->redirect('/order/step3');
        } else {
            $this->redirect('/user_account');
        }
    }
    
    public function action_invite(){
        if(!$this->request->post() || empty($_POST['friend_email']))
            $this->redirect('/user_account');
        if($_POST['friend_email']==$this->current_user->email){
            Flash::set('alert', 'Nem küldhetsz meghívót saját magadnak!');
            $this->redirect('/user_account');
        }
        $email = $_POST['friend_email'];
        $user = ORM::factory('User')
                ->where('email','=',$email)
                ->find();
        if($user->loaded()){
            Flash::set('alert', 'Ezzel az e-mail címmel már regisztráltak!');
            $this->redirect('/user_account');
        }
        $email = $_POST['friend_email'];
        $invites = ORM::factory('Invites')
                ->where('user_id','=',$this->current_user->id)
                ->and_where('email','=',$email)
                ->find();
        if($invites->loaded()){
            Flash::set('alert', 'Már küldtél korábban meghívót erre az e-mail címre!');
            $this->redirect('/user_account');
        }
        $invites = ORM::factory('Invites');
        $invites->user_id = $this->current_user->id;
        $invites->email = $email;
        $invites->save();
        $body = ORM::factory('Templates',4);
        $body = str_replace('[friend]', $this->current_user->customer_firstname.' '.$this->current_user->customer_lastname, $body->template_text);
        $this->send($email, 'info@goodiebox.hu', 'You have received an invite', $body);
        Flash::set('notice', 'A meghívót sikeresen elküldtük!');
        $this->redirect('/user_account');
    }

}
