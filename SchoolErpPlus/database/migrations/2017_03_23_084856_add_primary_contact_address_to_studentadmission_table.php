<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrimaryContactAddressToStudentadmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studentadmission', function (Blueprint $table) {
            //
            $table->string('contact_address', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studentadmission', function (Blueprint $table) {
            //
            Schema::drop('contact_address');
        });
    }
}
