<?php

namespace Core;

class App
{
    protected static $container;

    //singleton pattern
    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }
}


//al ser static no necesito declarar esta class App
//App::setContainer
