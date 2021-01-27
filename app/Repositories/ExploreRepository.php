<?php

namespace App\Repositories;

use App\Models\Explore;
use Exception;

class ExploreRepository implements ExploreRepositoryInterface{
    public function getExplores()
    {
        return Explore::all();
    }

    public function store($input)
    {
        try{
            $data = array(
                'title' => $input['title'],
                'image' => $input['image']
            );
            Explore::create($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
        
    }

    public function getExplore($id)
    {
        return Explore::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'title' => $input['title'],
                'image' => $input['image']
            );
            Explore::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
    }
    public function delete($id)
    {
            Explore::where('id', $id)->delete($id);
            return true;
    }
}