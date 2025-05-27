<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES6 JavaScript Features</title>
    <meta name="description" content="Discover the power of top-notch ERP solutions at Jaikvik Technology to bring your business up to speed. Our customized approaches offer real-time insights and automatically coordinate crucial features, considerably improving decision-making abilities.">
    <meta name="keywords" content="ERP Solutions, Enterprise Resource Planning, Business Growth, Jaikvik Technology">
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
        .banner {
            background: linear-gradient(135deg, var(--light-gray), var(--dark-gray));
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
        }

        .banner h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }

        .banner p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .cta-btn {
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

        .cta-btn:hover {
            background-color: transparent;
            color: var(--accent-color);
        }

        /* Explanation Section */
        .explanation {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .explanation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .explanation-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .explanation-card h3 {
            color: var(--accent-color);
            font-size: 1.8rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .explanation-card h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .explanation-card p {
            margin-bottom: 15px;
            color: var(--medium-gray);
        }

        .explanation-card ul {
            margin-left: 20px;
            color: var(--medium-gray);
        }

        .explanation-card li {
            margin-bottom: 10px;
        }

        /* Features Section */
        .features {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--accent-color);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .feature-content {
            padding: 25px;
        }

        .feature-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .feature-content p {
            margin-bottom: 20px;
            color: var(--medium-gray);
        }

        .learn-btn {
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

        .learn-btn:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        /* Modern Features Section */
        .modern-features {
            padding: 60px 0;
            background-color: var(--highlight-color);
        }

        .modern-features .features-grid {
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }

        /* Newsletter Section */
        .newsletter {
            background-color: var(--light-gray);
            padding: 60px 0;
            text-align: center;
            margin: 60px 0;
        }

        .newsletter h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: var(--accent-color);
        }

        .newsletter p {
            max-width: 600px;
            margin: 0 auto 30px;
            color: var(--medium-gray);
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 16px;
            outline: none;
        }

        .newsletter-form button {
            background-color: var(--accent-color);
            color: var(--primary-color);
            border: none;
            padding: 0 25px;
            border-radius: 0 30px 30px 0;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #e60000;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2.2rem;
            }

            .banner p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form input {
                border-radius: 30px;
                margin-bottom: 10px;
            }

            .newsletter-form button {
                border-radius: 30px;
                padding: 12px;
            }

            .modern-features .features-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .banner h1 {
                font-size: 1.8rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .explanation-card {
                padding: 20px;
            }

            .explanation-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <section class="banner">
        <div class="container">
            <h1>Modern JavaScript with ES6+</h1>
            <p>Discover the evolution of JavaScript from its foundations to the powerful features of ES6 and beyond, revolutionizing web development.</p>
            <a href="#explanation" class="cta-btn">Learn More</a>
        </div>
    </section>

    <section id="explanation" class="explanation">
        <div class="container">
            <h2 class="section-title">Understanding JavaScript</h2>
            <div class="explanation-grid">
                <div class="explanation-card">
                    <h3>What is JavaScript?</h3>
                    <p>JavaScript is a high-level, interpreted programming language that conforms to the ECMAScript specification. It is a language that is:</p>
                    <ul>
                        <li>Multi-paradigm (object-oriented, functional, imperative)</li>
                        <li>Dynamic with dynamic typing</li>
                        <li>Prototype-based object orientation</li>
                        <li>First-class functions</li>
                        <li>Primarily used for client-side web development</li>
                    </ul>
                    <p>JavaScript enables interactive web pages and is an essential part of web applications alongside HTML and CSS.</p>
                </div>

                <div class="explanation-card">
                    <h3>JavaScript ES6 (ES2015)</h3>
                    <p>ECMAScript 2015 (ES6) was a major update to JavaScript, introducing significant new syntax and features including:</p>
                    <ul>
                        <li>Arrow functions (=>)</li>
                        <li>Classes (syntactic sugar over prototypes)</li>
                        <li>Template literals (`backticks`)</li>
                        <li>Enhanced object literals</li>
                        <li>Destructuring assignment</li>
                        <li>Default, rest, and spread parameters</li>
                        <li>Let and const for block-scoped variables</li>
                        <li>Modules (import/export)</li>
                        <li>Promises for async programming</li>
                    </ul>
                </div>

                <div class="explanation-card">
                    <h3>Why ES6 Matters</h3>
                    <p>ES6 represented a quantum leap for JavaScript, addressing many pain points and making the language more:</p>
                    <ul>
                        <li>Expressive and concise</li>
                        <li>Readable and maintainable</li>
                        <li>Powerful for complex applications</li>
                        <li>Suitable for large-scale development</li>
                    </ul>
                    <p>It paved the way for modern JavaScript frameworks like React, Angular, and Vue, and enabled the full-stack JavaScript ecosystem we have today.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <h2 class="section-title">Key ES6 Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Arrow Functions" class="feature-img">
                    <div class="feature-content">
                        <h3>Arrow Functions</h3>
                        <p>Shorter syntax for writing function expressions and lexically binds the 'this' value.</p>
                        <a href="#" class="learn-btn">Learn More</a>
                    </div>
                </div>

                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Classes" class="feature-img">
                    <div class="feature-content">
                        <h3>Classes</h3>
                        <p>Syntactical sugar over JavaScript's prototype-based inheritance for cleaner OOP.</p>
                        <a href="#" class="learn-btn">Learn More</a>
                    </div>
                </div>

                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Modules" class="feature-img">
                    <div class="feature-content">
                        <h3>Modules</h3>
                        <p>Native support for modular code organization using import and export statements.</p>
                        <a href="#" class="learn-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="modern-features" class="modern-features">
        <div class="container">
            <h2 class="section-title">Modern JavaScript Features (ES2016+)</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Async/Await" class="feature-img">
                    <div class="feature-content">
                        <h3>Async/Await</h3>
                        <p>Syntactic sugar built on promises that makes asynchronous code easier to write and read.</p>
                        <a href="#" class="learn-btn">Learn More</a>
                    </div>
                </div>

                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Optional Chaining" class="feature-img">
                    <div class="feature-content">
                        <h3>Optional Chaining (?.)</h3>
                        <p>Allows reading values deep in a chain of connected objects without validating each reference.</p>
                        <a href="#" class="learn-btn">Learn More</a>
                    </div>
                </div>

                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Nullish Coalescing" class="feature-img">
                    <div class="feature-content">
                        <h3>Nullish Coalescing (??)</h3>
                        <p>Logical operator that returns its right-hand operand when its left-hand operand is null or undefined.</p>
                        <a href="#" class="learn-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <h2>Stay Updated with JavaScript</h2>
            <p>Subscribe to our newsletter to get the latest updates on JavaScript features, tutorials, and best practices.</p>
            <form class="newsletter-form">
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
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            alert(`Thank you for subscribing with ${email}! We'll keep you updated.`);
            this.querySelector('input').value = '';
        });
    </script>
</body>

</html>