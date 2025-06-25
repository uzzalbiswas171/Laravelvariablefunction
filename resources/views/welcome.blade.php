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
    <!-- Example: Add a Bootstrap-styled HTML block with custom CSS -->
    <section class="bg-gray-100 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="fw-bold" style="color:#4250a0;">Why UzTech<br><span class="fw-bold" style="color:#4250a0;">HR and Payroll Software?</span></h2>
                    <p class="mt-4" style="font-size:1.1rem;">
                        UzTech Ltd. is doing relentless research on the HR and 
                        <span class="fw-bold" style="color:#4250a0;">Payroll software</span>. With this only one product, our fame has emerged overall Bangladesh by our only one product UzTech. With our all-pervading efforts, UzTech becomes one of the best 
                        <span class="fw-bold" style="color:#4250a0;">HR software in Bangladesh</span>. Our goal to make it 100% system based payroll software with your help.
                    </p>
                    <p>
                        In anticipation of your valuable contribution to UzTech family.<br>
                        Discover our best ever services
                    </p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="btn btn-success px-4 py-2 fw-bold shadow">More Details</a>
                        <a href="#" class="btn btn-outline-dark px-4 py-2 fw-bold shadow">Best Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://www.shutterstock.com/image-vector/salary-payroll-system-online-income-260nw-2141983465.jpg" alt="HR and Payroll Software Illustration" class="img-fluid" style="max-width: 400px;">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="https://kit8.net/wp-content/uploads/edd/2022/04/Spescialist_kit8net-Collection-Header.jpg" alt="Specialty Illustration" class="img-fluid" style="max-width: 350px;">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Our <span style="color:#4250a0;">Specialty</span></h2>
                    <p>
                        UzTech is customized cloud-based payroll software. Our team is dedicated to customization of the HR & Payroll software as per the client’s requirements.
                    </p>
                    <ul class="list-unstyled">
                        <li>• Informative design and user-friendly environment.</li>
                        <li>• Web-based solution using most advanced dot net technology.</li>
                        <li>• Internal auditing and transaction history check back system.</li>
                        <li>• Assurance lifetime update facility as per labour law gazette.</li>
                        <li>• Instant support using licensed team viewer and Skype.</li>
                        <li>• Flexible to customize facility & Pluggability with any ERP.</li>
                        <li>• Reducing manpower & assuring rich MIS.</li>
                        <li>• Training on payroll software and providing skilled operators.</li>
                        <li>• All type of attendance device integration facility to UzTech.</li>
                        <li>• Providing attendance device with warranty and free service.</li>
                        <li>• Providing dedicated UzTech expert at implementation period.</li>
                        <li>• Software implementation period maximum of 1 to 2 months.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section style="background:#4250a0; color:#fff; min-height:500px; display:flex; align-items:center;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4" style="color:#fff;">Exciting Feature of <span style="color:#ffe066;">UzTech</span></h2>
                    <p class="mb-4" style="font-size:1.1rem;">
                        The striking features of the UzTech are illuminated by prolonged practical experience. We are releasing new versions regularly with some additional features added.
                    </p>
                    <ul class="mb-0" style="font-size:1rem;">
                        <li>Extreme faster attendance process & payroll generate.</li>
                        <li>Multiple compliance documentation simultaneously.</li>
                        <li>Multiple layers' approval for all manual entries.</li>
                        <li>Mobile & tab responsive and use like the mobile app.</li>
                        <li>Appropriate usage of Logo, Photo, Sign & QR code.</li>
                        <li>Performance appraisal by custom criteria & auto increment.</li>
                        <li>Multi-layer access privilege and unlimited user.</li>
                        <li>Unlimited business intelligence reports adding facility by user.</li>
                        <li>Unlimited shift plan and rostering multiple shifts simultaneously.</li>
                        <li>All operation settings based, no need to customize frequently.</li>
                        <li>Used Oracle database to ensure the highest security and fastness.</li>
                        <li>All buyers' audit-related document customizes the facility.</li>
                        <li>Notification by Email, Mobile SMS and task reminder notice.</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://www.digitalhrms.com/blogs/assets/uploads/10_Best_Things_to_Consider_In_HRMS_Your_Ultimate_Guide_to_Best_HRMS_Software!.png" alt="UzTech Features Illustration" class="img-fluid" style="max-width: 400px;">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-5 text-center">We are always <span style="color:#4250a0;" class="fw-bold">Up to Date</span></h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <span style="background:#4250a0; border-radius:50%; width:80px; height:80px; display:flex; align-items:center; justify-content:center;">
                                <svg width="48" height="48" fill="none" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path d="M5 5h14v14H5V5zm2 2v10h10V7H7zm2 2h6v6H9V9z" fill="#222"/><path d="M9 13V9h6v4H9z" fill="#222"/></svg>
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">On time Gov. gazette update</h5>
                            <p class="mb-0 small">UzTech is continuously updated in alignment with the latest official government gazette notifications, ensuring accurate and on-time compliance.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <span style="background:#4250a0; border-radius:50%; width:80px; height:80px; display:flex; align-items:center; justify-content:center;">
                                <svg width="48" height="48" fill="none" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path d="M7 17l5-5 5 5M7 7h10" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Quick error correction</h5>
                            <p class="mb-0 small">UzTech ensures system reliability through proactive bug fixes and rapid error resolution.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <span style="background:#4250a0; border-radius:50%; width:80px; height:80px; display:flex; align-items:center; justify-content:center;">
                                <svg width="48" height="48" fill="none" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path d="M6 19V5h12v14H6zm2-2h8V7H8v10z" fill="#222"/></svg>
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Internal Audit</h5>
                            <p class="mb-0 small">UzTech features a built-in internal audit system, empowering management with transparent oversight and operational control.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <span style="background:#4250a0; border-radius:50%; width:80px; height:80px; display:flex; align-items:center; justify-content:center;">
                                <svg width="48" height="48" fill="none" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path d="M12 17a5 5 0 100-10 5 5 0 000 10z" stroke="#222" stroke-width="2"/><path d="M19.07 4.93a10 10 0 11-14.14 0" stroke="#222" stroke-width="2"/></svg>
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Support any attendance device</h5>
                            <p class="mb-0 small">UzTech offers seamless integration with a wide range of multi-brand attendance devices, ensuring smooth and flexible attendance management.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <span style="background:#4250a0; border-radius:50%; width:80px; height:80px; display:flex; align-items:center; justify-content:center;">
                                <svg width="48" height="48" fill="none" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><circle cx="12" cy="12" r="8" stroke="#222" stroke-width="2"/><path d="M12 8v4l3 3" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Less implementation time</h5>
                            <p class="mb-0 small">UzTech is designed for rapid deployment, ensuring a smooth and efficient implementation process with minimal downtime.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <span style="background:#4250a0; border-radius:50%; width:80px; height:80px; display:flex; align-items:center; justify-content:center;">
                                <svg width="48" height="48" fill="none" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path d="M17 11V7a5 5 0 00-10 0v4M7 17h10M12 17v2" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Unlimited Shift Roster</h5>
                            <p class="mb-0 small">UzTech offers dynamic management of unlimited shift rosters, tailored to complex workforce scheduling with ease and flexibility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p id="demo11"></p>
    <P id ="testScript"></P>
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
   
    <script>
        let currentYear = new Date().getFullYear();
        let number = 10;
        let result = number * 2; 
        document.getElementById("testScript").innerHTML = currentYear + "This is a test script to check if the script tag is working properly." + " The result of multiplying " + number + " by 2 is: " + result;
    </Script>
    <Script>

      //  document.getElementById("demo11").innerHTML = "jasdfjdsjfbsjdh ";
        const name="UZZAL Biswas";
        const profession="software engineer";
        document.getElementById("demo11").innerHTML = "My name is " + name + " and I am a " + profession;
      //  document.getElementById("demo11").innerHTML = "jasdfjdsjfbsjdh ";
        //document.write("My name is " + name + " and I am a " + profession) ;

    </Script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>