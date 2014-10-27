<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Contacts extends Controller_Admin {

    public function before()
    {
        parent::before();
        $this->template->active_menu = 'contacts';
    }

    private function send($to, $from, $subject, $body) {
        $email = new PHPMailer();
        $email->ContentType = 'text/html';
        $email->AddAddress($to);
        $email->SetFrom($from,'Goodiebox');
        $email->Subject = $subject;
        $email->Body = $body;
        $email->IsHTML(true);
        $email->Send();
    }

    public function action_index()
    {
        $this->redirect('/admin/contacts/page/?page=1');
    }

    public function action_page()
    {
        $contacts = ORM::factory('Contacts');
        $this->pagination = Pagination::factory(array(
                    'total_items' => $contacts->count_all(),
                    'items_per_page' => 5,
        ));
        // Pass controller and action names explicitly to $pagination object
        $this->pagination->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action()));
        // Get data
        $this->data = $contacts->offset($this->pagination->offset)->limit($this->pagination->items_per_page)->order_by('date','DESC')->find_all()->as_array();
        // Pass data and validation object to view

    }

    public function action_reply(){
        $id = (int) $this->request->param('id');
        if(!$id)
            $this->redirect('/admin/contacts/page/?page=1');
        $this->message = ORM::factory('Contacts',$id);
        if(!$this->message->loaded())
            $this->redirect('/admin/contacts/page/?page=1');
        $this->set_filename('admin/contacts/form');
        if (!$this->is_post())
            return;
        $this->send($this->message->email,'info@goodiebox.hu','Válaszolj a Goodiebox üzenetedre.',$_POST['message']);
        $this->message->replied = 1;
        $this->message->save();
        $this->redirect('/admin/contacts/page/?page=1');
    }

}
