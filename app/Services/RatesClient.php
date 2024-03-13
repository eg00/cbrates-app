<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\CurrencyRateData;
use App\Enum\Currency;
use App\Exceptions\OperationFailedException;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use NumberFormatter;
use Psr\Log\LoggerInterface;
use SimpleXMLElement;

class RatesClient
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    /**
     * @throws OperationFailedException
     */
    public function fetch(): Collection
    {
        try {
            $response = Http::get(config('app.cbr_endpoint'));

            $response->throw();
            $records = simplexml_load_string(
                $response->body(),
                'SimpleXMLElement',
                LIBXML_NOCDATA
            );

            assert($records instanceof SimpleXMLElement);

            $collection = collect();

            foreach ($records as $record) {
                $record = (array) $record;
                $collection->push($this->getDto($record['NumCode'], $record['VunitRate']));
            }

            return $collection;
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        }
    }

    protected function getDto(string $code, string $rate): CurrencyRateData
    {
        $formatter = new NumberFormatter('ru_RU', NumberFormatter::DECIMAL);

        return new CurrencyRateData(
            currency: Currency::from((int) $code),
            value: (float) $formatter->parse($rate),
        );

    }
}
