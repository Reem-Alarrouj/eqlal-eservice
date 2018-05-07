<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->bigInteger('mobile');
             $table->string('email');
             $table->string('university');
             $table->string('building_number');
             // $table->enum('schedule', ['summer semester', 'first semester','second semester']);
             // $table->integer('status')->default(0);
             $table->integer('summer_semester')->default(0);
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
        Schema::dropIfExists('students');
    }
}
