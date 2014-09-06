<?php defined('SYSPATH') or die('No direct script access.');

    echo View::factory('template/header', get_defined_vars())->render();

        echo $content;
    
    echo View::factory('template/footer', get_defined_vars())->render();

