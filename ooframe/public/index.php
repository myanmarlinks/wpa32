<?php
define("DD", realpath("../"));
require DD . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\Car\Toyota;
use App\Car\Hyundai;
use App\Application\Application;

Toyota::honk();
Hyundai::honk();
Application::shout();

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(DD . '/app/log/test.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

testFun();
dump("Hello World");
Config::get();

?>