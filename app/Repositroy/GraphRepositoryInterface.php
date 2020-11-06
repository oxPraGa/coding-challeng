<?php
namespace App\Repository;

use App\Models\Graph;
use Illuminate\Support\Collection;

interface GraphRepositoryInterface extends EloquentRepositoryInterface
{
   public function all(): Collection;
   public function update(Graph $graph,$data): bool;
   public function deleteEmptyGraph(): bool;
   public function countNodes(Graph $graph): int; 
   public function countRelations(Graph $graph): int;
}