<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\OperationFailedException;
use App\Repositories\CurrencyRateRepository;
use Exception;
use Illuminate\Support\Collection;

class CurrencyRateService
{
    public function __construct(
        protected CurrencyRateRepository $repository
    ) {
    }

    /**
     * @throws OperationFailedException
     */
    public function getAll(): Collection
    {
        try {
            return $this->repository->all();
        } catch (Exception $e) {
            throw new OperationFailedException($e->getMessage(), 0, $e);
        }
    }
}
