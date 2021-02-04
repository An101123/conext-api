<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        return $this->userRepository = $userRepository;
    }

    public function getUsers($businessType, $expertise, $localConext)
    {
        return $this->userRepository->getUsers($businessType, $expertise, $localConext);
    }

    public function store($input)
    {
        return $this->userRepository->store($input);
    }
    public function getUser($id)
    {
        return $this->userRepository->getUser($id);
    }
    public function update($input, $id)
    {
        return $this->userRepository->update($input, $id);
    }
    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }
    public function getUserRandom()
    {
        return $this->userRepository->getUserRandom();
    }
    public function profile()
    {
        return $this->userRepository->profile(); 
        
    }
}