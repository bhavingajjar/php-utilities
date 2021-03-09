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

    /**
     * getPercentageAmount will get input as amount & percentage as number and return percentage amount
     * @param $amount
     * @param $percentage
     * @return float|int
     */
    public static function getPercentageAmount($amount, $percentage)
    {
        return self::parseNumber((($percentage / 100) * $amount));
    }

    /**
     * getAmountPercentage will get input as amount & total as number and return amount percentage
     * @param $amount
     * @param $total
     * @return float|int
     */
    public static function getAmountPercentage($amount, $total)
    {
        return self::parseNumber((($amount * 100) / $total));
    }

    /*
     * ================
     * Number Functions
     * ================
     * */
}
