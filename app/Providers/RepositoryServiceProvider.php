<?php

namespace App\Providers;

use App\Repositories\Movie\MovieRepositoryEloquent;
use App\Repositories\Movie\MovieRepositoryInterface;
use App\Repositories\Post\PostRepositoryEloquent;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\Post\PostRepositoryQueryBuilder;
use App\Repositories\User\UserRepositoryEloquent;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Movie\MovieService;
use App\Services\Movie\MovieServiceInterface;
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
        $this->app->bind(UserRepositoryInterface::class, UserRepositoryEloquent::class);
        $this->app->singleton(PostRepositoryInterface::class, PostRepositoryEloquent::class);
        $this->app->bind(MovieRepositoryInterface::class, MovieRepositoryEloquent::class);
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
