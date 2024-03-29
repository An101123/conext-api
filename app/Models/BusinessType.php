<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    use HasFactory;

    public $table = 'business_types';

    protected $fillable = [
        'name'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
