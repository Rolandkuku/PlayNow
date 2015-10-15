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
}