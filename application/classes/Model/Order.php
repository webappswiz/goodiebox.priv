<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_Order extends ORM {

    protected $_table_name = 'orders';
    protected $_primary_key = 'id';
    protected $_belongs_to = array(
        'status' => array('model'=>'OrderStatus','foreign_key'=>'orders_status'),
        'package' => array('model'=>'Packages','foreign_key'=>'selected_box'),
        'puppy' => array('model'=>'Puppy','foreign_key'=>'puppy_id'),
        'user' => array('model' => 'User', 'foreign_key' => 'user_id')
    );
    

}

// End Role Model