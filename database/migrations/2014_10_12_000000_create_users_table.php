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
            $table->bigIncrements('id')->nullable();
            $table->string('email')->unique();
            // $table->string('paswword');
            $table->string('user_name')->nullable();
            $table->string('name')->nullable();
            $table->integer('phon')->nullable();
            $table->longText('Bio')->nullable();
            $table->boolean('privet')->nullable();	
            $table->integer('posts')->nullable();
            $table->string('gender')->nullable();	
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
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
}
