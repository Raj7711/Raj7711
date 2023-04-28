<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ptfaculty extends Model
{
    use HasFactory;
    protected $table="position_of_teaching_faculty";
    protected $primaryKey="depaprtment_id";
}
