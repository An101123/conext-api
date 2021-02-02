<?php

namespace App\Repositories;

use App\Models\WorkPlace;
use Carbon\Carbon;
use Exception;

class WorkPlaceRepository implements WorkPlaceRepositoryInterface
{
    public function getWorkPlaces($location)
    {
            return WorkPlace::all();
    }   

    public function store($input)
    {
        try{
            WorkPlace::create($input);
            return response()->json([
                'message' => "Workplace created successfully"
            ]);
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
            WorkPlace::find($id)->update($input);
            return response()->json([
                'message' => "Workplace updated successfully"
            ]);
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