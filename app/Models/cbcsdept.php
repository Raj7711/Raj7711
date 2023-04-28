<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cbcsdept extends Model
{
    use HasFactory;
    public $fillable=[
        'no',
        'Semester',
        'Code',
        'Course_Title',
        'Credit',
      ];
      protected $table="cbcsdepts";
      protected  $primaryKey='id';
}
