<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearAllCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:clear-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all caches';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('cache:clear');
        $this->info('Application cache cleared');

        Artisan::call('route:clear');
        $this->info('Route cache cleared');

        Artisan::call('config:clear');
        $this->info('Configuration cache cleared');

        Artisan::call('view:clear');
        $this->info('View cache cleared');

        Artisan::call('event:clear');
        $this->info('Event cache cleared');

        Artisan::call('clear-compiled');
        $this->info('Compiled files cleared');

        Artisan::call('optimize:clear');
        $this->info('Optimized files cleared');

        return 0;
    }
}
