<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">be <span>healthy</span></div>
                <ul class="nav navbar-nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#contact">Contact us</a></li>
                    <li><a href="{{ route('doctor.viewpatient', ['id' => $patient->id]) }}">View My Data</a></li>
                </ul>
                <a href="#" class="btn pull-right" onclick="document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container">
                <div class="content">
                    <h2>Patient Details</h2>
                </div>
                <div class="details">
                    <h3>Personal Information</h3>
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{ $patient->patient_name }}</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>{{ $patient->patient_age }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $patient->patient_email }}</td>
                            </tr>
                            <tr>
                                <th>Height</th>
                                <td>{{ $patient->patient_height }}</td>
                            </tr>
                            <tr>
                                <th>Blood Pressure</th>
                                <td>{{ $patient->patient_bp }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $patient->patient_dob }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $patient->patient_gender }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $patient->patient_address }}</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td>{{ $patient->patient_weight }}</td>
                            </tr>
                            <tr>
                                <th>Visit Date</th>
                                <td>{{ $patient->visit_date }}</td>
                            </tr>
                            <tr>
                                <th>Visit Purpose</th>
                                <td>{{ $patient->visit_purpose }}</td>
                            </tr>
                            <tr>
                                <th>Contact Person Name</th>
                                <td>{{ $patient->contact_person_name }}</td>
                            </tr>
                            <tr>
                                <th>Contact Person Number</th>
                                <td>{{ $patient->contact_person_number }}</td>
                            </tr>
                            <tr>
                                <th>Relationship</th>
                                <td>{{ $patient->relationship }}</td>
                            </tr>
                            <tr>
                                <th>Medicines</th>
                                <td>{{ $patient->medicines }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('patient.downloadpdf', ['id' => $patient->id]) }}" class="btn btn-success">Download as PDF</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container" id="contact">
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
    </footer>
</body>

</html>
