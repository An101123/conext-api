<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    public function businessType(){
        return $this->belongsTo(BusinessType::class, 'businessType_id', 'id');
    }
    public function expertise(){
        return $this->belongsTo(Expertise::class, 'expertise_id', 'id');
    }
    public function localConext(){
        return $this->belongsTo(LocalConext::class, 'localConext_id', 'id');
    }

    public $fillable = [
        'name',
        'email',
        'password',
        'address',
        'gender',
        'introduce',
        'workplace',
        'avatar',
        'businessType_id',
        'localConext_id',
        'expertise_id'
    ];
}
