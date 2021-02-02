<?php

namespace App\Repositories;

interface CategoryRepositoryInterface
{
    public function getCategories();
    public function store($input);
    public function getCategory($id);
    public function update($input, $id);
    public function delete($id);
}