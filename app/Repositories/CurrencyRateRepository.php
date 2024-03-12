<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\CurrencyRate;
use Illuminate\Support\Collection;

class CurrencyRateRepository
{
    public function all(): Collection
    {
        return CurrencyRate::query()->get();
    }
}
