<?php

namespace App\Services;

interface WorkPlaceServiceInterface
{
    public function getWorkPlaces($location);
    public function store($input);
    public function getWorkPlace($id);
    public function update($input, $id);
    public function delete($id);
}
