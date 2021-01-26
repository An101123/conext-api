<?php

namespace App\Services;

use App\Repositories\LocalConextRepositoryInterface;

class LocalConextService implements LocalConextServiceInterface{

    protected $localConextRepository;
    
    public function __construct(LocalConextRepositoryInterface $localConextRepository)
    {
        return $this->localConextRepository = $localConextRepository;
    }
    public function getLocalConexts()
    {
        return $this->localConextRepository->getLocalConexts();
    }
    public function store($input)
    {
        return $this->localConextRepository->store($input);
        
    }
    public function getLocalConext($id)
    {
        return $this->localConextRepository->getLocalConext($id);
        
    }
    public function update($input, $id)
    {
        return $this->localConextRepository->update($input, $id);
        
    }
    public function delete($id)
    {
        return $this->localConextRepository->delete($id);
        
    }
}