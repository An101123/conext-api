<?php

namespace App\Services;

use App\Repositories\VoucherRepositoryInterface;

class VoucherService implements VoucherServiceInterface{

    protected $voucherRepository;
    
    public function __construct(VoucherRepositoryInterface $voucherRepository)
    {
        return $this->voucherRepository = $voucherRepository;
    }
    public function getVouchers($type)
    {
        return $this->voucherRepository->getVouchers($type);
    }
    public function store($input)
    {
        return $this->voucherRepository->store($input);
        
    }
    public function getVoucher($id)
    {
        return $this->voucherRepository->getVoucher($id);
        
    }
    public function update($input, $id)
    {
        return $this->voucherRepository->update($input, $id);
        
    }
    public function delete($id)
    {
        return $this->voucherRepository->delete($id);
        
    }
}