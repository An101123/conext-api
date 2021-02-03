<?php

namespace App\Http\Controllers;

use App\Models\About;
// use App\Services\AboutServiceInterface;
// use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="CLONE CONEXT",
 *      description="Clone conext document api",
 *      @OA\Contact(
 *          email="nguyentichduy10a15cmg@gmail.com"
 *      ),
 * )
 */

class AboutController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // protected $aboutService;

    // public function __construct(AboutServiceInterface $aboutService)
    // {
    //     $this->aboutService = $aboutService;
    // }

    /**
     * 
     * @OA\Get(
     *     tags={"About"},
     *     summary="Get list of about",
     *     path="/api/abouts",
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
     *                          "code": 200,
                                "data":{
                                    "id": 1,
                                    "content": "<p>In the end of 2017, founders of ST United company decided to invest in coworking space business after long time focusing mainly on offshore software development industry.</p><p>Later, from April 2018, there were 2 new coworking spaces in Danang city , IoT Space and Nomad Space. It has been a new amazing journey for the founders and they figured out that behind this low margin business, coworking space unlike any other office rental facilities, it has a philosophy and contains core values including collaboration, openness, sustainability, accessibility, and community, being a key propellant to why coworking space has become a global trend in business.</p><p>And the idea of Conext is come up with above core values.</p><p>Conext offers a vibrant atmosphere where you can meet others, find partner/cofounder, network, schedule meetups, and most importantly accelerate your works through collaboration with local digital community in Vietnam.</p><p>At Conext, you could connect with startups, digital nomads, freelancers or even investor, incubators…who’s belonging to the community from massive of coworking spaces in the busiest cities in Vietnam.</p><p>Will you join our community, and together we continue writing our story ?</p>",
                                    "created_at": null,
                                    "updated_at": null
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
     *         description="About not found",
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
    public function index()
    {
        // return $this->aboutService->getAbouts();
        $data = About::all();
        return response()->json([
            'code' => 200,
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($input)
    {
        // $input = $request->all();
        // return $this->aboutService->store($input);
        try {
            $data = array(
                'content' => $input['content']
            );
            About::create($data);
            return true;
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $this->aboutService->getAbout($id);
        return About::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($input, $id)
    {
        // $input = $request->all();
        // return $this->aboutService->update($input, $id);
        try {
            $data = array(
                'content' => $input['content']
            );
            About::find($id)->update($data);
            return true;
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $this->aboutService->delete($id);
        About::where('id', $id)->delete();
        return true;
    }
}
