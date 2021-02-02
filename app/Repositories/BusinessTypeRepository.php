<?php

namespace App\Repositories;

use App\Models\BusinessType;
use  App\Repositories\BusinessTypeRepositoryInterface;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class BusinessTypeRepository implements BusinessTypeRepositoryInterface
{
    public function getBusinessTypes()
    {
        return BusinessType::all();
    }

    public function store($input)
    {
        try{
            BusinessType::create($input);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function getBusinessType($id)
    {
        return BusinessType::find($id);
    }
    public function update($input, $id)
    {
        try{
            BusinessType::find($id)->update($input);
            return true;
        } catch(\Exception $e){
           return $e;
        }
    }
    public function delete($id)
    {
        BusinessType::where('id', $id)->delete();
        return true;
    }
}
