<?php

namespace App\Helpers;


class CustomHelper
{
    public static function addSpacesBeforeUppercase($string) {
        $stringWithSpaces = preg_replace('/(?<=\\w)(?=[A-Z])/', " $1", $string);
        return trim($stringWithSpaces);
    }
}
