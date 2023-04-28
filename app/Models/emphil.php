<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emphil extends Model
{
    use HasFactory;
    public $fillable=[
        'no', 
        'programme', 
        'Sc', 
        'St', 
        'Obc', 
        'Gen' ,
        'total' ,
    ];
    protected $table="emphils";
    protected $primaryKey="id";
}
