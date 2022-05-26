<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->bigInteger('ssn')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->unique();
            $table->date('birth_date');
            $table->string('img')->nullable();
            $table->string('speciality');
           $table->integer('session_fees')->nullable();
		   $table->integer('experince_years');
		    $table->string('education');
			 $table->string('gender')->nullable();
            $table->float('stars')->nullable();
			$table->float('rating')->nullable();
			$table->float('ratting_times')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
