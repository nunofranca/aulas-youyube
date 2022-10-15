<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepositoryEloquent;
use Illuminate\Database\Eloquent\Model;

class UserRepositoryEloquent extends BaseRepositoryEloquent implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
