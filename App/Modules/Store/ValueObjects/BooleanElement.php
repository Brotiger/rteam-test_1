<?php

namespace App\Modules\Store\ValueObjects;

class BooleanElement extends Component
{
    public function getWeight(): int
    {
        return 1;
    }
}