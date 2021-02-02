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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->integer('gender')->nullable();
            $table->longText('introduce')->nullable();
            $table->string('workplace')->nullable();
            $table->string('password');
            $table->integer('business_type_id')->unsigned()->nullable();
            $table->foreign('business_type_id')->references('id')->on('business_types');
            $table->integer('expertise_id')->unsigned()->nullable();
            $table->foreign('expertise_id')->references('id')->on('expertises');
            $table->integer('local_conext_id')->unsigned()->nullable();
            $table->foreign('local_conext_id')->references('id')->on('local_conexts');
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
