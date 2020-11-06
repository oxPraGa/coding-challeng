<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGraph;
use App\Http\Requests\UpdateGraph;
use App\Http\Resources\Graph as GraphResource;
use App\Http\Resources\SingleGraph;
use App\Repository\GraphRepositoryInterface;

/**
 * @group Graph management
 *
 * APIs for managing graphs
 */
class GraphController extends Controller
{
    private $graphRepository;

    public function __construct(GraphRepositoryInterface $graphRepository)
    {
        $this->graphRepository = $graphRepository;
    }

    /**
     * Create an empty graph.
     *
     * This endpoint allows you to create an empty graph.
     *
     * @bodyParam name string required The name of the graph. Example: Blalba
     * @bodyParam description string required The description of the graph. Example: Blalba dwkj jdkwjkjw
     *
     * @response status=201 scenario=created "data": {
     *  "id": 1,
     *  "name": "gssstegssssdsde",
     *  "description": "wfwfwfw"
     *  }
     *
     * @response status=422 scenario="Unprocessable Entity" {
     *"message": "The given data was invalid.",
     *"errors": {
     *  "name": [
     *    "The name has already been taken."
     *  ]
     *}
     *}
     */
    public function store(StoreGraph $request)
    {
        $graph = $this->graphRepository->create($request->only('name', 'description'));
        if ($graph) {
            return response(['data' => new GraphResource($graph)], 201);
        }

        return response(['errorMessage' => 'Graph not created'], 500);
    }

    /**
     * Update a graph meta data.
     *
     * This endpoint allows you to update a graph.
     *
     * @urlParam id required numeric Graph Id. Example: 1
     * @bodyParam name string required The name of the graph. Example: Blalba
     * @bodyParam description string required The description of the graph. Example: Blalba dwkj jdkwjkjw
     *
     * @response status=200 scenario=success  {
     *"result": "Graph updated"
     *}
     */
    public function update(UpdateGraph $request , $id)
    {
        $graph = $this->graphRepository->find($id);
        $update = $this->graphRepository->update($graph, $request->only('name', 'description'));
        if ($update) {
            return response(['result' => 'Graph updated'], 200);
        }
        return response(['error' => 'Graph not updated'], 500);
    }

    /**
     * Delete a graph.
     *
     * This endpoint allows you to delete a graph.
     *
     *  @urlParam id required integer Graph Id. Example: 1
     * 
     * @response status=200 scenario=success {
     * "result": "Graph deleted"
     * }
     * @response status=422 scenario=UnprocessableEntity {
     * "result": "Graph not found"
     * }
     */
    public function delete($id)
    {
        $graph = $this->graphRepository->find($id);
        if (!$graph) {
            return response(['error' => 'Graph not found'], 422);
        }
        $delete = $this->graphRepository->delete($graph);
        if ($delete) {
            return response(['result' => 'Graph deleted'], 200);
        }
        return response(['error' => 'Graph not deleted'], 500);
    }

    /**
     * Get all graphs.
     *
     * This endpoint allows you to get all graphs.
     * 
     * 
     */

    public function getGraphs()
    {
        $graphs = $this->graphRepository->all();
        return response(['data' => GraphResource::collection($graphs)], 201);
    }

    /**
     * Get single graphs.
     *
     * This endpoint allows you to get single graphs with nodes & relations.
     *  @urlParam id required integer Graph Id. Example: 1
     */
    public function getSingleGraph($id)
    {
        $graph = $this->graphRepository->find($id);
        if (!$graph) {
            return response(['error' => 'Graph not found'], 422);
        }
        return response(['data' => new SingleGraph($graph)], 201);
    }
}
