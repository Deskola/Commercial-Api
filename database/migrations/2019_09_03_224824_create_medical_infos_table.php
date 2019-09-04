<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('personal_id')->index();
            $table->foreign('personal_id')->references('national_id')->on('person_infos')->onDelete('cascade');
            $table->double('weight');
            $table->double('height');
            $table->double('temperature');
            $table->double('blood_pressure');
            $table->double('reason_for_visit');
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
        Schema::dropIfExists('medical_infos');
    }
}
