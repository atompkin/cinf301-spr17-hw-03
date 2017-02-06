<?php
/**
 * Created by PhpStorm.
 * User: Andrew Tompkins
 * Date: 2/3/17
 * Time: 10:50 PM
 */

// input php testArgs.php -v -T 4 -l val1,val2,val3 --names=Austin,Duncan,Eddie --type=gold

require_once "./ParseArgv.php";

$parsed = new ParseArgv();
$arguments = $parsed->getParsed();
// want   $arguments = $parsed->argv;  instead
var_dump($arguments);

