<?php

namespace App\Services;

interface WorkPlaceServiceInterface{
    public function getWorkPlaces();
    public function store($input);
    public function getWorkPlace($id);
    public function update($input, $id);
    public function delete($id);
}