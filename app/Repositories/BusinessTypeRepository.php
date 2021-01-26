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
            $data = array(
                'name' => $input['name']
            );
            BusinessType::create($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
    }
    
    public function getBusinessType($id)
    {
        return BusinessType::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'name' => $input['name']
            );
            BusinessType::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return false;   
        }
    }
    public function delete($id)
    {
        try{
            if (!empty($id)){
                BusinessType::where('id', $id)->delete();
                return true;
            }
        } catch(\Exception $e) {
            return false;
        }
    }
}
