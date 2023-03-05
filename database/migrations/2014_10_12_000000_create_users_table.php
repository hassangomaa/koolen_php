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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone')->nullable()->default('');
            $table->string('address_line_1')->nullable()->default('');
            $table->string('address_line_2')->nullable()->default('');
            $table->string('city')->nullable()->default('');
            $table->string('state')->nullable()->default('');
            $table->string('country')->nullable()->default('');
            $table->string('postal_code')->nullable()->default('');
            $table->string('avatar')->default('default.jpg');
            $table->integer('points')->default(0);
            $table->integer('balance')->default(0);
            $table->integer('credit')->default(0);
            $table->boolean('verified')->default(false);
            $table->string("user_type_id")->default(2);
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
