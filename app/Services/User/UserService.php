<?php
declare(strict_types=1);

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function create(array $attributes)
    {
        $this->userRepository->create($attributes);
    }
}
