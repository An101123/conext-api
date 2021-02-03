<?php

namespace App\Repositories;

use App\Models\Contact;
use  App\Repositories\ContactRepositoryInterface;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class ContactRepository implements ContactRepositoryInterface
{
    public function getContacts()
    {
        return Contact::all();
    }

    public function store($input)
    {
        try{
            Contact::create($input);
            return response()->json([
                'message' => "Contact created successfully"
            ]);;
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function delete($id)
    {
        Contact::where('id', $id)->delete();
        return true;
    }
}
