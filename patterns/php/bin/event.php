<?php

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Contracts\EventDispatcher\Event;

require_once __DIR__ . "/../vendor/autoload.php";

class TestEvent extends Event
{
    public const NAME = 'acme';
    public int $COUNTER = 0;
}

$obj = new TestEvent();
var_dump($obj->COUNTER);
$dispatcher = new EventDispatcher();

$dispatcher->addListener(TestEvent::NAME, static function (Event $event) {
    $event->COUNTER++;
   var_dump("Hello");
});
$dispatcher->addListener('test', static function (Event $event) {
    var_dump($event->getSubject());
});


$dispatcher->dispatch($obj, TestEvent::NAME);
var_dump($obj->COUNTER);

$event = new GenericEvent(
    $obj,
    ['type' => 'foo', 'counter' => 15]
);

$dispatcher->dispatch($event, 'test');