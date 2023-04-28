<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionOfTeachingFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_of_teaching_faculty', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
            $table->string('department_name');
            $table->string('designation');
            $table->string('degree');
            $table->string('subject_specification');

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
        Schema::dropIfExists('position_of_teaching_faculty');
    }
}
