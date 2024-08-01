<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/viewpatient.css')}}">
</head>

<body>
    <div class="container">
        <h2>Patient Details</h2>
        <ul>
            <li><strong>Patient Name:</strong> {{ $patient->patient_name }}</li>
            <li><strong>Patient Age:</strong> {{ $patient->patient_age }}</li>
            <li><strong>Patient Email:</strong> {{ $patient->patient_email }}</li>
            <li><strong>Patient Height:</strong> {{ $patient->patient_height }}</li>
            <li><strong>Patient BP:</strong> {{ $patient->patient_bp }}</li>
            <li><strong>Patient DOB:</strong> {{ $patient->patient_dob }}</li>
            <li><strong>Patient Gender:</strong> {{ $patient->patient_gender }}</li>
            <li><strong>Patient Address:</strong> {{ $patient->patient_address }}</li>
            <li><strong>Patient Weight:</strong> {{ $patient->patient_weight }}</li>
            <li><strong>Visit Date:</strong> {{ $patient->visit_date }}</li>
            <li><strong>Visit Purpose:</strong> {{ $patient->visit_purpose }}</li>
            <li><strong>Contact Person Name:</strong> {{ $patient->contact_person_name }}</li>
            <li><strong>Contact Person Number:</strong> {{ $patient->contact_person_number }}</li>
            <li><strong>Relationship:</strong> {{ $patient->relationship }}</li>
            <li><strong>Medicines:</strong> {{ $patient->medicines }}</li>
        </ul>
        <a href="{{ route('doctor.viewpatientlist') }}" class="btn btn-primary">Back to List</a>
    </div>
</body>

</html>
