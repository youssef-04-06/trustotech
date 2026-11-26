<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Trusto Tech</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
</head>
<body class="contact-layout">

<nav class="navbar navbar-expand-lg fixed-top nav-pro">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.jpeg') }}" class="logo me-2">
            <span class="brand-text">Trusto Tech</span>
        </a>

        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="custom-toggler"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item ms-lg-4">
                    <a class="nav-link" href="{{ url('/') }}"class="cta-btn">Home</a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a class="nav-link" href="{{ url('/about') }}"class="cta-btn">About</a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a class="nav-link" href="{{ url('/services') }}"class="cta-btn">Services</a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a class="nav-link" href="{{ url('/programs') }}"class="cta-btn">Programs</a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a class="nav-link" href="{{ url('/contact') }}"class="cta-btn">Contact</a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a href="{{ url('/beapartner') }}" class="cta-btn">
                        Be a Partner
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
    <header class="hero-block">
        <div class="container text-center">
            <h1 class="main-title">GET IN TOUCH</h1>
            <p class="sub-title">Global Partner In Digital Excellence</p>
        </div>
    </header>

    <section class="cards-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-card">
                        <i class="fa-solid fa-phone-flip icon-blue"></i>
                        <h4>Main Office</h4>
                        <p>+961 70 000 000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <i class="fa-solid fa-envelope-open-text icon-blue"></i>
                        <h4>Office Email</h4>
                        <p>info@trustotech.com</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <i class="fa-solid fa-microchip icon-blue"></i>
                        <h4>Technical Support</h4>
                        <p>24/7 Digital Desk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interaction-block">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="text-content-side">
                        <h2 class="display-4 fw-bold mb-4">We are <span class="text-blue">here.</span></h2>
                        <p class="lead text-gray">We love to hear from you and are happy to answer any questions you may have about our proprietary systems.</p>

                        <div class="social-box-modern">
                            <a href="#" class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-btn"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="social-btn"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" class="social-btn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="social-btn"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-card-modern">
                        <form method="POST" action="{{ route('contacts.store') }}" >
    @csrf

    <div class="custom-input-group">
        <label>Username</label>
        <input
            type="text"
            name="name"
            placeholder="Full Name"
            required
        >
    </div>

    <div class="custom-input-group">
        <label>User Email</label>
        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required
        >
    </div>

    <div class="custom-input-group">
        <label>User Message</label>
        <textarea
            name="topic"
            rows="4"
            placeholder="How can we help?"
            required
        ></textarea>
    </div>

    <button type="submit" class="send-btn">SEND MESSAGE</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="global-block">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold">Global Presence</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="flag-node">
                        <img src="https://flagcdn.com/w640/lb.png" class="flag-img" alt="Lebanon">
                        <div class="flag-info">
                            <h5>Lebanon Branch</h5>
                            <p>lb@trustotech.com</p>
                            <small>Open: 09:00 - 18:00</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flag-node">
                        <img src="https://flagcdn.com/w640/sa.png" class="flag-img" alt="Saudi Arabia">
                        <div class="flag-info">
                            <h5>Saudi Arabia Branch</h5>
                            <p>sa@trustotech.com</p>
                            <small>Open: 08:00 - 17:00</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flag-node">
                        <img src="https://flagcdn.com/w640/tr.png" class="flag-img" alt="Turkey">
                        <div class="flag-info">
                            <h5>Turkey Branch</h5>
                            <p>tr@trustotech.com</p>
                            <small>Open: 09:00 - 18:00</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <footer class="footer-advanced">
                            <div class="container">
                                <div class="row g-4 mb-5">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="logo.jpeg" alt="Trusto Tech" class="footer-logo mb-3">
                                        <p class="text-secondary small pe-lg-5">Building the main foundation of business through transparency and profound respect for our partners.</p>
                                        <div class="social-links mt-4">
                                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-6 col-6">
                                        <h6 class="footer-heading">Company</h6>
                                        <ul class="footer-nav">
                                            <li><a href="about.html">Our Vision</a></li>
                                            <li><a href="programs.html">Services</a></li>
                                            <li><a href="partner.html">Be a Partner</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 col-md-6 col-6">
                                        <h6 class="footer-heading">Contact</h6>
                                        <ul class="footer-nav">
                                            <li><a href="mailto:Taha.sayyad@trustotech.com">Email Support</a></li>
                                            <li><p class="text-secondary small">Saudi Arabia & Pakistan</p></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="footer-heading">Join Our Mission</h6>
                                        <p class="text-secondary small">Subscribe to stay updated on our purpose-driven innovations.</p>
                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-bottom border-top border-secondary pt-4 text-center">
                                    <p class="text-secondary small mb-0">&copy; 2026 Trusto Tech. All Rights Reserved.</p>
                                </div>
                            </div>
                        </footer>
</body>
</html>