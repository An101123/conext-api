<?php

namespace App\Http\Controllers;

use App\Models\About;
// use App\Services\AboutServiceInterface;
// use Illuminate\Http\Request;

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
     * @OA\Info(title="CONEXT API", version="0.3")
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
