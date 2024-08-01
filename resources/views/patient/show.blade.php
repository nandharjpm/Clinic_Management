{{-- <!DOCTYPE html>
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

</html> --}}



<!-- resources/views/patient/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">be <span>healthy</span></div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#contact">Contact us</a></li>
                <li><a href="{{ route('doctor.viewpatient') }}">View My Data</a></li>
            </ul>
            <a href="#" class="btn" onclick="document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="content">
                <h2>Patient Details</h2>
                <p><strong>Name:</strong> {{ $patient->patient_name }}</p>
                <p><strong>Age:</strong> {{ $patient->patient_age }}</p>
                <p><strong>Email:</strong> {{ $patient->patient_email }}</p>
                <p><strong>Height:</strong> {{ $patient->patient_height }}</p>
                <p><strong>Blood Pressure:</strong> {{ $patient->patient_bp }}</p>
                <p><strong>Date of Birth:</strong> {{ $patient->patient_dob }}</p>
                <p><strong>Gender:</strong> {{ $patient->patient_gender }}</p>
                <p><strong>Address:</strong> {{ $patient->patient_address }}</p>
                <p><strong>Weight:</strong> {{ $patient->patient_weight }}</p>
                <p><strong>Visit Date:</strong> {{ $patient->visit_date }}</p>
                <p><strong>Visit Purpose:</strong> {{ $patient->visit_purpose }}</p>
                <p><strong>Contact Person Name:</strong> {{ $patient->contact_person_name }}</p>
                <p><strong>Contact Person Number:</strong> {{ $patient->contact_person_number }}</p>
                <p><strong>Relationship:</strong> {{ $patient->relationship }}</p>
                <p><strong>Medicines:</strong> {{ $patient->medicines }}</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container" id="contact">
            <div class="footer-content">
                <div class="footer-section contact-form">
                    <h3>Contact Us</h3>
                    <p>Email: maran@doctor.com</p>
                    <p>Phone: +91000000000</p>
                    <p>Address: Dubai, Dubai Main Road</p>
                </div>
                <div class="footer-section quick-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
