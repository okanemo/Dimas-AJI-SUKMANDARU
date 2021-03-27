<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\patient_data;
use Carbon\Carbon;
use Illuminate\Support\str;

class PatientDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        patient_data::insert([
                'date_of_test' =>'20140722130000',
                'id_number'=>'IC000B0',
                'patient_name'=>'Patient A1',
                'phone_number'=>null,
                'gender'=>'F',
                'date_of_birth'=>'19920305',
                'lab_number'=>'QT196-21-124',
                'clinic_code'=>'QT196',
                'code'=>'2085-9',
                'name'=>'HDL Cholesterol',
                'value'=>'cancel',
                'unit'=>'mg/dL',
                'ref_range'=>'> 59',
                'finding'=>'A',
                'result_state'=>'F',
            ]);
    }
}
