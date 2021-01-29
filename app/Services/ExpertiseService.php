<?php

namespace App\Services;

use App\Repositories\ExpertiseRepositoryInterface;

class ExpertiseService implements ExpertiseServiceInterface
{

    protected $expertiseRepository;
    
    public function __construct(ExpertiseRepositoryInterface $expertiseRepository)
    {
        return $this->expertiseRepository = $expertiseRepository;
    }
    public function getExpertises()
    {
        return $this->expertiseRepository->getExpertises();
    }
    public function store($input)
    {
        return $this->expertiseRepository->store($input);
    }
    public function getExpertise($id)
    {
        return $this->expertiseRepository->getExpertise($id);
    }
    public function update($input, $id)
    {
        return $this->expertiseRepository->update($input, $id);
    }
    public function delete($id)
    {
        return $this->expertiseRepository->delete($id);
    }
}
