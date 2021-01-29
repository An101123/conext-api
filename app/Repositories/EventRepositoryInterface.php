<?php

namespace App\Repositories;

interface EventRepositoryInterface
{
    public function getEvents($active);
    public function store($input);
    public function getEvent($id);
    public function update($input, $id);
    public function delete($id);
}