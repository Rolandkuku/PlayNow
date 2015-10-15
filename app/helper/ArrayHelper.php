<?php

namespace Playnow\app\helper;

final class ArrayHelper
{
    /**
     * adds a given key / value pair to an array
     * @param $array
     * @param $key
     * @param $value
     * @return array
     */
    public static function add($array, $key, $value)
    {
        if(!is_array($array)){
            echo 'Not an array';
            die();
        }

        $array[$key] = $value;
        return $array;
    }

    /**
     * Return two arrays
     * One contains all keys from the array
     * Other contains all values from the array
     * @param $array
     * @return mixed
     */
    public static function divide($array)
    {
        if(!is_array($array)) {
            echo 'Not an array';
            die();
        }

        foreach($array as $key=>$value){
            $arrayDivide['keys'][] = $key;
            $arrayDivide['values'][] = $value;
        }
        return $arrayDivide;
    }

    public static function dot($multidimensionalArray)
    {

    }

    public static function except($array, $key)
    {

    }
}
