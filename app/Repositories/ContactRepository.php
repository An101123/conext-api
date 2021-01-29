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
            $data = array(
                'name' => $input['name'],
                'email' => $input['email'],
                'phone_number' => $input['phone_number'],
                'subject' => $input['subject'],
                'content' => $input['content']
            );
            Contact::create($data);
            return true;
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
