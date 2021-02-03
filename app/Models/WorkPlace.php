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
        'local_conext_id'
    ];

    public $hidden = [
        'created_at',
        'updated_at'
    ];

    public function localConext(){
        return $this->belongsTo(LocalConext::class)->select('id', 'name');
    }
}
