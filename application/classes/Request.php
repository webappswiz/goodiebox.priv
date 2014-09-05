<?php

defined('SYSPATH') OR die('No direct script access.');

class Request extends Kohana_Request
{
    public function jpost($key = null, $default = false)
    {
        $utf8 = utf8_encode($this->body());
        $params_json = json_decode($utf8);
        if ($key === null) {
            return $params_json;
        } else {
            return isset($params_json->$key) ? $params_json->$key : $default;
        }
        return $default;
    }
}
