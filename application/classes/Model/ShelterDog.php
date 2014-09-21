<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_ShelterDog extends ORM {

    protected $_table_name = 'shelter_dog';
    protected $_primary_key = 'id';
    protected $_belongs_to = array(
        'shelter' => array(
            'model' => 'Shelter', 'foreign_key' => 'shelter_id'
        )
    );

}

// End Role Model