<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('auth')->group(function () {
    Route::get('/doctor/dashboard', [DashboardController::class, 'doctor'])->name('doctor.dashboard');
    Route::get('/patient/dashboard', [PatientController::class, 'patient'])->name('patient.dashboard');
    // Route::post('/patient/dashboard', [PatientController::class, 'patient'])->name('patient.dashboard');

    Route::get('/doctor/addpatient', [DoctorController::class, 'addPatient'])->name('addpatient');
    Route::get('/doctor/viewpatientlist', [DoctorController::class, 'viewPatientlist'])->name('doctor.viewpatientlist');
    Route::post('/doctor/viewpatientlist', [DoctorController::class, 'storePatientlist'])->name('doctor.viewpatientlist');

    Route::get('/doctor/patient/{id}', [PatientController::class, 'view'])->name('doctor.viewpatient');

    Route::get('/doctor/patientlist', [DoctorController::class, 'viewPatientList'])->name('doctor.viewpatientlist');
    // Route::get('/doctor/patient/{id}', [DoctorController::class, 'viewPatient'])->name('doctor.viewpatient');

    Route::get('/doctor/patient/{id}', [PatientController::class, 'view'])->name('doctor.viewpatient');


    Route::put('/doctor/patient/{id}', [DoctorController::class, 'updatePatient'])->name('doctor.updatepatient');
    Route::get('/doctor/patient/{id}/edit', [DoctorController::class, 'editPatient'])->name('doctor.editpatient');

    Route::delete('/doctor/patient/{id}', [DoctorController::class, 'deletePatient'])->name('doctor.deletepatient');

    Route::get('/patient/{id}', [PatientController::class, 'show'])->name('patient.show');
});
