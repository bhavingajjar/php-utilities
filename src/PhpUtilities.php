<?php

namespace Bhavingajjar\PhpUtilities;

class PhpUtilities
{
    /*
     * ================
     * String Functions
     * ================
     * */
    /**
     * isStringEnglish will check the input string is in english or not
     * @param $str
     * @return bool
     */
    public static function isStringEnglish($str): bool
    {
        if (strlen($str) !== strlen(utf8_decode($str)))
            return false;
        else
            return true;
    }
    /*
     * ================
     * String Functions
     * ================
     * */

    /*
     * ================
     * Number Functions
     * ================
     * */
    /**
     * parseNumber will get input as value as string or number and return float or integer number
     * @param $value
     * @return float|int
     */
    public static function parseNumber($value)
    {
        return ($value == (int)$value) ? (int)$value : (float)$value;
    }
    /*
     * ================
     * Number Functions
     * ================
     * */
}
