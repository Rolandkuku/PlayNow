<?php

require dirname(__DIR__).'/vendor/autoload.php';

// ArrayHelper tests
$arrayHelperTest = new Playnow\tests\helper\ArrayHelperTest();
$arrayHelperTest->addTest();
$arrayHelperTest->divideTest();
$arrayHelperTest->exceptTest();
