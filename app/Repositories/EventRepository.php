<?php

namespace App\Repositories;

use App\Models\Event;
use Carbon\Carbon;


class EventRepository implements EventRepositoryInterface
{  
    public function getEvents($active)
    {
        return Event::paginate(6);
    }
    public function store($input)
    {
        
        if($input['start_time'] >= (Carbon::now()) && $input['end_time'] > $input['start_time']){
        try{
            Event::create($input);
            return response()->json([
                'message' => "Event created successfully"
            ]);
        } catch(\Exception $e){
            return $e;response()->json([
                'message' => "Event created successfully"
            ]);
        }
        }
        else {
            return response()->json([
                'message' => 'Error'
            ], 400);
        }
    }
    public function update($input, $id)
    {
        if($input['end_time'] > $input['start_time']){
            try{
                Event::find($id)->update($input);
                return response()->json([
                    'message' => "Event updated successfully"
                ]);
            } catch(\Exception $e){
                return $e;
            }
            }
            else {
                return response()->json([
                    'message' => 'Error'
                ]);
            }
    }
    public function getEvent($id)
    {
        return Event::find($id);
    }
    public function delete($id)
    {
        return Event::where('id', $id)->delete($id);
    }
}