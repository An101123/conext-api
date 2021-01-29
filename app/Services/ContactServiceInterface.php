<?php

namespace App\Services;

interface ContactServiceInterface
{
    public function getContacts();
    public function store($input);
    public function delete($id);
}