<?php

namespace App\Modules\Store\Services;

use App\Modules\Store\Errors\StoreException;
use App\Modules\Store\ValueObjects\ArrayElement;
use App\Modules\Store\ValueObjects\BooleanElement;
use App\Modules\Store\ValueObjects\NullElement;
use App\Modules\Store\ValueObjects\NumberElement;
use App\Modules\Store\ValueObjects\ObjectElement;
use App\Modules\Store\ValueObjects\StringElement;

class ElementFactory
{
    public static function create($product){
        $type = gettype($product);
        switch($type){
            case 'NULL':
                return new NullElement;
            case 'boolean':
                return new BooleanElement;
            case 'integer':
            case 'double':
                return new NumberElement;
            case 'string':
                return new StringElement;
            case 'array':
                return new ArrayElement($product);
            case 'object':
                return new ObjectElement($product);
            default:
                throw new StoreException("Element class for " . $type . " not found");
        }
    }
}