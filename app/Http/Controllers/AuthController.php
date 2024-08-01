<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\PatientRecord;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }




    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if ($credentials['email'] === 'doctor@gmail.com' && $credentials['password'] === '12345678') {
        //     return redirect()->route('doctor.dashboard');
        // }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_doctor) {
                return redirect()->route('doctor.dashboard');
            } else {
                $patientEmail = auth()->user()->email;
                $patient = PatientRecord::where('patient_email', $patientEmail)->first();

                if (!$patient) {
                    dd("No patient found with email: $patientEmail");
                }

                return view('patient.dashboard', compact('patient'));
                return redirect()->route('patient.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials']);
    }




    public function showRegistrationForm()
    {
        return view('auth.register');
    }



    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:8|confirmed',
            'is_doctor' => 'sometimes|boolean',
        ]);

        $isDoctor = $request->has('is_doctor') ? (int) $request->is_doctor : 0;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_doctor' => $isDoctor,
        ]);

        return view('auth.login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
