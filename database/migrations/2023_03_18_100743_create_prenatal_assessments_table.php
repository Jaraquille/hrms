<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenatal_assessments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('prenatal_id');
            $table->string('date_of_visit');
            $table->string('date_of_follow_up');
            $table->string('recommendation');
            $table->string('wt');
            $table->string('pr');
            $table->string('rr');
            $table->string('bp');
            $table->string('temp');
            $table->string('aog');
            $table->string('fh');
            $table->string('fhb');
            $table->string('press');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prenatal_assessments');
    }
};
