<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\OperationFailedException;
use App\Repositories\CurrencyRateRepository;
use Illuminate\Support\Collection;
use Throwable;

class CurrencyRateService
{
    public function __construct(
        protected CurrencyRateRepository $repository,
        protected RatesClient $client,
    ) {
    }

    /**
     * @throws OperationFailedException
     */
    public function getAll(): Collection
    {
        try {
            return $this->repository->all();
        } catch (Throwable $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }

    public function update(): void
    {
        try {
            $rates = $this->client->fetch();
            $this->repository->update($rates);
        } catch (Throwable $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }
}
