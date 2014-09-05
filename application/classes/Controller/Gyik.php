<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Gyik extends Controller_Core {
    public function before()
    {
        parent::before();
        $this->set_title('Gyik');
    }
    public function action_index()
    {

    }

}
