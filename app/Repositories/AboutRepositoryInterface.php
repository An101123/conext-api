<?php 

namespace App\Repositories;

interface AboutRepositoryInterface
{
    public function getAbouts();
    public function store($input);
    public function getAbout($id);
    public function update($input, $id);
    public function delete($id);
}
