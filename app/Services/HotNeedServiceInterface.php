<?php

namespace App\Services;

interface HotNeedServiceInterface
{
    public function getHotNeeds($category, $user_id);
    public function store($input);
    public function getHotNeed($id);
    public function update($input, $id);
    public function delete($id);
}