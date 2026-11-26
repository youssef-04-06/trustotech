<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be a Partner | Trusto Tech</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/partner.css') }}">
</head>
<body class="partner-page">
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

    <header class="partner-hero">
        <div class="container text-center">
            <h1 class="main-title">BE A PARTNER</h1>
            <p class="hero-desc">Join our ecosystem of innovators and scale your business with Trusto Tech’s world-class proprietary solutions.</p>
        </div>
    </header>

    <section class="partner-split-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <h2 class="section-heading mb-5">Why Join Us <span class="text-blue">As a Partner?</span></h2>

                    <div class="why-item">
                        <h4><i class="fa-solid fa-chart-line"></i> Increasing your top line</h4>
                        <p>Unlock new revenue streams by offering our high-demand ERP and specialized software systems to your existing client base.</p>
                    </div>

                    <div class="why-item">
                        <h4><i class="fa-solid fa-seedling"></i> Growth with Trusto</h4>
                        <p>Benefit from our brand reputation and technical excellence to fast-track your market entry and business expansion.</p>
                    </div>

                    <div class="why-item">
                        <h4><i class="fa-solid fa-puzzle-piece"></i> Custom to your strength</h4>
                        <p>We adapt our partnership model to fit your specific expertise, whether you are a consultant, distributor, or integrator.</p>
                    </div>

                    <div class="why-item">
                        <h4><i class="fa-solid fa-hand-holding-heart"></i> Always investing in you</h4>
                        <p>From technical training to co-marketing budgets, we provide the tools you need to succeed long-term.</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="side-form-card">
                        <h3>Quick Inquiry</h3>
                        <p>Let's start the conversation.</p>
                        <form>
                            <input type="text" class="minimal-input" placeholder="Full Name">
                            <input type="email" class="minimal-input" placeholder="Work Email">
                            <button class="btn-blue-sm w-100">Send Interest</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="expect-section bg-darker">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800" alt="Team support" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-md-6">
                    <h2 class="section-heading">What you can <span class="text-blue">expect from us</span></h2>
                    <p class="lead-text">Complete transparency, dedicated account management, 24/7 technical support for your clients, and a continuous roadmap of innovative software updates that keep you ahead of the competition.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="expect-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6 order-md-2">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800" alt="Collaboration" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="section-heading">What we <span class="text-blue">expect from you</span></h2>
                    <p class="lead-text">Professional integrity, a deep understanding of your local market, and a commitment to delivering high-quality service that aligns with the Trusto Tech standard of excellence.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="assessment-block">
        <div class="container">
            <div class="assessment-header text-center mb-5">
                <h2>Start working with <span class="text-blue">Trusto today</span></h2>
                <p>Apply below for a preliminary assessment with our partnership team.</p>
            </div>

       <div class="form-wrapper-large">
    <form class="row g-4" method="POST" action="{{ route('partner.request.store') }}">
        @csrf

        <div class="col-md-6">
            <label class="form-label-blue">Name</label>
            <input type="text" name="name" class="main-input" placeholder="Enter name" required>
        </div>

        <div class="col-md-6">
            <label class="form-label-blue">Email</label>
            <input type="email" name="email" class="main-input" placeholder="Enter email" required>
        </div>

        <div class="col-md-6">
            <label class="form-label-blue">Phone</label>
            <input type="text" name="phone" class="main-input" placeholder="Include country code" required>
        </div>

        <div class="col-md-6">
            <label class="form-label-blue">Location</label>
            <input type="text" name="location" class="main-input" placeholder="City, Country" required>
        </div>

        <div class="col-12">
            <label class="form-label-blue">Company Name</label>
            <input type="text" name="company_name" class="main-input" placeholder="Registered Company Name" required>
        </div>

        <div class="col-12 text-center mt-5">
            <button type="submit" class="apply-btn">APPLY HERE</button>
        </div>
    </form>
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