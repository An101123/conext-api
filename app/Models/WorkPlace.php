<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlace extends Model
{
    use HasFactory;

    protected $table = 'work_places';

    public $fillable = [
        'name',
        'address',
        'price',
        'image',
    ];

    public $hidden = [
        'created_at',
        'updated_at'
    ];
}
