<?php

namespace App\Repositories;

use App\Models\Voucher;
use Carbon\Carbon;
use Exception;

class VoucherRepository implements VoucherRepositoryInterface{
    public function getVouchers($type)
    {
        if ($type == 1){
            return Voucher::where('type', $type)->get();
        } else{
            return Voucher::paginate(6);
        }
    }   

    public function store($input)
    {
        if($input['expired_on'] > (Carbon::now())){
        try{
            $data = array(
                'title' => $input['title'],
                'image' => $input['image'],
                'description' => $input['description'],
                'type' => $input['type'],
                'expired_on' => $input['expired_on'],
            );
            Voucher::create($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
        } else {
            return response()->json([
                'message' => 'Error'
            ]);
        }
        
    }

    public function getVoucher($id)
    {
        return Voucher::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'title' => $input['title'],
                'image' => $input['image'],
                'description' => $input['description'],
                'type' => $input['type'],
                'expired_on' => $input['expired_on'],
            );
            Voucher::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
            Voucher::where('id', $id)->delete($id);
            return true;
    }
}