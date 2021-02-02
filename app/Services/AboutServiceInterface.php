<?php

namespace App\Services;

interface AboutServiceInterface
{
    public function getAbouts();
    public function store($input);
    public function getAbout($id);
    public function update($input, $id);
    public function delete($id);
}
