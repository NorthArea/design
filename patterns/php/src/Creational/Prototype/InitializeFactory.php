<?php


namespace App\Creational\Prototype;


class InitializeFactory
{
    /**
     * @var CloneableObj
     */
    private CloneableObj $obj;

    public function __construct(CloneableObj $obj)
    {
        $this->obj = $obj;
    }

    public function getObject(int $param): CloneableObj
    {
        $result =  clone $this->obj;
        $result->fieldInt = $param;
        return $result;
    }
}