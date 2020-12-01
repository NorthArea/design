<?php declare(strict_types=1);

namespace App\Observer\First;

use SplObserver;
use SplSubject;

class ObserverB implements SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo "ObserverB\n";
    }
}