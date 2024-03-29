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
     *     summary="Get list of hot-needs",
     *     path="/api/hot-needs",
     *     @OA\Parameter(
     *       name="page",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\Parameter(
     *       name="category",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
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
     *                          "id": 1,
                                "topic": "Off road trails in/around Danang for bicycling",
                                "city": "Da Nang",
                                "category_id": 5,
                                "expected_deadline": "2020-05-31 00:00:00",
                                "brief_description": "I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.",
                                "full_description": "Hi folks,<br></br>I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.<br></br>We have many of them here in Chiang Mai, and I know they probably exists around Danang too, probably up around Thọ Quang, since I see a lot of trails up there on topo maps, but I cant find any information about trails that are suitable for a mountain bike when I google.<br></br>I really like off-road trails as opposed to paved roads, so I would appreciate any help/advice someone might be able to offer.<br></br>Thanks!",
                                "user_id": 1,
                                "created_at": null,
                                "updated_at": null,
                                "user": {
                                "id": 1,
                                "name": "Super Admin",
                                "avatar": "https://storage.googleapis.com/conext-develop/avatar1.png"
                                }
     *                      }
     *                 )
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="HotNeed not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     )
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
    /**
     * 
     * @OA\Get(
     *     tags={"Hot-needs"},
     *     summary="Get list of hot-needs",
     *     path="/api/my-hot-needs",
     *     @OA\Parameter(
     *       name="page",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\Parameter(
     *       name="category",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
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
     *                          "id": 1,
                                "topic": "Off road trails in/around Danang for bicycling",
                                "city": "Da Nang",
                                "category_id": 5,
                                "expected_deadline": "2020-05-31 00:00:00",
                                "brief_description": "I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.",
                                "full_description": "Hi folks,<br></br>I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.<br></br>We have many of them here in Chiang Mai, and I know they probably exists around Danang too, probably up around Thọ Quang, since I see a lot of trails up there on topo maps, but I cant find any information about trails that are suitable for a mountain bike when I google.<br></br>I really like off-road trails as opposed to paved roads, so I would appreciate any help/advice someone might be able to offer.<br></br>Thanks!",
                                "user_id": 1,
                                "created_at": null,
                                "updated_at": null,
                                "user": {
                                "id": 1,
                                "name": "Super Admin",
                                "avatar": "https://storage.googleapis.com/conext-develop/avatar1.png"
                                }
     *                      }
     *                 )
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="HotNeed not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */
    public function index(Request $request)
    {
        $category = $request->category;
        $search = $request->search;
        return $this->hotNeedService->getHotNeeds($category,  $search);
    }
    
    /**
     * 
     * @OA\Get(
     *     tags={"Hot-needs"},
     *     summary="Get list of hot-needs",
     *     path="/api/hot-needs/{id}",
     *     @OA\Parameter(
     *       name="id",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\Parameter(
     *       name="page",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\Parameter(
     *       name="category",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
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
     *                          "id": 1,
                                "topic": "Off road trails in/around Danang for bicycling",
                                "city": "Da Nang",
                                "category_id": 5,
                                "expected_deadline": "2020-05-31 00:00:00",
                                "brief_description": "I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.",
                                "full_description": "Hi folks,<br></br>I am planning to move to Danang from Thailand and am trying to figure out where I can find off-road cycling trails around Danang to ride my mountain bike.<br></br>We have many of them here in Chiang Mai, and I know they probably exists around Danang too, probably up around Thọ Quang, since I see a lot of trails up there on topo maps, but I cant find any information about trails that are suitable for a mountain bike when I google.<br></br>I really like off-road trails as opposed to paved roads, so I would appreciate any help/advice someone might be able to offer.<br></br>Thanks!",
                                "user_id": 1,
                                "created_at": null,
                                "updated_at": null,
                                "user": {
                                "id": 1,
                                "name": "Super Admin",
                                "avatar": "https://storage.googleapis.com/conext-develop/avatar1.png"
                                }
     *                      }
     *                 )
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="HotNeed not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     )
     * )
     */
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
     *     path="/api/hot-needs",
     *     summary="Adds a new hot-needs",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="topic",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="city",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="category_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="expected_deadline",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="brief_description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="full_description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="user_id",
     *                     type="integer"
     *                 ),
     *                 example={
     *                      "topic": "Hot Need 1", 
     *                      "city": "Da Nang",
     *                      "category_id": 5,
     *                      "expected_deadline": "2020-05-31",
     *                      "brief_description": "hahah",
     *                      "full_description": "hihihi",
     *                      "user_id" : 1 
     *                  }
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
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="HotNeed not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
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
    /**
     * @OA\Put(
     *     path="/api/hot-needs/{id}",
     *     tags={"Hot-needs"},
     *     summary="Update an existing hot-needs",
     *     description="",
     *     @OA\Parameter(
     *       name="id",
     *       in="path",
     *       required=true,
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         description="Hot-needs object that needs to be added to the store",
     *         @OA\MediaType(
     *            mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="topic",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="city",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="category_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="expected_deadline",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="brief_description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="full_description",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="user_id",
     *                     type="integer"
     *                 ),
     *                 example={
     *                      "topic": "Hot Need 1", 
     *                      "city": "Da Nang",
     *                      "category_id": 5,
     *                      "expected_deadline": "2020-05-31",
     *                      "brief_description": "hahah",
     *                      "full_description": "hihihi",
     *                      "user_id" : 1 
     *                  }
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="HotNeed not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
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
    /**
     * @OA\Delete(path="/api/hot-needs/{id}",
     *   tags={"Hot-needs"},
     *   summary="Delete hot-needs",
     *   description="This can only be done by the logged in user.",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="The hot-needs that needs to be deleted",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="HotNeed not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */
    public function destroy($id)
    {
        return $this->hotNeedService->delete($id);
    }
}
