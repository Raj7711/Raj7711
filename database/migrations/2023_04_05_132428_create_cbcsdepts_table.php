<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbcsdeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbcsdepts', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('Semester');
            $table->string('Code');
            $table->string('Course_Title');
            $table->string('Credit');
    
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
        Schema::dropIfExists('cbcsdepts');
    }
}
