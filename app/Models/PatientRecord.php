<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;

    protected $table = 'patient_records';

    protected $fillable = [
        'id','patient_name', 'patient_age', 'patient_email', 'patient_height',
        'patient_bp', 'patient_dob', 'patient_gender', 'patient_address',
        'patient_weight', 'visit_date', 'visit_purpose', 'contact_person_name',
        'contact_person_number', 'relationship', 'medicines',
    ];
}
