<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Subscribe extends Controller_Core {

    public function action_index()
    {
        if(!$this->is_post()){
            $this->redirect('/');
        }
        if(empty($_REQUEST['email']) || empty($_REQUEST['name'])){
            $this->redirect('/');
        }
        
        $subscriber = ORM::factory('Subscribers');
        $subscriber->name = arr::get($_REQUEST, 'name');
        $subscriber->email = arr::get($_REQUEST, 'email');
        $subscriber->save();
        Flash::set('notice', 'Köszönjük szépen! Amint kinyitunk, értesítünk Téged is!');
        $this->redirect('/');
    }

}
