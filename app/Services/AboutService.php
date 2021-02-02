<?php

namespace App\Services;

use App\Repositories\AboutRepositoryInterface;

class AboutService implements AboutServiceInterface
{
    protected $aboutRepository;
    public function __construct(AboutRepositoryInterface $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }
    public function getAbouts()
    {
        return $this->aboutRepository->getAbouts();
    }

    public function store($input)
    {
        return $this->aboutRepository->store($input);
        
    }

    public function getAbout($id)
    {
        return $this->aboutRepository->getAbout($id);
    }
    public function update($input, $id)
    {
        return $this->aboutRepository->update($input, $id);
    }

    public function delete($id) {
        return $this->aboutRepository->delete($id);
    }
}