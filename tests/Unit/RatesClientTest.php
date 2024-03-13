<?php

namespace Tests\Unit;

use App\Services\RatesClient;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RatesClientTest extends TestCase
{
    public function testFetchReturnsCollectionOnSuccess(): void
    {
        Http::fake([
            '*' => Http::response('<xml><record><NumCode>933</NumCode><VunitRate>1.2345</VunitRate></record></xml>', 200),
        ]);

        $client = $this->app->make(RatesClient::class);

        $collection = $client->fetch();

        $this->assertInstanceOf(Collection::class, $collection);

        $this->assertNotEmpty($collection);
    }

    /**
     * A basic unit test example.
     */
    public function testFetchThrowsExceptionOnHttpError(): void
    {
        Http::fake([
            '*' => Http::response(null, 500),
        ]);

        $this->expectException(Exception::class);

        $client = $this->app->make(RatesClient::class);

        $client->fetch();
    }
}
