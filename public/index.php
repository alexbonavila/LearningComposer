<?php

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use Alexbonavila\LearningComposer\Controller\SillyController;


// Get the current date and time
$now = Carbon::now();
echo $now->toDateTimeString()  . PHP_EOL;

// Add 5 days to the current date
$inFiveDays = $now->addDays(5);
echo $inFiveDays->toDateTimeString()  . PHP_EOL;

// Subtract 30 minutes
$minusThirtyMinutes = $now->subMinutes(30);
echo $minusThirtyMinutes->toDateTimeString()  . PHP_EOL;

helloGlobal();

$controller = new SillyController();
echo $controller->getMessage();