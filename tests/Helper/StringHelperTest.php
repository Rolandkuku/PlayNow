<?php

namespace Playnow\tests\Helper;

use Playnow\app\helper\StringHelper;

class StringHelperTest
{
    public static function camelCaseTest()
    {
        $string = 'my_name_is_boxxy';
        $delimiter = '_';

        echo StringHelper::camelCase($string, $delimiter);
    }

    public static function eTest()
    {
        $string = 'My name is boxxy';

        echo StringHelper::e($string);
    }

    public function startTest()
    {
        $string = 'My name is boxxy';
        $word = 'my';

        echo StringHelper::start($string, $word);
    }

    public function endTest()
    {
        $string = 'My name is boxxy';
        $word = 'Boxxy';

        echo StringHelper::end($string, $word);
    }

    public function containsTest()
    {
        $string = 'My name is boxxy most of you know my video';
        $word = 'Boxxy';

        echo StringHelper::contains($string, $word);
    }

    public function limitTest()
    {
        $string = 'My name is boxxy';
        $limit = 6;

        echo StringHelper::limit($string, $limit);
    }

    public function randomTest()
    {
        echo StringHelper::random(10);
    }

    public function slugTest()
    {
        $string = 'My name is boxxy';
        $glue = '-';

        echo StringHelper::slug($string, $glue);
    }
}