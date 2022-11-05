<?php

namespace App\Modules\Store\ValueObjects;

class NullElement extends Component
{
    public function getWeight(): int
    {
        return 0;
    }
}