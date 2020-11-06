<?php

namespace App\Http\Controllers;

use App\Repository\NodeRepositoryInterface;
use App\Repository\RelationRepositoryInterface;

class RelationController extends Controller
{
    //
    private $nodeRepository;
    private $relationRepository;

    public function __construct(NodeRepositoryInterface $nodeRepository, RelationRepositoryInterface $relationRepository)
    {
        $this->nodeRepository = $nodeRepository;
        $this->relationRepository = $relationRepository;
    }

    public function store($parentId, $childId)
    {
        $parentNode = $this->nodeRepository->find($parentId);
        $childNode = $this->nodeRepository->find($childId);
        if (!$parentNode || !$childNode ) {
            return response(['error' => 'Parent or child node invalid'], 422);
        }
        if ($parentNode->graph_id != $childNode->graph_id) {
            return response(['error' => 'Nodes doesn\'t related to the same graph'], 422);
        }

        $relation = $this->relationRepository->get($parentId, $childId);
        if ($relation) {
            return response(['error' => 'Relation exists'], 422);
        }

        $relation = $this->relationRepository->store($parentId, $childId);
        if ($relation) {
            return response(['result' => 'Relation created'], 201);
        }
        return response(['error' => 'Relation not created'], 500);
    }

    public function delete($parentId, $childId)
    {
        $relation = $this->relationRepository->get($parentId, $childId);
        if (!$relation) {
            return response(['error' => 'Relation exists'], 422);
        }
        $delete = $this->relationRepository->delete($relation);
        if ($delete) {
            return response(['result' => 'Relation deleted'], 200);
        }
        return response(['error' => 'Relation not deleted'], 500);
    }
}
