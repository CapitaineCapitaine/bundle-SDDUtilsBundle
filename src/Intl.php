<?php

namespace SDD\UtilsBundle;


class Intl
{

    public static function stripAccents($stripAccents)
    {
        $stripAccents = transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove',
            $stripAccents);

        $stripAccents = str_replace('\'', '', $stripAccents);


        return $stripAccents;
    }



}