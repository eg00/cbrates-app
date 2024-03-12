<?php

namespace App\Http\Controllers;

use App\Http\Resources\CurrencyRateResource;
use App\Models\CurrencyRate;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CurrencyRateController extends Controller
{
    public function index(): ResourceCollection
    {
        return CurrencyRateResource::collection(CurrencyRate::all());
    }
}
