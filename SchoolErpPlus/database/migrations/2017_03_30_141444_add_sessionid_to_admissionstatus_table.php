<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSessionidToAdmissionstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admissionstatus', function (Blueprint $table) {
            //
            $table->integer('session_id');
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
            schema::drop('session_id');
        });
    }
}
