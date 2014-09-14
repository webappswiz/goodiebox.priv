<?php

defined('SYSPATH') or die('No direct script access.');

echo View::factory('template/header', get_defined_vars())->render();
echo '<div id="flash_message">';
echo View::factory('template/flash')->render();
echo '</div>';
echo $content;

echo View::factory('template/footer', get_defined_vars())->render();

