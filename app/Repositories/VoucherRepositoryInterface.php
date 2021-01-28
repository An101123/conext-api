<?php

namespace App\Repositories;

interface VoucherRepositoryInterface{
    public function getVouchers($type);
    public function store($input);
    public function getVoucher($id);
    public function update($input, $id);
    public function delete($id);
}