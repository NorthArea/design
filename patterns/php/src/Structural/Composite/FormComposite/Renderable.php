<?php


namespace App\Structural\Composite\FormComposite;


interface Renderable
{
    public function setParent(self $parent): void;
    public function addElement(self $element): self;
    public function render(): string;
}