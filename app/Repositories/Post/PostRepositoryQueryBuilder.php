<?php

namespace App\Repositories\Post;

use App\Models\User;
use \App\Repositories\BaseRepositoryQueryBuilder;

class PostRepositoryQueryBuilder extends BaseRepositoryQueryBuilder implements PostRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('posts');
    }

}
