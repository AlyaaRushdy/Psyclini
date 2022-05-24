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
        Schema::create('patient_doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default('0');
            $table->boolean('reserve')->default('0');
            $table->dateTime('appointment');
            $table->bigInteger('doctor_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->foreign('doctor_id')
                  ->references('id')
                  ->on('doctors')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patients')
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
        Schema::dropIfExists('patient_doctor');
    }
};
