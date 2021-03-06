<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('beacon_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('status')->default('');
            $table->string('name')->default('');
            $table->string('email')->unique();
            $table->string('password')->default('test');
            $table->string('api_key')->nullable();
            $table->integer('amount')->default(0);
            $table->timestamps();

            $table->unique('name');
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
}
