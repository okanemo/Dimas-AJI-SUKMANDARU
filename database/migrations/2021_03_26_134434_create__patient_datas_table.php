<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_of_test',$precision = 0);
            $table->string('id_number');
            $table->string('patient_name');
            $table->string('phone_number')->nullable();
            $table->char('gender', 1);
            $table->date('date_of_birth');
            $table->string('lab_number');
            $table->string('clinic_code');
            $table->string('code');
            $table->string('name');
            $table->string('value');
            $table->string('unit');
            $table->char('ref_range',4);
            $table->char('finding',1);
            $table->char('result_state',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_data_table');
    }
}
