<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teaching extends Model
{
    use HasFactory;
    public $fillable=[
        'Sc_Reg',
        'Sc_Cont',
    	'St_Reg',	
        'St_Cont',
        'Obc_Reg',
         'Obc_Cont',	
         'Gen_Reg',	
         'Gen_Cont',
      ];
      protected $table="teachings";
      protected $primaryKey="id";
    
}
