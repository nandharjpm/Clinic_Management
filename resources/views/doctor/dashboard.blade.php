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
                <li><a href="{{ route('addpatient') }}">Add Patient</a></li>
                <li><a href="{{ route('doctor.viewpatientlist') }}">View Patients List</a></li>
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
                <p>Don't Fear when Doctor is Here Our clinic will be always available on 24/7 you can reach out
                    whatever time in you Emergency situations.</p>
            </div>
            <div class="image">
                <img src="{{ url('img/docimg.webp') }}" alt="Doctor">
            </div>
        </section>
    </main>

    <div class="container" id="about">
        <div class="image-container">
            <img src="{{ url('img/docimgs.jpg') }}" alt="Dr. Kagan" style="height: 400px; width:400px">
        </div>
        <div class="text-container">
            <h2>Meet Dr. Maran</h2>
            <p>For the past 25 years, I have told my patients that I love what I do! I am truly
                grateful that so many of our patients have trusted me to provide them with
                amazing vision so they can fully enjoy their life as well as to improve their
                appearance and self confidence. There are few guarantees in life but I assure you
                that when you become our patient you will be treated like family. My staff and I
                look forward to meeting you and learning how we can help improve your life!
            </p>
            <p class="signature">- Dr. Maran</p>
        </div>
    </div>

    <footer>
        <div class="footer-container" id="contact">
            <div class="footer-content">
                <div class="footer-section contact-form">
                    <h3>Contact Us</h3>
                    <p>Email: maran@doctor.com</p>
                    <p>Phone: +91000000000</p>
                    <p>Address: dubai, dubai main road</p>
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
