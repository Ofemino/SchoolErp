<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolsession', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');
            $table->string('session');
            $table->string('term');
            $table->foreign('user_id')->reference('users')->on('id');
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
        Schema::drop('schoolsession');
    }
}
