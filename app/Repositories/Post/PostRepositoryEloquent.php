<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\BaseRepositoryEloquent;

class PostRepositoryEloquent extends BaseRepositoryEloquent implements PostRepositoryInterface
{

    public function __construct(Post $post)
    {
        parent::__construct($post);
    }

}
