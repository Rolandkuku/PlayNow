<?php

namespace Playnow\tests\Helper;

use Playnow\app\helper\PathHelper;

class PathHelperTest
{
    public function appTest()
    {
        echo PathHelper::app();
    }

    public function baseTest()
    {
        echo PathHelper::base();
    }

    public function configTest()
    {
        echo PathHelper::config();
    }

    public function webTest()
    {
        echo PathHelper::web();
    }
}