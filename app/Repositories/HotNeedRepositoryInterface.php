<?php

namespace App\Repositories;

use GuzzleHttp\Psr7\Request;

interface HotNeedRepositoryInterface
{
    public function getHotNeeds($category);
    public function store($input);
    public function getHotNeed($id);
    public function update($input, $id);
    public function delete($id);
    public function getHotNeedByUser($user_id);
}