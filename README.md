# cinf301-spr17-hw-03



To get us going a bit on some programming, here is a short programming assignment as described in class.  The code we wrote in class is attached separately.

I’ve modified it a bit because in my rush during class, I forgot to look in the $_SERVER variables for the argv list rather than passing it in through the constructor in class.  You will need to modify the code provided to essentially parse the argument list passed in to the main program and print out the associative array (or map) of key value pairs.  You will need a private parse() method to parse the arguments.  Also, as noted in the testArgs.php program, you need to provide a way to have $arguments returned using $parsed->argv instead of using $parsed->getParsed().

I’ve also updated how the data should be parsed.  You should be able to parse as follows:

php testArgs.php -v -T 4 -l val1,val2,val3 --names=Austin,Duncan,Eddie --type=gold

As you can see, a single dash followed by a single letter (upper or lower case with no space between them) and can stand alone or be followed by a value (int/float/string/etc. which your code will simply treat as a string) or followed by a comma-separated list of values.  Two dashes immediately is followed by a string and an equals sign (no spaces between) and either a single value or a comma-separated list of values.  A list of values must be stored in an array for the key provided. (e.g. in PHP, you can simulate what this should look like for the above by typing:

$args = array(‘v’=>true, ’T’=>’4’, ‘l’=>array(‘val1’, ‘val2’, ‘val3’), etc.);

You will need to modify how you print the $arguments in testArgs.php because the loop does not properly handle the array within arrays.

The assignment is due on Github by classtime on Monday (no late submissions allowed).  You must invite me to your repository, and you must call the repository (EXACTLY) cinf301-spr17-hw-03. 

testArgs.php:
------------
<?php
require_once "./ParseArgv.php";

$parsed = new ParseArgv();
$arguments = $parsedâ€”>getParsed();
// want   $arguments = $parsed->argv;  instead

foreach ($arguments as $k => $v) {
    print("$k=>$v\n");
}


ParseArgv.php:
-------------
<?php

class ParseArgv
{
    private $argsParsed;
    private $argsUnparsed;

    public function __construct()
    {
        $this->argsUnparsed = $_SERVER['argv'];
        $this->argsParsed = array(
            "One" => "one",
            "Two" => "two"
        );
    }

    public function getParsed()
    {
        return $this->argsParsed;
    }
}

