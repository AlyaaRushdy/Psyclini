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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->bigInteger('doctor_id')->unsigned()->nullable();
            $table->integer('patient_id')->unsigned()->nullable();
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
            $table->bigInteger('secretary_ssn')->unsigned()->nullable();
            $table->foreign('secretary_ssn')
                ->references('ssn')
                ->on('secretaries')
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
        Schema::dropIfExists('comments');
    }
};