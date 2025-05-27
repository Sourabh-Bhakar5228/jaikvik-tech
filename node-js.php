<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Node.js Runtime Features</title>
    <meta name="description" content="Build fast, scalable applications with Node.js at Jaikvik Technology. Leverage its event-driven architecture for modern web solutions.">
    <meta name="keywords" content="Node.js, JavaScript Runtime, Web Development, Jaikvik Technology">
    <!-- Favicon Link -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <!-- jQuery File Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- FontAwesome File Link -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Swiper Js File Link -->
    <link rel="stylesheet" href="assets/css/swiperJs.css">
    <!-- Bootstrap File Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Css Fancy Box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- Css File Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!-- GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: #ffffff;
            --accent-color: #ff0000;
            --light-gray: #1a1a1a;
            --medium-gray: #ffffff;
            --dark-gray: #1a1a2e;
            --highlight-color: #1a1a1a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--dark-gray);
            color: var(--primary-color);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Banner Styles */
        .welcome-section {
            background: linear-gradient(135deg, var(--light-gray), var(--dark-gray));
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
        }

        .welcome-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }

        .welcome-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .explore-btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--accent-color);
        }

        .explore-btn:hover {
            background-color: transparent;
            color: var(--accent-color);
        }

        /* Explanation Section */
        .details-section {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .details-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .details-card h3 {
            color: var(--accent-color);
            font-size: 1.8rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .details-card h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .details-card p {
            margin-bottom: 15px;
            color: var(--medium-gray);
        }

        .details-card ul {
            margin-left: 20px;
            color: var(--medium-gray);
        }

        .details-card li {
            margin-bottom: 10px;
        }

        /* Features Section */
        .main-features {
            padding: 60px 0;
        }

        .section-caption {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--accent-color);
        }

        .main-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .main-feature-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .main-feature-card:hover {
            transform: translateY(-10px);
        }

        .main-feature-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .main-feature-content {
            padding: 25px;
        }

        .main-feature-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .main-feature-content p {
            margin-bottom: 20px;
            color: var(--medium-gray);
        }

        .info-btn {
            display: inline-block;
            background-color: transparent;
            color: var(--accent-color);
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--accent-color);
        }

        .info-btn:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        /* Modern Features Section */
        .modern-features-section {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .modern-features-section .main-features-grid {
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }

        /* Newsletter Section */
        .subscribe-section {
            background-color: var(--light-gray);
            padding: 60px 0;
            text-align: center;
            margin: 60px 0;
        }

        .subscribe-section h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: var(--accent-color);
        }

        .subscribe-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .subscribe-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .subscribe-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 16px;
            outline: none;
        }

        .subscribe-form button {
            background-color: var(--accent-color);
            color: var(--primary-color);
            border: none;
            padding: 0 25px;
            border-radius: 0 30px 30px 0;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .subscribe-form button:hover {
            background-color: #e60000;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .welcome-section h1 {
                font-size: 2.2rem;
            }

            .welcome-section p {
                font-size: 1rem;
            }

            .section-caption {
                font-size: 2rem;
            }

            .subscribe-form {
                flex-direction: column;
            }

            .subscribe-form input {
                border-radius: 30px;
                margin-bottom: 10px;
            }

            .subscribe-form button {
                border-radius: 30px;
                padding: 12px;
            }

            .modern-features-section .main-features-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .welcome-section h1 {
                font-size: 1.8rem;
            }

            .section-caption {
                font-size: 1.8rem;
            }

            .main-features-grid {
                grid-template-columns: 1fr;
            }

            .details-card {
                padding: 20px;
            }

            .details-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <section class="welcome-section">
        <div class="container">
            <h1>Mastering Node.js</h1>
            <p>Discover how Node.js, a JavaScript runtime, enables fast, scalable server-side applications with an event-driven architecture.</p>
            <a href="#details-section" class="explore-btn">Learn More</a>
        </div>
    </section>

    <section id="details-section" class="details-section">
        <div class="container">
            <h2 class="section-caption">Understanding Node.js</h2>
            <div class="details-grid">
                <div class="details-card">
                    <h3>What is Node.js?</h3>
                    <p>Node.js is a JavaScript runtime built on Chrome’s V8 engine, designed for server-side development. It is:</p>
                    <ul>
                        <li>Event-driven and non-blocking</li>
                        <li>Lightweight and efficient</li>
                        <li>Cross-platform, running on multiple OS</li>
                        <li>Ideal for real-time applications</li>
                        <li>Powered by a vast npm ecosystem</li>
                    </ul>
                    <p>Node.js enables full-stack JavaScript development for web and APIs.</p>
                </div>

                <div class="details-card">
                    <h3>Node.js Core Features</h3>
                    <p>Node.js provides essential features for modern development, including:</p>
                    <ul>
                        <li>Asynchronous I/O for high performance</li>
                        <li>Event loop for handling concurrency</li>
                        <li>Modules for modular code organization</li>
                        <li>Built-in HTTP server capabilities</li>
                        <li>npm for package management</li>
                    </ul>
                    <p>These make Node.js a top choice for scalable applications.</p>
                </div>

                <div class="details-card">
                    <h3>Why Node.js Matters</h3>
                    <p>Node.js excels by offering:</p>
                    <ul>
                        <li>High performance for real-time apps</li>
                        <li>Unified JavaScript for front and back end</li>
                        <li>Scalability for microservices</li>
                        <li>Strong community and library support</li>
                    </ul>
                    <p>It powers platforms like Netflix, PayPal, and LinkedIn.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="main-features" class="main-features">
        <div class="container">
            <h2 class="section-caption">Key Node.js Features</h2>
            <div class="main-features-grid">
                <div class="main-feature-card">
                    <img src="https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Event Loop" class="main-feature-img">
                    <div class="main-feature-content">
                        <h3>Event Loop</h3>
                        <p>Handles asynchronous operations for efficient concurrency.</p>
                        <a href="#" class="info-btn">Learn More</a>
                    </div>
                </div>

                <div class="main-feature-card">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="npm Ecosystem" class="main-feature-img">
                    <div class="main-feature-content">
                        <h3>npm Ecosystem</h3>
                        <p>Provides access to thousands of reusable packages for rapid development.</p>
                        <a href="#" class="info-btn">Learn More</a>
                    </div>
                </div>

                <div class="main-feature-card">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Asynchronous I/O" class="main-feature-img">
                    <div class="main-feature-content">
                        <h3>Asynchronous I/O</h3>
                        <p>Enables non-blocking operations for high-performance applications.</p>
                        <a href="#" class="info-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="modern-features-section" class="modern-features-section">
        <div class="container">
            <h2 class="section-caption">Advanced Node.js Features</h2>
            <div class="main-features-grid">
                <div class="main-feature-card">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Streams" class="main-feature-img">
                    <div class="main-feature-content">
                        <h3>Streams</h3>
                        <p>Handles large data efficiently by processing it in chunks.</p>
                        <a href="#" class="info-btn">Learn More</a>
                    </div>
                </div>

                <div class="main-feature-card">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Worker Threads" class="main-feature-img">
                    <div class="main-feature-content">
                        <h3>Worker Threads</h3>
                        <p>Enables parallel processing for CPU-intensive tasks.</p>
                        <a href="#" class="info-btn">Learn More</a>
                    </div>
                </div>

                <div class="main-feature-card">
                    <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Cluster Module" class="main-feature-img">
                    <div class="main-feature-content">
                        <h3>Cluster Module</h3>
                        <p>Scales applications by utilizing multiple CPU cores.</p>
                        <a href="#" class="info-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe-section">
        <div class="container">
            <h2>Stay Updated with Node.js</h2>
            <p>Subscribe to our newsletter for the latest tutorials, updates, and best practices on Node.js development.</p>
            <form class="subscribe-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
    <script>
        $(document).ready(function() {
            // Smooth scrolling for anchor links using jQuery
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });

            // Newsletter form submission with jQuery, simulating Node.js API call
            $('.subscribe-form').on('submit', function(e) {
                e.preventDefault();
                var email = $(this).find('input[type="email"]').val();
                // Simulate Node.js Express API call
                $.ajax({
                    url: '/api/subscribe', // Placeholder Node.js endpoint
                    type: 'POST',
                    data: JSON.stringify({
                        email: email,
                        subscribedAt: new Date()
                    }),
                    contentType: 'application/json',
                    success: function(response) {
                        alert(`Thank you for subscribing with ${email}!`);
                        $('.subscribe-form').find('input[type="email"]').val('');
                    },
                    error: function() {
                        alert('Subscription failed. Please try again.');
                    }
                });
            });

            // Add scale animation for feature cards on hover
            $('.main-feature-card').hover(
                function() {
                    $(this).animate({
                        scale: '1.05'
                    }, 200);
                },
                function() {
                    $(this).animate({
                        scale: '1'
                    }, 200);
                }
            );
        });
    </script>
</body>

</html>