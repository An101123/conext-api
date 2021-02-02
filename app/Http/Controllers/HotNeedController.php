<?php

namespace App\Http\Controllers;

// use App\Models\HotNeed;
// use App\Services\HotNeedService;
use App\Services\HotNeedServiceInterface;
use Illuminate\Http\Request;

class HotNeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $hotNeedService;
    
    public function __construct(HotNeedServiceInterface $hotNeedService)
    {
        $this->hotNeedService = $hotNeedService;
    }
    public function index($category, $user_id)
    {
        return $this->hotNeedService->getHotNeeds($category, $user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('hahaha');
        $input = $request->all();
        // var_dump($input);
        return $this->hotNeedService->store($input);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->hotNeedService->getHotNeed($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        return $this->hotNeedService->update($input, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->hotNeedService->delete($id);
    }
}
