<?php

namespace App\Repositories;

use App\Models\LocalConext;

class LocalConextRepository implements LocalConextRepositoryInterface{
    public function getLocalConexts()
    {
        return LocalConext::all();
    }
    public function store($input)
    {
        try{
            $data = array(
                'name' => $input['name']
            );
            LocalConext::create($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
    }

    public function getLocalConext($id)
    {
        return LocalConext::find($id);
    }


    public function update($input, $id)
    {
        try{
            $data = array(
                'name' => $input['name']
            );
            LocalConext::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return false;   
        }
    }
    
    public function delete($id)
    {
        
        try{
            if (!empty($id)){
                LocalConext::where('id', $id)->delete();
                return true;
            }
        } catch(\Exception $e) {
            return false;
        }
    }
}