<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUseridForeignkeyToSchoolsession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schoolsession', function (Blueprint $table) {
            //
            $table->foreign('user_id')->refernces('users')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('=schoolsession', function (Blueprint $table) {
            //
        });
    }
}
