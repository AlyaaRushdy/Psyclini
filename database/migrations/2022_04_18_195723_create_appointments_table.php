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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time');
            $table->string('day');
			$table->string('hall');
			$table->bigInteger('doctor_id')->unsigned();
            $table->boolean('patient_status1');
			$table->boolean('patient_status2');
			$table->boolean('patient_status3');
			$table->boolean('patient_status4');
			$table->boolean('patient_status5');
            $table->boolean('doctor_status1');
            $table->boolean('doctor_status2');
            $table->boolean('doctor_status3');
            $table->boolean('doctor_status4');
            $table->boolean('doctor_status5');
			   $table->foreign('doctor_id')
                  ->references('id')
                  ->on('doctors')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::dropIfExists('appointments');
    }
};
