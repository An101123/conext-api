<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    public $table = 'expertises';
    
    protected $fillable = [
        'name'
    ];
    public function user(){
        return $this->hasMany(User::class);
    }
}
