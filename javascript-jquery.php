<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript & jQuery Features</title>
    <meta name="description" content="Harness the power of JavaScript and jQuery with Jaikvik Technology to supercharge your web applications. Our solutions deliver dynamic, interactive experiences with seamless integration.">
    <meta name="keywords" content="JavaScript, jQuery, Web Development, Jaikvik Technology">
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
        .header-section {
            background: linear-gradient(135deg, var(--light-gray), var(--dark-gray));
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
        }

        .header-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }

        .header-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .discover-btn {
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

        .discover-btn:hover {
            background-color: transparent;
            color: var(--accent-color);
        }

        /* Explanation Section */
        .info-section {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .info-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .info-card h3 {
            color: var(--accent-color);
            font-size: 1.8rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .info-card h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .info-card p {
            margin-bottom: 15px;
            color: var(--medium-gray);
        }

        .info-card ul {
            margin-left: 20px;
            color: var(--medium-gray);
        }

        .info-card li {
            margin-bottom: 10px;
        }

        /* Features Section */
        .key-features {
            padding: 60px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--accent-color);
        }

        .key-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .key-feature-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .key-feature-card:hover {
            transform: translateY(-10px);
        }

        .key-feature-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .key-feature-content {
            padding: 25px;
        }

        .key-feature-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .key-feature-content p {
            margin-bottom: 20px;
            color: var(--medium-gray);
        }

        .details-btn {
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

        .details-btn:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        /* Modern Features Section */
        .advanced-features-section {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .advanced-features-section .key-features-grid {
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }

        /* Newsletter Section */
        .signup-section {
            background-color: var(--light-gray);
            padding: 60px 0;
            text-align: center;
            margin: 60px 0;
        }

        .signup-section h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: var(--accent-color);
        }

        .signup-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .signup-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .signup-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 16px;
            outline: none;
        }

        .signup-form button {
            background-color: var(--accent-color);
            color: var(--primary-color);
            border: none;
            padding: 0 25px;
            border-radius: 0 30px 30px 0;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .signup-form button:hover {
            background-color: #e60000;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-section h1 {
                font-size: 2.2rem;
            }

            .header-section p {
                font-size: 1rem;
            }

            .section-header {
                font-size: 2rem;
            }

            .signup-form {
                flex-direction: column;
            }

            .signup-form input {
                border-radius: 30px;
                margin-bottom: 10px;
            }

            .signup-form button {
                border-radius: 30px;
                padding: 12px;
            }

            .advanced-features-section .key-features-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .header-section h1 {
                font-size: 1.8rem;
            }

            .section-header {
                font-size: 1.8rem;
            }

            .key-features-grid {
                grid-template-columns: 1fr;
            }

            .info-card {
                padding: 20px;
            }

            .info-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <section class="header-section">
        <div class="container">
            <h1>Dynamic JavaScript with jQuery</h1>
            <p>Explore the power of JavaScript enhanced by jQuery to create interactive, user-friendly web applications with ease.</p>
            <a href="#info-section" class="discover-btn">Learn More</a>
        </div>
    </section>

    <section id="info-section" class="info-section">
        <div class="container">
            <h2 class="section-header">Understanding JavaScript & jQuery</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h3>What is JavaScript?</h3>
                    <p>JavaScript is a high-level, interpreted programming language that powers interactive web pages. It is:</p>
                    <ul>
                        <li>Multi-paradigm (supports multiple programming styles)</li>
                        <li>Dynamic with flexible typing</li>
                        <li>Prototype-based for object-oriented programming</li>
                        <li>Equipped with first-class functions</li>
                        <li>Essential for client-side web development</li>
                    </ul>
                    <p>Combined with HTML and CSS, JavaScript creates dynamic web experiences.</p>
                </div>

                <div class="info-card">
                    <h3>jQuery Essentials</h3>
                    <p>jQuery is a fast, lightweight JavaScript library that simplifies tasks like:</p>
                    <ul>
                        <li>DOM manipulation and traversal</li>
                        <li>Event handling</li>
                        <li>AJAX for asynchronous data loading</li>
                        <li>Animations and effects</li>
                        <li>Cross-browser compatibility</li>
                    </ul>
                    <p>It streamlines JavaScript coding with concise syntax and powerful utilities.</p>
                </div>

                <div class="info-card">
                    <h3>Why jQuery Matters</h3>
                    <p>jQuery enhances JavaScript development by:</p>
                    <ul>
                        <li>Reducing boilerplate code</li>
                        <li>Simplifying complex tasks</li>
                        <li>Ensuring consistent behavior across browsers</li>
                        <li>Speeding up development for dynamic UIs</li>
                    </ul>
                    <p>It remains a vital tool for rapid prototyping and legacy project maintenance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="key-features" class="key-features">
        <div class="container">
            <h2 class="section-header">Key jQuery Features</h2>
            <div class="key-features-grid">
                <div class="key-feature-card">
                    <img src="https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="DOM Manipulation" class="key-feature-img">
                    <div class="key-feature-content">
                        <h3>DOM Manipulation</h3>
                        <p>Allows easy selection, modification, and styling of HTML elements with simple syntax.</p>
                        <a href="#" class="details-btn">Learn More</a>
                    </div>
                </div>

                <div class="key-feature-card">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Event Handling" class="key-feature-img">
                    <div class="key-feature-content">
                        <h3>Event Handling</h3>
                        <p>Simplifies binding and managing user interactions like clicks and hovers.</p>
                        <a href="#" class="details-btn">Learn More</a>
                    </div>
                </div>

                <div class="key-feature-card">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="AJAX" class="key-feature-img">
                    <div class="key-feature-content">
                        <h3>AJAX</h3>
                        <p>Enables seamless data fetching and updating without reloading the page.</p>
                        <a href="#" class="details-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="advanced-features-section" class="advanced-features-section">
        <div class="container">
            <h2 class="section-header">Modern JavaScript with jQuery</h2>
            <div class="key-features-grid">
                <div class="key-feature-card">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Animations" class="key-feature-img">
                    <div class="key-feature-content">
                        <h3>Animations</h3>
                        <p>Creates smooth transitions and effects like fading or sliding elements.</p>
                        <a href="#" class="details-btn">Learn More</a>
                    </div>
                </div>

                <div class="key-feature-card">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Plugins" class="key-feature-img">
                    <div class="key-feature-content">
                        <h3>Plugins</h3>
                        <p>Extends functionality with reusable components like sliders or modals.</p>
                        <a href="#" class="details-btn">Learn More</a>
                    </div>
                </div>

                <div class="key-feature-card">
                    <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Chaining" class="key-feature-img">
                    <div class="key-feature-content">
                        <h3>Chaining</h3>
                        <p>Allows multiple jQuery methods to be called in a single line for concise code.</p>
                        <a href="#" class="details-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="signup-section">
        <div class="container">
            <h2>Stay Updated with JavaScript & jQuery</h2>
            <p>Subscribe to our newsletter for the latest updates, tutorials, and best practices on JavaScript and jQuery.</p>
            <form class="signup-form">
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

            // Newsletter form submission using jQuery
            $('.signup-form').on('submit', function(e) {
                e.preventDefault();
                var email = $(this).find('input').val();
                alert(`Thank you for subscribing with ${email}! We'll keep you updated.`);
                $(this).find('input').val('');
            });

            // Add fade-in animation for feature cards on scroll
            $('.key-feature-card').each(function() {
                $(this).css('opacity', 0);
                $(this).animate({
                    opacity: 1
                }, 1000);
            });
        });
    </script>
</body>

</html>