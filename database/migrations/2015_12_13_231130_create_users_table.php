<?php

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
        Schema::dropIfExists('users');

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('login')->nullable()->unique();
            $table->string('password', 64);
            $table->string('f_name');
            $table->string('l_name');
            $table->string('url');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('users');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
