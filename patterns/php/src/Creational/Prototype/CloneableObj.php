<?php declare(strict_types=1);

namespace App\Creational\Prototype;

use stdClass;

class CloneableObj
{
    public int $count = 0;
    public int $fieldInt;
    public StdClass $fieldStd;

    public function __construct(int $fieldInt, StdClass $fieldStd)
    {
        $this->fieldInt = $fieldInt;
        $this->fieldStd = $fieldStd;
    }

    public function __clone()
    {
        ++$this->count;
        $this->fieldStd = clone $this->fieldStd;
    }
}