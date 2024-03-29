<?php

namespace App\Repositories;

use App\Models\HotNeed;
use  App\Repositories\HotNeedRepositoryInterface;
use Carbon\Carbon;
use DateTime;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class HotNeedRepository implements HotNeedRepositoryInterface
{
    public function getHotNeeds($category, $search='')
    {
        $hotNeeds = HotNeed::with(['user', 'category'])
        ->when($category, function($data) use($category){
            $data->where('category_id', $category);
            
        })
        ->where('topic', 'LIKE', '%' . $search . '%')
        ->paginate(6);
        return $hotNeeds;
    }

    public function searchHotNeed(Request $request) {
        $searchHotNeed = HotNeed::where([
            ['topic', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->item)) {
                    $query->orWhere('topic', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
        ->orderBy('id', 'desc')
        ->paginate(6);
        return $searchHotNeed;
    }

    public function getHotNeedByUser($user_id)
    {   
        return HotNeed::where('user_id', $user_id)->paginate(6);
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
            HotNeed::create($data);
            return response()->json([
                'message' => "Hot need type created successfully"
            ]);
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function getHotNeed($id)
    {
        if (!empty(HotNeed::find($id)))
        {
            $result= HotNeed::find($id);
            $user = $result->user()->get();
            $result['user'] = $user;
            return $result;
        }
        else
        {
            return response()->json([
                'message' => 'User not found'
            ]);
        }
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
            return response()->json([
                'message' => "Hot need updated successfully"
            ]);
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
