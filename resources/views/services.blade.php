<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Trusto Tech</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
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
    

    <header class="page-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-800 text-white">OUR SERVICES</h1>
            <p class="lead text-primary-light">Tailored Technology Solutions for Global Growth</p>
        </div>
    </header>

    <section class="section section-dark">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-brands fa-html5 icon-box"></i>
                        <h5>HTML5 Support</h5>
                        <p>Modern semantic web structures for high-performance and accessible experiences.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-brands fa-css3-alt icon-box"></i>
                        <h5>CSS3 Styling</h5>
                        <p>Advanced responsive layouts and sleek animations using the latest standards.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-brands fa-wordpress icon-box"></i>
                        <h5>WordPress Support</h5>
                        <p>Custom theme and plugin development for robust content management.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-solid fa-link icon-box"></i>
                        <h5>API Development</h5>
                        <p>Building secure and scalable APIs for seamless cross-platform integration.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-solid fa-code icon-box"></i>
                        <h5>Custom Web Dev</h5>
                        <p>Bespoke web applications designed to meet your specific strategic goals.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-solid fa-laptop-code icon-box"></i>
                        <h5>Custom App Dev</h5>
                        <p>End-to-end software engineering for complex enterprise-level requirements.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-solid fa-bezier-curve icon-box"></i>
                        <h5>UX/UI Design</h5>
                        <p>User-centric design focused on intuitive paths and premium aesthetics.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-solid fa-microchip icon-box"></i>
                        <h5>App Management</h5>
                        <p>Proactive performance monitoring and consistent system optimization.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-brands fa-android icon-box"></i>
                        <h5>Android Platform</h5>
                        <p>Native mobile applications optimized for the global Android ecosystem.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-brands fa-apple icon-box"></i>
                        <h5>iOS Platform</h5>
                        <p>High-security, premium mobile solutions built for the Apple ecosystem.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fa-brands fa-windows icon-box"></i>
                        <h5>Windows Platform</h5>
                        <p>Powerful desktop applications designed for professional Windows environments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section py-5">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-circle">
                            <span class="counter" data-target="10000">0</span>
                        </div>
                        <h5 class="stat-label">HAPPY CUSTOMERS</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-circle">
                            <span class="counter" data-target="15000">0</span>
                        </div>
                        <h5 class="stat-label">PROJECTS</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-circle">
                            <span class="counter" data-target="10">0</span>
                        </div>
                        <h5 class="stat-label">YEARS OF EXPERIENCE</h5>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="stat-circle">
                                <span class="counter" data-target="10">0</span>
                            </div>
                            <h5 class="stat-label">BRANCHES</h5>
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
    <script src="{{ asset('js/servicesscript.js') }}"></script>
</body>
</html>