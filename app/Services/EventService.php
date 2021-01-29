<?php

namespace App\Services;

use App\Repositories\EventRepositoryInterface;

class EventService implements EventServiceInterface
{

    protected $eventRepository;
    
    public function __construct(EventRepositoryInterface $eventRepository)
    {
        return $this->eventRepository = $eventRepository;
    }
    public function getEvents($filter)
    {
        return $this->eventRepository->getEvents($filter);
    }
    public function store($input)
    {
        return $this->eventRepository->store($input);
    }
    public function getEvent($id)
    {
        return $this->eventRepository->getEvent($id);
    }
    public function update($input, $id)
    {
        return $this->eventRepository->update($input, $id);
    }
    public function delete($id)
    {
        return $this->eventRepository->delete($id);
    }
}
