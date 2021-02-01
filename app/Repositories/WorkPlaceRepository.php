<?php

namespace App\Repositories;

use App\Models\WorkPlace;
use Carbon\Carbon;
use Exception;

class WorkPlaceRepository implements WorkPlaceRepositoryInterface{
    public function getWorkPlaces()
    {
        
        return WorkPlace::all();
    }   

    public function store($input)
    {
        try{
            $data = array(
                'name' => $input['name'],
                'image' => $input['image'],
                'price' => $input['price'],
                'address' => $input['address'],
            );
            WorkPlace::create($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
    }

    public function getWorkPlace($id)
    {
        return WorkPlace::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'name' => $input['name'],
                'image' => $input['image'],
                'price' => $input['price'],
                'address' => $input['address'],
            );
            WorkPlace::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
            WorkPlace::where('id', $id)->delete($id);
            return true;
    }
    public function location()
    {
        return WorkPlace::all('id', 'address');
    }
}