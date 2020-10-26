<?php

namespace SDD\UtilsBundle;


class ArrayUtils
{

    public static function Find($xs, $f)
    {
        foreach ($xs as $x)
        {
            if (call_user_func($f, $x) === true)
            {
                return $x;
            }
        }

        return null;
    }


    public static function Any(array $array, callable $fn)
    {
        foreach ($array as $value)
        {
            if ($fn($value))
            {
                return true;
            }
        }

        return false;
    }

    public static function Every(array $array, callable $fn)
    {
        foreach ($array as $value)
        {
            if ( !$fn($value))
            {
                return false;
            }
        }

        return true;
    }



    public static function hasOnlyUniqueValues(array $array)
    {
        return count(array_unique($array)) < count($array);
    }
}