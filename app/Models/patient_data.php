<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_data extends Model
{
    protected $table = 'patient_datas';
    
    protected $fillable = [
        'date_of_test',
        'id_number',
        'patient_name',
        'phone_number',
        'gender',
        'date_of_birth',
        'lab_number',
        'clinic_code',
        'code',
        'name',
        'value',
        'unit',
        'ref_range',
        'finding',
        'result_state',
    ];

    protected $hidden = [
        'id'
    ];
}
