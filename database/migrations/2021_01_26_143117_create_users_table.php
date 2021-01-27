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
            $table->string('address');
            $table->integer('gender');
            $table->longText('introduce');
            $table->string('workplace');
            $table->string('password');
            
            $table->integer('businessType_id')->unsigned();
            $table->foreign('businessType_id')->references('id')->on('business_types')->onDelete('cascade');

            $table->integer('expertise_id')->unsigned();
            $table->foreign('expertise_id')->references('id')->on('expertises')->onDelete('cascade');

            $table->integer('localConext_id')->unsigned();
            $table->foreign('localConext_id')->references('id')->on('local_conexts')->onDelete('cascade');
            
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
