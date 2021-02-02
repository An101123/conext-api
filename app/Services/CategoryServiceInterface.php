<?php

namespace App\Services;

interface CategoryServiceInterface
{
    public function getCategories();
    public function store($input);
    public function getCategory($id);
    public function update($input, $id);
    public function delete($id);
}