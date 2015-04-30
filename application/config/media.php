<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'core' => array(
        'static_uri' => 'uri',
        'uri' => 'assets/',
        'path' => DOCROOT . 'assets' . DIRECTORY_SEPARATOR,
    ),
    'default' => array(
        'js' => array(
            'jquery-1.10.2.min',
            'jquery.faq',
            'jquery.quicksilver',
            'ui_lib',
            'jquery.validate.min',
            'jquery.collapse',
            'jquery-ui.min',
            'mask',
            'jquery.easytabs',
            'lightbox.min',
            'main',
            'jquery.bxslider.min',
            'bootstrap-datepicker'
        ),
        'css' => array(
            'style' => NULL,
            'jquery-ui.min' => NULL,
            'jquery-ui.structure.min' => NULL,
            'jquery-ui.theme.min' => NULL,
            'lightbox' => NULL,
            'jquery.bxslider' => NULL,
            
           
        ),
    ),
);
