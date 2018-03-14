<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('facebook_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('tel')->nullable();
            $table->string('city')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
