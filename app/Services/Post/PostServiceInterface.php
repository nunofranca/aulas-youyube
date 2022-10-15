<?php
declare(strict_types=1);

namespace App\Services\Post;

interface PostServiceInterface
{
    public function getAll();

    public function create(array $attributes);
}
