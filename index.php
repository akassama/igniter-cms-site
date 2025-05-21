<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title and Description -->
    <title>Igniter CMS - Modern Content Management System</title>
    <meta name="description" content="A robust and flexible Content Management System powered by CodeIgniter 4.">

    <!-- Keywords for SEO -->
    <meta name="keywords" content="Igniter CMS, CodeIgniter CMS, PHP CMS, Open Source CMS, Content Management System, Igniter, CMS, CodeIgniter">

    <!-- Author Information -->
    <meta name="author" content="Igniter CMS Team">

    <!-- Open Graph (Facebook) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Igniter CMS - Modern Content Management System">
    <meta property="og:description" content="A robust and flexible Content Management System powered by CodeIgniter 4.">
    <meta property="og:url" content="https://ignitercms.com/">
    <meta property="og:image" content="assets/img/igniter-cms-dashboard.png">
    <meta property="og:site_name" content="Igniter CMS">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Igniter CMS - Modern Content Management System">
    <meta name="twitter:description" content="A robust and flexible Content Management System powered by CodeIgniter 4.">
    <meta name="twitter:image" content="assets/img/igniter-cms-dashboard.png">
    <meta name="twitter:site" content="@IgniterCMS">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://ignitercms.com/">

    <!-- Robots and Indexing -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#ff6b35">
    <meta name="msapplication-TileColor" content="#ff6b35">

    <!-- Favicon and Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon/favicon-48x48.png">
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" />
    <link rel="manifest" href="assets/img/favicon/site.webmanifest" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- RemixIcon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Structured Data (JSON-LD) for Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Igniter CMS",
      "url": "https://ignitercms.com",
      "description": "A robust and flexible Content Management System powered by CodeIgniter 4.",
      "applicationCategory": "WebApplication",
      "operatingSystem": "Web",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "author": {
        "@type": "Organization",
        "name": "Igniter CMS"
      },
      "image": "assets/img/igniter-cms-dashboard.png"
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <img src="https://i.ibb.co/Pv4XWmxv/Igniter-CMS.jpg" alt="Igniter CMS Logo" height="30" class="me-2">
                Igniter CMS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#showcase">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://docs.ignitercms.com" target="_blank">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demo.ignitercms.com" target="_blank">Demo</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-primary" href="https://github.com/akassama/igniter-cms/archive/refs/heads/main.zip">Download</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Build Modern Websites with Ease</h1>
                    <p class="lead mb-4">Igniter CMS is a free, open-source content management system built on CodeIgniter, designed to help you manage various types of content with flexibility and extensibility.</p>
                    <div class="d-flex gap-3 mb-5">
                        <a href="https://github.com/akassama/igniter-cms/archive/refs/heads/main.zip" class="btn btn-primary btn-lg px-4">Download Now</a>
                        <a href="https://docs.ignitercms.com" class="btn btn-outline-primary btn-lg px-4" target="_blank">Documentation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dashboard-preview">
                        <img src="assets/img/igniter-cms-dashboard.png" alt="Igniter CMS Dashboard" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Powerful Features</h2>
                <p class="lead text-muted">Igniter CMS comes packed with everything you need to build modern websites quickly and efficiently.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="feature-icon">
                            <i class="ri-edit-2-fill"></i>
                        </div>
                        <h3>Content Management</h3>
                        <p class="text-muted">Easily manage blogs, pages, portfolios, events, and more with our intuitive interface.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="feature-icon">
                            <i class="ri-puzzle-fill"></i>
                        </div>
                        <h3>Extensible</h3>
                        <p class="text-muted">Extend functionality with modules and themes to suit your specific needs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="feature-icon">
                            <i class="ri-flashlight-fill"></i>
                        </div>
                        <h3>Built on CodeIgniter</h3>
                        <p class="text-muted">Leverage the power and simplicity of the CodeIgniter PHP framework.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="feature-icon">
                            <i class="ri-smartphone-fill"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p class="text-muted">Beautiful, mobile-friendly interfaces that work on any device.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="feature-icon">
                            <i class="ri-shield-check-fill"></i>
                        </div>
                        <h3>Secure</h3>
                        <p class="text-muted">Built with security in mind to protect your content and users.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="feature-icon">
                            <i class="ri-team-fill"></i>
                        </div>
                        <h3>User Management</h3>
                        <p class="text-muted">Flexible user roles and permissions system for complete control.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section id="showcase" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Websites Using Igniter CMS</h2>
                <p class="lead text-muted">See how others are using Igniter CMS to power their websites.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="site-showcase text-center">
                        <img src="assets/img/site/ak-tools.png" alt="AK Tools" class="img-fluid mb-3">
                        <h4>AK Tools</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="site-showcase text-center">
                        <img src="assets/img/site/gamsecure-tech.png" alt="GamsecureTech" class="img-fluid mb-3">
                        <h4>GamsecureTech</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="site-showcase text-center">
                        <img src="assets/img/site/akassama-home.png" alt="GambiaNewsHub" class="img-fluid mb-3">
                        <h4>GambiaNewsHub</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary-gradient text-white">
        <div class="container py-5 text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
            <p class="lead mb-5 opacity-75">Join thousands of developers and businesses using Igniter CMS to power their websites.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://github.com/akassama/igniter-cms/archive/refs/heads/main.zip" class="btn btn-light btn-lg px-4">Download Now</a>
                <a href="https://demo.ignitercms.com" class="btn btn-outline-light btn-lg px-4" target="_blank">View Demo</a>
            </div>
        </div>
    </section>

    <!-- Themes Section -->
    <section id="themes" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Beautiful Themes</h2>
                <p class="lead text-muted">Choose from our professionally designed themes to get started quickly.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden theme-card">
                        <img src="https://placehold.co/600x400/ff6b35/white?text=Business" class="card-img-top" alt="Business Theme">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Business</h5>
                            <p class="card-text text-muted flex-grow-1">Professional theme perfect for corporate websites and business services with multiple layout options.</p>
                            <a href="https://themes.ignitercms.com/business" class="btn btn-outline-primary w-100 mt-auto" target="_blank">View Theme</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden theme-card">
                        <img src="https://placehold.co/600x400/004e89/white?text=Portfolio" class="card-img-top" alt="Portfolio Theme">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Portfolio</h5>
                            <p class="card-text text-muted flex-grow-1">Showcase your work with this elegant portfolio theme featuring gallery and project pages.</p>
                            <a href="https://themes.ignitercms.com/portfolio" class="btn btn-outline-primary w-100 mt-auto" target="_blank">View Theme</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden theme-card">
                        <img src="https://placehold.co/600x400/292929/white?text=Shop" class="card-img-top" alt="Shop Theme">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Shop</h5>
                            <p class="card-text text-muted flex-grow-1">Complete e-commerce solution with product catalog, cart, and checkout functionality.</p>
                            <a href="https://themes.ignitercms.com/shop" class="btn btn-outline-primary w-100 mt-auto" target="_blank">View Theme</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden theme-card">
                        <img src="https://placehold.co/600x400/6c757d/white?text=Blog" class="card-img-top" alt="Blog Theme">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Blog</h5>
                            <p class="card-text text-muted flex-grow-1">Clean and modern theme optimized for content creators with multiple post layouts.</p>
                            <a href="https://themes.ignitercms.com/blog" class="btn btn-outline-primary w-100 mt-auto" target="_blank">View Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://themes.ignitercms.com" class="btn btn-primary px-4" target="_blank">Browse All Themes</a>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section id="support" class="support-section">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Support Igniter CMS</h2>
            <p class="mb-5">If you find this project helpful, consider buying me a coffee to support ongoing development:</p>
            <a href="https://www.buymeacoffee.com/akassama" target="_blank">
                <img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" width="180">
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-5 text-white">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="text-primary mb-4">
                        <i class="ri-fire-fill me-2"></i>Igniter CMS
                    </h5>
                    <p>A free, open-source content management system built on CodeIgniter PHP framework.</p>
                    <p class="css-5g6h7e">Maintained by <a href="https://x.com/abdouliekassama">A. Kassama</a> and contributors</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="https://github.com/akassama/igniter-cms" class="social-icon text-decoration-none"><i class="ri-github-fill"></i></a>
                        <a href="https://x.com/abdouliekassama" class="social-icon text-decoration-none"><i class="ri-twitter-fill"></i></a>
                        <a href="https://akassama.dev" class="social-icon text-decoration-none"><i class="ri-global-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">Resources</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://docs.ignitercms.com" class="footer-link" target="_blank">Documentation</a></li>
                        <li class="mb-2"><a href="https://github.com/akassama/igniter-cms/archive/refs/heads/main.zip" class="footer-link">Download</a></li>
                        <li class="mb-2"><a href="https://themes.ignitercms.com" class="footer-link">Themes</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://blog.ignitercms.com" class="footer-link">Blog</a></li>
                        <li class="mb-2"><a href="https://github.com/akassama/igniter-cms" class="footer-link">Contribute</a></li>
                        <li class="mb-2"><a href="https://github.com/akassama/igniter-cms/issues" class="footer-link">Issue Tracker</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://www.buymeacoffee.com/akassama" class="footer-link" target="_blank">Buy Me a Coffee</a></li>
                        <li class="mb-2"><a href="mailto:info@ignitercms.com" class="footer-link">Contact</a></li>
                        <li class="mb-2"><a href="https://opensource.org/license/mit" class="footer-link" target="_blank">License</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-4">Demo</h5>
                    <a href="https://demo.ignitercms.com" class="btn btn-outline-primary" target="_blank">View Demo Site</a>
                </div>
            </div>
        </div>
        <div class="border-top border-dark py-4">
            <div class="container text-center text-muted">
                <p class="mb-0">&copy; 2023 Igniter CMS. All rights reserved. Built with CodeIgniter and passion.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>