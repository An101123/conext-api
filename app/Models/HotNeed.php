<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotNeed extends Model
{
    use HasFactory;

    protected $table = 'hot_needs';

    public $fillable = [
        'topic',
        'city',
        'category_id',
        'expected_deadline',
        'brief_description',
        'full_description',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
