<?php
declare(strict_types=1);

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function getAll();

    public function create(array $attributes);
}
