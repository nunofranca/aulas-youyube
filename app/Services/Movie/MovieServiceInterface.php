<?php
declare(strict_types=1);
namespace App\Services\Movie;

interface MovieServiceInterface
{
    public function getAll();

    public function create(array $attributes);
}
