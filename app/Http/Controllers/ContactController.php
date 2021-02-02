<?php

namespace App\Http\Controllers;

// use App\Models\Contact;
// use App\Services\ContactService;

use App\Http\Requests\ContactRequest;
use App\Services\ContactServiceInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @OA\Info(title="CONEXT API", version="0.1")
     *
     * @OA\Get(
     *     tags={"Contact"},
     *     summary="Get list of contact",
     *     path="/api/contacts",
     *     @OA\Response(response="200", description="Display a listing of contact.")
     * )
     * 
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }
    public function index()
    {
        return $this->contactService->getContacts();
    }
    /**
     * @OA\Post(
     *   path="api/contacts",
     *   summary="Create A contact",
     *   operationId="store",
     *   tags={"Contact"},
     *   security={
     *       {"ApiKeyAuth": {}}
     *   },
     *   @OA\Parameter(
     *      name="email",
     *      in="formData",
     *      required=true,
     *   ),
     *   @OA\Parameter(
     *       name="name",
     *       in="formData",
     *       required=true,
     *       type="string"
     *   ),
     *   @OA\Parameter(
     *       name="phone_number",
     *       in="formData",
     *       type="string"
     *   ),
     *   @OA\Parameter(
     *       name="subject",
     *       in="formData",
     *       type="string"
     *   ),     
     *   @OA\Parameter(
     *       name="content",
     *       in="formData",
     *       type="string"
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error")
     * )
     *
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $input = $request->all();
        return $this->contactService->store($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        return $this->contactService->delete($id);
    }
}
