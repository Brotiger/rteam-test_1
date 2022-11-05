<?php

namespace App\Modules\Store\Contracts;

interface StoreInterface {
    public function add($product);
    public function getTotalWeight(): int;
}