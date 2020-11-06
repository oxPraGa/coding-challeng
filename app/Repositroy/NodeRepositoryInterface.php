<?php
namespace App\Repository;

use Illuminate\Support\Collection;
use App\Models\Node;

interface NodeRepositoryInterface extends EloquentRepositoryInterface
{
   public function all(): Collection;
   public function store($graphId): Node;
}