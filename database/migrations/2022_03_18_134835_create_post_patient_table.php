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
        Schema::create('post_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patients')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_patients');
    }
};
