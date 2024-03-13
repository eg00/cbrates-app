<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DTO\CurrencyRateData;
use App\Models\CurrencyRate;
use Illuminate\Support\Collection;

class CurrencyRateRepository
{
    public function all(): Collection
    {
        return CurrencyRate::query()->get();
    }

    public function update(Collection $rates): void
    {
        $rates
            ->map(fn (CurrencyRateData $row) => [
                'currency' => $row->currency->value,
                'value' => $row->value,
            ])
            ->chunk(30)
            ->each(function (Collection $rates): void {
                CurrencyRate::query()->upsert($rates->toArray(), 'currency');
            });
    }
}
