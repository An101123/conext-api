<?php

namespace App\Services;

use App\Repositories\WorkPlaceRepositoryInterface;

class WorkPlaceService implements WorkPlaceServiceInterface{

    protected $workPlaceRepository;
    
    public function __construct(WorkPlaceRepositoryInterface $workPlaceRepository)
    {
        return $this->workPlaceRepository = $workPlaceRepository;
    }
    public function getWorkPlaces()
    {
        return $this->workPlaceRepository->getWorkPlaces();
    }
    public function store($input)
    {
        return $this->workPlaceRepository->store($input);
        
    }
    public function getWorkPlace($id)
    {
        return $this->workPlaceRepository->getWorkPlace($id);
        
    }
    public function update($input, $id)
    {
        return $this->workPlaceRepository->update($input, $id);
        
    }
    public function delete($id)
    {
        return $this->workPlaceRepository->delete($id);
    }
    public function location()
    {
        return $this->workPlaceRepository->location();
    }
}