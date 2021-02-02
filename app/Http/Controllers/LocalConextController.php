<?php

namespace App\Http\Controllers;

use App\Services\LocalConextServiceInterface;
use Illuminate\Http\Request;

class LocalConextController extends Controller
{
    /**
     *
     * @OA\Get(
     *     tags={"local-conexts"},
     *     path="/api/local-conexts",
     *     @OA\Response(response="200", description="Display a listing of local-conexts.")
     * )
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $localConextService;

    public function __construct(LocalConextServiceInterface $localConextService)
    {
        $this->localConextService = $localConextService;
    }
    public function index()
    {
        return $this->localConextService->getLocalConexts();
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
        return $this->localConextService->store($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->localConextService->getLocalConext($id);
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
        return $this->localConextService->update($input, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->localConextService->delete($id);
    }
}
