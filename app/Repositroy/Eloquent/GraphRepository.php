<?php
namespace App\Repository\Eloquent;

use App\Models\Graph;
use App\Repository\GraphRepositoryInterface;
use Illuminate\Support\Collection;

class GraphRepository extends BaseRepository implements GraphRepositoryInterface
{

    /**
     * GraphRepostiry constructor.
     *
     * @param Graph $model
     */
    public function __construct(Graph $model)
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
     * @return Graph
     */
    public function update(Graph $graph, $data): bool
    {
        return $graph->update($data);
    }

    /**
     * @return bool
     */
    public function deleteEmptyGraph(): bool
    {
        return $this->model->doesntHave('nodes')->delete();
    }

    /**
     * @return int
     */
    public function countNodes($graph): int
    {
        return $graph->nodes->count();
    }

    /**
     * @return int
     */
    public function countRelations($graph): int
    {
        return $graph->nodes()->rightJoin('relations' , 'nodes.id' ,'=' , 'relations.parent_id')->count();
    }
}
