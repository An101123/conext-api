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
