<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectEstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_ests', function (Blueprint $table) {
            $table->id();
            $table->string('idSubject');
            $table->string('nameSubject');
            $table->string('idEstudiante');
            $table->string('nameEstudiante');
            $table->string('idDocente');
            $table->string('nameDocente');
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
        Schema::dropIfExists('subject_ests');
    }
}

