<?php

namespace App\Modules\Store\ValueObjects;

use App\Modules\Store\Services\ElementFactory;

class ObjectElement extends Composite
{
    public function __construct($product)
    {
        parent::__construct();

        foreach(get_object_vars($product) as $ell){
            $this->add(ElementFactory::create($ell));
        }
    }
}