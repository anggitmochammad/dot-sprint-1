<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RajaOngkirGenerate extends Command
{
    protected $signature = 'ongkir:generate';

    protected $description = 'Generate province and city';

    public function handle()
    {
        Artisan::call('db:seed');
        return Command::SUCCESS;
    }
}
