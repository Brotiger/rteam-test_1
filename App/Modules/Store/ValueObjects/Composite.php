<?php 

namespace App\Modules\Store\ValueObjects;

use App\Modules\Store\Errors\StoreException;

class Composite extends Component
{
    protected $children = [];
    private int $maxWeight = 1000;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);

        if($this->getWeight() > $this->maxWeight){
            $this->remove($component);
        }
    }

    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $parent = $this->getParent();

        if($parent){
            $parent->remove($this);
        }

        throw new StoreException("The maximum weight must not exceed " . $this->maxWeight);
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