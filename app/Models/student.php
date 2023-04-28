<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $fillable=[
        'no',
        'department_id',
        'UG',
        'Sc',
       'St', 
        'Obc', 
        'Gen', 
        'total', 
    ];
    protected $table="students";
    protected $primaryKey="id";
}
