<?php

namespace App\Services;

interface UserServiceInterface{
    public function getUsers($businessType, $expertise);
    public function store($input);
    public function getUser($id);
    public function update($input, $id);
    public function delete($id);
    public function getUserRandom();
}