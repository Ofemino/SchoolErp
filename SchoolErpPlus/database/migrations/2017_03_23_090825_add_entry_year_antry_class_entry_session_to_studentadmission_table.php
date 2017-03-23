<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEntryYearAntryClassEntrySessionToStudentadmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studentadmission', function (Blueprint $table) {
            $table->string('entry_year', 10);
            $table->string('entry_class', 50);
            $table->string('entry_session', 10);
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
            Schema::drop('entry_year');
            Schema::drop('entry_class');
            Schema::drop('entry_session');
        });
    }
}
