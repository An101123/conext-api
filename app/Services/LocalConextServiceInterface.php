<?php

namespace App\Services;

interface LocalConextServiceInterface
{
    public function getLocalConexts();
    public function store($input);
    public function getLocalConext($id);
    public function update($input, $id);
    public function delete($id);
}