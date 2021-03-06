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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role', 50)->default('customer');
            $table->integer('phone');
            $table->integer('fax')->nullable();
            $table->integer('telex')->nullable();
            $table->string('address', 255);
            $table->string('postcode');
            $table->string('country', 50);
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('updatedId')->nullable();
            $table->foreign('updatedId')->references('id')->on('users');
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
