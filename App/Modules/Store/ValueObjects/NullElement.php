<?php

namespace App\Modules\Store\ValueObjects;

use App\Modules\Store\Contracts\ComponentInterface;

class NullElement implements ComponentInterface
{
    public function getWeight(): int
    {
        return 0;
    }
}