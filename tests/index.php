<?php

require dirname(__DIR__).'/vendor/autoload.php';

// ArrayHelper tests
$arrayHelperTest = new Playnow\tests\helper\ArrayHelperTest();
$arrayHelperTest->addTest();
$arrayHelperTest->divideTest();
$arrayHelperTest->exceptTest();

// PathHelper tests
$pathHelperTest = new Playnow\tests\helper\PathHelperTest();
$pathHelperTest->appTest();
$pathHelperTest->baseTest();
$pathHelperTest->configTest();
$pathHelperTest->webTest();

// StringHelper tests
$stringHelperTest = new Playnow\tests\helper\StringHelperTest();
$stringHelperTest->camelCaseTest();
$stringHelperTest->eTest();
$stringHelperTest->startTest();
$stringHelperTest->endTest();
$stringHelperTest->containsTest();
$stringHelperTest->limitTest();
$stringHelperTest->randomTest();
$stringHelperTest->slugTest();

