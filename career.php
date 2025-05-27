<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaikvik Technology</title>
    <!-- Favicon Link  -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
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
        <img src="assets/img/breadcrumb/corporate-world-news.webp" alt="" width="100%">
    </div>
    <!-- ========== End Breadcrumb Section ========== -->

    <!-- ========== Start Contact Us Section ========== -->
    <section class="careerPage">
        <div class="row g-lg-5 g-md-4 gy-4">
            <div class="col-lg-6 col-md-6 order-lg-0 order-md-0 order-1">
                <div class="careerLeft">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row g-lg-4 g-md-4 gy-3">
                            <div class="col-lg-6">
                                <div class="input-contain">
                                    <input type="text" name="fname" required placeholder=" " autocomplete="off">
                                    <label class="placeholder-text" for="fname">
                                        Full Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-contain">
                                    <input type="text" name="phone" required placeholder=" " autocomplete="off">
                                    <label class="placeholder-text" for="phone">
                                        Phone Number
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-contain">
                                    <input type="email" name="email" required placeholder=" " autocomplete="off">
                                    <label class="placeholder-text" for="email">
                                        Email Address
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="file">
                                    <input type="file" name="resume"
                                        accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-contain">
                                    <input type="text" name="postion" required placeholder=" " autocomplete="off">
                                    <label class="placeholder-text" for="subject">
                                        Position Applied For
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <textarea name="msg" rows="2" placeholder="Your Message"
                                        autocomplete="off"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 order-lg-1 order-md-1 order-0">
                <div class="contactRight">
                    <h4>Join Our Team and Build the Future</h4>
                    <p><b>Current Openings:-</b></p>
                    <ul>
                        <li>Graphic Designer</li>
                        <li>Web Developer</li>
                        <li>UI/UX Designer</li>
                        <li>SEO (Search Engine Optimization)</li>
                        <li>Backend Developer</li>
                        <li>Sales Manager</li>
                    </ul>
                    <p><b>How to Apply</b></p>
                    <p>Submit your resume and cover letter to <a
                            href="maito:info@jaikviktechnology.com">info@jaikviktechnology.com</a> or apply directly
                        via our website.</p>
                </div>
            </div>
        </div>
    </section>

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