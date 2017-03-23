<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentadmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentadmission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mat_num');
            $table->string('first_name');
            $table->string('sur_name');
            $table->string('other_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('pob');
            $table->string('birth_cert_num');
            $table->string('blood_group', 5);
            $table->integer('contact_title');
            $table->string('primary_contact');
            $table->string('contact_mobile');
            $table->string('contact_email');
            $table->string('admission_status');
            $table->date('admission_date');
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
        Schema::drop('studentadmission');
    }
}
