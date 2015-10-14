<?php

namespace PlayNow\tests\Helper\ArrayHelper;

use Playnow\app\helper\ArrayHelper;

class AddTest
{
    public function test()
    {
        ArrayHelper::add('toto');
    }
}

$addTest = new AddTest();
var_dump($addTest->test());
