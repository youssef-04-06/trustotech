<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Programs | Trusto Tech</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/programs.css') }}">
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
    <header class="programs-hero">
        <div class="container text-center">
            <h6 class="text-accent mb-2">SYSTEM SOLUTIONS</h6>
            <h1 class="hero-title text-white">PROPRIETARY SYSTEMS</h1>
            <p class="hero-subtitle">Specialized software designed to solve industry-specific challenges with precision and scale.</p>
        </div>
    </header>

    <section class="section section-dark">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="program-detail-card">
                        <div class="badge-icon"><i class="fa-solid fa-layer-group"></i></div>
                        <h2 class="text-white fw-bold">Trusto ERP System</h2>
                        <p class="node-text">Trusto Tech is a leading company in the industry of software development. A creator of high-end business solutions.</p>
                        <ul class="feature-list">
                            <li><i class="fa-solid fa-check text-primary"></i> Real-time Analytics & Reporting</li>
                            <li><i class="fa-solid fa-check text-primary"></i> Secure Cloud Data Integration</li>
                        </ul>
                        <button class="btn-primary-custom">Learn More</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="program-detail-card">
                        <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        <h2 class="text-white fw-bold">Online Class</h2>
                        <p class="node-text">The growth of online learning as a successful education delivery method for professionals and students globally.</p>
                        <ul class="feature-list">
                            <li><i class="fa-solid fa-check text-primary"></i> Live Virtual Classrooms</li>
                            <li><i class="fa-solid fa-check text-primary"></i> Performance Tracking</li>
                        </ul>
                        <button class="btn-primary-custom">Learn More</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="program-detail-card">
                        <div class="badge-icon"><i class="fa-solid fa-dumbbell"></i></div>
                        <h2 class="text-white fw-bold">Gorilla Gym</h2>
                        <p class="node-text">Gorilla is a project intended to assist exercise centers with monitoring the evaluation and membership growth.</p>
                        <ul class="feature-list">
                            <li><i class="fa-solid fa-check text-primary"></i> Biometric Access Support</li>
                            <li><i class="fa-solid fa-check text-primary"></i> Automated Billing Cycles</li>
                        </ul>
                        <button class="btn-primary-custom">Learn More</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="program-detail-card">
                        <div class="badge-icon"><i class="fa-solid fa-fire"></i></div>
                        <h2 class="text-white fw-bold">Phoenix System</h2>
                        <p class="node-text">In this system, there is coordination between the Doctor, Patient, Hospital, and Pharmacy management.</p>
                        <ul class="feature-list">
                            <li><i class="fa-solid fa-check text-primary"></i> Patient History Archiving</li>
                            <li><i class="fa-solid fa-check text-primary"></i> HIPAA Compliant Security</li>
                        </ul>
                        <button class="btn-primary-custom">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section build-excellence">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white">How We Build Excellence</h2>
                <p class="hero-subtitle">Our systems undergo a rigorous 4-stage development lifecycle.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="process-node">
                        <div class="node-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div class="node-content">
                            <span class="step-badge">STEP 01</span>
                            <h5 class="node-title">Discovery</h5>
                            <p class="node-text">In-depth analysis of business logic and operational pain points.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-node">
                        <div class="node-icon"><i class="fa-solid fa-sitemap"></i></div>
                        <div class="node-content">
                            <span class="step-badge">STEP 02</span>
                            <h5 class="node-title">Architecture</h5>
                            <p class="node-text">Designing secure, scalable, and mission-critical system frameworks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-node">
                        <div class="node-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <div class="node-content">
                            <span class="step-badge">STEP 03</span>
                            <h5 class="node-title">Development</h5>
                            <p class="node-text">Agile engineering using modern high-performance stacks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-node">
                        <div class="node-icon"><i class="fa-solid fa-rocket"></i></div>
                        <div class="node-content">
                            <span class="step-badge">STEP 04</span>
                            <h5 class="node-title">Deployment</h5>
                            <p class="node-text">Zero-downtime launch followed by 24/7 proactive monitoring.</p>
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