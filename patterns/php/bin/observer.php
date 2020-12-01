<?php

use App\Observer\First\ObserverA;
use App\Observer\First\ObserverB;
use App\Observer\First\Subject;

require_once __DIR__ . "/../vendor/autoload.php";

$subject = new Subject();
$subject->attach(new ObserverA());
$subject->attach(new ObserverB());
$subject->doSomething();