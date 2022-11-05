<?php

namespace App\Modules\Store\ValueObjects;

use App\Modules\Store\Contracts\ComponentInterface;

class NumberElement implements ComponentInterface
{
    public function getWeight(): int
    {
        return 2;
    }
}