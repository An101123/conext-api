<?php

namespace App\Http\Controllers;

// use App\Models\HotNeed;
// use App\Services\HotNeedService;
use App\Services\HotNeedServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotNeedController extends Controller
{
    /**
     *
     * @OA\Get(
     *     tags={"Hot-needs"},
     *     path="/api/hot-needs",
     *     @OA\Response(response="200", description="Display a listing of hot-needs.")
     * )
     */
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
    public function index(Request $request)
    {
        $category = $request->category;
        return $this->hotNeedService->getHotNeeds($category);
    }
    public function getHotNeedByUser()
    {
        $user_id = Auth::user()->id;
        return $this->hotNeedService->getHotNeedByUser($user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        /**
     * @OA\Post(
     *     tags={"Hot-needs"},
     *     path="/api/admin/hot-needs",
     *     summary="Adds a new hot-needs",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 example={"name": "name not need nha"}
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
