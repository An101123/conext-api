<?php

namespace App\Services;

interface BusinessTypeServiceInterface
{
    public function getBusinessTypes();
    public function store($input);
    public function getBusinessType($id);
    public function update($input, $id);
    public function delete($id);
}
