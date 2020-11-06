<?php

namespace App\Http\Controllers;

use App\Http\Resources\Node as NodeResource;
use App\Repository\GraphRepositoryInterface;
use App\Repository\NodeRepositoryInterface;

/**
 * @group Nodes management
 *
 * APIs for managing nodes
 */
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

    /**
     * Create a node.
     *
     * This endpoint allows you to create a node.
     *
     * @urlParam graphId required integer Graph Id. Example: 1
     *
     * @response status=201 scenario=created "data":{
     *    "id": 285,
     *    "graph_id": 1
     *  }
     *
     * @response status=422 scenario="Unprocessable Entity"
     * {
     *  "error": "Graph not found"
     *  }
     */
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

    /**
     * Delete a node.
     *
     * This endpoint allows you to delete a node.
     *
     *  @urlParam nodeId required integer Node Id. Example: 1
     * 
     * @response status=200 scenario=success {
     * "result": "Node deleted"
     * }
     * @response status=422 scenario=UnprocessableEntity {
     * "result": "node not found"
     * }
     */
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
