<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     *
     * @OA\Get(
     *     tags={"Users"},
     *     path="/api/users",
     *     @OA\Parameter(
     *       name="businessType",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\Parameter(
     *       name="expertise",
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
     *         description="Users not found",
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
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        return $this->userService = $userService;
    }
    /**
     *
     * @OA\Get(
     *     tags={"Users"},
     *     path="/api/admin/users",
     *     @OA\Parameter(
     *       name="businessType",
     *       in="query",
     *       @OA\Schema(
     *           type="integer"
     *       )
     *     ),
     *     @OA\Parameter(
     *       name="expertise",
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
     *         description="Users not found",
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
        $businessType = $request->businessType;
        $expertise = $request->expertise;
        $localConext = $request->localConext;
        return $this->userService->getUsers($businessType, $expertise, $localConext);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Post(
     *     tags={"Users"},
     *     path="/api/resigter",
     *     summary="Adds a new users",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="address",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="gender",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="introduce",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="workplace",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="business_type_id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="avatar",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="expertise_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="local_conext_id",
     *                     type="string"
     *                 ),
     *                 example={"email": "email@gmail.com", "address": "address nha", "gender": 2, "introduce": "introduce nha",
     *                      "workplace": "workplace nha", "business_type_id": 1, "expertise_id": 1, "local_conext_id": 1,
     *                      "name": "name nha", "avatar": "avatar.png" , "password": "123456"                     
     *                 }
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
     *         description="Users not found",
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
     * )
     */
    /**
     * @OA\Post(
     *     tags={"Users"},
     *     path="/api/admin/users",
     *     summary="Adds a new users",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="address",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="gender",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="introduce",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="workplace",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="business_type_id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="avatar",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="expertise_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="local_conext_id",
     *                     type="string"
     *                 ),
     *                 example={"email": "email@gmail.com", "address": "address nha", "gender": 2, "introduce": "introduce nha",
     *                      "workplace": "workplace nha", "business_type_id": 1, "expertise_id": 1, "local_conext_id": 1,
     *                      "name": "name nha", "avatar": "avatar.png" , "password": "123456"                     
     *                 }
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
     *         description="Users not found",
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

    public function store(UserRequest $request)
    {
        $input = $request;
        return $this->userService->store($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->userService->getUser($id);
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
     *     path="/api/admin/users/{id}",
     *     tags={"Users"},
     *     summary="Update an existing users",
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
     *         description="Users object that needs to be added to the store",
     *         @OA\MediaType(
     *            mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="address",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="gender",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="introduce",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="workplace",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="business_type_id",
     *                     type="integer"
     *                 ),
     *                 @OA\Property(
     *                     property="expertise_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="local_conext_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 example={"email": "email@gmail.com", "address": "address nha", "gender": 2, "introduce": "introduce nha",
     *                      "workplace": "workplace nha", "business_type_id": 1, "expertise_id": 1,
     *                      "local_conext_id": 1, "password": "123456" , "name": "duy"                     
     *                 }
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
     *         description="Users not found",
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
    public function update(Request $request)
    {
        $input = $request;
        $id = Auth::user()->id;
        return $this->userService->update($input, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Delete(path="/api/admin/users/{id}",
     *   tags={"Users"},
     *   summary="Delete users",
     *   description="This can only be done by the logged in user.",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="The users that needs to be deleted",
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
     *         description="Users not found",
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
        return $this->userService->delete($id);
    }
    /**
     *
     * @OA\Get(
     *     tags={"Users"},
     *     path="/api/user-random",
     *     @OA\Response(response="200", description="Display a listing random of users."),
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
     *         description="Users not found",
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
     * )
     */
    public function getUserRandom()
    {
        return $this->userService->getUserRandom();
    }
    /**
     *
     * @OA\Get(
     *     tags={"Users"},
     *     path="/api/auth/profile",
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
     *         description="Users not found",
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
    public function profile()
    {
        return $this->userService->profile();
    }
}
