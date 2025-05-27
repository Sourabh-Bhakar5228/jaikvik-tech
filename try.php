<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaikvik Technology - About Us</title>
    <!-- Favicon Link  -->
    <link rel="icon" type="image/x-icon" href="https://jaikvik.in/lab/new-post-video/img/logo/favicon.png">
    <!-- Jquery File Link -->
    <script src="assets/js/jquery.js"></script>
    <!-- FontAwesome File Link -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Swiper Js File Link  -->
    <link rel="stylesheet" href="assets/css/swiperJs.css">
    <!-- Bootstrap File Link  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Nav Css File Link 
    <link rel="stylesheet" href="assets/css/nav.css">-->
    <!-- Css Fancy Box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- Css File Link  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Wrapper class to replace body styles */
        .jaikvik-theme {
            font-family: 'Mulish', Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Ensure sections inherit font and text color where needed */
        .about-hero-content,
        .about-company-section,
        .mission-vision-section,
        .about-why-section,
        .stats-section,
        .about-choose-section,
        .about-team-section,
        .clients-section,
        .testimonials-section,
        .about-cta-section {
            font-family: 'Mulish', Arial, sans-serif;
            color: #fff;
        }

        /* Hero Section */
        .about-hero-section {
            position: relative;
            height: 70vh;
            background: url('https://images.unsplash.com/photo-1634482899780-6ac6b92c656e?w=600&auto=format&fit=crop&q=60') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .about-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
        }

        .about-hero-content {
            position: relative;
            z-index: 1;
        }

        .about-hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            animation: fadeInUp 1s ease-in-out;
        }

        .about-hero-content p {
            font-size: 1.2rem;
            margin: 20px 0;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .about-hero-content .btn {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
            animation: fadeInUp 2s ease-in-out;
        }

        .about-hero-content .btn:hover {
            transform: scale(1.1);
        }

        /* About Section */
        .about-company-section {
            background-color: #1a1a1a;
            padding: 80px 0;
            text-align: center;
        }

        .about-company-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-company-section p {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Mission Vision Section */
        .mission-vision-section {
            background-color: #222;
            padding: 80px 0;
        }

        .mission-vision-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .mission-card,
        .vision-card {
            background-color: #1a1a1a;
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            animation: fadeInUp 1.6s ease-in-out;
        }

        .mission-card h3,
        .vision-card h3 {
            font-size: 2rem;
            color: #ff0000;
            margin-bottom: 20px;
        }

        /* Why Us Section */
        .about-why-section {
            background-color: #1a1a1a;
            padding: 80px 0;
        }

        .about-why-left {
            background: url('https://images.unsplash.com/photo-1559165317-9f3837ba893e?w=600&auto=format&fit=crop&q=60') no-repeat center center/cover;
            height: 100%;
            min-height: 400px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-why-top {
            color: #ff0000;
            font-size: 1.2rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-why-right h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .about-why-right p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            animation: fadeIn 1.4s ease-in-out;
        }

        .about-services-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .about-service-card {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 280px;
            animation: fadeInUp 1.6s ease-in-out;
            transition: transform 0.3s ease;
        }

        .about-service-card:hover {
            transform: translateY(-10px);
        }

        .about-service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #ff0000;
        }

        .about-service-card ul {
            list-style: none;
            padding: 0;
        }

        .about-service-card ul li {
            font-size: 1rem;
            margin-bottom: 10px;
            position: relative;
            padding-left: 20px;
        }

        .about-service-card ul li:before {
            content: "→";
            color: #ff0000;
            position: absolute;
            left: 0;
        }

        /* Stats Section */
        .stats-section {
            background-color: #222;
            padding: 80px 0;
            text-align: center;
        }

        .stats-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .stat-card {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 250px;
            animation: fadeInUp 1.6s ease-in-out;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #ff0000;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.2rem;
        }

        /* Why Choose Us Section */
        .about-choose-section {
            background-color: #1a1a1a;
            padding: 80px 0;
        }

        .about-choose-left {
            padding-right: 20px;
        }

        .about-choose-right {
            background: url('https://images.unsplash.com/photo-1551822620-ac3afd8acd1f?w=600&auto=format&fit=crop&q=60') no-repeat center center/cover;
            height: 100%;
            min-height: 400px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-choose-top {
            color: #ff0000;
            font-size: 1.2rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-choose-left h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .about-choose-left p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            animation: fadeIn 1.4s ease-in-out;
        }

        .about-progress {
            margin-bottom: 20px;
        }

        .about-progress::before {
            content: attr(data-title);
            display: block;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .about-progress-container {
            background-color: #333;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            height: 20px;
        }

        .about-progress-bar {
            width: 0;
            height: 100%;
            background-color: #ff0000;
            border-radius: 5px;
            transition: width 3s ease-in-out;
            position: relative;
        }

        .about-progress-percentage {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9rem;
            color: #fff;
            font-weight: 700;
        }

        /* Team Section */
        .about-team-section {
            background-color: #1a1a1a;
            padding: 80px 0;
            text-align: center;
        }

        .about-team-section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-team-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .about-team-card {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 250px;
            transition: transform 0.3s ease;
            animation: fadeInUp 1.6s ease-in-out;
        }

        .about-team-card:hover {
            transform: translateY(-10px);
        }

        .about-team-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .about-team-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .about-team-card p {
            font-size: 1rem;
            color: #ccc;
        }

        /* Clients Section */
        .clients-section {
            background-color: #222;
            padding: 80px 0;
            text-align: center;
        }

        .clients-section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            animation: fadeIn 1s ease-in-out;
        }

        .clients-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .client-logo {
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            width: 150px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeInUp 1.6s ease-in-out;
            transition: transform 0.3s ease;
        }

        .client-logo:hover {
            transform: scale(1.1);
        }

        .client-logo img {
            max-width: 100%;
            max-height: 100%;
            filter: grayscale(100%) brightness(2);
            transition: filter 0.3s ease;
        }

        .client-logo:hover img {
            filter: grayscale(0) brightness(1);
        }

        /* Testimonials Section */
        .testimonials-section {
            background-color: #1a1a1a;
            padding: 80px 0;
            text-align: center;
        }

        .testimonials-section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            animation: fadeIn 1s ease-in-out;
        }

        .testimonial-card {
            background-color: #222;
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1.6s ease-in-out;
        }

        .testimonial-text {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author {
            font-weight: 700;
            color: #ff0000;
        }

        /* CTA Section */
        .about-cta-section {
            background-color: #ff0000;
            padding: 80px 0;
            text-align: center;
        }

        .about-cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-cta-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .about-cta-btn {
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .about-cta-btn:hover {
            background-color: #1a1a1a;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-hero-content h1 {
                font-size: 2.5rem;
            }

            .about-service-card {
                max-width: 100%;
            }

            .about-why-left,
            .about-choose-right {
                min-height: 300px;
            }

            .about-choose-left {
                padding-right: 0;
                margin-bottom: 30px;
            }

            .about-team-grid,
            .clients-grid {
                gap: 20px;
            }

            .about-team-card,
            .client-logo {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/navbar.php' ?>

    <div class="jaikvik-theme">
        <!-- Hero Section -->
        <section class="about-hero-section">
            <div class="about-hero-overlay"></div>
            <div class="about-hero-content">
                <h1>About Jaikvik Technology</h1>
                <p>Empowering Businesses Through Digital Innovation Since 2012</p>
                <a href="#about" class="btn" role="button" aria-label="Discover Our Story">Discover Our Story</a>
            </div>
        </section>

        <!-- About Company Section -->
        <section id="about" class="about-company-section">
            <div class="container">
                <h2>Who We Are</h2>
                <p>Jaikvik Technology is a premier digital solutions provider specializing in web development, digital marketing, and film production. With over a decade of industry experience, we've established ourselves as pioneers in creating impactful digital experiences.</p>
                <p>Our team of passionate professionals combines technical expertise with creative vision to deliver solutions that drive business growth and enhance brand visibility in the digital space.</p>
                <p>From startups to established enterprises, we've helped hundreds of clients transform their digital presence and achieve measurable results.</p>
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="mission-vision-section">
            <div class="container">
                <div class="mission-vision-container">
                    <div class="mission-card">
                        <h3>Our Mission</h3>
                        <p>To empower businesses of all sizes with cutting-edge digital solutions that drive growth, enhance visibility, and create meaningful connections with their target audience. We strive to bridge the gap between technology and creativity to deliver exceptional results.</p>
                    </div>
                    <div class="vision-card">
                        <h3>Our Vision</h3>
                        <p>To be recognized as the most trusted and innovative digital solutions provider globally, known for our commitment to excellence, client satisfaction, and transformative digital strategies that shape the future of business in the digital age.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section class="about-why-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-why-left" role="img" aria-label="Digital solutions background"></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-why-right">
                            <p class="about-why-top">Our Expertise</p>
                            <h2>Comprehensive Digital Solutions</h2>
                            <p>Jaikvik Technology offers a full spectrum of digital services designed to meet the evolving needs of modern businesses. Our integrated approach ensures seamless execution across all digital channels.</p>
                            <div class="about-services-grid">
                                <div class="about-service-card">
                                    <h3>Software Development</h3>
                                    <ul>
                                        <li>Custom Website Development</li>
                                        <li>CRM & ERP Solutions</li>
                                        <li>Mobile Applications</li>
                                        <li>E-commerce Platforms</li>
                                        <li>API Integration</li>
                                    </ul>
                                </div>
                                <div class="about-service-card">
                                    <h3>Digital Marketing</h3>
                                    <ul>
                                        <li>SEO & Content Marketing</li>
                                        <li>Social Media Management</li>
                                        <li>PPC Advertising</li>
                                        <li>Email Marketing</li>
                                        <li>Analytics & Reporting</li>
                                    </ul>
                                </div>
                                <div class="about-service-card">
                                    <h3>Film Production</h3>
                                    <ul>
                                        <li>Corporate Videos</li>
                                        <li>Product Demos</li>
                                        <li>Commercial Ads</li>
                                        <li>Animation & Motion Graphics</li>
                                        <li>Event Coverage</li>
                                    </ul>
                                </div>
                                <div class="about-service-card">
                                    <h3>Media Services</h3>
                                    <ul>
                                        <li>Press Releases</li>
                                        <li>Corporate Interviews</li>
                                        <li>Brand Journalism</li>
                                        <li>Event Management</li>
                                        <li>Media Strategy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <h2>Our Impact in Numbers</h2>
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-number" data-count="12">0</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" data-count="500">0</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" data-count="1200">0</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" data-count="50">0</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="about-choose-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-choose-left">
                            <p class="about-choose-top">Our Strengths</p>
                            <h2>What Sets Us Apart</h2>
                            <p>Our unique combination of technical expertise, creative vision, and business acumen allows us to deliver exceptional results for our clients across industries.</p>
                            <div class="barSlide">
                                <div class="col-12 pt-4">
                                    <div class="about-progress" data-title="Technical Expertise" data-value="100">
                                        <div class="about-progress-container">
                                            <div class="about-progress-bar">
                                                <span class="about-progress-percentage">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-progress" data-title="Creative Innovation" data-value="95">
                                        <div class="about-progress-container">
                                            <div class="about-progress-bar">
                                                <span class="about-progress-percentage">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-progress" data-title="Client Satisfaction" data-value="98">
                                        <div class="about-progress-container">
                                            <div class="about-progress-bar">
                                                <span class="about-progress-percentage">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-progress" data-title="Project Delivery" data-value="100">
                                        <div class="about-progress-container">
                                            <div class="about-progress-bar">
                                                <span class="about-progress-percentage">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-choose-right" role="img" aria-label="Why choose us background"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="about-team-section">
            <div class="container">
                <h2>Meet Our Leadership</h2>
                <div class="about-team-grid">
                    <div class="about-team-card">
                        <img src="https://plus.unsplash.com/premium_photo-1669530939363-6dd44d3b3436?w=600&auto=format&fit=crop&q=60" alt="JK Shaw, Founder & Managing Director">
                        <h3>JK Shaw</h3>
                        <p>Founder & Managing Director</p>
                    </div>
                    <div class="about-team-card">
                        <img src="https://plus.unsplash.com/premium_photo-1669648880022-5175ad516e04?w=600&auto=format&fit=crop&q=60" alt="Ms Hemlata, Director - Operations">
                        <h3>Ms Hemlata</h3>
                        <p>Director - Operations</p>
                    </div>
                    <div class="about-team-card">
                        <img src="https://images.unsplash.com/photo-1604608619736-53e7be31f8d4?w=600&auto=format&fit=crop&q=60" alt="Ms. PK Bhatt, Director - Marketing">
                        <h3>Ms. PK Bhatt</h3>
                        <p>Director - Marketing</p>
                    </div>
                    <div class="about-team-card">
                        <img src="https://plus.unsplash.com/premium_photo-1669648897733-0faefc123034?w=600&auto=format&fit=crop&q=60" alt="Ms. Shweta Mittal, Executive Director">
                        <h3>Ms. Shweta Mittal</h3>
                        <p>Executive Director</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients Section -->
        <section class="clients-section">
            <div class="container">
                <h2>Trusted By Industry Leaders</h2>
                <div class="clients-grid">
                    <div class="client-logo">
                        <img src="https://via.placeholder.com/100x50?text=Client+1" alt="Client 1 Logo">
                    </div>
                    <div class="client-logo">
                        <img src="https://via.placeholder.com/100x50?text=Client+2" alt="Client 2 Logo">
                    </div>
                    <div class="client-logo">
                        <img src="https://via.placeholder.com/100x50?text=Client+3" alt="Client 3 Logo">
                    </div>
                    <div class="client-logo">
                        <img src="https://via.placeholder.com/100x50?text=Client+4" alt="Client 4 Logo">
                    </div>
                    <div class="client-logo">
                        <img src="https://via.placeholder.com/100x50?text=Client+5" alt="Client 5 Logo">
                    </div>
                    <div class="client-logo">
                        <img src="https://via.placeholder.com/100x50?text=Client+6" alt="Client 6 Logo">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="container">
                <h2>What Our Clients Say</h2>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Jaikvik Technology transformed our digital presence completely. Their team delivered a website that not only looks stunning but has significantly increased our lead generation. Their digital marketing strategies have been game-changing for our business."</p>
                    <p class="testimonial-author">- Rohan Mehta, CEO of TechSolutions Inc.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="about-cta-section">
            <div class="container">
                <div class="about-cta-content">
                    <h2>Ready to Transform Your Digital Presence?</h2>
                    <p>Let's discuss how Jaikvik Technology can help your business grow in the digital space.</p>
                    <a href="contact.php" class="about-cta-btn" role="button" aria-label="Contact Jaikvik Technology">Get In Touch</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer File Link  -->
    <?php include 'includes/footer.php' ?>

    <!-- ==========  Java Script All File Link  ========== -->
    <!-- Bootstrap Java Script File Link  -->
    <script src="assets/js/bootstrapJs.js"></script>
    <!-- Swiper Js File Link  -->
    <script src="assets/js/swiperJs.js"></script>
    <!-- JavaScript File Link -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/progressBar.min.js"></script>

    <script>
        // Progress bar and stats counter animations
        document.addEventListener('DOMContentLoaded', () => {
            try {
                // Progress bar animation
                const progressBars = document.querySelectorAll('.about-progress');
                progressBars.forEach((progress, index) => {
                    const bar = progress.querySelector('.about-progress-bar');
                    const percentage = progress.querySelector('.about-progress-percentage');
                    const value = parseInt(progress.getAttribute('data-value'));

                    setTimeout(() => {
                        let current = 0;
                        const increment = value / 100;
                        const duration = 3000;
                        const intervalTime = duration / 100;

                        const animate = setInterval(() => {
                            if (current >= value) {
                                clearInterval(animate);
                                percentage.textContent = `${value}%`;
                                bar.style.width = `${value}%`;
                                return;
                            }
                            current += increment;
                            percentage.textContent = `${Math.round(current)}%`;
                            bar.style.width = `${current}%`;
                        }, intervalTime);
                    }, index * 500);
                });

                // Stats counter animation
                const statNumbers = document.querySelectorAll('.stat-number');
                const options = {
                    threshold: 0.5
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const statNumber = entry.target;
                            const target = parseInt(statNumber.getAttribute('data-count'));
                            const duration = 2000;
                            const increment = target / (duration / 16);
                            let current = 0;

                            const counter = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    clearInterval(counter);
                                    statNumber.textContent = target;
                                } else {
                                    statNumber.textContent = Math.floor(current);
                                }
                            }, 16);
                            observer.unobserve(statNumber);
                        }
                    });
                }, options);

                statNumbers.forEach(statNumber => {
                    observer.observe(statNumber);
                });
            } catch (error) {
                console.error('Animation error:', error);
            }
        });
    </script>
</body>

</html>