<?php

namespace App\Providers;

use App\Repository\Eloquent\GraphRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\GraphRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\NodeRepository;
use App\Repository\Eloquent\RelationRepository;
use App\Repository\NodeRepositoryInterface;
use App\Repository\RelationRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(GraphRepositoryInterface::class, GraphRepository::class);
        $this->app->bind(NodeRepositoryInterface::class, NodeRepository::class);
        $this->app->bind(RelationRepositoryInterface::class, RelationRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
