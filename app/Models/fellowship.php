<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fellowship extends Model
{
    use HasFactory;
    public $fillable=[
        'variables',
        'details',
        'Sc',
        'St',
        'Obc',
        'Gen',
        
    
    ];
    protected $table="fellowships";
    protected $primaryKey="id";
}
