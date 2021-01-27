<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalConext extends Model
{
    use HasFactory;

    protected $table = 'local_conexts';

    public $fillable = [
        'name'
    ];
    public function user(){
        return $this->hasMany(User::class);
    }
}
