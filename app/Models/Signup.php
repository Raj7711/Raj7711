<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
       'userid',
    'email',
    'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
