<?php

namespace App\Services\Post;

use App\Repositories\Post\PostRepositoryInterface;

class PostService implements PostServiceInterface
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function create(array $attributes)
    {
        return $this->postRepository->create($attributes);
    }
}
