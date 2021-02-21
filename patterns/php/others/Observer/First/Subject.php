<?php declare(strict_types=1);

namespace App\Observer\First;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Subject implements SplSubject
{
    public $state;
    private SplObjectStorage $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->storage->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->storage as $obj){
            $obj->update($this);
        }
    }

    public function doSomething(): void
    {
        echo "Subject\n";
        $this->notify();
    }
}