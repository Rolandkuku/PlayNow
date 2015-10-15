<?php

namespace Playnow\tests\Helper;

use Playnow\app\helper\StringHelper;

class StringHelperTest
{
    public function startTest()
    {
        $string = 'My name is boxxy';
        $word = 'y';

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
}