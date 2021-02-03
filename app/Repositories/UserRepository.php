<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers($businessType, $expertise)
    {
        $users = User::with(['businessType', 'expertise'])
            ->when($businessType, function ($userByBusiness) use ($businessType) {
                $userByBusiness->where('business_type_id', $businessType);
            })
            ->when($expertise, function ($userByExpertise) use ($expertise) {
                $userByExpertise->where('expertise_id', $expertise);
            })
            ->get();
        return response($users, 200);
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
            return response()->json([
                'message' => "User created successfully"
            ]);
        } catch(\Exception $e){
            return $e;
        }
    }

    public function getUser($id)
    {
        $user =  User::with(['businessType', 'expertise'])->where('users.id', '=', $id)->get();
        return response($user, 200);
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
                'gender' =>$input->gender,
                'address' =>$input->address,
                'introduce' =>$input->introduce,
                'workplace' =>$input->workplace,
                'avatar' => $input->avatar,
                'business_type_id' =>$input->business_type_id,
                'expertise_id' =>$input->expertise_id,
                'local_conext_id' =>$input->local_conext_id,
            );
            User::find($id)->update($data);
            return response()->json([
                'message' => "User updated successfully"
            ]);
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

    public function profile()
    {
        $id = Auth::user()->id;
        return User::find($id);
    }
}
