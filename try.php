<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaikvik Products with Scroll Effect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        :root {
            --colorRed: #ff0000;
            /* Define your red color */
            --colorBlack: #141414;
            /* Define your black color */
        }

        .bhakar-section {
            padding: 50px 15px;
            background: black;
            position: relative;
        }

        .bhakar-heading h2 {
            text-align: left !important;
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 700;
            color: white;

        }

        .bhakar-heading h2 a {
            /* color: #333; */
            text-decoration: none;
        }

        .bhakar-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(90, 89, 89, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .bhakar-card:hover {
            transform: translateY(-10px);
        }

        .bhakar-card-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 3;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bhakar-card-icon img {
            width: 164px;
            height: 215px;
            position: absolute;
            right: 46px;
            top: -22px;
        }

        .bhakar-card-img {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .bhakar-card-img .image {
            width: 100%;
            height: auto;
            position: absolute;
            left: 0;
        }

        .bhakar-card-img .hover-image {
            display: none;
            position: absolute;
            width: 100%;
            height: auto;
        }

        .bhakar-card-img:hover .main-image {
            display: none;
        }

        .bhakar-card-img:hover .hover-image {
            display: block;
        }

        .bhakar-image-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(84, 84, 84, 0.7);
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .bhakar-nav {
            opacity: 0;
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -ms-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
            /* max-width: 1200px; */
            padding: 0 10px;
            z-index: 10;
        }

        .bhakar-swiper:hover .bhakar-nav {
            opacity: 1;
            /* Show navigation buttons on hover */
        }

        .bhakar-swiper-button-prev {
            width: 35px;
            height: 35px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
            border: 2px solid var(--colorRed);
            background-color: var(--colorBlack);
            top: calc(50% + 20px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bhakar-swiper-button-prev:hover:after {
            transform: translateX(-5px);
            -webkit-transform: translateX(-5px);
            -moz-transform: translateX(-5px);
            -ms-transform: translateX(-5px);
            -o-transform: translateX(-5px);
        }

        .bhakar-swiper-button-prev::after {
            content: "\f104";
            font-family: FontAwesome;
            font-size: 18px;
            color: var(--colorRed);
            transition: all 0.3s linear;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
        }

        .bhakar-swiper-button-next {
            right: 10px;
            left: auto;
            width: 35px;
            height: 35px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
            border: 2px solid var(--colorRed);
            background-color: var(--colorBlack);
            top: calc(50% + 20px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bhakar-swiper-button-next:hover:after {
            transform: translateX(5px);
            -webkit-transform: translateX(5px);
            -moz-transform: translateX(5px);
            -ms-transform: translateX(5px);
            -o-transform: translateX(5px);
        }

        .bhakar-swiper-button-next::after {
            content: "\f105";
            font-family: FontAwesome;
            font-size: 18px;
            color: var(--colorRed);
            z-index: 99;
            transition: all 0.3s linear;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
        }

        .bhakar-swiper-pagination {
            position: relative;
            margin-top: 20px;
        }

        .bhakar-swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #ccc;
            opacity: 1;
        }

        .bhakar-swiper-pagination-bullet-active {
            background: #333;
        }

        .bhakar-swiper {
            position: relative;
            width: 100%;
            margin: 0 auto;
            visibility: visible !important;
            opacity: 1 !important;
        }

        .swiper-wrapper {
            display: flex;
        }

        .swiper-slide {
            display: block;
            visibility: visible !important;
        }

        @media (max-width: 768px) {
            .bhakar-heading h2 {
                font-size: 24px;
            }

            .bhakar-heading h2 a span {
                font-size: 14px;
            }

            .bhakar-card-img {
                height: 150px;
            }

            .bhakar-nav {
                padding: 0 5px;
            }

            .bhakar-swiper-button-next,
            .bhakar-swiper-button-prev {
                width: 30px;
                height: 30px;
            }

            .bhakar-swiper-button-next::after,
            .bhakar-swiper-button-prev::after {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .bhakar-heading h2 {
                font-size: 20px;
            }

            .bhakar-card-img {
                height: 120px;
            }

            .bhakar-swiper-button-next,
            .bhakar-swiper-button-prev {
                width: 25px;
                height: 25px;
            }

            .bhakar-swiper-button-next::after,
            .bhakar-swiper-button-prev::after {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <section class="bhakar-section">
        <div class="swiper bhakar-swiper">
            <div class="bhakar-heading">
                <h2><a href="#">OUR PRODUCTS</a></h2>
            </div>
            <div class="swiper-wrapper">
                <!-- Mobile Application -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/1.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 1');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="mobile-application.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/mobile-Application.jpg"
                                    alt="Mobile Application" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Mobile Application');">
                                <div class="bhakar-image-text">Mobile Application</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Brand Identity -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/2.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 2');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Brand-promotion.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/brand-identity-2.jpg"
                                    alt="Brand Identity" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Brand Identity');">
                                <div class="bhakar-image-text">Brand Identity</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Corporate Video Presentation -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/3.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 3');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/corporate-video-presentaion.jpg"
                                    alt="Corporate Video Presentation" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Corporate Video Presentation');">
                                <div class="bhakar-image-text">Corporate Video Presentation</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Corporate Website -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/4.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 4');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="website-development-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/corporate-website.jpg"
                                    alt="Corporate Website" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Corporate Website');">
                                <div class="bhakar-image-text">Corporate Website</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Customized Software -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/5.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 5');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Customized_Software.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/Costumized Software.jpg"
                                    alt="Customized Software" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Customized Software');">
                                <div class="bhakar-image-text">Customized Software</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- CRM Software -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/6.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 6');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="crm.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/crm.jpg"
                                    alt="CRM Software" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for CRM Software');">
                                <div class="bhakar-image-text">CRM Software</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- E-Commerce -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/7.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 7');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="website-development-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/e-commerce.jpg"
                                    alt="E-Commerce" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for E-Commerce');">
                                <div class="bhakar-image-text">E-Commerce</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ERP Software -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/8.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 8');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="ERP.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/ERP.jpg"
                                    alt="ERP Software" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for ERP Software');">
                                <div class="bhakar-image-text">ERP Software</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Explanatory Video -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/9.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 9');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/explanatory-video.jpg"
                                    alt="Explanatory Video" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Explanatory Video');">
                                <div class="bhakar-image-text">Explanatory Video</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Interview -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/10.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 10');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/interview.jpg"
                                    alt="Interview" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Interview');">
                                <div class="bhakar-image-text">Interview</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Model Shoot -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/11.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 11');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/model-shoot.jpg"
                                    alt="Model Shoot" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Model Shoot');">
                                <div class="bhakar-image-text">Model Shoot</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Off-Page SEO -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/12.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 12');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/off-page-seo.jpg"
                                    alt="Off-Page SEO" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Off-Page SEO');">
                                <div class="bhakar-image-text">Off-Page SEO</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- On-Page SEO -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/13.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 13');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/on-page-seo.jpg"
                                    alt="On-Page SEO" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for On-Page SEO');">
                                <div class="bhakar-image-text">On-Page SEO</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Social Media Marketing -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/14.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 14');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="social-media-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/social-media-marketing.jpg"
                                    alt="Social Media Marketing" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Social Media Marketing');">
                                <div class="bhakar-image-text">Social Media Marketing</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Technical SEO -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/15.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 15');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/technical-seo.jpg"
                                    alt="Technical SEO" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Technical SEO');">
                                <div class="bhakar-image-text">Technical SEO</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- TV Commercial Ads -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/16.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 16');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/tv-commercial-ads.jpg"
                                    alt="TV Commercial Ads" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for TV Commercial Ads');">
                                <div class="bhakar-image-text">TV Commercial Ads</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Website Audit -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/17.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 17');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/website-audit.jpg"
                                    alt="Website Audit" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for Website Audit');">
                                <div class="bhakar-image-text">Website Audit</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- WooCommerce -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/18.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 18');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="website-development-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/woo-commerce.jpg"
                                    alt="WooCommerce" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for WooCommerce');">
                                <div class="bhakar-image-text">WooCommerce</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- YouTube Ads -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/19.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 19');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/youtube-ads.jpg"
                                    alt="YouTube Ads" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for YouTube Ads');">
                                <div class="bhakar-image-text">YouTube Ads</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- YouTube & Meta Ads -->
                <div class="swiper-slide">
                    <div class="bhakar-card">
                        <div class="bhakar-card-icon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/20.png" alt=""
                                onerror="this.src='https://via.placeholder.com/20'; console.error('Failed to load icon 20');">
                        </div>
                        <div class="bhakar-card-img bhakar-scroll-image" data-duration="5000">
                            <a href="PPC-Meta-YouTube-Ads.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/youtube-ads.jpg"
                                    alt="YouTube & Meta Ads" class="image main-image">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png"
                                    alt="Radicon Lab" class="image hover-image"
                                    onerror="console.error('Failed to load hover image for YouTube & Meta Ads');">
                                <div class="bhakar-image-text">YouTube & Meta Ads</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bhakar-nav">
                <div class="bhakar-swiper-button-prev"></div>
                <div class="bhakar-swiper-button-next"></div>
            </div>
            <div class="bhakar-swiper-pagination"></div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        (function($) {
            var swiper = new Swiper('.bhakar-swiper', {
                slidesPerView: 1,
                spaceBetween: 50,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.bhakar-swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.bhakar-swiper-button-next',
                    prevEl: '.bhakar-swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 60,
                    },
                }
            });

            console.log('Swiper initialized:', swiper);

            $.fn.bhakarScrollImage = function() {
                var imageScrollGetHeight = function($this) {
                    var imageh = $this.find(".hover-image").height(),
                        screenh = $this.height();
                    console.log('Image height:', imageh, 'Container height:', screenh);
                    return parseInt(screenh - imageh);
                };

                var onHover = function() {
                    console.log('Hover start on:', this);
                    if (imageScrollGetHeight($(this)) > 0) {
                        console.log('No scroll needed, image fits');
                        return;
                    }

                    var $ele = $(this).find(".hover-image");
                    $ele.stop();

                    var duration = $(this).attr("data-duration") || 5000;

                    $ele.css({
                        bottom: imageScrollGetHeight($(this))
                    });

                    $ele.animate({
                        bottom: 0
                    }, parseInt(duration));
                };

                var onRelease = function() {
                    console.log('Hover end on:', this);
                    var $ele = $(this).find(".hover-image");
                    $ele.stop();
                    $ele.animate({
                        bottom: imageScrollGetHeight($(this))
                    }, 500);
                };

                var setImagePosition = function($this) {
                    $this.find(".hover-image").css({
                        bottom: imageScrollGetHeight($this)
                    });
                };

                this.each(function() {
                    setImagePosition($(this));
                });

                this.hover(onHover, onRelease);

                var that = this;
                $(window).resize(function() {
                    that.each(function() {
                        setImagePosition($(this));
                    });
                });

                return this;
            };

            $(document).ready(function() {
                var $scrollImages = $('.bhakar-scroll-image');
                console.log('Found scroll-image elements:', $scrollImages.length);
                $scrollImages.bhakarScrollImage();

                var $swiper = $('.bhakar-swiper');
                console.log('Swiper container found:', $swiper.length);
                $swiper.hover(
                    function() {
                        console.log('Swiper hover start');
                        if (swiper && swiper.autoplay) {
                            swiper.autoplay.stop();
                        } else {
                            console.error('Swiper autoplay not available');
                        }
                    },
                    function() {
                        console.log('Swiper hover end');
                        if (swiper && swiper.autoplay) {
                            swiper.autoplay.start();
                        } else {
                            console.error('Swiper autoplay not available');
                        }
                    }
                );

                var img = new Image();
                img.src = "https://jaikvik.in/lab/new-post-video/img/Website/radicon-lab.png";
                img.onerror = function() {
                    console.error('Failed to preload Radicon Lab image');
                };

                const iconUrls = [
                    "https://jaikvik.in/lab/new-post-video/img/product/number/1.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/2.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/3.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/4.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/5.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/6.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/7.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/8.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/9.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/10.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/11.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/12.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/13.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/14.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/15.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/16.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/17.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/18.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/19.png",
                    "https://jaikvik.in/lab/new-post-video/img/product/number/20.png"
                ];
                iconUrls.forEach(url => {
                    var img = new Image();
                    img.src = url;
                    img.onerror = () => console.error(`Failed to preload icon: ${url}`);
                });
            });
        })(jQuery);
    </script>
</body>

</html>