<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;



class User extends Authenticatable  implements JWTSubject
{
    use HasFactory;

    protected $table = 'users';
    public function businessType(){
        return $this->belongsTo(BusinessType::class, 'business_type_id', 'id');
    }
    public function expertise(){
        return $this->belongsTo(Expertise::class, 'expertise_id', 'id');
    }
    public function localConext(){
        return $this->belongsTo(LocalConext::class, 'local_conext_id', 'id');
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'gender',
        'introduce',
        'workplace',
        'avatar',
        'business_type_id',
        'local_conext_id',
        'expertise_id',
        'role'
    ];
    protected $hidden = [
        'password',

    ];
    public function getJWTIdentifier() {
        return $this->getKey();
    }
    public function getJWTCustomClaims() {
        return [];
    }   
}
