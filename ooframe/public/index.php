<?php
define("DD", realpath("../"));
require DD . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(DD . '/app/log/test.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

testFun();
dump("Hello World", true);

?>