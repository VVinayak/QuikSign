<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentFacultyForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student-faculty-form', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('sid');
			$table->integer('fid');
			$table->string('form');
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
        Schema::drop('student-faculty-form');
    }
}
