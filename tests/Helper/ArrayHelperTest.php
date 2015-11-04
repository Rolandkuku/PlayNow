<?php

namespace Playnow\tests\Helper;

use Playnow\app\helper\ArrayHelper;

class ArrayHelperTest
{
    public static function addTest()
    {

        $array = [
            'foo' => 'bar'
        ];
        $key = 'fooo';
        $value = 'barr';

        $array = ArrayHelper::add($array, $key, $value);
        var_dump($array);
    }

    public static function divideTest()
    {
        $array = [
            'foo' => 'bar',
            'fooo' => 'barr'
        ];

        $array = ArrayHelper::divide($array);
        var_dump($array);
    }

    public static function dotTest($multidimensionalArray)
    {

    }

    public static function exceptTest()
    {
        $array = [
            'foo' => 'bar',
            'fooo' => 'barr'
        ];

        $array = ArrayHelper::except($array, 'fooo');
        var_dump($array);
    }
}