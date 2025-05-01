<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the World - Premium Tour Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #0b5ed7;
            --accent-color: #ff6b6b;
            --dark-color: #212529;
            --light-color: #f8f9fa;
        }
        
        body {
            background-color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
        
        /* Navbar with gradient and shadow */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, #4a6bff 100%);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            background: rgba(13, 110, 253, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            padding: 8px 15px !important;
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 70%;
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        /* Hero Section with animated gradient */
        .hero {
            background: linear-gradient(-45deg, #0d6efd, #4a6bff, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            padding: 150px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            animation: gradientBG 15s ease infinite;
        }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1506929562872-bb421503ef21?auto=format&fit=crop&q=80&w=1000') no-repeat center center/cover;
            opacity: 0.15;
            z-index: 0;
        }
        
        .hero .container {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        .hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        
        /* Search Box */
        .search-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50px;
            padding: 10px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .search-box:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }
        
        .search-box input {
            border: none;
            background: transparent;
            padding: 15px 20px;
            width: 70%;
            outline: none;
            font-size: 1rem;
        }
        
        .search-box button {
            border: none;
            background: var(--primary-color);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .search-box button:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        /* Section Titles */
        .section-title {
            position: relative;
            margin: 80px 0 50px;
            font-weight: 700;
            font-size: 2.5rem;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }
        
        /* Cards with hover effects */
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0, 1);
            margin-bottom: 30px;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover .card-img-top {
            transform: scale(1.1);
        }
        
        .card-body {
            padding: 25px;
        }
        
        .card-title {
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .card-text {
            color: #666;
            margin-bottom: 20px;
        }
        
        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }
        
        .btn-outline-primary {
            border-color: var(--primary-color);
            color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }
        
        /* Destination Gallery with Masonry effect */
        .destination-gallery {
            column-count: 3;
            column-gap: 20px;
        }
        
        .destination-item {
            break-inside: avoid;
            margin-bottom: 20px;
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .destination-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .destination-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .destination-item:hover .destination-info {
            opacity: 1;
        }
        
        /* Testimonials with carousel */
        .testimonial-carousel {
            padding: 30px 0;
        }
        
        .testimonial-item {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 15px;
            position: relative;
        }
        
        .testimonial-item::before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 60px;
            color: rgba(13, 110, 253, 0.1);
            position: absolute;
            top: 10px;
            left: 10px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }
        
        .author-info h5 {
            margin-bottom: 0;
            font-weight: 600;
        }
        
        .author-info p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0;
        }
        
        /* Stats Section */
        .stats-section {
            background: linear-gradient(rgba(13, 110, 253, 0.9), rgba(13, 110, 253, 0.9)), url('https://images.unsplash.com/photo-1508672019048-805c876b67e2?auto=format&fit=crop&q=80&w=1000') no-repeat center center/cover;
            padding: 80px 0;
            color: white;
            text-align: center;
        }
        
        .stat-item {
            padding: 20px;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        /* Newsletter */
        .newsletter {
            background-color: var(--light-color);
            padding: 80px 0;
            text-align: center;
        }
        
        .newsletter-form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            background: white;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .newsletter-form input {
            flex: 1;
            border: none;
            padding: 20px;
            outline: none;
            font-size: 1rem;
        }
        
        .newsletter-form button {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .newsletter-form button:hover {
            background: var(--secondary-color);
        }
        
        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: #adb5bd;
            font-size: 0.9rem;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .destination-gallery {
                column-count: 2;
            }
            
            .hero h1 {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero {
                padding: 100px 0;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .search-box {
                flex-direction: column;
                border-radius: 15px;
            }
            
            .search-box input {
                width: 100%;
                border-radius: 15px 15px 0 0;
            }
            
            .search-box button {
                width: 100%;
                border-radius: 0 0 15px 15px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .destination-gallery {
                column-count: 1;
            }
        }
        
        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .hero {
                padding: 80px 0;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-globe-americas"></i> TourVista
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#destinations">Destinations</a></li>
                <li class="nav-item"><a class="nav-link" href="#packages">Packages</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i> Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt me-2"></i>Login</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="fas fa-user-plus me-2"></i>Register</a></li>
                        
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Wishlist</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-history me-2"></i>Booking History</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
        <h1 class="animate__animated animate__fadeInDown">Discover Your Perfect Getaway</h1>
        <p class="animate__animated animate__fadeIn animate__delay-1s">Explore breathtaking destinations with our expertly crafted travel experiences</p>
        
        <div class="search-box animate__animated animate__fadeInUp animate__delay-1s d-flex">
            <input type="text" placeholder="Where would you like to go?">
            <button type="submit"><i class="fas fa-search me-2"></i> Search</button>
        </div>
        
        <div class="mt-5 animate__animated animate__fadeIn animate__delay-2s">
            <a href="#destinations" class="btn btn-primary btn-lg me-3"><i class="fas fa-map-marked-alt me-2"></i> Explore</a>
            <a href="#packages" class="btn btn-outline-light btn-lg"><i class="fas fa-suitcase me-2"></i> Packages</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-in">
                <h2 class="section-title">Why Choose TourVista?</h2>
                <p class="lead">We're dedicated to creating unforgettable travel experiences tailored to your preferences.</p>
                <p>Founded in 2010, TourVista has grown from a small local operator to an internationally recognized travel company with offices in 12 countries. Our team of travel experts has visited every destination we offer, ensuring first-hand knowledge and the best recommendations.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <div>
                                <h5>Verified Stays</h5>
                                <p class="mb-0">All accommodations personally inspected</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-headset fa-2x"></i>
                            </div>
                            <div>
                                <h5>24/7 Support</h5>
                                <p class="mb-0">Dedicated assistance anytime</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-lock fa-2x"></i>
                            </div>
                            <div>
                                <h5>Secure Booking</h5>
                                <p class="mb-0">Your data is always protected</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-hand-holding-usd fa-2x"></i>
                            </div>
                            <div>
                                <h5>Best Price</h5>
                                <p class="mb-0">Guaranteed lowest rates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-in">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&q=80&w=1000" alt="About Us" class="img-fluid rounded-lg shadow-lg">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 m-4 rounded shadow-sm">
                        <h4 class="mb-0">15,000+ Happy Travelers</h4>
                        <div class="d-flex align-items-center mt-2">
                            <div class="text-warning me-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.9/5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Destinations -->
<section id="destinations" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title fade-in">Popular Destinations</h2>
        <p class="text-center mb-5 fade-in">Explore our most sought-after travel destinations around the globe</p>
        
        <div class="row">
            <!-- Paris -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1431274172761-fca41d930114?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Paris" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Paris, France</h5>
                        <p class="card-text">The City of Lights with iconic landmarks like the Eiffel Tower and Louvre.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Bali -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                <img src="https://www.balisurfingcamp.com/wp-content/uploads/2023/07/image-62.jpeg" class="card-img-top destination-img" alt="Bali" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Bali, Indonesia</h5>
                        <p class="card-text">Tropical paradise with lush jungles, beaches, and vibrant culture.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- New York -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1485871981521-5b1fd3805eee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="New York" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">New York, USA</h5>
                        <p class="card-text">The bustling metropolis with iconic skyscrapers and Central Park.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Tokyo -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Tokyo" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Tokyo, Japan</h5>
                        <p class="card-text">Where ancient temples meet futuristic technology and neon lights.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Cape Town -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Cape Town" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Cape Town, South Africa</h5>
                        <p class="card-text">Stunning coastal city with Table Mountain and penguin beaches.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Sydney -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1523428096881-5bd79d043006?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Sydney" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Sydney, Australia</h5>
                        <p class="card-text">Iconic harbor city with the Opera House and Bondi Beach.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Rome -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Rome" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Rome, Italy</h5>
                        <p class="card-text">The Eternal City with Colosseum, Vatican, and delicious cuisine.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Dubai -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Dubai" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Dubai, UAE</h5>
                        <p class="card-text">Ultra-modern city with Burj Khalifa and luxury shopping.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Santorini -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Santorini" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Santorini, Greece</h5>
                        <p class="card-text">White-washed buildings with blue domes overlooking the Aegean Sea.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Rio de Janeiro -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Rio de Janeiro" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Rio de Janeiro, Brazil</h5>
                        <p class="card-text">Vibrant city with Christ the Redeemer and Copacabana Beach.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Kyoto -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1492571350019-22de08371fd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Kyoto" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Kyoto, Japan</h5>
                        <p class="card-text">Traditional Japan with temples, cherry blossoms, and geisha culture.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Venice -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1514890547357-a9ee288728e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Venice" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Venice, Italy</h5>
                        <p class="card-text">Romantic city of canals, gondolas, and historic architecture.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Bangkok -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1563492065599-3520f775eeed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Bangkok" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Bangkok, Thailand</h5>
                        <p class="card-text">Vibrant city with golden temples, floating markets, and street food.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Barcelona -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1523531294919-4bcd7c65e216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Barcelona" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Barcelona, Spain</h5>
                        <p class="card-text">Gaudi's architectural wonders and Mediterranean beaches.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>

            <!-- Machu Picchu -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1526397751294-331021109fbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="card-img-top destination-img" alt="Machu Picchu" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Machu Picchu, Peru</h5>
                        <p class="card-text">Ancient Incan citadel nestled in the Andes Mountains.</p>
                        <a href="#" class="btn btn-primary">Explore Packages</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 fade-in">
    <a href="#" class="btn btn-outline-primary btn-lg">View All Destinations <i class="fas fa-arrow-right ms-2"></i></a>
</div>
    </div>
</section>


<!-- Travel Packages -->
<section id="packages" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-3" data-aos="fade-up">Featured Packages</h2>
        <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Handpicked travel experiences for every type of traveler</p>

        @php
            $packages = [
                ['Adventure', 'Thrilling experiences for adrenaline seekers', 799, 'https://static.iwmbuzz.com/wp-content/uploads/2021/07/adventure-travel-top-10-best-adventurous-places-in-the-world-see-below-2-920x518.jpeg'],
                ['Romantic', 'Perfect getaways for couples', 1299, 'https://img.veenaworld.com/wp-content/uploads/2022/06/10-Most-Romantic-Places-in-the-World.jpg?imwidth=1300'],
                ['Family', 'Fun-filled vacations for all ages', 899, 'https://ihplb.b-cdn.net/wp-content/uploads/2020/12/hong-kong.jpg'],
                ['Luxury', 'Premium experiences with top-tier service', 2499, 'https://www.orientrailjourneys.com/storage/blogs/4cc071d75d9f1512a44c33353058d0ed.jpg'],
                ['Budget', 'Affordable travel without compromise', 499, 'https://c.ndtvimg.com/2023-06/vj9lhlv8_budget-countries_625x300_06_June_23.jpg'],
                ['Wildlife', 'Close encounters with nature', 1099, 'https://www.mashpilodge.com/wp-content/uploads/2023/12/Jaguar.webp']
            ];
        @endphp

        <div class="row">
            @foreach ($packages as $index => $package)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ $package[3] }}?auto=format&fit=crop&w=800&q=80" class="card-img-top img-hover" alt="{{ $package[0] }}" loading="lazy">
                        <div class="position-absolute top-0 end-0 bg-gradient px-3 py-2 rounded-bottom-start text-white fw-bold">
                            ${{ $package[2] }}
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title">{{ $package[0] }} Package</h5>
                        <p class="card-text">{{ $package[1] }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="text-warning">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                <span class="text-muted ms-2">({{ rand(20, 150) }})</span>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm rounded-pill px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn btn-outline-primary btn-lg rounded-pill px-5">View All Packages <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 mb-4 mb-md-0 fade-in">
                <div class="stat-item">
                    <div class="stat-number" data-count="12500">0</div>
                    <div class="stat-label">Happy Travelers</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0 fade-in">
                <div class="stat-item">
                    <div class="stat-number" data-count="350">0</div>
                    <div class="stat-label">Destinations</div>
                </div>
            </div>
            <div class="col-md-3 col-6 fade-in">
                <div class="stat-item">
                    <div class="stat-number" data-count="24">0</div>
                    <div class="stat-label">Countries</div>
                </div>
            </div>
            <div class="col-md-3 col-6 fade-in">
                <div class="stat-item">
                    <div class="stat-number" data-count="98">0</div>
                    <div class="stat-label">% Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="reviews" class="py-5 bg-light">
    <style>
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .testimonial-item {
            background: white;
            border-radius: 1.25rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
        }

        .testimonial-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.12);
        }

        .testimonial-item p {
            font-size: 1.1rem;
            font-style: italic;
        }

        .testimonial-author {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .testimonial-author img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #007bff;
            transition: transform 0.3s ease;
        }

        .testimonial-author img:hover {
            transform: scale(1.1);
        }

        .author-info h5 {
            margin: 0.75rem 0 0.25rem;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #007bff;
            padding: 15px;
            border-radius: 50%;
        }

        [data-aos] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease;
        }

        [data-aos].aos-animate {
            opacity: 1;
            transform: none;
        }
    </style>

    <div class="container">
        <h2 class="section-title text-center mb-3" data-aos="fade-up">Traveler Stories</h2>
        <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Don't just take our word for it - hear from our travelers</p>

        <div class="testimonial-carousel" data-aos="fade-up" data-aos-delay="200">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    @foreach([
                        ['John Doe', 'Our honeymoon in Bali was magical thanks to TourVista! Every detail was perfect.', 'New York, USA'],
                        ['Jane Smith', 'The wildlife safari in Kenya exceeded all expectations. Our guide was incredibly knowledgeable.', 'London, UK'],
                        ['Alex Johnson', 'The family package to Japan was ideal for our kids. So many great activities!', 'Sydney, Australia'],
                        ['Emily Clark', 'I travel solo often and TourVista made me feel safe and cared for throughout my trip.', 'Toronto, Canada']
                    ] as $index => $testimonial)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="testimonial-item mx-auto" style="max-width: 700px;">
                            <p class="mb-4">“{{ $testimonial[1] }}”</p>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/{{ $index % 2 === 0 ? 'men' : 'women' }}/{{ rand(10,90) }}.jpg" alt="{{ $testimonial[0] }}">
                                <div class="author-info">
                                    <h5>{{ $testimonial[0] }}</h5>
                                    <p class="text-muted">{{ $testimonial[2] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- AOS Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('[data-aos]');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('aos-animate');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            elements.forEach(el => observer.observe(el));
        });
    </script>
</section>

<!-- Blog Section -->
<section id="blog" class="py-5">
    <style>
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .card {
            border-radius: 1.25rem;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.12);
        }
        .card img {
            /* height: 100%; */
            object-fit: cover;
        }
        [data-aos] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease;
        }
        [data-aos].aos-animate {
            opacity: 1;
            transform: none;
        }
    </style>

    <div class="container">
        <h2 class="section-title text-center mb-3" data-aos="fade-up">Travel Inspiration</h2>
        <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Latest tips, guides and stories from our travel experts</p>
        
        <div class="row">
            @php
                $posts = [
                    [
                        'Packing Hacks for Stress-Free Travel',
                        'Discover our top packing tips to make your journey smoother.',
                        'May 15, 2023',
                        'https://lh4.googleusercontent.com/proxy/AJwJTsEcL4oWodn86tF_Wo4KsFboDSCW65V8Z497lOgLhJs342C-G0TlG1igJnP-YSmTSuihXgNiUqmG6PM9FMo3NYm6vSW_aGz9oGyENPGhvUCavSJ8G3b4lBf8zvcCsOrI5o7IdhycBB6xDPf85PxKZQ0Q'
                    ],
                    [
                        'Top 10 Beaches You Must Visit in 2023',
                        'From hidden gems to world-famous shores, these beaches deserve a spot on your bucket list.',
                        'April 28, 2023',
                        'https://wpcdn.us-east-1.vip.tn-cloud.net/www.hawaiimagazine.com/content/uploads/2021/04/o/f/2020bob-kauaisnorkel-poipu.jpg'
                    ],
                    [
                        'How to Travel on a Budget Without Sacrificing Comfort',
                        'Smart strategies to make your travel budget go further.',
                        'April 10, 2023',
                        'https://aaublog.com/wp-content/uploads/2025/02/pexels-photo-1371360.jpeg'
                    ],
                    [
                        'Cultural Etiquette: A Traveler\'s Guide to Respectful Tourism',
                        'Learn how to navigate cultural differences with grace and respect.',
                        'March 22, 2023',
                        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcql7GrNporGQCLIkReXl7PQf8fuWtIVo7Pw&s'
                    ],
                ];
            @endphp

            @foreach ($posts as $post)
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-5">
                            <img src="{{ $post[3] }}" class="img-fluid h-100 w-100" alt="{{ $post[0] }}">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100">
                                <h5 class="card-title">{{ $post[0] }}</h5>
                                <p class="card-text">{{ $post[1] }}</p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $post[2] }}</small>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-3" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="btn btn-outline-primary btn-lg">View All Articles <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>

    <!-- AOS Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('[data-aos]');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('aos-animate');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            elements.forEach(el => observer.observe(el));
        });
    </script>
