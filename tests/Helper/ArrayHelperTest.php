<?php

namespace Playnow\tests\Helper;

use Playnow\app\helper\ArrayHelper;

class ArrayHelperTest
{
    public function addTest()
    {
        $array = [
            'foo' => 'bar'
        ];
        $key = 'fooo';
        $value = 'barr';

        ArrayHelper::add($array, $key, $value);
        var_dump($array);
    }

    public static function divideTest($array)
    {

    }

    public static function dotTest($multidimensionalArray)
    {

    }

    public static function exceptTest($array, $key)
    {

    }
}