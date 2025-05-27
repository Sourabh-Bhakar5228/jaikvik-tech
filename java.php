<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Programming Features</title>
    <meta name="description" content="Explore the power of Java programming at Jaikvik Technology to elevate your business. Our tailored solutions provide real-time insights and streamline critical operations, significantly enhancing decision-making capabilities.">
    <meta name="keywords" content="Java Programming, Enterprise Solutions, Business Growth, Jaikvik Technology">
    <!-- Favicon Link -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <!-- Jquery File Link -->
    <script src="assets/js/jquery.js"></script>
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
        .hero {
            background: linear-gradient(135deg, var(--light-gray), var(--dark-gray));
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .action-btn {
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

        .action-btn:hover {
            background-color: transparent;
            color: var(--accent-color);
        }

        /* Explanation Section */
        .overview {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .overview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .overview-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .overview-card h3 {
            color: var(--accent-color);
            font-size: 1.8rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .overview-card h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .overview-card p {
            margin-bottom: 15px;
            color: var(--medium-gray);
        }

        .overview-card ul {
            margin-left: 20px;
            color: var(--medium-gray);
        }

        .overview-card li {
            margin-bottom: 10px;
        }

        /* Features Section */
        .core-features {
            padding: 60px 0;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--accent-color);
        }

        .core-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .core-feature-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .core-feature-card:hover {
            transform: translateY(-10px);
        }

        .core-feature-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .core-feature-content {
            padding: 25px;
        }

        .core-feature-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .core-feature-content p {
            margin-bottom: 20px;
            color: var(--medium-gray);
        }

        .explore-btn {
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

        .explore-btn:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        /* Modern Features Section */
        .advanced-features {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .advanced-features .core-features-grid {
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }

        /* Newsletter Section */
        .subscription {
            background-color: var(--light-gray);
            padding: 60px 0;
            text-align: center;
            margin: 60px 0;
        }

        .subscription h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: var(--accent-color);
        }

        .subscription p {
            max-width: 600px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .subscription-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .subscription-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 16px;
            outline: none;
        }

        .subscription-form button {
            background-color: var(--accent-color);
            color: var(--primary-color);
            border: none;
            padding: 0 25px;
            border-radius: 0 30px 30px 0;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .subscription-form button:hover {
            background-color: #e60000;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-heading {
                font-size: 2rem;
            }

            .subscription-form {
                flex-direction: column;
            }

            .subscription-form input {
                border-radius: 30px;
                margin-bottom: 10px;
            }

            .subscription-form button {
                border-radius: 30px;
                padding: 12px;
            }

            .advanced-features .core-features-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .section-heading {
                font-size: 1.8rem;
            }

            .core-features-grid {
                grid-template-columns: 1fr;
            }

            .overview-card {
                padding: 20px;
            }

            .overview-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <section class="hero">
        <div class="container">
            <h1>Modern Java Programming</h1>
            <p>Discover the evolution of Java from its foundations to the powerful features of modern versions, transforming enterprise development.</p>
            <a href="#overview" class="action-btn">Learn More</a>
        </div>
    </section>

    <section id="overview" class="overview">
        <div class="container">
            <h2 class="section-heading">Understanding Java</h2>
            <div class="overview-grid">
                <div class="overview-card">
                    <h3>What is Java?</h3>
                    <p>Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is:</p>
                    <ul>
                        <li>Platform-independent (Write Once, Run Anywhere)</li>
                        <li>Object-oriented with strong typing</li>
                        <li>Secure with built-in security features</li>
                        <li>Robust with automatic memory management</li>
                        <li>Widely used for enterprise applications</li>
                    </ul>
                    <p>Java powers web servers, mobile apps, and large-scale systems with frameworks like Spring and Hibernate.</p>
                </div>

                <div class="overview-card">
                    <h3>Java SE 8 and Beyond</h3>
                    <p>Java Standard Edition 8 (2014) introduced transformative features, with subsequent releases adding more. Key additions include:</p>
                    <ul>
                        <li>Lambda expressions for functional programming</li>
                        <li>Stream API for processing collections</li>
                        <li>Optional class for null handling</li>
                        <li>Local-Variable Type Inference (var)</li>
                        <li>Records for immutable data classes</li>
                        <li>Sealed classes for restricted inheritance</li>
                        <li>Pattern matching for instanceof</li>
                        <li>Modules (Java Platform Module System)</li>
                    </ul>
                </div>

                <div class="overview-card">
                    <h3>Why Java Matters</h3>
                    <p>Java's evolution has kept it relevant for modern development, making it:</p>
                    <ul>
                        <li>Scalable for enterprise systems</li>
                        <li>Developer-friendly with concise syntax</li>
                        <li>Reliable for mission-critical applications</li>
                        <li>Versatile for cloud and microservices</li>
                    </ul>
                    <p>It underpins frameworks like Spring Boot and is a cornerstone of Android development and backend systems.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="core-features" class="core-features">
        <div class="container">
            <h2 class="section-heading">Key Java Features</h2>
            <div class="core-features-grid">
                <div class="core-feature-card">
                    <img src="https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Lambda Expressions" class="core-feature-img">
                    <div class="core-feature-content">
                        <h3>Lambda Expressions</h3>
                        <p>Enables functional programming by treating functionality as a method argument or code as data.</p>
                        <a href="#" class="explore-btn">Learn More</a>
                    </div>
                </div>

                <div class="core-feature-card">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Stream API" class="core-feature-img">
                    <div class="core-feature-content">
                        <h3>Stream API</h3>
                        <p>Provides a functional approach to process collections of objects efficiently and concisely.</p>
                        <a href="#" class="explore-btn">Learn More</a>
                    </div>
                </div>

                <div class="core-feature-card">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Modules" class="core-feature-img">
                    <div class="core-feature-content">
                        <h3>Modules</h3>
                        <p>Improves code organization and encapsulation with the Java Platform Module System.</p>
                        <a href="#" class="explore-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="advanced-features" class="advanced-features">
        <div class="container">
            <h2 class="section-heading">Modern Java Features (Java 11+)</h2>
            <div class="core-features-grid">
                <div class="core-feature-card">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Records" class="core-feature-img">
                    <div class="core-feature-content">
                        <h3>Records</h3>
                        <p>Simplifies data classes by providing a concise syntax for immutable data carriers.</p>
                        <a href="#" class="explore-btn">Learn More</a>
                    </div>
                </div>

                <div class="core-feature-card">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Sealed Classes" class="core-feature-img">
                    <div class="core-feature-content">
                        <h3>Sealed Classes</h3>
                        <p>Restricts which classes can extend or implement a class or interface, enhancing control.</p>
                        <a href="#" class="explore-btn">Learn More</a>
                    </div>
                </div>

                <div class="core-feature-card">
                    <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Pattern Matching" class="core-feature-img">
                    <div class="core-feature-content">
                        <h3>Pattern Matching</h3>
                        <p>Simplifies code by combining type checking and casting in instanceof expressions.</p>
                        <a href="#" class="explore-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscription">
        <div class="container">
            <h2>Stay Updated with Java</h2>
            <p>Subscribe to our newsletter to get the latest updates on Java features, tutorials, and best practices.</p>
            <form class="subscription-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Newsletter form submission
        document.querySelector('.subscription-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            alert(`Thank you for subscribing with ${email}! We'll keep you updated.`);
            this.querySelector('input').value = '';
        });
    </script>
</body>

</html>