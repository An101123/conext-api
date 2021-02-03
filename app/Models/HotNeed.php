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
        return $this->belongsTo(Category::class)->select('id','category_name');
    }

    public function user(){
        return $this->belongsTo(User::class)->select('id','name', 'avatar');
    }
}
