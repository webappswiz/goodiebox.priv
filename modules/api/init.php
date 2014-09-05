<?php

defined('SYSPATH') or die('No direct script access.');

Route::set('api', '(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'api',
        'action'     => 'index',
    ));
