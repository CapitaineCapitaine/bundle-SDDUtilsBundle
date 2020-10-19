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


}