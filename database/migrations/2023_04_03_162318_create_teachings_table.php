<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachings', function (Blueprint $table) {
            $table->id();
            $table->string('Designation');
            $table->string('Sc_Reg');
            $table->string('Sc_Cont'); 
            $table->string('St_Reg');
            $table->string('St_Cont');
            $table->string('Obc_Reg');
            $table->string('Obc_Cont');
            $table->string('Gen_Reg');
            $table->string('Gen_Cont');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachings');
    }
}
