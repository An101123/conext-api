<?php

namespace App\Repositories;

interface HotNeedRepositoryInterface
{
    public function getHotNeeds($category, $user_id);
    public function store($input);
    public function getHotNeed($id);
    public function update($input, $id);
    public function delete($id);
}