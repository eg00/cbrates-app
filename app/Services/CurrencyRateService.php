<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\OperationFailedException;
use App\Repositories\CurrencyRateRepository;
use App\Repositories\CurrencyRateUpdateRepository;
use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Throwable;

class CurrencyRateService
{
    public function __construct(
        protected CurrencyRateRepository $currencyRateRepository,
        protected CurrencyRateUpdateRepository $currencyRateUpdateRepository,
        protected RatesClient $client,
    ) {
    }

    /**
     * @throws OperationFailedException
     */
    public function getAll(): Collection
    {
        try {
            return $this->currencyRateRepository->all();
        } catch (Throwable $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }

    public function update(): void
    {
        try {
            $rates = $this->client->fetch();
            $this->currencyRateRepository->update($rates);
        } catch (Throwable $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }

    public function getLastUpdate(): ?CarbonImmutable
    {
        try {
            return $this->currencyRateUpdateRepository->lastCompleted()?->created_at;
        } catch (Throwable $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }

    public function setLastUpdate(bool $isCompleted): void
    {
        try {
            $this->currencyRateUpdateRepository->setLastCompleted($isCompleted);
        } catch (Throwable $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }
}
