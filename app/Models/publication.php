<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    use HasFactory;
    public $fillable=[
        'publications',
        'faculty_benifite',
    
    ];
    protected $table="publications";
    protected $primaryKey="id";
}
