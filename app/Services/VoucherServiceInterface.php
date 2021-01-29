<?php

namespace App\Services;

interface VoucherServiceInterface
{
    public function getVouchers($type);
    public function store($input);
    public function getVoucher($id);
    public function update($input, $id);
    public function delete($id);
}