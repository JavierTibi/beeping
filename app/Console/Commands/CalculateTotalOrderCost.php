<?php

namespace App\Console\Commands;

use App\Jobs\CalculateTotalOrderCostJob;
use App\Models\OrderLine;
use Illuminate\Console\Command;
use Symfony\Component\Console\Output\ConsoleOutput;

class CalculateTotalOrderCost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:total';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate total cost of all orders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        CalculateTotalOrderCostJob::dispatch();
        echo "Dispatched CalculateTotalOrderCost Job.";
        return 0;
    }
}
