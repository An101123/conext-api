<?php

namespace App\Services;

interface ExpertiseServiceInterface
{
    public function getExpertises();
    public function store($input);
    public function getExpertise($id);
    public function update($input, $id);
    public function delete($id);
}