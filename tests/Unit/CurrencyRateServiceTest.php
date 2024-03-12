<?php

namespace Tests\Unit;

use App\Exceptions\OperationFailedException;
use App\Models\CurrencyRate;
use App\Repositories\CurrencyRateRepository;
use App\Services\CurrencyRateService;
use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CurrencyRateServiceTest extends TestCase
{
    use RefreshDatabase;

    private CurrencyRateService $service;

    public function testGetAllReturnsCollectionOfCurrencyRates(): void
    {
        CurrencyRate::factory()->count(3)->create();
        $this->service = app(CurrencyRateService::class);

        $this->assertCount(3, $this->service->getAll());

        $this->assertEquals(CurrencyRate::all(), $this->service->getAll());
    }

    public function testGetAllThrowsOperationFailedExceptionOnError(): void
    {
        $repositoryMock = $this->inject(CurrencyRateRepository::class);
        $repositoryMock->method('all')
            ->willThrowException(new Exception('Database error'));

        $this->service = $this->app->make(CurrencyRateService::class);

        $this->expectException(OperationFailedException::class);

        $this->service->getAll();
    }
}
