<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allied extends Model
{
    use HasFactory;
    public $fillable=[
        'serial',
        'alli',
        'cog',
    ]; 
}
