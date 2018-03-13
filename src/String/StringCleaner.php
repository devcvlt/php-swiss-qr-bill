<?php

namespace Sprain\SwissQrBill\String;

class StringCleaner
{
    public static function replaceLineBreaksWithString($string) : string
    {
        return str_replace(array("\r", "\n"), ' ', $string);
    }

    public static function replaceMultipleSpacesWithOne($string) : string
    {
        return preg_replace('/ +/', ' ', $string);
    }
}