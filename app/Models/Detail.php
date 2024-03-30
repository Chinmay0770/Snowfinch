<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact',
        'education',
        'aadhar_no',
        'pan_no',
        'avatar',
        'user_role',
        'user_status',
    ];

    protected $primaryKey = 'user_id';
}
