<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slet extends Model
{
    use HasFactory;
    public $fillable=[
        'qualified',
    'Sc',
    'St',
    'Obc',
    'Gen',
    'total',
    
    ];
    protected $table="slets";
    protected $primaryKey="id";
}
