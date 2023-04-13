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
        Schema::create('immunization', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('patient_id');
            $table->string('vaccine_type');
            $table->string('immu_gender');
            $table->string('immu_month');
            $table->string('immu_birth_weight');
            $table->string('immu_height');
            $table->string('immu_birth_first_seen');
            $table->string('immu_place_of_birth');
            $table->string('immu_mother_sname');
            $table->string('immu_mother_mname');
            $table->string('immu_mother_fname');
            $table->string('immu_mother_education_level');
            $table->string('immu_mother_occupation');
            $table->string('immu_father_sname');
            $table->string('immu_father_mname');
            $table->string('immu_father_fname');
            $table->string('immu_father_education_level');
            $table->string('immu_father_occupation');
            $table->string('immu_brothers_sisters');
            $table->string('immu_complete_address');
            $table->date('bcg');
            $table->date('hepatitis_b');
            $table->date('dpt1');
            $table->date('dpt2');
            $table->date('dpt3');
            $table->date('polio_1');
            $table->date('measles_mcv1');
            $table->date('measles_mcv2');
            $table->date('tetanus_toxoid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immunization');
    }
};
