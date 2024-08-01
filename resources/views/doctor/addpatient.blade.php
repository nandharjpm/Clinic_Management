<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/addpatient.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Doctor's Dashboard</h1>
        <form action="{{ url('/doctor/viewpatientlist') }}" method="POST">
            @method('POST');
            @csrf
            <!-- Section 1: Patient Details -->
            <div class="section">
                <h2>Patient Details</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_name">Patient Name:</label>
                            <input type="text" id="patient_name" name="patient_name" placeholder="First name"
                                 >
                            @error('patient_name')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_last_name">Patient Last Name:</label>
                            <input type="text" id="patient_last_name" name="patient_last_name"
                                placeholder="Last name"  >
                                @error('patient_last_name')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_age">Patient Age:</label>
                            <input type="number" id="patient_age" name="patient_age"  >
                            @error('patient_age')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_email">Patient Email:</label>
                            <input type="email" id="patient_email" name="patient_email"  >
                            @error('patient_email')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_height">Patient Height (cm):</label>
                            <input type="number" id="patient_height" name="patient_height" step="0.1"  >
                            @error('patient_height')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_bp">Patient BP:</label>
                            <input type="text" id="patient_bp" name="patient_bp"  >
                            @error('patient_bp')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_dob">Patient Date of Birth:</label>
                            <input type="date" id="patient_dob" name="patient_dob"  >
                            @error('patient_dob')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="patient_gender">Patient Gender:</label>
                            <select id="patient_gender" name="patient_gender"  >
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('patient_gender')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="patient_address">Patient Address:</label>
                    <textarea id="patient_address" name="patient_address" rows="3"  ></textarea>
                    @error('patient_address')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                </div>
                <div class="form-group">
                    <label for="patient_weight">Patient Weight (kg):</label>
                    <input type="number" id="patient_weight" name="patient_weight" step="0.1"  >
                    @error('patient_weight')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                </div>
            </div>

            <!-- Section 2: Patient Visiting Details -->
            <div class="section">
                <h2>Patient Visiting Details</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="visit_date">Date and Time:</label>
                            <input type="datetime-local" id="visit_date" name="visit_date"  >
                            @error('visit_date')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="visit_purpose">Purpose of Visit:</label>
                            <input type="text" id="visit_purpose" name="visit_purpose"  >
                            @error('visit_purpose')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Emergency Contact Details -->
            <div class="section">
                <h2>Emergency Contact Details</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_person_name">Contact Person Name:</label>
                            <input type="text" id="contact_person_name" name="contact_person_name"  >
                            @error('contact_person_name')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_person_number">Contact Person Number:</label>
                            <input type="text" id="contact_person_number" name="contact_person_number"  >
                            @error('contact_person_number')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="relationship">Relationship:</label>
                            <input type="text" id="relationship" name="relationship"  >
                            @error('relationship')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Doctor's Prescription -->
            <div class="section">
                <h2>Doctor's Prescription</h2>
                <div class="form-group">
                    <label for="medicines">Medicines:</label>
                    <textarea id="medicines" name="medicines" rows="5"  ></textarea>
                    @error('medicines')
                                <span class="text-danger" style="color: red">{{ $message }}</span>
                            @enderror
                </div>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
