<?php
/**
 * Created by PhpStorm.
 * User: Andrew Tompkins
 * Date: 2/3/17
 * Time: 10:51 PM
 */

// input php testArgs.php -v -T 4 -l val1,val2,val3 --names=Austin,Duncan,Eddie --type=gold
class ParseArgv
{
    private $argsParsed;
    private $argsUnparsed;

    public function __construct()
    {
        $this->argsUnparsed = $_SERVER['argv'];
        $this->argsParsed = array($this->parse());
    }

    public function getParsed()
    {
        return $this->argsParsed;
    }
// used getopt
    private function parse()
    {
        $shortopts = "";
        $shortopts .= "T:";
        $shortopts .= "l:";
        $shortopts .= "v::";
        $longopts = array("names:","type:");
        $options = getopt($shortopts, $longopts);
        var_dump($options);
    }
}