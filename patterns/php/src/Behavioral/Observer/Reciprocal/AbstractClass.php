<?php


namespace App\Behavioral\Observer\Reciprocal;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class AbstractClass implements SplSubject, SplObserver
{
    private string $string;
    private string $shared = "";
    private SplObjectStorage $storage;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->storage = new SplObjectStorage();
    }

    public function setSomeField(string $string): void
    {
        $this->string = $string;
        $this->notify();
    }

    public function getSomeField(): string
    {
        return $this->string;
    }

    public function update(SplSubject $subject)
    {
        print "self: {$this->string}, shared: {$subject->shared} \n";
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->storage as $item) {
            $item->update($this);
        }
    }
}