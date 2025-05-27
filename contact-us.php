<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaikvik Technology</title>
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
     <link rel="stylesheet" href="assets/css/nav.css"> -->
    <!-- Css Fancy Box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- Css File Link  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>
    <!-- Header File Link -->
    <?php include 'includes/navbar.php' ?>

    <!-- ========== Start Breadcrumb Section ========== -->
    <div class="breadcrumb">
        <img src="https://jaikvik.in/lab/new-post-video/img/breadcrumb/corporate-world-news.webp" alt="" width="100%">
    </div>
    <!-- ========== End Breadcrumb Section ========== -->

    <!-- ========== Start Contact Us Section ========== -->
    <section class="contactSection">
        <div class="contactContent">
            <h2>Get In Touch With Us</h2>
            <p>Get in touch with us for inquiries, support, feedback, or partnership opportunities. We're here to
                assist you efficiently</p>
        </div>
        <div class="row g-lg-5">
            <div class="col-lg-7">
                <div class="contactLeft">
                    <form action="contact-mail.php" method="post">
                        <div class="row g-lg-4 g-md-4 gy-3">
                            <div class="col-lg-6">
                                <div class="input-contain">
                                    <input type="text" name="fname" placeholder="" required autocomplete="off">
                                    <label class="placeholder-text" for="fname">
                                        Full Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-contain">
                                    <input type="text" name="phone" placeholder="" required autocomplete="off">
                                    <label class="placeholder-text" for="phone">
                                        Phone Number
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-contain">
                                    <input type="email" name="email" placeholder="" required autocomplete="off">
                                    <label class="placeholder-text" for="email">
                                        Email Address
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-contain">
                                    <input type="text" name="subject" placeholder="" required autocomplete="off">
                                    <label class="placeholder-text" for="subject">
                                        Your Subject
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <textarea name="msg" rows="5" placeholder="Your Message" required
                                        autocomplete="off"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contactRight">
                    <div class="rightLink">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <p>Noida - A 82, Sector 63, Noida, UP</p>
                        </div>
                    </div>
                    <div class="rightLink">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <a href="#">info@jaikviktechnology.com</a>
                        </div>
                    </div>
                    <div class="rightLink">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <a href="#">+91-9310907227</a>
                        </div>
                    </div>
                    <div class="rightLink">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <a href="#">+91-120-4200970</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mapSection">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d53847.80248475084!2d77.33872244173637!3d28.620883471509963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390cef6105705e55%3A0xe206b5e4f7fd200c!2sJaikvik%20Technology%20India%20Pvt.%20Ltd.%20A-82%2C%20Sector%2063%20Rd%20A%20Block%2C%20Sector%2063%20Noida%2C%20Uttar%20Pradesh%20201301!3m2!1d28.6208897!2d77.3799222!5e1!3m2!1sen!2sin!4v1735297470645!5m2!1sen!2sin"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ========== End Contact Us Section ========== -->

    <!-- Footer File Link  -->
    <?php include 'includes/footer.php' ?>

    <!-- ==========  Java Script All File Link  ========== -->
    <!-- Bootstrap Java Script File Link  -->
    <script src="assets/js/bootstrapJs.js"></script>
    <!-- Swiper Js File Link  -->
    <script src="assets/js/swiperJs.js"></script>
    <!-- JavaScript File Link -->
    <script src="assets/js/script.js"></script>
</body>

</html>