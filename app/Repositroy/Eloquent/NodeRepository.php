<?php
namespace App\Repository\Eloquent;

use App\Models\Node;
use App\Repository\NodeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class NodeRepository extends BaseRepository implements NodeRepositoryInterface
{

    /**
     * GraphRepostiry constructor.
     *
     * @param Node $model
     */
    public function __construct(Node $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param $graphId
     * @return Node
     */
    public function store($graphId): Node
    {
        $model = new $this->model;
        $model->graph_id = $graphId;
        $model->save();
        return $model;
    }

}
