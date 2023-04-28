<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestlecturer extends Model
{
    use HasFactory;
    protected $table="guestlecturer";
    protected$primaryKey="department_id";
}
