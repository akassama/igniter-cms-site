<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igniter CMS - Modern Content Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- AOS Library CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--favicon [https://realfavicongenerator.net/]-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon/favicon-48x48.png">
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" />
    <link rel="manifest" href="assets/img/favicon/site.webmanifest" />
    </head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://i.ibb.co/Pv4XWmxv/Igniter-CMS.jpg" alt="Igniter CMS Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
                Igniter CMS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/akassama/igniter-cms" target="_blank">Getting Started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demo.igniter-cms.aktools.net/" target="_blank">Demo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://igniter-cms.aktools.net/docs" target="_blank">Documentation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h1 class="display-3 fw-bold text-white mb-4  animate__animated animate__fadeInDown">Igniter CMS</h1>
            <p class="lead text-white fs-4 mb-5 animate__animated animate__fadeInUp">A powerful, versatile Content Management System built on CodeIgniter 4.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://github.com/akassama/igniter-cms" target="_blank" class="btn btn-primary btn-lg px-5 animate__animated animate__fadeIn">View Project</a>
                <a href="https://demo.igniter-cms.aktools.net" target="_blank" class="btn btn-outline-light btn-lg px-5 animate__animated animate__fadeIn">Live Demo</a>
            </div>
        </div>
    </section>

    <!-- Split Section -->
    <section id="about" class="py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Empower Your Digital Presence</h1>
                    <p class="lead">Igniter CMS is a free, open-source content management system, built on top of the CodeIgniter PHP framework.</p>
                    <p>With Igniter CMS, you can manage various types of content, including blogs, pages, portfolios, events, and more. It's flexible, extensible, and designed to help you build modern websites with ease.</p>
                    <a href="https://igniter-cms.aktools.net/docs" class="btn btn-outline-primary btn-lg mt-3">Read Documentation</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/igniter-cms-dashboard.png" alt="Igniter CMS Overview" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">Key Features</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInLeft">
                    <div class="feature-card card h-100 p-4 shadow-sm text-center">
                        <img src="assets/img/user-authentication.jpg" alt="User Authentication System" class="img-fluid rounded mb-3">
                        <h5 class="card-title">User Authentication System</h5>
                        <p class="card-text">Secure registration, login, password recovery, and account management for seamless user experiences.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp">
                    <div class="feature-card card h-100 p-4 shadow-sm text-center">
                        <img src="assets/img/admin-panel.jpg" alt="Admin Panel" class="img-fluid rounded mb-3">
                        <h5 class="card-title">Admin Panel</h5>
                        <p class="card-text">Manage users, roles, activities, and configurations with ease.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInRight">
                    <div class="feature-card card h-100 p-4 shadow-sm text-center">
                        <img src="assets/img/file-management.jpg" alt="Media & File Management" class="img-fluid rounded mb-3">
                        <h5 class="card-title">Media & File Management</h5>
                        <p class="card-text">Upload, organize, and manage files and media assets effortlessly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInLeft">
                    <div class="feature-card card h-100 p-4 shadow-sm text-center">
                        <img src="assets/img/cms-module.jpg" alt="Comprehensive CMS" class="img-fluid rounded mb-3">
                        <h5 class="card-title">Comprehensive CMS</h5>
                        <p class="card-text">Manage blogs, pages, portfolios, events, testimonials, FAQs, and more—all from one intuitive interface.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp">
                    <div class="feature-card card h-100 p-4 shadow-sm text-center">
                        <img src="assets/img/ecommerce-module.jpg" alt="E-commerce Module" class="img-fluid rounded mb-3">
                        <h5 class="card-title">E-commerce Module</h5>
                        <p class="card-text">Basic e-commerce functionality for product and category management.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInRight">
                    <div class="feature-card card h-100 p-4 shadow-sm text-center">
                        <img src="assets/img/api-ntegration.jpg" alt="API Integration" class="img-fluid rounded mb-3">
                        <h5 class="card-title">API Integration</h5>
                        <p class="card-text">Fetch-only RESTful API for retrieving CMS data, enabling seamless integration with external systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Icon Features Section -->
  <section id="icon-features" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Why Choose Igniter CMS?</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="icon-feature">
            <i class="fas fa-cubes fa-3x mb-3"></i>
            <h4>Flexible & Fully Extensible</h4>
            <p>Easily extend the core functionality with plugins and modules.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-feature">
            <i class="fas fa-palette fa-3x mb-3"></i>
            <h4>Customize Theme Designs</h4>
            <p>Create unique designs with customizable themes.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-feature">
            <i class="fas fa-search fa-3x mb-3"></i>
            <h4>Search Engine Friendly</h4>
            <p>Optimized for SEO to help your website rank higher.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-feature">
            <i class="fas fa-globe fa-3x mb-3"></i>
            <h4>Multilingual</h4>
            <p>Supports multiple languages for global reach.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-feature">
            <i class="fas fa-rocket fa-3x mb-3"></i>
            <h4>Fast & Lightweight</h4>
            <p>Built for performance with minimal overhead.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-feature">
            <i class="fas fa-code fa-3x mb-3"></i>
            <h4>Open Source</h4>
            <p>Fully open-source and community-driven.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Websites Using Igniter CMS -->
    <section id="websites" class="py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h2 class="text-center mb-5">Websites Using Igniter CMS</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="assets/img/site/ak-tools.png" alt="AK Tools" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">AK Tools</h5>
                            <p class="card-text">A collection of useful online tools to simplify your life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="assets/img/site/gamsecure-tech.png" alt="GamsecureTech" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">GamsecureTech</h5>
                            <p class="card-text">A cybersecurity and IT consultancy firm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="assets/img/site/akassama.png" alt="AK Portfolio" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">AK Portfolio</h5>
                            <p class="card-text">Portfolio and blog site for Abdoulie Kassama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> Igniter CMS. All rights reserved.</p>
            <p>
                <a href="https://github.com/akassama/igniter-cms/blob/main/LICENSE" target="_blank" class="text-white">MIT License</a> |
                <a href="https://igniter-cms.aktools.net/docs" target="_blank" class="text-white">Documentation</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>