<?php

namespace Playnow\app\helper;

class PathHelper
{
    /** Return path to app directory
     * @return string
     */
    public static function app()
    {
        return dirname(__DIR__).'/';
    }

    /** Return path to root
     * @return string
     */
    public static function base()
    {
        return dirname(dirname(__DIR__)).'/';
    }

    /**
     * Return path to configuration directory
     * @return string
     */
    public static function config()
    {
        return dirname(__DIR__).'/configuration/';
    }

    /**
     * Return path to web root
     * @return string
     */
    public static function web()
    {
        return dirname(dirname(__DIR__)).'/web/';
    }
}