<?php

namespace App\Repositories;

interface WorkPlaceRepositoryInterface
{
    public function getWorkPlaces();
    public function store($input);
    public function getWorkPlace($id);
    public function update($input, $id);
    public function delete($id);
    public function location();
}