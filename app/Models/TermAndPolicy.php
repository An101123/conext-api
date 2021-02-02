<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermAndPolicy extends Model
{
    use HasFactory;

    public $table = 'term_and_policies';

    protected $fillable = [
        'content'
    ];
}
