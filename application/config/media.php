<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'core' => array(
        'static_uri' => 'uri',
        'uri' => 'assets/',
        'path' => DOCROOT.'assets'.DIRECTORY_SEPARATOR,
    ),
    'default' => array(
        'js' => array(
            'ui_lib'
        ),
        'css' => array(
            'style'=> NULL
        ),
    ),
);
