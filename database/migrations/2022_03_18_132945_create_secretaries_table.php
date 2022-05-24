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
        Schema::create('secretaries', function (Blueprint $table) {
            $table->bigIncrements('ssn');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->unique();
            $table->string('img')->nullable();
            $table->date('birth_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secretaries');
    }
};
