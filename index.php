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

    <?php include 'contact_popup.html' ?>
    <?php include 'chat-bot.html' ?>



    <!-- Header File Link -->
    <?php include 'includes/navbar.php' ?>

    <!-- ========== Start Hero Section ========== -->
    <section class="heroSection container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3">
                <div class="rotaeRight">
                    <img src="https://jaikvik.in/lab/new-post-video/img/new-cricle-image.png" alt="">
                    <img src="https://jaikvik.in/lab/new-post-video/img/rotate-3.png" alt="" class="rotate-3">
                </div>
            </div>
            <div class="col-lg-9 col-md-8  cursor-pointer">
                <div class="heroBanner" id="heroBanner">
                    <video id="heroVideo" loop preload="metadata">
                        <source src="https://jaikvik.in/lab/new-post-video/img/home-banner/Jaikvin Technology Video 5.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Start Product Section ========== -->
    <?php include 'home-page-product-section.php' ?>



    <!-- ========== End Product Section ========== -->

    <!-- ========== Start Enguriy Form Section ========== -->
    <!-- <section class="enquirySection">
        <div class="enquiryForm">
            <form action="contact-mail.php" method="post">
                <h2 class="enquiryHeading "></h2>
                <div class="form-grid">
                    <div class="input-contain">
                        <input type="text" name="fname" required autocomplete="off" placeholder=" " />
                        <label class="placeholder-text text-uppercase" for="fname">Full Name</label>
                    </div>
                    <div class="input-contain">
                        <input type="email" name="email" required autocomplete="off" placeholder=" " />
                        <label class="placeholder-text text-uppercase" for="email">Email Address</label>
                    </div>
                    <div class="input-contain">
                        <input type="text" name="phone" required autocomplete="off" placeholder=" " />
                        <label class="placeholder-text text-uppercase" for="phone">Phone Number</label>
                    </div>
                    <div class="input-contain">
                        <input type="text" name="company" required autocomplete="off" placeholder=" " />
                        <label class="placeholder-text text-uppercase" for="company">Company Name</label>
                    </div>
                    <div class="input-contain full-width">
                        <input type="text" name="message" required autocomplete="off" placeholder=" " />
                        <label class="placeholder-text text-uppercase" for="message">Message</label>
                    </div>
                    <div class="formBtn full-width">
                        <button type="submit" class="text-uppercase">Send Now</button>
                    </div>
                </div>
            </form>
        </div>
    </section> -->


    <!-- website  -->

    <!-- ========== Start Client Work Section ========== -->
    <section class="clientWork">

        <?php include 'home-page-website-slider.php' ?>
        <br>

        <!-- ========== Start Technology Section ========== -->
        <section class="productSection">
            <div class="swiper techslider">
                <div class="productHeading">
                    <h2 class="text-uppercase"><a href="#">Our Technology <span>Explore All</span></a></h2>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="javascript-es6.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/ES6.png" alt="ES6">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="java.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/JAva.png" alt="Java">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="javascript-jquery.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/Jquery.png" alt="jQuery">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="laravel.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/Laravel.png" alt="Laravel">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="mongodb.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/Mongo-DB.png" alt="MongoDB">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="node-js.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/Node-Js.png" alt="Node.js">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="python.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/Python.png" alt="Python">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="react-js.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/React-js.png" alt="React.js">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="sql.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/SQL.png" alt="SQL">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="productCard1">
                            <a href="wordpress.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/logo/Wordpress.png" alt="WordPress">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productPN">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Reel Slider  -->
        <div class="swiper reelSwiper">
            <div class="reelHeading">
                <h2 class="text-uppercase"><a href="#">Social Media Reels <span>Explore All</span></a></h2>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo" load="lazy">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/acoustic-nest.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper ">
                        <div class="video-container reelvideo load=" lazy"">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/adxel.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/reels/aerocide.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/ambrosia-harvest.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/anp-bee.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/cmed-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/glow-green.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/gurgaon-packaging.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/indian-roller.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/luvfins.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/regent.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/satya.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/reels/shree-ram-enterprises.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/ambrosia-harvest-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/cmed.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-1/ambrosia-harvest.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/reels/amx.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/anaansh.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/celestial.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/cmed.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/anaansh.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/envirotech.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/reels/fun-twist.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/glow-green.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/gutaderme.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/my-brand-please.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/newtach.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/radicon.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/regent-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/shree-ram-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/smd.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/uni-spares.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/reels/vinama.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/envirotech-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/glow-green-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/radicon-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/glow-green-3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/radicon-3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/uni-spares-2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper">
                        <div class="video-container reelvideo">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/reels-2/adicon-4.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="reelPN">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <!-- Post Slider  -->
        <div class="swiper postSwiper">
            <div class="postHeading">
                <h2 class="text-uppercase"><a href="#">Social Media Posts <span>Explore All</span></a></h2>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/ancoustic-nest-pet-panel-1.jpg" width="100%"
                                alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/ancoustic-nest-pet-panel-1.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/uni-spares.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/uni-spares.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/ambrosia-beekeeping-academy-2.jpg" width="100%"
                                alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/ambrosia-beekeeping-academy-2.jpg"
                                class="lightbox-image" data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/anaansh.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/anaansh.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/anp-bee-1.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/anp-bee-1.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/atlas-rolling-1.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/atlas-rolling-1.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/bweld.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/bweld.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/celestial.jpeg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/celestial.jpeg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/cmed.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/cmed.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/comfort-2.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/comfort-2.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/dicocon-gel-25.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/dicocon-gel-25.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/gutaderme.jpeg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/gutaderme.jpeg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/envirotech-1.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/envirotech-1.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/felicity.jpeg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/felicity.jpeg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/galaxy.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/galaxy.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/ganesh-sky-balloon.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/ganesh-sky-balloon.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/gemak.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/gemak.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/glow-green.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/glow-green.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/indian-roller.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/indian-roller.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/gemak-2.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/gemak-2.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/micro-industry.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/micro-industry.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/my-brand-please.jpeg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/my-brand-please.jpeg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/nexus.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/nexus.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/poly-pack.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/poly-pack.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/radicon.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/radicon.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/refer-me.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/refer-me.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/regent.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/regent.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/shree-ram-2.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/shree-ram-2.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/smd-1.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/smd-1.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/sports-barrel.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/sports-barrel.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="postCard">
                        <figure class="image-box">
                            <img src="https://jaikvik.in/lab/new-post-video/post/uni-spares-2.jpg" width="100%" alt="galleryImg">
                        </figure>
                        <div class="view-btn">
                            <a href="https://jaikvik.in/lab/new-post-video/post/uni-spares-2.jpg" class="lightbox-image"
                                data-fancybox="gallery"></a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
            <div class="postPN">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>




        <!-- banner slider  -->
        <?php include 'home-page-banner.php' ?>
        <!-- videos -->


        <!-- corporate videos -->
        <?php include 'Corporate-video.php' ?>





    </section>


    <!-- testimonial video  -->
    <section class="testSection">
        <div class="swiper testSwiper">
            <div class="testHeading">
                <h2 class="text-uppercase"><a href="#">Our Testimonials <span>Explore All</span></a></h2>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/video/testimonial-video/1-client.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="vedio-wrapper" style="height: 40vh !important;">
                        <div class="video-container">
                            <video muted class="swiper-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/img/testimoinal/istockphoto-1321644229-640_adpp_is.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <!-- Add as many slides as needed -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="testPN">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>




    <!-- ========== Start Blog Section ========== -->
    <section class="blogSection">
        <div class="row g-gl-4 g-md-4 gy-3">
            <div class="col-lg-8 col-md-8">
                <div class="blogLeft">
                    <div class="swiper blogLeftSwiper">
                        <div class="blogContent">
                            <h2 class="heading text-uppercase">Our Latest News</h2>

                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="blogCard">
                                    <div class="blogImg">
                                        <img src="https://jaikvik.in/lab/new-post-video/img/blog/blog.png" alt="Blog Img">
                                    </div>
                                    <div class="blogCardContent">
                                        <div class="blogPerson">
                                            <a href="#">Social Media Marketing</a>
                                            <div>
                                                <i class="fa-regular fa-user"></i>
                                                <p>Dixit Mishra</p>
                                            </div>
                                            <div>
                                                <i class="fa-regular fa-calendar-check"></i>
                                                <p>10 Jan 2025</p>
                                            </div>
                                        </div>
                                        <h4>Unlocking Growth with Instagram Reels in 2025</h4>
                                        <p>Instagram Reels are dominating social media. Learn how to leverage them for
                                            brand visibility...</p>
                                        <a class="blogLink"
                                            href="how-can-i-become-an-expert-in-ppc-advertising.php">Read Full Story</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blogCard">
                                    <div class="blogImg">
                                        <img src="https://jaikvik.in/lab/new-post-video/img/blog/blog.png" alt="Blog Img">
                                    </div>
                                    <div class="blogCardContent">
                                        <div class="blogPerson">
                                            <a href="#">SEO</a>
                                            <div>
                                                <i class="fa-regular fa-user"></i>
                                                <p>Dixit Mishra</p>
                                            </div>
                                            <div>
                                                <i class="fa-regular fa-calendar-check"></i>
                                                <p>15 Jan 2025</p>
                                            </div>
                                        </div>
                                        <h4>Top SEO Trends to Watch in 2025</h4>
                                        <p>Stay ahead with the latest SEO strategies shaping search engine rankings this
                                            year...</p>
                                        <a class="blogLink"
                                            href="how-can-i-become-an-expert-in-ppc-advertising.php">Read Full Story</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blogCard">
                                    <div class="blogImg">
                                        <img src="https://jaikvik.in/lab/new-post-video/img/blog/web.png" alt="Blog Img">
                                    </div>
                                    <div class="blogCardContent">
                                        <div class="blogPerson">
                                            <a href="#">Website Development</a>
                                            <div>
                                                <i class="fa-regular fa-user"></i>
                                                <p>Dixit Mishra</p>
                                            </div>
                                            <div>
                                                <i class="fa-regular fa-calendar-check"></i>
                                                <p>20 Jan 2025</p>
                                            </div>
                                        </div>
                                        <h4>Why Progressive Web Apps Are the Future</h4>
                                        <p>Explore how PWAs enhance user experience and boost business performance...
                                        </p>
                                        <a class="blogLink"
                                            href="how-can-i-become-an-expert-in-ppc-advertising.php">Read Full Story</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blogRight">
                    <div class="swiper blogRightSwiper">
                        <div class="blogContent">
                            <h2 class="heading text-uppercase">Latest Updates</h2>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="blogCard">
                                    <div class="blogImg">
                                        <img src="https://jaikvik.in/lab/new-post-video/img/blog/ppc.jpg" alt="Blog Img">
                                    </div>
                                    <div class="blogCardContent">
                                        <div class="blogPerson">
                                            <a href="#">PPC Advertising</a>
                                            <div>
                                                <i class="fa-regular fa-user"></i>
                                                <p>Dixit Mishra</p>
                                            </div>
                                            <div>
                                                <i class="fa-regular fa-calendar-check"></i>
                                                <p>25 Jan 2025</p>
                                            </div>
                                        </div>
                                        <h4>Advanced PPC Techniques for Maximum ROI</h4>
                                        <p>Master the art of Pay-Per-Click with cutting-edge strategies for 2025...</p>
                                        <a class="blogLink"
                                            href="how-can-i-become-an-expert-in-ppc-advertising.php">Read Full Story</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blogCard">
                                    <div class="blogImg">
                                        <img src="https://jaikvik.in/lab/new-post-video/img/blog/blog.png" alt="Blog Img">
                                    </div>
                                    <div class="blogCardContent">
                                        <div class="blogPerson">
                                            <a href="#">Content Marketing</a>
                                            <div>
                                                <i class="fa-regular fa-user"></i>
                                                <p>Dixit Mishra</p>
                                            </div>
                                            <div>
                                                <i class="fa-regular fa-calendar-check"></i>
                                                <p>01 Feb 2025</p>
                                            </div>
                                        </div>
                                        <h4>How to Create Content That Converts</h4>
                                        <p>Turn readers into customers with compelling content strategies...</p>
                                        <a class="blogLink"
                                            href="how-can-i-become-an-expert-in-ppc-advertising.php">Read Full Story</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Blog Section ========== -->

    <!-- ========== Start Services Section ========== -->
    <?php include 'our_services.php' ?>

    <!-- ========== Start Review Section ========== -->
    <section class="rewiewSection">
        <div class="reviewContent">
            <h2 class="text-uppercase">What Our Clients Say About Us</h2>
            <button class="openReviewModalBtn">Add Review</button>
        </div>
        <div class="swiper reviewSwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>From designing our website to handling our online marketing, Jaikvik Technology has been an
                            invaluable partner. Their attention to detail, innovative approach, and timely delivery have
                            made our digital journey seamless and rewarding. We appreciate their professionalism and
                            creative inputs.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Priya Sharma, Bright Future Edutech</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>The film-making expertise of Jaikvik Technology brought our brand story to life. Their
                            understanding of visual storytelling, combined with high-quality production, created
                            impactful content that perfectly aligned with our brand goals and captured audience
                            attention across digital platforms.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Vikram Rathore, Director, VR Creations</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Working with Jaikvik Technology has been exceptional. Their digital marketing team identifies
                            opportunities we never considered, helping us refine our strategy and achieve consistent
                            growth. Their insights, transparency, and commitment have made them an irreplaceable part of
                            our business journey.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Rakesh Mehra, Founder, Elite Interiors</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology’s developers transformed our outdated website into a modern, user-friendly
                            platform. Their understanding of user experience, coupled with excellent design skills,
                            ensured our site not only looks great but also performs efficiently across all devices.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3> Deepak Mishra, Founder, HealthPlus

                        </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>For over a decade, Jaikvik Technology has been our trusted partner for digital solutions.
                            Whether it’s website development, SEO, or social media campaigns, their team consistently
                            delivers innovative strategies that help us maintain a strong online presence and
                            competitive edge</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3> Rohit Malhotra,Director, Innovate Industries</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology understands the unique needs of our industry and tailors digital marketing
                            strategies accordingly. Their campaigns have significantly increased our visibility, brand
                            credibility, and lead generation, proving their ability to blend creativity with data-driven
                            insights perfectly.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3> Poonam Arora, Founder, Aroma Blends

                        </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology excels at delivering innovative digital marketing solutions. Their ability
                            to monitor trends, adapt quickly, and constantly optimize campaigns has helped us
                            successfully navigate evolving market conditions while maintaining strong customer
                            engagement and driving business growth.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Arun Bansal, Director, Bansal Automobiles</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>We were impressed with Jaikvik Technology’s holistic approach. Their seamless coordination
                            between website design, marketing strategies, and video production created a unified brand
                            presence, ensuring consistency across platforms while enhancing our customer engagement and
                            our digital identity.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3> Neha Kapoor, Founder, Trendy Styles</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>The video production team at Jaikvik Technology brings creative storytelling and technical
                            excellence together. Their ability to understand our brand’s message, capture emotions, and
                            deliver visually appealing content has greatly contributed to building stronger connections
                            with our target audience.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Sunita Narang, Manager, Green Leaf</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology’s customer-centric approach sets them apart. They actively listen to our
                            requirements, offer tailored solutions, and provide regular performance updates, ensuring
                            transparency and fostering a strong, collaborative partnership built on trust, innovation,
                            and measurable digital success.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Vikrant Singh, Head, Healthcare

                        </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology has played a key role in transforming our online presence. Their team’s
                            ability to merge creativity with performance-driven strategies has resulted in stronger
                            brand visibility, increased traffic, and better audience engagement, helping us achieve
                            sustainable business growth.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Megha Verma, Founder, Craft Studio

                        </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Our experience with Jaikvik Technology has been phenomenal. Their ability to develop robust
                            websites, produce compelling videos, and execute innovative digital campaigns has ensured
                            our brand stays visible, relevant, and competitive in a constantly evolving digital
                            landscape.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Rajesh Malhotra,Partner, Global Consultants</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology blends technology and creativity seamlessly. From website development to
                            social media campaigns and promotional videos, their comprehensive approach ensures our
                            brand message is clear, impactful, and consistent across all platforms, maximizing reach and
                            engagement</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Manoj Sethi, Owner, Sethi Electronics

                        </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology’s innovative digital strategies and creative campaigns have elevated our
                            online presence. Their dedicated team ensures every campaign aligns with our goals, driving
                            significant improvements in traffic, engagement, and overall brand awareness, helping us
                            stay competitive.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Sandeep Khanna, CEO, Bright Horizons</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>From website development to managing digital campaigns, Jaikvik Technology’s services are
                            outstanding. Their professional approach, innovative solutions, and attention to detail have
                            strengthened our online visibility, allowing us to connect better with our audience and
                            drive business growth.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Kavita Malhotra, Co-Founder, Blissful Living </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology has been instrumental in our brand’s digital transformation. Their ability
                            to craft data-driven campaigns while blending creativity has enhanced our visibility,
                            improved customer engagement, and ensured we achieve measurable results across all digital
                            channels.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Arjun Mehta, Manager, Vista Technologies </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>The team at Jaikvik Technology delivers creative and impactful digital solutions tailored to
                            our business needs. Their strategic input, quick response times, and proactive approach make
                            them a valuable partner in our journey to achieve sustainable online growth and audience
                            engagement.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Priya Chopra, Founder, Craft & Charm Studio

                        </h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology’s seamless coordination between website development, marketing, and
                            content creation has given us a strong and consistent brand identity. Their ability to
                            understand our vision and translate it into successful campaigns has been invaluable in
                            building customer trust and loyalty.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Vikas Suri, Director, Nexa Solutions Pvt. Ltd.</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Jaikvik Technology excels at combining creativity and technology into powerful digital
                            strategies. Their ability to identify growth opportunities, optimize campaigns, and deliver
                            tailored solutions has been essential in improving our brand reach, customer engagement.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Meenal, Head, GreenWave Organics</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>We’ve partnered with Jaikvik Technology for several years, and their team’s dedication,
                            creative approach, and data-driven marketing strategies have consistently helped us achieve
                            our digital goals, improve customer engagement, and stand out in an increasingly crowded
                            digital space.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Rahul Sharma, Founder, Urban Trends</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>The expert team at Jaikvik Technology understands how to craft campaigns that not only
                            attract attention but also drive results. Their innovative ideas, professional execution,
                            and commitment to client success make them a trusted partner for our long-term digital
                            growth.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Sneha Verma, Manager, Sparkle Events</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="reviewCard">
                        <img src="https://jaikvik.in/lab/new-post-video/img/quote.png" alt="">
                        <p>Thanks to Jaikvik Technology’s proactive approach and technical expertise, we’ve built a
                            modern, user-friendly website and implemented data-driven digital campaigns that deliver
                            real results. Their collaborative working style ensures our brand message remains clear,
                            consistent, and impactful.</p>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Saurabh, Co-Founder, Elite Solutions</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Review Modal  -->
    <div class="reviewModal">
        <div class="reviewModal-content">
            <div class="enquiryContent">
                <h3>Add Your Review</h3>
                <div class="reviewModal-close-btn"><i class="fa-regular fa-circle-xmark"></i></div>
            </div>
            <form action="enquriy-mail.php" method="post">
                <div class="row g-lg-3 g-md-3 gy-3">
                    <div class="col-lg-6">
                        <div class="input-contain">
                            <input type="text" name="fname" required placeholder=" " autocomplete="off">
                            <label class="placeholder-text" for="fname">Full Name</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-contain">
                            <input type="email" name="email" required placeholder=" " autocomplete="off">
                            <label class="placeholder-text" for="email">Email Address</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-contain">
                            <input type="text" name="cname" required placeholder=" " autocomplete="off">
                            <label class="placeholder-text" for="email">Company Name</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="reviewAdd">
                            <p>Your Reating</p>
                            <fieldset class="rating-container">
                                <input type="radio" name="rating" id="rate5">
                                <label for="rate5">
                                    <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #f7db5e;
                                                }

                                                .cls-2 {
                                                    fill: #f3cc30;
                                                }

                                                .cls-3 {
                                                    fill: #edbd31;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-2"
                                            d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z" />
                                        <path class="cls-1"
                                            d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z" />
                                        <path class="cls-3"
                                            d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z" />
                                    </svg>
                                </label>
                                <input type="radio" name="rating" id="rate4">
                                <label for="rate4">
                                    <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #f7db5e;
                                                }

                                                .cls-2 {
                                                    fill: #f3cc30;
                                                }

                                                .cls-3 {
                                                    fill: #edbd31;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-2"
                                            d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z" />
                                        <path class="cls-1"
                                            d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z" />
                                        <path class="cls-3"
                                            d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z" />
                                    </svg>
                                </label>
                                <input type="radio" name="rating" id="rate3">
                                <label for="rate3">
                                    <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #f7db5e;
                                                }

                                                .cls-2 {
                                                    fill: #f3cc30;
                                                }

                                                .cls-3 {
                                                    fill: #edbd31;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-2"
                                            d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z" />
                                        <path class="cls-1"
                                            d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z" />
                                        <path class="cls-3"
                                            d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z" />
                                    </svg>
                                </label>
                                <input type="radio" name="rating" id="rate2">
                                <label for="rate2">
                                    <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #f7db5e;
                                                }

                                                .cls-2 {
                                                    fill: #f3cc30;
                                                }

                                                .cls-3 {
                                                    fill: #edbd31;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-2"
                                            d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z" />
                                        <path class="cls-1"
                                            d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z" />
                                        <path class="cls-3"
                                            d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z" />
                                    </svg>
                                </label>
                                <input type="radio" name="rating" id="rate1">
                                <label for="rate1">
                                    <svg id="Object" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1122 1122">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #f7db5e;
                                                }

                                                .cls-2 {
                                                    fill: #f3cc30;
                                                }

                                                .cls-3 {
                                                    fill: #edbd31;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-2"
                                            d="m570.497,252.536l93.771,190c1.543,3.126,4.525,5.292,7.974,5.794l209.678,30.468c8.687,1.262,12.156,11.938,5.87,18.065l-151.724,147.895c-2.496,2.433-3.635,5.939-3.046,9.374l35.817,208.831c1.484,8.652-7.597,15.25-15.367,11.165l-187.542-98.596c-3.085-1.622-6.771-1.622-9.857,0l-187.542,98.596c-7.77,4.085-16.851-2.513-15.367-11.165l35.817-208.831c.589-3.436-.55-6.941-3.046-9.374l-151.724-147.895c-6.286-6.127-2.817-16.803,5.87-18.065l209.678-30.468c3.45-.501,6.432-2.668,7.974-5.794l93.771-190c3.885-7.872,15.11-7.872,18.995,0Z" />
                                        <path class="cls-1"
                                            d="m561,296.423l-83.563,161.857c-4.383,8.49-12.797,14.155-22.312,15.024l-181.433,16.562,191.688,8.964c12.175.569,23.317-6.81,27.543-18.243l68.077-184.164Z" />
                                        <path class="cls-3"
                                            d="m357.284,838.933l-4.121,24.03c-1.484,8.652,7.597,15.25,15.367,11.165l187.541-98.596c3.086-1.622,6.771-1.622,9.857,0l187.541,98.596c7.77,4.085,16.851-2.513,15.367-11.165l-35.817-208.831c-.589-3.435.55-6.941,3.046-9.374l151.724-147.894c6.287-6.127,2.818-16.802-5.87-18.065l-70.23-10.205c-113.59,203.853-287.527,311.181-454.405,370.34Z" />
                                    </svg>
                                </label>
                                <div class="rating-value"></div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <textarea name="msg" rows="3" placeholder="Write Your Feedback" required
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
    <!-- ========== End Review Section ========== -->


    <!-- Footer File Link  -->
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/enquiry.php' ?>

    <!-- ==========  Java Script All File Link  ========== -->
    <!-- Bootstrap Java Script File Link  -->
    <script src="assets/js/bootstrapJs.js"></script>
    <!-- Swiper Js File Link  -->
    <script src="assets/js/swiperJs.js"></script>
    <!-- JavaScript File Link -->
    <script src="assets/js/script.js"></script>
    <!-- Fancy Box Js File Link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <script src="assets/js/jquery.fancybox.js"></script>



    <!-- home video js  -->
    <script>
        const video = document.getElementById('heroVideo');
        const banner = document.getElementById('heroBanner');

        // Start with paused video and muted
        video.pause();
        video.muted = true;

        // On mouse enter: play with sound
        banner.addEventListener('mouseenter', () => {
            video.muted = false;
            video.play();
        });

        // On mouse leave: keep playing but muted
        banner.addEventListener('mouseleave', () => {
            video.muted = true;
            video.play();
        });
    </script>
    <!-- LightBox / Fancybox -->
    <script>
        if ($('.lightbox-image').length) {
            $('.lightbox-image').fancybox({
                openEffect: 'fade',
                closeEffect: 'fade',
                helpers: {
                    media: {}
                }
            });
        }
    </script>

    <!-- images scrolling code -->
    <script src="assets/js/jquery-image-scroll.js"></script>
    <script>
        $(window).on('load', function() {
            $('.screen').scrollImage();
        })
    </script>

    <script>
        // Lazy load video sources
        document.querySelectorAll('.swiper-video source[data-src]').forEach(source => {
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        source.src = source.dataset.src;
                        source.parentElement.load();
                        observer.unobserve(source);
                    }
                });
            }, {
                rootMargin: '0px 0px 100px 0px'
            });
            observer.observe(source);
        });

        // Swiper initialization
        var swiper = new Swiper(".testSwiper", {
            loop: true,
            speed: 1000,
            effect: "slide",
            easing: 'linear',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1.1,
                    spaceBetween: 20,
                },
                480: {
                    slidesPerView: 1.1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3.2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4.2,
                    spaceBetween: 10,
                },
            },
        });

        // Video handling
        document.querySelectorAll('.swiper-video').forEach(video => {
            video.addEventListener('play', () => {
                swiper.autoplay.stop();
            });

            video.addEventListener('mouseenter', () => {
                video.muted = false; // Enable sound on hover
                video.volume = 0.5; // Set volume to 50%
                video.play();
                swiper.autoplay.stop();
            });

            video.addEventListener('pause', () => {
                swiper.autoplay.start();
            });

            video.addEventListener('mouseleave', () => {
                video.pause();
                video.muted = true; // Mute again when leaving
                video.currentTime = 0;
                swiper.autoplay.start();
            });

            video.addEventListener('ended', () => {
                video.muted = true; // Mute when video ends
                swiper.autoplay.start();
            });
        });
    </script>




</body>

</html>