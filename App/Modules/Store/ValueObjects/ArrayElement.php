<?php

namespace App\Modules\Store\ValueObjects;

use App\Modules\Store\Services\ElementFactory;

class ArrayElement extends Composite
{
    public function __construct($product)
    {
        parent::__construct();

        foreach($product as $ell){
            $this->add(ElementFactory::create($ell));
        }
    }
}