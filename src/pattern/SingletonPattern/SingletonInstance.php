<?php

namespace App\Pattern\SingletonPattern;

class SingletonInstance
{
    private static $instances = [];

    /** protected constructor for allowing subclassing (extends) */
    protected function __construct() { }

    /** no allowed */
    protected function __clone() { }

    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }
}