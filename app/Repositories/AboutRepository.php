<?php

namespace App\Repositories;

use App\Models\About;
use  App\Repositories\AboutRepositoryInterface;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class AboutRepository implements AboutRepositoryInterface
{
    public function getAbouts()
    {
        return About::all();
    }

    public function store($input)
    {
        try{
            $data = array(
                'content' => $input['content']
            );
            About::create($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function getAbout($id)
    {
        return About::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'content' => $input['content']
            );
            About::find($id)->update($data);
            return true;
        } catch(\Exception $e){
           return $e;
        }
    }
    public function delete($id)
    {
        About::where('id', $id)->delete();
        return true;
    }
}
