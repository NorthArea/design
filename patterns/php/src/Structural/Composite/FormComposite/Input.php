<?php


namespace App\Structural\Composite\FormComposite;


class Input implements Renderable
{
    private string $text;
    /**
     * @var Renderable
     */
    private Renderable $parent;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return "<input type='text' placeholder='{$this->text}'>";
    }

    public function setParent(Renderable $parent): void
    {
        $this->parent = $parent;
    }

    public function addElement(Renderable $element): Renderable
    {
        return $this;
    }
}