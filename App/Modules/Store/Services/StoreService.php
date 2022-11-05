<?php

namespace App\Modules\Store\Services;

use App\Modules\Store\Contracts\StoreInterface;
use App\Modules\Store\ValueObjects\Composite;

class StoreService implements StoreInterface
{
    private Composite $composite;

    public function __construct()
    {
        $this->composite = new Composite; 
    }

    public function add($product) {
        $element = ElementFactory::create($product);
        $this->composite->add($element);
    }

    public function getTotalWeight(): int{
        return $this->composite->getWeight();
    }
}