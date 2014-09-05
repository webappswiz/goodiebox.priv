<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Hogyan extends Controller_Core {
public function before()
    {
        parent::before();
        $this->set_title('Hogyan');
    }
    public function action_index()
    {

    }

}
