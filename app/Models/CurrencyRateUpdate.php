<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Database\Factories\CurrencyRateUpdateFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int             $id
 * @property bool            $is_completed
 * @property CarbonImmutable $created_at
 * @property CarbonImmutable $updated_at
 *
 * @method static CurrencyRateUpdate|null   find($id, $columns = ['*'])
 * @method static CurrencyRateUpdateFactory factory(...$parameters)
 */
class CurrencyRateUpdate extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];
}
