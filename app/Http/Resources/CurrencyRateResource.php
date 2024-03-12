<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\CurrencyRate
 */
class CurrencyRateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'currency_name' => $this->currency->getName(),
            'alpha' => $this->currency->getAlphabeticCode(),
            'currency_code' => $this->currency->getNumericCode(),
            'value' => $this->value,
        ];
    }
}
