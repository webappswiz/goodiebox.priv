<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_AddressBook extends ORM {

    protected $_table_name = 'address_book';
    protected $_primary_key = 'id';
    protected $_belongs_to = array(
        'user' => array('model' => 'AddressBooks', 'foreign_key' => 'user_id')
    );

}

// End Role Model