<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('personal_id')->index();
            $table->foreign('personal_id')->references('personal_id')->on('person_infos')->onDelete('cascade');
            $table->string('family_member');
            $table->string('hereditary_disease');
            $table->text('mental_condition');
            $table->text('pregnancy_complication');
            $table->text('DR_course_o_death');
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
        Schema::dropIfExists('family_infos');
    }
}
