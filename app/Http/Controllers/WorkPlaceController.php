<?php

namespace App\Http\Controllers;

use App\Services\WorkPlaceServiceInterface;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class WorkPlaceController extends Controller
{
    /**
     *
     * @OA\Get(
     *     tags={"Work-places"},
     *     path="/api/work-places",
     *     @OA\Response(response="200", description="Display a listing of work-places.")
     * )
     */
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
    /**
     * @OA\Post(
     *     tags={"Work-places"},
     *     path="/api/admin/work-places",
     *     summary="Adds a new work-places",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="price",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="address",
     *                     type="string"
     *                 ),
     *                 example={"name": "name workplace nha", "price": 12000, "address nha"}
     *             )
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *                     @OA\Property(
     *                         property="errcode",
     *                         type="integer",
     *                         description="The response code"
     *                     ),
     *                     @OA\Property(
     *                         property="errmsg",
     *                         type="string",
     *                         description="The response message"
     *                     ),
     *                     @OA\Property(
     *                         property="data",
     *                         type="array",
     *                         description="The response data",
     *                         @OA\Items
     *                     ),
     *                     example={
     *                         "errcode": 1,
     *                         "errmsg": "ok",
     *                         "data": {}
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="OH no Oh no no no no",
     *      )
     * )
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
    /**
     * @OA\Delete(path="api/admin/work-places/{id}",
     *   tags={"Work-places"},
     *   summary="Delete work-places",
     *   description="This can only be done by the logged in user.",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="The work-places that needs to be deleted",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="Id not found")
     * )
     */
    public function destroy($id)
    {
        return $this->workPlaceService->delete($id);
    }

    public function location()
    {
        return $this->workPlaceService->location();
    }
}
