<?php

namespace App\Http\Controllers;

use App\Models\PatientRecord;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DoctorController extends Controller
{

    public function addPatient()
    {
        return view('doctor.addpatient');
    }




    public function viewPatientlist()
    {
        $patients = PatientRecord::all();
        return view('doctor.viewpatientlist', compact('patients'));
    }



    public function viewPatient($id)
    {
        $patient = PatientRecord::findOrFail($id);
        return view('doctor.viewpatient', compact('patient'));
    }



    public function editPatient($id)
    {
        $patient = PatientRecord::findOrFail($id);
        return view('doctor.editpatient', compact('patient'));
    }



    public function updatePatient(Request $request, $id)
    {
        $patient = PatientRecord::findOrFail($id);
        $patient->update($request->all());
        return redirect()->route('doctor.viewpatientlist')->with('success', 'Patient updated successfully');
    }




    public function deletePatient($id)
    {
        $patient = PatientRecord::findOrFail($id);
        $patient->delete();
        return redirect()->route('doctor.viewpatientlist')->with('success', 'Patient deleted successfully');
    }






    public function storePatientlist(Request $request)
    {
        $request->validate([
            'patient_name' => 'required|string|min:3|max:30',
            'patient_age' => 'required|integer',
            'patient_email' => 'required|email',
            'patient_height' => 'required|integer',
            'patient_bp' => 'required|integer',
            'patient_dob' => 'required|date',
            'patient_gender' => 'required|string',
            'patient_address' => 'required|string',
            'patient_weight' => 'required|integer',
            'visit_date' => 'required|date',
            'visit_purpose' => 'required|string',
            'contact_person_name' => 'required|string',
            'contact_person_number' => 'required|string',
            'relationship' => 'required|string',
            'medicines' => 'required|string',
        ]);

        PatientRecord::create($request->all());
        // return view('doctor.viewpatientlist');


        return redirect()->route('doctor.viewpatientlist');

    }

    // public function getPatientData()
    // {
    //     $patients = PatientRecord::query();
    //     return DataTables::of($patients)
    //         ->addColumn('action', function ($patient) {
    //             $editUrl = route('doctor.patients.edit', $patient->id);
    //             $deleteUrl = route('doctor.patients.delete', $patient->id);
    //             return "<a href='{$editUrl}' class='btn btn-primary'>Edit</a>
    //                     <a href='{$deleteUrl}' class='btn btn-danger'>Delete</a>";
    //         })
    //         ->make(true);
    // }



    // public function updatePatient(Request $request, $id)
    // {
    //     $request->validate([
    //         'patient_name' => 'required|string|min:3|max:30',
    //         'patient_age' => 'required|integer',
    //         'patient_email' => 'required|email',
    //         'patient_height' => 'required|integer',
    //         'patient_bp' => 'required|integer',
    //         'patient_dob' => 'required|date',
    //         'patient_gender' => 'required|string',
    //         'patient_address' => 'required|string',
    //         'patient_weight' => 'required|integer',
    //         'visit_date' => 'required|date',
    //         'visit_purpose' => 'required|string',
    //         'contact_person_name' => 'required|string',
    //         'contact_person_number' => 'required|string',
    //         'relationship' => 'required|string',
    //         'medicines' => 'required|string',
    //     ]);

    //     $patient = PatientRecord::findOrFail($id);
    //     $patient->update($request->all());

    //     return redirect()->route('doctor.viewpatientlist');
    // }
}
