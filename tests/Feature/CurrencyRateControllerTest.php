<?php

namespace Tests\Feature;

use App\Http\Resources\CurrencyRateResource;
use App\Models\CurrencyRate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CurrencyRateControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testItReturnsCurrencyRatesAsResourceCollection(): void
    {
        $currencyRates = CurrencyRate::factory()->count(3)->create();
        $json = CurrencyRateResource::collection($currencyRates)->resolve();

        $response = $this->get(route('rates.index'));

        $response->assertStatus(200);
        $this->assertSame(['data' => $json], $response->json());
    }
}
