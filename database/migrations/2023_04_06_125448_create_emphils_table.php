<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmphilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emphils', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
          $table->string('programme');
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
        Schema::dropIfExists('emphils');
    }
}
