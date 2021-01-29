<?php

namespace App\Repositories;

use App\Models\Event;
use Carbon\Carbon;


class EventRepository implements EventRepositoryInterface
{  
    public function getEvents($filter)
    {
        if ($filter == 1){
            return Event::where('end_time', '>=', Carbon::now())->orderBy('start_time', 'asc')->paginate(6);
        } elseif($filter == 2){
            return Event::where('end_time', '<', Carbon::now())->orderBy('end_time', 'desc')->paginate(6);
        } else {
        return Event::paginate(6);
        }
    }
    public function store($input)
    {
        if($input['start_time'] >= (Carbon::now()) && $input['end_time'] > $input['start_time']){
        try{
            $data = array(
                'title' => $input['title'],
                'image' => $input['image'],
                'start_time' => $input['start_time'],
                'end_time' => $input['end_time'],
                'description' => $input['description']
            );
            Event::create($data);
            return true;
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
    public function update($input, $id)
    {
        if($input['start_time'] >= (Carbon::now()) && $input['end_time'] > $input['start_time']){
            try{
                $data = array(
                    'title' => $input['title'],
                    'image' => $input['image'],
                    'start_time' => $input['start_time'],
                    'end_time' => $input['end_time'],
                    'description' => $input['description']
                );
                Event::find($id)->update($data);
                return true;
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