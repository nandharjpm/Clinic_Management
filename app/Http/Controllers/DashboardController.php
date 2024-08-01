<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function doctor(){
        return view('doctor.dashboard');
    }

    // public function patient(){
    //     return view('patient.dashboard');
    // }



    public function subitForm(Request $request){
        $request->validate([
            'patient_name' => 'required|string|min:3|max:30',
            'patient_age' => 'required|integer',
            'patient_email' => 'required|email|unique:users',
            'patient_height' => 'required|integer',
            'patient_bp' => 'required|string',
            'patient_dob' => 'required|date',
            'patient_gender' => 'required|string',
            'patient_address' => 'required|string',
            'patient_weight' => 'required|integer',
            'visit_date' => 'required|date_format:d-m-Y\TH:i',
            'visit_purpose' => 'required|string',
            'contact_person_name' => 'required|string',
            'contact_person_number' => 'required|string',
            'relationship' => 'required|string',
            'medicines' => 'required|string',
        ]);

        return back()->with('success', 'Patient Data Recorded successfully!');
    }
}
