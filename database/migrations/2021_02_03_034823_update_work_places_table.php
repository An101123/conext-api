<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWorkPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work_places', function (Blueprint $table) {
            $table->integer('local_conext_id')->unsigned()->nullable();
            $table->foreign('local_conext_id')->references('id')->on('local_conexts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_places', function (Blueprint $table) {
            $table->dropColumn('local_conext_id');
            
        });
    }
}
