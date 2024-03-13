<?php

namespace Tests\Unit;

use App\DTO\CurrencyRateData;
use App\Enum\Currency;
use App\Models\CurrencyRate;
use App\Repositories\CurrencyRateRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class CurrencyRateRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanRetrieveAllCurrencyRates(): void
    {
        $currencyRates = CurrencyRate::factory()->count(5)->create();

        $repository = $this->app->make(CurrencyRateRepository::class);

        $result = $repository->all();

        $this->assertInstanceOf(Collection::class, $result);

        $this->assertCount($currencyRates->count(), $result);

        $result->each(function ($item) {
            $this->assertInstanceOf(CurrencyRate::class, $item);
        });
    }

    public function testItCorrectlyUpdatesCurrencyRates(): void
    {
        $ratesData = collect([
            new CurrencyRateData(Currency::USD, 1.0),
            new CurrencyRateData(Currency::EUR, 0.9),
        ]);

        $repository = $this->app->make(CurrencyRateRepository::class);
        $repository->update($ratesData);

        $this->assertDatabaseCount('currency_rates', 2);
        $repository->update($ratesData);
        $this->assertDatabaseCount('currency_rates', 2);
    }
}
