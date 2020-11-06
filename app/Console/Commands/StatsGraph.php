<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repository\GraphRepositoryInterface;

class StatsGraph extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graph:stats {--gid=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display graphs stats ';

    private $graphRepository;
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
        $graphId = $this->option('gid');
        $graph = $this->graphRepository->find($graphId);
        if (!$graph) {
            return $this->warn('Graph not found');
        }

        $this->info('----- Graph stats ----');
        $this->info('Graph name : '.$graph->name);
        $this->info('Graph name : '.$graph->description);
        $this->info('Number of nodes : '. $this->graphRepository->countNodes($graph));
        $this->info('Number of relation : '.$this->graphRepository->countRelations($graph));
    }
}
