<?php

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

$listFilesByExtension = function ($directory, $extension) {

    $files = [];
    $dir = new RecursiveDirectoryIterator($directory);
    $iterator = new RecursiveIteratorIterator($dir);

    foreach ($iterator as $file) {
        if ($file->isFile() && strpos($file->getPathname(), $extension) !== false) {
            $files[] = $file->getPathname();
        }
    }

    return $files;
};

$run = function (?string $testTag, ?string $specificTest) use ($listFilesByExtension) {
    try {

        $rootDirectory = getcwd();
        $extension = $testTag != null ? ('.' . $testTag . '.test.php') : '.test.php';

        $files = $listFilesByExtension($rootDirectory, $extension);

        foreach ($files as $file) {
            if ($specificTest != null && strpos($file, DIRECTORY_SEPARATOR . $specificTest) == false) continue;
            try {
                require($file);
                echo "\n";
            } catch (\Throwable $th) {
                Test::logError("\n erro: " . $th->getCode() . " - " . $th->getMessage() . ' - ' . $th->getFile() . ' - ' . $th->getLine() . "\n");
            }
        }
    } catch (\Throwable $th) {
        Test::logError("\n erro: " . $th->getCode() . " - " . $th->getMessage() . ' - ' . $th->getFile() . ' - ' . $th->getLine() . "\n");
    }
};

$arg01 = $argv[1] ?? null;
$arg02 = $argv[2] ?? null;
$run($arg01, $arg02);
