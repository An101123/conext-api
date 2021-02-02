<?php

namespace App\Services;

use App\Repositories\CategoryRepositoryInterface;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function getCategories()
    {
        return $this->categoryRepository->getCategories();
    }

    public function store($input)
    {
        return $this->categoryRepository->store($input);
        
    }

    public function getCategory($id)
    {
        return $this->categoryRepository->getCategory($id);
    }
    public function update($input, $id)
    {
        return $this->categoryRepository->update($input, $id);
    }

    public function delete($id) {
        return $this->categoryRepository->delete($id);
    }
}