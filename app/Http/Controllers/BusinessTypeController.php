<?php

namespace App\Http\Controllers;

// use App\Models\BusinessType;
// use App\Services\BusinessTypeService;
use App\Services\BusinessTypeServiceInterface;
use Illuminate\Http\Request;

class BusinessTypeController extends Controller
{
    /**
     * @OA\Info(title="CONEXT API", version="0.1")
     *
     * @OA\Get(
     *     tags={"Business"},
     *     summary="Get list of contact",
     *     path="/api/business-types",
     *     @OA\Response(response="200", description="Display a listing of businesses.")
     * )
     * 
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $businessTypeService;

    public function __construct(BusinessTypeServiceInterface $businessTypeService)
    {
        $this->businessTypeService = $businessTypeService;
    }
    public function index()
    {
        return $this->businessTypeService->getBusinessTypes();
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
        return $this->businessTypeService->store($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->businessTypeService->getBusinessType($id);
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
        return $this->businessTypeService->update($input, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->businessTypeService->delete($id);
    }
}
