<?php

namespace App\Services;

use App\Repositories\HotNeedRepositoryInterface;

class HotNeedService implements HotNeedServiceInterface
{
    protected $categoryRepository;
    public function __construct(HotNeedRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function getHotNeeds($category, $search = '')
    {
        return $this->categoryRepository->getHotNeeds($category, $search);
    }

    public function getHotNeedByUser($user_id)
    {
        return $this->categoryRepository->getHotNeedByUser($user_id);
    }

    public function store($input)
    {
        return $this->categoryRepository->store($input);
        
    }

    public function getHotNeed($id)
    {
        return $this->categoryRepository->getHotNeed($id);
    }
    public function update($input, $id)
    {
        return $this->categoryRepository->update($input, $id);
    }

    public function delete($id) {
        return $this->categoryRepository->delete($id);
    }
}