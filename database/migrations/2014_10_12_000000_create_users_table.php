<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('user_block')->nullable();
            $table->bigInteger('sms_code')->unique()->default('123456');
            $table->bigInteger('sms_code_verify')->unique()->nullable();
            $table->tinyInteger('active')->default('0');
            $table->string('birthday')->nullable();
            $table->string('natinal_code')->nullable();
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
}
