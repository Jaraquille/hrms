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
        Schema::create('family_planning_assessments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('family_planning_id');
            $table->string('date_of_visit');
            $table->string('findings');
            $table->string('method');
            $table->string('date_of_follow_up');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_planning_assessments');
    }
};
