<?php

declare(strict_types=1);

namespace App\DTO;

use App\Enum\Currency;

class CurrencyRateData
{
    public function __construct(
        public readonly Currency $currency,
        public readonly float $value,
    ) {
    }
}
