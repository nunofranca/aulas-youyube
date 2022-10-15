<?php

namespace App\Repositories\Movie;
use App\Models\Movie;
use \App\Repositories\BaseRepositoryEloquent;

class MovieRepositoryEloquent extends BaseRepositoryEloquent implements MovieRepositoryInterface
{
    public function __construct(Movie $movie)
    {
        parent::__construct($movie);
    }
}
