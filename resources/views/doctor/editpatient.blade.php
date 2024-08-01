<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Patient</h2>
        <form action="{{ route('doctor.updatepatient', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="patient_name">Patient Name</label>
                <input type="text" class="form-control" id="patient_name" name="patient_name" value="{{ $patient->patient_name }}" required>
            </div>
            
            <div class="form-group">
                <label for="patient_email">Patient Email</label>
                <input type="email" class="form-control" id="patient_email" name="patient_email" value="{{ $patient->patient_email }}" required>
            </div>

            <div class="form-group">
                <label for="patient_age">Patient Age</label>
                <input type="number" class="form-control" id="patient_age" name="patient_age" value="{{ $patient->patient_age }}" required>
            </div>

            <div class="form-group">
                <label for="patient_height">Patient Height</label>
                <input type="text" class="form-control" id="patient_height" name="patient_height" value="{{ $patient->patient_height }}" required>
            </div>

            <div class="form-group">
                <label for="patient_bp">Patient BP</label>
                <input type="text" class="form-control" id="patient_bp" name="patient_bp" value="{{ $patient->patient_bp }}" required>
            </div>

            <div class="form-group">
                <label for="patient_dob">Patient DOB</label>
                <input type="date" class="form-control" id="patient_dob" name="patient_dob" value="{{ $patient->patient_dob }}" required>
            </div>

            <div class="form-group">
                <label for="patient_gender">Patient Gender</label>
                <input type="text" class="form-control" id="patient_gender" name="patient_gender" value="{{ $patient->patient_gender }}" required>
            </div>

            <div class="form-group">
                <label for="patient_weight">Patient Weight</label>
                <input type="text" class="form-control" id="patient_weight" name="patient_weight" value="{{ $patient->patient_weight }}" required>
            </div>

            <div class="form-group">
                <label for="patient_address">Patient Address</label>
                <input type="text" class="form-control" id="patient_address" name="patient_address" value="{{ $patient->patient_address }}" required>
            </div>

            <div class="form-group">
                <label for="visit_date">Visit Date</label>
                <input type="date" class="form-control" id="visit_date" name="visit_date" value="{{ $patient->visit_date }}" required>
            </div>

            <div class="form-group">
                <label for="visit_purpose">Visit Purpose</label>
                <input type="text" class="form-control" id="visit_purpose" name="visit_purpose" value="{{ $patient->visit_purpose }}" required>
            </div>

            <div class="form-group">
                <label for="contact_person_name">Contact Person Name</label>
                <input type="text" class="form-control" id="contact_person_name" name="contact_person_name" value="{{ $patient->contact_person_name }}" required>
            </div>

            <div class="form-group">
                <label for="contact_person_number">Contact Person Number</label>
                <input type="text" class="form-control" id="contact_person_number" name="contact_person_number" value="{{ $patient->contact_person_number }}" required>
            </div>

            <div class="form-group">
                <label for="relationship">Relationship</label>
                <input type="text" class="form-control" id="relationship" name="relationship" value="{{ $patient->relationship }}" required>
            </div>

            <div class="form-group">
                <label for="medicines">Medicines</label>
                <input type="text" class="form-control" id="medicines" name="medicines" value="{{ $patient->medicines }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="{{ route('doctor.viewpatientlist') }}" class="btn btn-secondary">Back to List</a>
    </div>
</body>

</html>
