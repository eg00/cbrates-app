<?php

namespace App\Http\Controllers;

use App\Exceptions\OperationFailedException;
use App\Http\Resources\CurrencyRateResource;
use App\Services\CurrencyRateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;

class CurrencyRateController extends Controller
{
    public function __construct(protected CurrencyRateService $service)
    {
    }

    public function index(): ResourceCollection|JsonResponse
    {
        try {
            return CurrencyRateResource::collection($this->service->getAll());
        } catch (OperationFailedException $e) {
            return new JsonResponse(
                'An error occurs while performing the operation',
                Response::HTTP_INTERNAL_SERVER_ERROR,
            );
        }
    }
}
