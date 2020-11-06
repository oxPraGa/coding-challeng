<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repository\GraphRepositoryInterface;

class ClearGraph extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graph:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all empty graphs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(GraphRepositoryInterface $graphRepository)
    {
        parent::__construct();
        $this->graphRepository = $graphRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->graphRepository->deleteEmptyGraph();
        return $this->info('Success');
    }
}
