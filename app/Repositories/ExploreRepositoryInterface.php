<?php

namespace App\Repositories;

interface ExploreRepositoryInterface
{
    public function getExplores();
    public function store($input);
    public function getExplore($id);
    public function update($input, $id);
    public function delete($id);
}