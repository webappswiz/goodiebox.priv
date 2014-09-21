<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_Order extends ORM {

    protected $_table_name = 'orders';
    protected $_primary_key = 'id';
    protected $_belongs_to = array(
        'status' => array('model'=>'OrderStatus','foreign_key'=>'orders_status')
    );

}

// End Role Model