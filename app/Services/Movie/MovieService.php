<?php

namespace App\Services\Movie;

use App\Repositories\Movie\MovieRepositoryInterface;

class MovieService implements MovieServiceInterface
{
    private MovieRepositoryInterface $movieRepository;
    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function getAll()
    {
        return $this->movieRepository->getAll();
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }
}
