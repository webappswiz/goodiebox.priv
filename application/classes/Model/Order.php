<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_Order extends ORM {

    protected $_table_name = 'orders';
    protected $_primary_key = 'id';
    protected $_has_many = array(
        'status' => array('model'=>'OrderStatus','foreign_key'=>'order_status')
    );

}

// End Role Model