</section>

<!-- Newsletter -->
<section id="contact" class="newsletter py-5 bg-primary text-white">
    <div class="container">
        <h2 class="section-title text-white fade-in">Stay Updated</h2>
        <p class="text-center mb-5 fade-in">Subscribe to our newsletter for exclusive deals and travel inspiration</p>
        
        <div class="row justify-content-center fade-in">
            <div class="col-lg-8">
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit">Subscribe <i class="fas fa-paper-plane ms-2"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0 fade-in">
                <a href="#" class="footer-logo d-block mb-3"><i class="fas fa-globe-americas me-2"></i> TourVista</a>
                <p>Making travel dreams come true since 2010. We're committed to providing exceptional experiences with personalized service.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0 fade-in">
                <div class="footer-links">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0 fade-in">
                <div class="footer-links">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Safety</a></li>
                        <li><a href="#">Cancellation</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0 fade-in">
                <div class="footer-links">
                    <h5>Destinations</h5>
                    <ul>
                        <li><a href="#">Europe</a></li>
                        <li><a href="#">Asia</a></li>
                        <li><a href="#">Africa</a></li>
                        <li><a href="#">Americas</a></li>
                        <li><a href="#">Oceania</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 fade-in">
                <div class="footer-links">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="tel:+918501807576"><i class="fas fa-phone me-2"></i> +91 8501807576</a></li>
                        <li><a href="mailto:santhoshthouda7576@gmail.com"><i class="fas fa-envelope me-2"></i> santhoshthouda7576@gmail.com</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt me-2"></i> Hyderabad, India</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright fade-in">
            <p class="mb-0">&copy; 2025 TourVista. All rights reserved. | <a href="#" class="text-white">Terms of Service</a> | <a href="#" class="text-white">Privacy Policy</a></p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login to Your Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create an Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="registerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsAgree" required>
                        <label class="form-check-label" for="termsAgree">I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
                <div class="text-center mt-3">
                    <p>Already have an account? <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // Navbar scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').addClass('active');
        } else {
            $('.back-to-top').removeClass('active');
        }
    });
    
    $('.back-to-top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });
    
    // Smooth scrolling for navigation links
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex','-1');
                        $target.focus();
                    }
                });
            }
        }
    });
    
    // Scroll animation
    function animateOnScroll() {
        $('.fade-in').each(function() {
            var elementPosition = $(this).offset().top;
            var scrollPosition = $(window).scrollTop() + $(window).height() - 100;
            
            if (scrollPosition > elementPosition) {
                $(this).addClass('visible');
            }
        });
    }
    
    $(window).on('load scroll', animateOnScroll);
    
    // Counter animation for stats
    function animateCounters() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
    
    // Only animate counters when stats section is in view
    function checkIfInView() {
        var $statsSection = $('.stats-section');
        var windowHeight = $(window).height();
        var windowTopPosition = $(window).scrollTop();
        var windowBottomPosition = (windowTopPosition + windowHeight);
        
        var elementHeight = $statsSection.outerHeight();
        var elementTopPosition = $statsSection.offset().top;
        var elementBottomPosition = (elementTopPosition + elementHeight);
        
        if ((elementBottomPosition >= windowTopPosition) && (elementTopPosition <= windowBottomPosition)) {
            if (!$statsSection.hasClass('animated')) {
                $statsSection.addClass('animated');
                animateCounters();
            }
        }
    }
    
    $(window).on('scroll resize', checkIfInView);
    $(window).trigger('scroll');
    
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
</script>
</body>
</html>