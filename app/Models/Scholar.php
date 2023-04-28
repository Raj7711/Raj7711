<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    use HasFactory;
    public $fillable=[
       'si',
       'name',
       'reg',
       'title',
       'sup',
    ];
}
