<?php


namespace App\Structural\Composite\FormComposite;


class Form implements Renderable
{
    private array $elements;
    /**
     * @var Renderable
     */
    private Renderable $parent;

    public function __construct()
    {
        $this->parent = $this;
    }

    public function addElement(Renderable $element): Renderable
    {
        $element->setParent($this);
        $this->elements[] = $element;
        return $this->parent;
    }

    public function render(): string
    {
        $result = "";

        foreach ($this->elements as $element) {
            $result .= $element->render();
        }

        $result = "<form>" . $result . "</form>";

        return $result;
    }

    public function setParent(Renderable $parent): void
    {
        $this->parent = $parent;
    }
}