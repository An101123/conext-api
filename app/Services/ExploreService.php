<?php

namespace App\Services;

use App\Repositories\ExploreRepositoryInterface;

class ExploreService implements ExploreServiceInterface{

    protected $exploreRepository;
    
    public function __construct(ExploreRepositoryInterface $exploreRepository)
    {
        return $this->exploreRepository = $exploreRepository;
    }
    public function getExplores()
    {
        return $this->exploreRepository->getExplores();
    }
    public function store($input)
    {
        return $this->exploreRepository->store($input);
        
    }
    public function getExplore($id)
    {
        return $this->exploreRepository->getExplore($id);
        
    }
    public function update($input, $id)
    {
        return $this->exploreRepository->update($input, $id);
        
    }
    public function delete($id)
    {
        return $this->exploreRepository->delete($id);
        
    }
}