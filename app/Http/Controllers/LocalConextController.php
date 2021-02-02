<?php

namespace App\Http\Controllers;

use App\Services\LocalConextServiceInterface;
use Illuminate\Http\Request;

class LocalConextController extends Controller
{
    /**
     *
     * @OA\Get(
     *     tags={"Local-conexts"},
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
        /**
     * @OA\Post(
     *     tags={"Local-conexts"},
     *     path="/api/admin/local-conexts",
     *     summary="Adds a new local-conexts",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 example={"name": "name local conext nha"}
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
