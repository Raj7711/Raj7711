<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    public $fillable=[
        'upsc',
    'cat',
    'total',
    'psc',
    
        
    ];
    protected $table="services";
    protected $primaryKey="id";
}
