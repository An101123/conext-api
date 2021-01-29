<?php

namespace App\Http\Controllers;

use App\Services\WorkPlaceServiceInterface;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class WorkPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $workPlaceService;
    
    public function __construct(WorkPlaceServiceInterface $workPlaceService)
    {
        $this->workPlaceService = $workPlaceService;
    }
    public function index(Request $request)
    {
        $location = $request->location;
        return $this->workPlaceService->getWorkPlaces($location);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        return $this->workPlaceService->store($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->workPlaceService->getWorkPlace($id);
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
        return $this->workPlaceService->update($input, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->workPlaceService->delete($id);
    }
}
