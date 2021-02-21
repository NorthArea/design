<?php declare(strict_types=1);

namespace App\Observer\First;

use SplObserver;
use SplSubject;

class ObserverA implements SplObserver
{

    public function update(SplSubject $subject)
    {
        echo "ObserverA\n";
    }
}