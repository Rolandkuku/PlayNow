<?php

namespace Playnow\tests\Helper;

use Playnow\app\helper\StringHelper;

class StringHelperTest
{
    public function startTest()
    {
        $string = 'My name is boxxy';
        $word = 'my';

        StringHelper::start($string, $word);
    }

    public function endTest()
    {
        $string = 'My name is boxxy';
        $word = 'Boxxy';

        StringHelper::end($string, $word);
    }

    public function containsTest()
    {
        $string = 'My name is boxxy most of you know my video';
        $word = 'Boxxy';

        StringHelper::contains($string, $word);
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