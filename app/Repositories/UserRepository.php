<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers($businessType, $expertise)
    {
        if (!empty($businessType) && !empty($expertise)){
            return User::where('business_type_id', $businessType)
            ->where('expertise_id', $expertise)
            ->join('business_types', 'users.business_type_id','=', 'business_types.id')
            ->join('expertises', 'users.expertise_id', '=', 'expertises.id')
            ->select('users.*','business_types.name as business-type', 'expertises.name as expertise')->get();
        } elseif (!empty($expertise)){
            return User::where('expertise_id', $expertise)
            ->join('expertises', 'users.expertise_id', '=', 'expertises.id')
            ->select('users.*', 'expertises.name as expertise')->get();
        } elseif (!empty($businessType)){
            return User::where('business_type_id', $businessType)
            ->join('business_types', 'users.business_type_id','=', 'business_types.id')
            ->select('users.*','business_types.name as business-type')->get();
        } else{
            return User::all();
        }
    }

    public function store($input)
    {
        try{
            if($input->hasFile('avatar')){
                $file = $input->file('avatar');
                $name = $file->getClientOriginalName();
                $file->move('image/avatar', $name);
                $input->avatar= 'image/avatar/'.$name;
            }
            $data = array(
                'name' =>$input->name,
                'email' =>$input->email,
                'gender' =>$input->gender,
                'address' =>$input->address,
                'introduce' =>$input->introduce,
                'workplace' =>$input->workplace,
                'password' =>Hash::make($input->password),
                'avatar' => $input->avatar,
                'business_type_id' =>$input->business_type_id,
                'expertise_id' =>$input->expertise_id,
                'local_conext_id' =>$input->local_conext_id,
            );
        
            User::create($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }

    public function getUser($id)
    {
        return User::where('users.id', '=', $id)->join('business_types', 'users.business_type_id', '=', 'business_types.id')->join('expertises', 'users.expertise_id', '=', 'expertises.id')
        ->select('users.*', 'business_types.name as business-type', 'expertises.name as expertise')->get();
    }
    
    public function update($input, $id)
    {
        try{
            if($input->hasFile('avatar')){
                $file = $input->file('avatar');
                $name = $file->getClientOriginalName();
                $file->move('image/avatar', $name);
                $input->avatar = 'image/avatar/'.$name;
            };
            $data = array(
                'name' =>$input->name,
                // 'email' =>$input->email,s
                'gender' =>$input->gender,
                'address' =>$input->address,
                'introduce' =>$input->introduce,
                'workplace' =>$input->workplace,
                'password' =>Hash::make($input->password),
                'avatar' => $input->avatar,
                'business_type_id' =>$input->business_type_id,
                'expertise_id' =>$input->expertise_id,
                'local_conext_id' =>$input->local_conext_id,
            );
            User::find($id)->update($data);
            return true;
        } catch(\Exception $e){
            return $e;
        }
    }
    
    public function delete($id)
    {
        try{
            User::where('id',$id)->delete();
            return true;
        } catch(\Exception $e){
            return response()->json([
                'message'=>'error'
            ]);
        }
    }

    public function getUserRandom()
    {
        return User::inRandomOrder()->limit(9)->get();
    }
}
