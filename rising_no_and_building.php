<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact & Stats</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #fff;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
        }

        .stats {
            flex: 1;
            min-width: 350px;
        }

        .stats h2 {
            font-size: 28px;
            margin-bottom: 20px;
            border-bottom: 3px solid purple;
            display: inline-block;
            padding-bottom: 5px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: #f4f4f4;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .card span {
            font-size: 24px;
            font-weight: bold;
            color: purple;
        }

        .card p {
            margin-top: 8px;
            font-size: 14px;
        }

        .google-rating {
            margin-top: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .google-rating img {
            width: 40px;
            height: auto;
        }

        .certification {
            margin-top: 20px;
            background: #f0f0f0;
            padding: 10px;
            border-left: 4px solid gold;
        }

        .form-section {
            flex: 1;
            min-width: 350px;
        }

        .form-section h2 {
            font-size: 28px;
            margin-bottom: 10px;
            border-bottom: 3px solid purple;
            display: inline-block;
            padding-bottom: 5px;
        }

        .form-section p {
            margin-bottom: 10px;
        }

        .input-group {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .services p {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .checkboxes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 5px;
            margin-bottom: 10px;
        }

        .checkboxes label {
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        .captcha-placeholder {
            margin: 10px 0;
            font-size: 14px;
        }

        button {
            background: purple;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: darkviolet;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Left Column -->
        <div class="stats">
            <h2>Rising Numbers, Building Confidence</h2>
            <div class="cards">
                <div class="card"><span>1050+</span>
                    <p>Global Clients Served</p>
                </div>
                <div class="card"><span>25+</span>
                    <p>Countries Served</p>
                </div>
                <div class="card"><span>07+</span>
                    <p>Years of Trust</p>
                </div>
                <div class="card"><span>2500+</span>
                    <p>Projects Completed</p>
                </div>
                <div class="card"><span>95%</span>
                    <p>Client Retention</p>
                </div>
                <div class="card"><span>50+</span>
                    <p>Team of Professionals</p>
                </div>
            </div>
            <div class="google-rating">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="Google" />
                <p>4.9 STAR CUSTOMER RATING<br>by 250+ verified customers</p>
            </div>
            <div class="certification">
                <strong>Congratulations!</strong>
                <p>Google Ads Creative Certification</p>
                <small>Completed by MANOJ KUMAR on June 28, 2023<br>Expires: June 28, 2024</small>
            </div>
        </div>

        <!-- Right Column -->
        <div class="form-section">
            <h2>Let's Discuss Now</h2>
            <p>Fill out the form and our team will get back to you</p>
            <form id="contactForm">
                <div class="input-group">
                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="Email" required>
                </div>
                <input type="tel" placeholder="Phone Number" required>

                <div class="services">
                    <p>What services interests you?</p>
                    <div class="checkboxes">
                        <label><input type="checkbox"> Web Design / Development</label>
                        <label><input type="checkbox"> eCommerce Development</label>
                        <label><input type="checkbox"> CRM Development</label>
                        <label><input type="checkbox"> Content Writing</label>
                        <label><input type="checkbox"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox"> Mobile App Development</label>
                        <label><input type="checkbox"> Pay Per Click (PPC)</label>
                        <label><input type="checkbox"> Social Media (SMO)</label>
                        <label><input type="checkbox"> Others</label>
                    </div>
                </div>

                <textarea placeholder="Write Your Message" required></textarea>

                <div class="captcha-placeholder">
                    <input type="checkbox" id="notRobot"> <label for="notRobot">I'm not a robot</label>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const robotCheck = document.getElementById('notRobot').checked;

            if (!robotCheck) {
                alert('Please verify you are not a robot!');
                return;
            }

            alert('Form submitted successfully!');
        });
    </script>

</body>

</html>