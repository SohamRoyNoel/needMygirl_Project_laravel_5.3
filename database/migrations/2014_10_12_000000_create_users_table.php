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
            $table->integer('role_id')->default(1);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('sex');
            $table->integer('age');
            $table->string('religion');
            $table->string('occupation');
            $table->string('address');
            $table->integer('category_id');
            $table->string('phone')->unique();
            $table->integer('photo_id');
            $table->string('salary')->default('Do not wat to disclose');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
