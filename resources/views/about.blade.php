<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Trusto Tech</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/aboutstyle.css')}}">
</head>
<body>
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


    <header class="about-header">
        <div class="container text-center text-white">
            <h1 class="fw-800">ABOUT US</h1>
            <p class="lead">Excellence in Telecom & Digital Solutions</p>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase fw-bold mb-3">Trusto Tech Story</h6>
                    <h2 class="section-title text-white">Your Partner in Digital Success</h2>
                    <p class="lead text-light">Trusto Tech is a premier software development firm dedicated to business excellence through constant innovation.</p>
                    <p class="text-secondary">We deliver strategy-driven IT solutions across various industries, exceeding expectations through deep industry insight and a thorough understanding of unique operational processes. Our team is committed to providing customizable, high-tier software that empowers global growth.</p>
                </div>
                <div class="col-lg-6">
                    <div class="video-container"><video class="video-box" controls><source src="{{ asset('images/video1.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-section section-dark py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="text-white fw-bold">OUR EXPERTISE LEVEL</h3>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>GRAPHIC DESIGN</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>WEB DESIGN</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>UI/UX</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>BRANDING</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>LOGO DESIGN</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>PHOTOGRAPHY</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>HTML/CSS</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill-wrapper">
                        <div class="skill-info"><span>JQUERY</span><span>75%</span></div>
                        <div class="progress-bar-container"><div class="progress-fill" style="--width: 75%;"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="mv-card">
                        <div class="mv-icon"><i class="fa-solid fa-rocket"></i></div>
                        <h3>Our Mission</h3>
                        <p>To deliver carrier-grade, mission-critical software solutions that empower enterprises to excel in the digital economy through security, reliability, and constant innovation.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mv-card">
                        <div class="mv-icon"><i class="fa-solid fa-eye"></i></div>
                        <h3>Our Vision</h3>
                        <p>To be the global benchmark for secure digital transformation, fostering a future where technology and trust are seamlessly integrated across every industry we serve.</p>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>