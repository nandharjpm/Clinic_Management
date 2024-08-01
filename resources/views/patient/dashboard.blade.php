<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be Healthy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/doctordashboard.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="logo">be <span>healthy</span></div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#contact">Contact us</a></li>
                <li><a href="{{ route('doctor.viewpatient', ['id' => $patient->id]) }}" class="btn btn-primary">View My
                    Data</a></li>
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
                <h2>Take care of your health</h2>
                @if ($patient && $patient->patient_email)
                    <p>Hi! {!! "<b> $patient->patient_name </b>" !!}, I hope you will recover soon.</p>
                @else
                    <p>Welcome to Be Healthy! Please update your profile to see personalized information.</p>
                @endif
                @if ($patient)
                    <a href="{{ route('doctor.viewpatient', ['id' => $patient->id]) }}" class="btn btn-primary">View My
                        Data</a>
                @endif

            </div>
            <div class="image">
                <img src="{{ url('img/patient.png') }}" alt="Patient">
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
