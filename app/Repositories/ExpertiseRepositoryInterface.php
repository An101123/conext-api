<?php

namespace App\Repositories;

interface ExpertiseRepositoryInterface
{
    public function getExpertises();
    public function store($input);
    public function getExpertise($id);
    public function update($input, $id);
    public function delete($id);
}