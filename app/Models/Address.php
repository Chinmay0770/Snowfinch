<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'state',
        'district',
        'city',
        'pincode',
        'address',
        'type',
    ];

    protected $primaryKey = 'user_id';
}
