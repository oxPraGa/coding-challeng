<?php

namespace App\Http\Controllers;

use App\Http\Resources\Node as NodeResource;
use App\Repository\GraphRepositoryInterface;
use App\Repository\NodeRepositoryInterface;

class NodeController extends Controller
{
    //
    private $nodeRepository;
    private $graphRepository;

    public function __construct(NodeRepositoryInterface $nodeRepository, GraphRepositoryInterface $graphRepository)
    {
        $this->nodeRepository = $nodeRepository;
        $this->graphRepository = $graphRepository;
    }

    public function store($graphId)
    {
        $graph = $this->graphRepository->find($graphId);
        if (!$graph) {
            return response(['error' => 'Graph not found'], 422);
        }
        $node = $this->nodeRepository->store($graph->id);
        if ($node) {
            return response(['data' => new NodeResource($node)], 201);
        }
    }

    public function delete($nodeId)
    {
        $node = $this->nodeRepository->find($nodeId);
        if (!$node) {
            return response(['error' => 'node not found'], 422);
        }
        $delete = $this->nodeRepository->delete($node);
        if ($delete) {
            return response(['result' => 'Node deleted'], 200);
        }
        return response(['error' => 'Node not deleted'], 500);
    }
}
