<?php

class A {
    public function a1(): string
    {
        return __METHOD__;
    }
}

class B {
    private A $objA;

    /**
     * B constructor.
     */
    public function __construct()
    {
        $this->objA = new A();
    }

    public function b1(): string
    {
        return $this->objA->a1();
    }
}

$objB = new B();
echo $objB->b1();