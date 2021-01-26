<?php 

namespace App\Repositories;

interface BusinessTypeRepositoryInterface
{
    public function getBusinessTypes();
    public function store($input);
    public function getBusinessType($id);
    public function update($input, $id);
    public function delete($id);
}
