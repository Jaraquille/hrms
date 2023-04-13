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
        Schema::create('prenatals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('patient_id');
            $table->string('philhealth_id');
            $table->string('employment_status');
            $table->string('family_serial_number');
            $table->string('fourps_nhts_number');
            $table->string('father_sname');
            $table->string('father_mname');
            $table->string('father_fname');
            $table->string('father_address');
            $table->string('mother_sname');
            $table->string('mother_mname');
            $table->string('mother_fname');
            $table->string('mother_address');
            $table->string('houseowner_name');
            $table->string('ht');
            $table->string('wt');
            $table->string('temp');
            $table->string('pr');
            $table->string('rr');
            $table->string('bp');
            $table->string('menarche');
            $table->string('lmp');
            $table->string('gravida');
            $table->string('para');
            $table->string('fullterm');
            $table->string('preterm');
            $table->string('abortion');
            $table->string('stillbirth');
            $table->string('labresults');
            $table->string('hgb');
            $table->string('u_a');
            $table->string('bdrl_rpr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prenatals');
    }
};
