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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cnic');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('email');
            $table->string('city');
            $table->string('phone');
            $table->string('gender');
            $table->string('interest');
            $table->string('education');
            $table->string('institude');
            $table->string('marital_status');
            $table->string('address');
            $table->string('age');
            $table->integer('role');
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
