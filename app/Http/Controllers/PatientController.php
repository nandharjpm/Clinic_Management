<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientRecord;
use Barryvdh\DomPDF\Facade\Pdf;

class PatientController extends Controller
{
    public function dashboard()
    {
        $patientEmail = auth()->user()->email;
        $patient = PatientRecord::where('patient_email', $patientEmail)->first();
        $patient_record = PatientRecord::where('patient_email', $patientEmail)->get();


        if (!$patient) {
            dd("No patient found with email: $patientEmail");
        }

        return view('patient.dashboard', compact('patient'));
    }




    public function patient()
    {
        return view('patient.dashboard');
    }





    public function view($id)
    {
        $patient = PatientRecord::findOrFail($id);
        return view('patient.show', compact('patient'));
    }



    public function downloadPdf($id)
    {
        $patient = PatientRecord::findOrFail($id);

        $pdf = Pdf::loadView('patient.pdf', compact('patient'));

        return $pdf->download('patient-details.pdf');
    }
    
}
