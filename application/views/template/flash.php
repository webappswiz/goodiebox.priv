<?php defined('SYSPATH') or die('No direct script access.');

$type_list = array(
    'notice' => 'alert alert-success',
    'alert' => 'alert alert-error'
);

if ( ! Flash::has_any(array_keys($type_list)) )
    return;

$messages = array();
foreach($type_list as $type => $class)
{
    foreach(Flash::get($type) as $message)
    {
        $messages[$type][] = $message;
    } // message
    Flash::clear($type);
} // type

foreach ($messages as $type => $messages_text) {
    foreach($messages_text as $text)
    {
        $class = Arr::get($type_list, $type);
        echo "<div class=\"$class\">", PHP_EOL;
        echo $text, PHP_EOL;
        echo "</div>", PHP_EOL;
    }
}
