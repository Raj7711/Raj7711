<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slets', function (Blueprint $table) {
            $table->id();
            $table->string('qualified');
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
        Schema::dropIfExists('slets');
    }
}
