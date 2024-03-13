<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\CurrencyRateUpdate;

class CurrencyRateUpdateRepository
{
    public function lastCompleted(): ?CurrencyRateUpdate
    {
        /** @var CurrencyRateUpdate|null */
        return CurrencyRateUpdate::query()->where('is_completed', true)
            ->latest()
            ->first();
    }

    public function setLastCompleted(bool $isCompleted): void
    {
        $update = new CurrencyRateUpdate();

        $update->is_completed = $isCompleted;
        $update->save();
    }
}
