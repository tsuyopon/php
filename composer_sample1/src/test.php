<?php

require 'vendor/autoload.php';

// use definition is needed
use MyNamespace\HogeBase;
use MyNamespace\sample\Hoge;

$base = new HogeBase;
$base->testfunc();

$app = new Hoge;
$app->testfunc();

// app.log
date_default_timezone_set('Asia/Tokyo');
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
