<?php 

namespace App\Modules\Store\ValueObjects;

use App\Modules\Store\Contracts\ComponentInterface;

class Composite implements ComponentInterface
{
    protected $children = [];

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function add(ComponentInterface $component): void
    {
        $this->children->attach($component);
    }

    public function getWeight(): int
    {
        $result = 0;
        foreach ($this->children as $child) {
            $result += $child->getWeight();
        }

        return $result;
    }
}