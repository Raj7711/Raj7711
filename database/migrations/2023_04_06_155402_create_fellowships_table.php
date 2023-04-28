<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFellowshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fellowships', function (Blueprint $table) {
            $table->id();
            $table->string('variables');
            $table->string('details');
            $table->string('Sc');
            $table->string('St');
            $table->string('Obc');
            $table->string('Gen');
            $table->string('total');
            
    
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
        Schema::dropIfExists('fellowships');
    }
}
