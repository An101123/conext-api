<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public $fillable = [
        'category_name',
        'quantity'
    ];
    
    public function hotNeed(){
        return $this->hasMany(HotNeed::class);
    }
}
