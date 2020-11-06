<?php

namespace App\Console\Commands;

use App\Repository\GraphRepositoryInterface;
use App\Repository\NodeRepositoryInterface;
use App\Repository\RelationRepositoryInterface;
use Faker\Generator as Faker;
use Illuminate\Console\Command;

class GenGraph extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graph:gen {--nbNodes=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a random graph with $nbNodes nodes and random relations.';

    private $nodeRepository;
    private $graphRepository;
    private $relationRepository;
    private $faker;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(NodeRepositoryInterface $nodeRepository, GraphRepositoryInterface $graphRepository, RelationRepositoryInterface $relationRepository, Faker $faker)
    {
        parent::__construct();
        $this->nodeRepository = $nodeRepository;
        $this->graphRepository = $graphRepository;
        $this->relationRepository = $relationRepository;
        $this->faker = $faker;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $nbNodes = $this->option('nbNodes');
        if (!$nbNodes) {
            return $this->warn('Set --nbNodes');
        }
        if (!is_numeric($nbNodes)) {
            return $this->warn('--nbNodes should be int');
        }
        // create a graph
        $this->info('Create a graph');
        $graph = $this->graphRepository
            ->create([
                'name' => $this->faker->name,
                'description' => $this->faker->text,
            ]);

        // create the nbnodes nodes
        $this->info('Create '.$nbNodes.' nodes');
        for ($i = 0; $i < $nbNodes; $i++) {
            $this->nodeRepository->store($graph->id);
        }
        
        // set random realtion
        $this->info('Set random realtion');
        foreach ($graph->nodes as $key => $node) {
            $tmpNodes = clone $graph->nodes;
            $tmpNodes->forget($key);
            $tmpNodes = $tmpNodes->random(rand(1, $graph->nodes->count() / 2));

            foreach ($tmpNodes as $tmpNode) {
                $relation = $this->relationRepository->get($tmpNode->id, $node->id);
                if (!$relation) {
                    $this->relationRepository->store($tmpNode->id, $node->id);
                }
            }
        }
        return $this->info('Success');
    }
}
