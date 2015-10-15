<?php

namespace Playnow\app\helper;

abstract class ArrayHelper
{
    public static function add($array, $key, $value)
    {
        if(!isset($array, $key, $value)){
            echo 'missing parameter';
            die();
        }

        $array[$key] = $value;
    }

    public static function divide($array)
    {

    }

    public static function dot($multidimensionalArray)
    {

    }

    public static function except($array, $key)
    {

    }
}
