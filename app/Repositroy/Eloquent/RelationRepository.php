<?php
namespace App\Repository\Eloquent;

use App\Models\Relation;
use App\Repository\RelationRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class RelationRepository extends BaseRepository implements RelationRepositoryInterface
{

    /**
     * GraphRepostiry constructor.
     *
     * @param Relation $model
     */
    public function __construct(Relation $model)
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
     * @param $parent_id
     * @param $child_id
     * @return Relation
     */
    public function store($parent_id,$child_id): Relation
    {
        $model = new $this->model;
        $model->parent_id = $parent_id;
        $model->child_id = $child_id;
        $model->save();
        return $model;
    }

    /**
     * @param $parent_id
     * @param $child_id
     * @return Relation
     */
    public function get($parent_id,$child_id): ?Relation
    {
        return $this->model->where(['parent_id' => $parent_id , 'child_id' => $child_id ])->first();
    }

}
