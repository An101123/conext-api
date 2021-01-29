<?php

namespace App\Repositories;

interface ContactRepositoryInterface
{
    public function getContacts();
    public function store($input);
    public function delete($id);
}