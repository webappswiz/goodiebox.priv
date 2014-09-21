<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_OrderStatus extends ORM {

    protected $_table_name = 'order_statuses';
    protected $_primary_key = 'type';
    protected $_belongs_to = array(
        'order' => array('model' => 'Order', 'foreign_key' => 'type')
    );

}

// End Role Model