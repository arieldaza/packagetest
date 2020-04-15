<?php 

require_once '/vendor/autoload.php';

use Sherk\Application\MyTestClass;

$test = new MyTestClass();

echo $test->test();

