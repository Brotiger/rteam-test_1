<?php

namespace App\Modules\Store\ValueObjects;

abstract class Component
{
    protected ?Component $parent = null;

    public abstract function getWeight(): int;

    public function setParent(?Composite $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): ?Composite
    {
        return $this->parent;
    }
}