<?php

defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {

    protected $_table_name = 'users';
    protected $_primary_key = 'id';
    protected $_has_many = array(
        'user_tokens' => array('model' => 'User_Token'),
        'roles' => array('model' => 'Role', 'through' => 'roles_users'),
    );
}
