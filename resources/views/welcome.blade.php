<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html { scroll-behavior: smooth; }
        section { padding: 60px 0; }
        .navbar-nav .nav-link { cursor: pointer; }
        footer { background: #222; color: #fff; padding: 30px 0; }
        .footer-links a { color: #fff; margin-right: 20px; text-decoration: none; }
        .footer-links a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <!-- App Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">SoftCo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#documentation">Documentation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#categories">Categories</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="bg-light text-center">
        <div class="container">
            <h1 class="display-4">Welcome to SoftCo</h1>
            <p class="lead">Your trusted partner for software solutions, IT support, and training.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2 class="mb-5 text-center">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Website Development</h5>
                            <p class="card-text">Custom, responsive, and scalable websites for your business needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Apps Development</h5>
                            <p class="card-text">Mobile and desktop applications tailored for performance and usability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">IT Solution</h5>
                            <p class="card-text">Comprehensive IT solutions to streamline your business operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Embedded Software</h5>
                            <p class="card-text">Reliable embedded systems for hardware integration and automation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">IT Training</h5>
                            <p class="card-text">Professional IT training programs for individuals and organizations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">IT Support</h5>
                            <p class="card-text">24/7 IT support to keep your systems running smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation Section -->
    <section id="documentation" class="bg-light">
        <div class="container">
            <h2 class="mb-5 text-center">Service Documentation</h2>
            <div class="accordion" id="serviceDocs">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingWeb">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWeb">
                            Website Development
                        </button>
                    </h2>
                    <div id="collapseWeb" class="accordion-collapse collapse show" data-bs-parent="#serviceDocs">
                        <div class="accordion-body">
                            <ul>
                                <li>Requirement analysis and planning</li>
                                <li>UI/UX design and prototyping</li>
                                <li>Frontend and backend development</li>
                                <li>Testing and deployment</li>
                                <li>Maintenance and support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingApps">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseApps">
                            Apps Development
                        </button>
                    </h2>
                    <div id="collapseApps" class="accordion-collapse collapse" data-bs-parent="#serviceDocs">
                        <div class="accordion-body">
                            <ul>
                                <li>Platform selection (iOS, Android, Desktop)</li>
                                <li>App architecture and design</li>
                                <li>API integration</li>
                                <li>Testing and publishing</li>
                                <li>Ongoing updates</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingIT">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIT">
                            IT Solution
                        </button>
                    </h2>
                    <div id="collapseIT" class="accordion-collapse collapse" data-bs-parent="#serviceDocs">
                        <div class="accordion-body">
                            <ul>
                                <li>Network setup and management</li>
                                <li>Cloud solutions</li>
                                <li>Security and compliance</li>
                                <li>Consulting and optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEmbedded">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmbedded">
                            Embedded Software
                        </button>
                    </h2>
                    <div id="collapseEmbedded" class="accordion-collapse collapse" data-bs-parent="#serviceDocs">
                        <div class="accordion-body">
                            <ul>
                                <li>Firmware development</li>
                                <li>Microcontroller programming</li>
                                <li>Device integration</li>
                                <li>Testing and validation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTraining">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTraining">
                            IT Training
                        </button>
                    </h2>
                    <div id="collapseTraining" class="accordion-collapse collapse" data-bs-parent="#serviceDocs">
                        <div class="accordion-body">
                            <ul>
                                <li>Customized training modules</li>
                                <li>Hands-on workshops</li>
                                <li>Certification programs</li>
                                <li>Online and onsite options</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSupport">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSupport">
                            IT Support
                        </button>
                    </h2>
                    <div id="collapseSupport" class="accordion-collapse collapse" data-bs-parent="#serviceDocs">
                        <div class="accordion-body">
                            <ul>
                                <li>Remote and onsite support</li>
                                <li>System monitoring</li>
                                <li>Issue resolution</li>
                                <li>Preventive maintenance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories">
        <div class="container">
            <h2 class="mb-5 text-center">Categories</h2>
            <div class="row text-center">
                <div class="col-md-2 col-6 mb-3">
                    <a href="#career" class="btn btn-outline-primary w-100">Career</a>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <a href="#contact" class="btn btn-outline-primary w-100">Contact Us</a>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <a href="#about" class="btn btn-outline-primary w-100">About Us</a>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <a href="#terms" class="btn btn-outline-primary w-100">Terms</a>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <a href="#gallery" class="btn btn-outline-primary w-100">Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="footer-links mb-3">
                <a href="#career">Career</a>
                <a href="#contact">Contact Us</a>
                <a href="#about">About Us</a>
                <a href="#terms">Terms</a>
                <a href="#gallery">Gallery</a>
            </div>
            <p>&copy; {{ date('Y') }} SoftCo. All rights reserved.</p>
        </div>
    </footer>

    <!-- Optional: Category Sections (hidden, for anchor links) -->
    <div id="career" style="display:none;"></div>
    <div id="contact" style="display:none;"></div>
    <div id="about" style="display:none;"></div>
    <div id="terms" style="display:none;"></div>
    <div id="gallery" style="display:none;"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>