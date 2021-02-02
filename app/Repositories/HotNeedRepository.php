<?php

namespace App\Repositories;

use App\Models\HotNeed;
use  App\Repositories\HotNeedRepositoryInterface;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class HotNeedRepository implements HotNeedRepositoryInterface
{
    public function getHotNeeds($category, $user_id)
    {
        if(!empty($category)){
            return HotNeed::where('category_id', $category)->limit(6)->get();
        }
        return HotNeed::all();
        
    }

    public function store($input)
    {
        try{
            $data = array(
                'topic' => $input['topic'],
                'city' => $input['city'],
                'category_id' => $input['category_id'],
                'expected_deadline' => $input['expected_deadline'],
                'brief_description' => $input['brief_description'],
                'full_description' => $input['full_description'],
                'user_id' => Auth::user()->id
            );
            // dd($data);
            HotNeed::create($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function getHotNeed($id)
    {
        return HotNeed::find($id);
    }
    public function update($input, $id)
    {
        try{
            $data = array(
                'topic' => $input['topic'],
                'city' => $input['city'],
                'category_id' => $input['category_id'],
                'expected_deadline' => $input['expected_deadline'],
                'brief_description' => $input['brief_description'],
                'full_description' => $input['full_description'],
                'user_id' => Auth::user()->id
            );
            HotNeed::find($id)->update($data);
            return true;
        } catch(\Exception $e){
           return $e;
        }
    }
    public function delete($id)
    {
        HotNeed::where('id', $id)->delete();
        return true;
    }
}
