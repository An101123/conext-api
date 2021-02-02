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
    public function getHotNeeds()
    {
        return $this->categoryRepository->getHotNeeds();
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