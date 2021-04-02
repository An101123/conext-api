<?php

namespace App\Repositories;

use App\Models\Expertise;
use Exception;

class ExpertiseRepository implements ExpertiseRepositoryInterface
{
    public function getExpertises()
    {
        return Expertise::all();
    }

    public function store($input)
    {
        try{
            Expertise::create($input);
            return response()->json([
                'message' => "Expertise created successfully"
            ]);
        } catch(\Exception $e){
            return $e;
        }
        
    }

    public function getExpertise($id)
    {
        return Expertise::find($id);
    }
    public function update($input, $id)
    {
        try{
            Expertise::find($id)->update($input);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
            Expertise::where('id', $id)->delete($id);
            return true;
    }
}