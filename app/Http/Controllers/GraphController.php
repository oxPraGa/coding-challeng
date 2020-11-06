<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGraph;
use App\Http\Requests\UpdateGraph;
use App\Http\Resources\Graph as GraphResource;
use App\Http\Resources\SingleGraph;
use App\Repository\GraphRepositoryInterface;

class GraphController extends Controller
{
    private $graphRepository;

    public function __construct(GraphRepositoryInterface $graphRepository)
    {
        $this->graphRepository = $graphRepository;
    }
    
    //
    public function store(StoreGraph $request)
    {
        $graph = $this->graphRepository->create($request->only('name', 'description'));
        if ($graph) {
            return response(['data' => new GraphResource($graph)], 201);
        }

        return response(['errorMessage' => 'Graph not created'], 500);
    }

    public function update(UpdateGraph $request, $id)
    {
        $graph = $this->graphRepository->find($id);
        $update = $this->graphRepository->update($graph, $request->only('name', 'description'));
        if ($update) {
            return response(['result' => 'Graph updated'], 200);
        }

        return response(['error' => 'Graph not updated'], 500);
    }

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

    public function getGraphs()
    {
        $graphs = $this->graphRepository->all();
        return response(['data' => GraphResource::collection($graphs)], 201);
    }

    public function getSingleGraph($id)
    {
        $graph = $this->graphRepository->find($id);
        if (!$graph) {
            return response(['error' => 'Graph not found'], 422);
        }
        return response(['data' => new SingleGraph($graph)], 201);
    }
}
