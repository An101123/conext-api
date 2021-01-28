<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    public $fillable = [
        'title',
        'image',
        'description',
        'expired_on',
        'type'
    ];
}
