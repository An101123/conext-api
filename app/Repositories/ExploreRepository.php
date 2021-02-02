<?php

namespace App\Repositories;

use App\Models\Explore;
use Exception;

class ExploreRepository implements ExploreRepositoryInterface
{
    public function getExplores()
    {
        return Explore::all();
    }

    public function store($input)
    {
        try{
            Explore::create($input);
            return response()->json([
                'message' => "Explore type created successfully"
            ]);
        } catch(\Exception $e){
            return $e;
        }
        
    }

    public function getExplore($id)
    {
        return Explore::find($id);
    }
    public function update($input, $id)
    {
        try{
            Explore::find($id)->update($input);
            return response()->json([
                'message' => "Explore type updated successfully"
            ]);
        } catch(\Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
            Explore::where('id', $id)->delete($id);
            return true;
    }
}