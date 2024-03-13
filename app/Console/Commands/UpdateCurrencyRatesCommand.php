<?php

namespace App\Console\Commands;

use App\Services\CurrencyRateService;
use Illuminate\Console\Command;
use Throwable;

class UpdateCurrencyRatesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rates:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update currency rates';

    /**
     * Execute the console command.
     */
    public function handle(CurrencyRateService $service): int
    {
        try {
            $lastUpdate = $service->getLastUpdate();
            if ($lastUpdate && $lastUpdate->isToday()) {
                $this->info('Rates already updated today');

                return self::SUCCESS;
            }
            $service->update();
            $service->setLastUpdate(true);
            $this->info('Rates updated');
        } catch (Throwable $e) {
            $this->error($e->getMessage());
            $service->setLastUpdate(false);

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
