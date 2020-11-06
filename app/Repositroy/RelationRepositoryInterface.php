<?php
namespace App\Repository;

use Illuminate\Support\Collection;
use App\Models\Relation;

interface RelationRepositoryInterface extends EloquentRepositoryInterface
{
   public function all(): Collection;
   public function store($parent_id,$child_id): Relation;
   public function get($parent_id,$child_id): ?Relation;
}