<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Kapcsolat extends Controller_Core {

    public function before() {
        parent::before();
        $this->set_title(__('Kapcsolat'));
        $this->template->active_menu = 'kapcsolat';
    }

    private function send($to, $from, $subject, $body) {
        $email = new PHPMailer();
        $email->ContentType = 'text/plain';
        $email->AddAddress($to);
        $email->SetFrom($from,'Goodiebox');
        $email->Subject = $subject;
        $email->Body = $body;
        $email->Send();
    }

    public function action_index() {
        $this->user = ($this->current_user)?$this->current_user:'';
        if($this->is_post()){
            $contact = ORM::factory('Contacts');
            $contact->firstname = $_POST['customer_firstname'];
            $contact->lastname = $_POST['customer_lastname'];
            $contact->email = $_POST['customer_email'];
            $contact->subject = $_POST['subject'];
            $contact->message = $_POST['message'];
            $contact->date = date('Y-m-d H:i');
            $contact->save();
            $this->send('info@goodiebox.hu', 'info@goodiebox.hu', 'You got a new message from the contact form', 'Hi Admin, please check a new incoming message from the admin area.');
            echo 1;
            $this->render_nothing();
        }
    }

}
