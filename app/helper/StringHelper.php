<?php

namespace Playnow\app\helper;

class StringHelper
{
    /**
     * Get to know if your string begin with
     * a specific word
     * @param $string
     * @param $word
     * @return bool
     */
    public static function start($string, $word)
    {
        $array = explode(' ', $string);

        if(strtolower($array['0']) === strtolower($word)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get to know if your string ends with
     * a specific word
     * @param $string
     * @param $word
     * @return bool
     */
    public static function end($string, $word)
    {
        $array = explode(' ', $string);
        $lastKeyId = count($array) - 1;

        if(strtolower($array[$lastKeyId]) === strtolower($word)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get to know if your string contains
     * a specific word
     * @param $string
     * @param $word
     * @return bool
     */
    public static function contains($string, $word)
    {
        $array = explode(' ', $string);
        $return = false;

        foreach($array as $key=>$value){
            if(strtolower($value) === strtolower($word)){
                $return = true;
            }
        }

        return $return;
    }

    /**
     * Generate a string with limited characters
     * @param $string
     * @param $limit
     * @return string
     */
    public static function limit($string, $limit)
    {
        $string = substr($string, 0, $limit);
        return $string;
    }

    /**
     * Generate a random string with $length characters
     * @param $length
     * @return string
     */
    public static function random($length)
    {
        $randomStr = '';
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charsLength = strlen($chars);

        for ($i = 0; $i < $length; $i++) {
            $randomStr .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomStr;
    }

    /**
     * Generate a slug for a given string
     * @param $string
     * @param $glue
     * @param bool|true $toLower
     * @return string
     */
    public static function slug($string, $glue, $toLower = true)
    {
        if($toLower){
            $string = strtolower($string);
        }

        $tmp = explode(' ', $string);
        $string = implode($glue, $tmp);
        return $string;
    }
}