<?php

namespace App\Modules\Store\Services;

use App\Modules\Store\Contracts\StoreInterface;
use App\Modules\Store\ValueObjects\Composite;

class StoreService implements StoreInterface
{
    private Composite $store;

    public function __construct()
    {
        $this->store = new Composite; 
    }

    public function add($product) {
        $element = ElementFactory::create($product);
        $this->store->add($element);
    }

    public function getTotalWeight(): int{
        return $this->store->getWeight();
    }
}