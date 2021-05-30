<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_teachers', function (Blueprint $table) {
         //   $table->id();
         $table->integer('t_id');
         $table->integer('s_id');

         $table->foreign('t_id')->references('t_id')->on('teachers');
         $table->foreign('s_id')->references('s_id')->on('students');

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
        Schema::dropIfExists('stud_teachers');
    }
}
