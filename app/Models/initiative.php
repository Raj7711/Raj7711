<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class initiative extends Model
{
    use HasFactory;
    public $fillable=[
        'Development',
    'faculty_benifite',
    
    ];
    protected $table="initiatives";
    protected $primaryKey="id";
    
   
}
