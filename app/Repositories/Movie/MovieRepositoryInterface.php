<?php
declare(strict_types=1);

namespace App\Repositories\Movie;

interface MovieRepositoryInterface
{
    public function getAll();

    public function create(array $attributes);
}
