<?php


namespace App\Behavioral\Mediator\DispatcherPsr\Listener;


use App\Behavioral\Mediator\DispatcherPsr\Event\SomeEvent;

class SomeListener
{
    public string $text;

    public function __invoke(SomeEvent $event): void
    {
        $this->text = $event->getText();
        $event->stopPropagation();
    }
}