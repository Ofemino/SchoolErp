<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSessionForeignkeyToAdmissionstatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admissionstatus', function (Blueprint $table) {
            //$table->foreign('session_id')->references('id')->on('schoolsession');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admissionstatus', function (Blueprint $table) {
            //
        });
    }
}
