<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'core' => array(
        'static_uri' => 'uri',
        'uri' => 'assets/',
        'path' => DOCROOT.'assets'.DIRECTORY_SEPARATOR,
    ),
    'default' => array(
        'js' => array(
            'jquery-1.10.2.min',
            'jquery.json-2.4',
            'bootstrap.min',
            'ui_lib'
        ),
        'css' => array(
            'bootstrap.min' => NULL,
            'style'=> NULL
        ),
    ),
);
