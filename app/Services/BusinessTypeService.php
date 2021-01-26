<?php

namespace App\Services;

use App\Repositories\BusinessTypeRepositoryInterface;

class BusinessTypeService implements BusinessTypeServiceInterface
{
    protected $businessTypeRepository;
    public function __construct(BusinessTypeRepositoryInterface $businessTypeRepository)
    {
        $this->businessTypeRepository = $businessTypeRepository;
    }
    public function getBusinessTypes()
    {
        return $this->businessTypeRepository->getBusinessTypes();
    }

    public function store($input)
    {
        return $this->businessTypeRepository->store($input);
        
    }

    public function getBusinessType($id)
    {
        return $this->businessTypeRepository->getBusinessType($id);
    }
    public function update($input, $id)
    {
        return $this->businessTypeRepository->update($input, $id);
    }

    public function delete($id) {
        return $this->businessTypeRepository->delete($id);
    }
}