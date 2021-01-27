<?php

namespace App\Repositories;

use App\Models\Expertise;
use Exception;

class ExpertiseRepository implements ExpertiseRepositoryInterface{
    public function getExpertises()
    {
        return Expertise::all();
    }

    public function store($input)
    {
        try{
            $data = array(
                'name' => $input['name']
            );
            Expertise::create($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
        
    }

    public function getExpertise($id)
    {
        return Expertise::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'name' => $input['name']
            );
            Expertise::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
    }
    public function delete($id)
    {
            Expertise::where('id', $id)->delete($id);
            return true;
    }
}