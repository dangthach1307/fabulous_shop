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
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('country')->nullable();

            $table->string('company_name')->nullable();
            $table->string('street_address')->nullable();
            $table->string('postcode_zip')->nullable();
            $table->string('town_city')->nullable();
            $table->string('phone');

            $table->rememberToken();

            $table->string('avatar')->nullable();
            $table->tinyInteger('level');
            $table->tinyInteger('status')->default(1);



            $table->text('description')->nullable();

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
