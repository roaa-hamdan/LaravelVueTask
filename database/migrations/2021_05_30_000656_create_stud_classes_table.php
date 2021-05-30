<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_classes', function (Blueprint $table) {
            $table->integer('c_id');
            $table->integer('s_id');

            $table->foreign('c_id')->references('c_id')->on('calssts');
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
        Schema::dropIfExists('stud_classes');
    }
}
