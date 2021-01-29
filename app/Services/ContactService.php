<?php

namespace App\Services;

use App\Repositories\ContactRepositoryInterface;

class ContactService implements ContactServiceInterface
{
    protected $contactRepository;
    
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function getContacts()
    {
        return $this->contactRepository->getContacts();
    }

    public function store($input)
    {
        return $this->contactRepository->store($input);
        
    }

    public function delete($id) {
        return $this->contactRepository->delete($id);
    }
}