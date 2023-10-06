<?php

namespace ERP;

use Exception;

class Test
{
    /**
     * @param string $text
     * @param string $message
     * @return void
     */
    public static function logInfo($message)
    {
        echo "\033[36m$message\033[0m\n";
    }

    /**
     * @param string $text
     * @param string $message
     * @return void
     */
    public static function logSuccess($message)
    {
        echo "\033[32m$message\033[0m\n";
    }

    /**
     * @param string $text
     * @return string
     */
    public static function textRed($text)
    {
        return "\033[31m$text\033[0m\n";
    }

    /**
     * @param string $text
     * @param string $message
     * @return void
     */
    public static function logError($message)
    {
        echo self::textRed($message);
    }

    public static function register()
    {
    }
}

/**
 * @param string $describe
 * @param callable $callable
 * @return void
 */
function describe($describe, $callable)
{
    try {
        Test::logInfo($describe);
        $callable();
        Test::logInfo($describe);
    } catch (\Throwable $th) {
        Test::logError($describe);
        Test::logError($th->__toString());
    }
}

/**
 * @param string $describe
 * @param callable $callable
 * @return void
 */
function it($describe, $callable)
{
    try {
        $callable();
        Test::logSuccess($describe);
    } catch (\Throwable $th) {
        Test::logError($describe);
        Test::logError($th->__toString());
    }
}

/**
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertEquals($expected, $actual)
{
    if (!($expected == $actual)) throw new Exception("FAILED: Expected '$expected', obtained '$actual'");
}

/**
 * @param mixed $expected
 * @param mixed $actual
 * @return void
 */
function assertStrict($expected, $actual)
{
    if (!($expected === $actual)) throw new Exception("FAILED: Expected '$expected', obtained '$actual'");
}
