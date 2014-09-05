<?php defined('SYSPATH') or die('No direct script access.');

class Flash
{
    public static function set($type, $message)
    {
        $prefix = self::prefix($type);
        $current_value = Session::instance()->get($prefix);
        if ( ! $current_value)
        {
            $current_value = array();
        }
        $current_value []= $message;
        Session::instance()->set($prefix, $current_value);
    }

    public static function clear($type)
    {
        Session::instance()->set(self::prefix($type), array());
    }

    public static function has_any($type_list)
    {
        foreach ($type_list as $type)
        {
            if (self::get($type))
                return true;
        }
        return false;
    }

    public static function get($type)
    {
        $result =  Session::instance()->get(
            self::prefix($type),
            null // we can't use array() here because if key is null it will return null
        );
        return $result ? $result : array();
    }

    private static function prefix($type)
    {
        return 'flash.'.$type;
    }

}
