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
        Schema::create('family_plannings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('patient_id');
            $table->string('philhealth_id');
            $table->string('educational_attainment');
            $table->string('spouse_sname');
            $table->string('spouse_mname');
            $table->string('spouse_fname');
            $table->string('number_of_living_children');
            $table->string('plan_to_have_children');
            $table->string('average_monthly_income');
            $table->string('type_of_patient');
            $table->string('reason');
            $table->string('method');
            $table->string('step1_1');
            $table->string('step1_2');
            $table->string('step1_3');
            $table->string('step1_4');
            $table->string('step1_5');
            $table->string('step1_6');
            $table->string('step1_7');
            $table->string('step1_8');
            $table->string('step1_9');
            $table->string('step1_10');
            $table->string('step1_11');
            $table->string('step1_12');
            $table->string('step2_g');
            $table->string('step2_p');
            $table->string('step2_full_term');
            $table->string('step2_premature');
            $table->string('step2_abortion');
            $table->string('step2_living_children');
            $table->string('step2_last_delivery');
            $table->string('step2_type_last_delivery');
            $table->string('step2_last_menstrual');
            $table->string('step2_previous_menstrual');
            $table->string('step2_menstrual_flow');
            $table->string('step2_dysmenorrhea');
            $table->string('step2_hydatidiform_mole');
            $table->string('step3_weight');
            $table->string('step3_height');
            $table->string('step3_blood_pressure');
            $table->string('step3_pulse_rate');
            $table->string('step3_skin');
            $table->string('step3_extormities');
            $table->string('step3_conjunctiva');
            $table->string('step3_pelvic');
            $table->string('step3_breast');
            $table->string('step3_neck');
            $table->string('step3_abdomen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_plannings');
    }
};
