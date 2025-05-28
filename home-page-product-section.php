<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Slider with Hover Effects</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css">
    <style>
        :root {
            --colorRed: #ff6b6b;
            --colorBlack: #1a1a1a;
            --colorGray: #333;
            --pad: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0c0c0c, #1a1a1a);
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            padding: 20px;
        }

        .productSection {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .productSection:hover .productSwiper .product-img {
            opacity: 1;
        }

        .productSwiper {
            overflow: visible;
            position: relative;
        }

        .productHeading {
            margin-bottom: 30px;
            text-align: center;
        }

        .productHeading h2 {
            color: #e5e5e5;
            font-size: clamp(24px, 4vw, 36px);
            display: inline-block;
            position: relative;
            transition: color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .productHeading h2:hover {
            color: var(--colorRed);
        }

        .productHeading h2:hover::after {
            opacity: 1;
        }

        .productHeading h2:hover a span {
            width: 120px;
        }

        .productHeading h2::after {
            content: "\f105";
            font-family: FontAwesome;
            font-size: 18px;
            position: absolute;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--colorRed);
            transition: opacity 0.4s ease;
            opacity: 0;
        }

        .productHeading h2 a {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: inherit;
        }

        .productHeading h2 a span {
            font-size: 14px;
            color: var(--colorRed);
            padding-top: 5px;
            width: 80px;
            overflow: hidden;
            white-space: nowrap;
            transition: width 0.3s ease;
            font-weight: 300;
        }

        .swiper-slide {
            height: auto;
        }

        .productCard {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            padding: var(--pad);
            overflow: visible;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .productCard:hover {
            transform: scale(1.05) translateY(-10px);
            z-index: 10;
            box-shadow: 0 20px 40px rgba(255, 107, 107, 0.2);
        }

        .productCardIcon {
            margin-bottom: 15px;
            z-index: 2;
        }

        .productCardIcon img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            filter: drop-shadow(0 0 10px rgba(255, 107, 107, 0.3));
        }

        .productCardImg {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
        }

        .productCardImg a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .productCardImg .image {
            width: 100%;
            min-height: 400px;
            /* Ensure image is tall enough to scroll */
            object-fit: cover;
            position: absolute;
            bottom: 0;
            border-radius: 10px;
            transition: bottom 5s linear;
        }

        .productCardImg:hover .image {
            bottom: calc(100% - 200px);
            /* Scroll to top, adjusted for container height */
        }

        .productCardImg .image-text {
            position: absolute;
            top: 15px;
            right: 10px;
            color: #fff;
            text-align: center;
            padding: 8px 12px;
            font-size: 12px;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.9), rgba(255, 107, 107, 0.7));
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 120px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            z-index: 3;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .productCardImg:hover .image-text {
            opacity: 0;
            transform: scale(0.8);
        }

        .swiper-pagination-bullets.swiper-pagination-horizontal {
            top: 15px;
            bottom: initial;
            text-align: right;
            padding-right: 20px;
            z-index: 1;
        }

        .swiper-pagination-bullet {
            background-color: rgba(255, 255, 255, 0.3);
            opacity: 1;
            border-radius: 0;
            margin: 0 2px;
            height: 3px;
            width: 15px;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background-color: var(--colorRed);
            width: 25px;
            box-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
        }

        .productPN {
            opacity: 0;
            transition: all 0.3s ease;
        }

        .swiper-button-prev,
        .swiper-button-next {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 2px solid var(--colorRed);
            background: rgba(26, 26, 26, 0.9);
            backdrop-filter: blur(10px);
            top: 50%;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background: var(--colorRed);
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .swiper-button-prev::after {
            content: "\f104";
            font-family: FontAwesome;
            font-size: 18px;
            color: var(--colorRed);
            transition: all 0.3s ease;
        }

        .swiper-button-next::after {
            content: "\f105";
            font-family: FontAwesome;
            font-size: 18px;
            color: var(--colorRed);
            transition: all 0.3s ease;
        }

        .swiper-button-prev:hover::after,
        .swiper-button-next:hover::after {
            color: white;
        }

        .swiper-button-prev:hover::after {
            transform: translateX(-3px);
        }

        .swiper-button-next:hover::after {
            transform: translateX(3px);
        }

        .swiper-button-next {
            right: 10px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .productSection {
                padding: 30px 15px;
            }

            .productCardImg {
                height: 180px;
            }

            .productCardImg:hover .image {
                bottom: calc(100% - 180px);
            }
        }

        @media (max-width: 768px) {
            .productSection {
                padding: 20px 10px;
            }

            .productCardImg {
                height: 160px;
            }

            .productCardIcon img {
                width: 40px;
                height: 40px;
            }

            .productCardImg .image-text {
                font-size: 10px;
                padding: 6px 8px;
                max-width: 100px;
            }

            .swiper-button-prev,
            .swiper-button-next {
                width: 35px;
                height: 35px;
            }

            .swiper-button-prev::after,
            .swiper-button-next::after {
                font-size: 14px;
            }

            .productCardImg:hover .image {
                bottom: calc(100% - 160px);
            }
        }

        @media (max-width: 480px) {
            .productCardImg {
                height: 140px;
            }

            .productCard {
                padding: 8px;
            }

            .productCardImg .image-text {
                font-size: 9px;
                padding: 4px 6px;
                max-width: 80px;
            }

            .productCardImg:hover .image {
                bottom: calc(100% - 140px);
            }
        }

        /* Loading animation */
        .productCard {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .productCard:nth-child(1) {
            animation-delay: 0.1s;
        }

        .productCard:nth-child(2) {
            animation-delay: 0.2s;
        }

        .productCard:nth-child(3) {
            animation-delay: 0.3s;
        }

        .productCard:nth-child(4) {
            animation-delay: 0.4s;
        }

        .productCard:nth-child(5) {
            animation-delay: 0.5s;
        }

        .productCard:nth-child(6) {
            animation-delay: 0.6s;
        }

        .productCard:nth-child(7) {
            animation-delay: 0.7s;
        }

        .productCard:nth-child(8) {
            animation-delay: 0.8s;
        }

        .productCard:nth-child(9) {
            animation-delay: 0.9s;
        }

        .productCard:nth-child(10) {
            animation-delay: 1.0s;
        }

        .productCard:nth-child(11) {
            animation-delay: 1.1s;
        }

        .productCard:nth-child(12) {
            animation-delay: 1.2s;
        }

        .productCard:nth-child(13) {
            animation-delay: 1.3s;
        }

        .productCard:nth-child(14) {
            animation-delay: 1.4s;
        }

        .productCard:nth-child(15) {
            animation-delay: 1.5s;
        }

        .productCard:nth-child(16) {
            animation-delay: 1.6s;
        }

        .productCard:nth-child(17) {
            animation-delay: 1.7s;
        }

        .productCard:nth-child(18) {
            animation-delay: 1.8s;
        }

        .productCard:nth-child(19) {
            animation-delay: 1.9s;
        }

        .productCard:nth-child(20) {
            animation-delay: 2.0s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <section class="productSection">
        <div class="swiper productSwiper">
            <div class="productHeading">
                <h2><a href="#">OUR PRODUCTS <span>EXPLORE ALL</span></a></h2>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/1.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="mobile-application.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Mobile Application" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Mobile Application</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/2.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Brand-promotion.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Brand Identity" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Brand Identity</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/3.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Corporate Video Presentation" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Corporate Video Presentation</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/4.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="website-development-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Corporate Website" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Corporate Website</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/5.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Customized_Software.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Customized Software" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Customized Software</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/6.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="crm.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="CRM Software" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">CRM Software</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/7.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="website-development-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="E-Commerce" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">E-Commerce</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/8.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="ERP.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="ERP Software" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">ERP Software</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/9.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Explanatory Video" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Explanatory Video</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/10.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Interview" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Interview</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/11.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Model Shoot" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Model Shoot</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/12.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Off-Page SEO" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Off-Page SEO</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/13.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="On-Page SEO" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">On-Page SEO</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/14.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="social-media-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Social Media Marketing" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Social Media Marketing</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/15.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Technical SEO" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Technical SEO</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/16.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="TV Commercial Ads" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">TV Commercial Ads</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/17.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="SEO-service.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="Website Audit" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">Website Audit</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/18.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="website-development-page.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="WooCommerce" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">WooCommerce</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/19.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="Film_production.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="YouTube Ads" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">YouTube Ads</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="productCard">
                        <div class="productCardIcon">
                            <img src="https://jaikvik.in/lab/new-post-video/img/product/number/20.png" alt="">
                        </div>
                        <div class="productCardImg">
                            <a href="PPC-Meta-YouTube-Ads.php">
                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg" alt="YouTube & Meta Ads" class="image" data-hover-src="http://jaikvik.in/lab/new-post-video/img/Website/luxa.webp">
                                <div class="image-text">YouTube & Meta Ads</div>
                            </a>
                        </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.productSwiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 25,
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                }
            }
        });

        // Image Scroll and Swap Effect
        document.addEventListener('DOMContentLoaded', function() {
            const containers = document.querySelectorAll('.productCardImg');

            function setImagePosition(container) {
                const image = container.querySelector('.image');
                image.style.bottom = '0px'; // Start at bottom
                image.style.transition = 'none'; // Disable transition during reset
            }

            containers.forEach(container => {
                const image = container.querySelector('.image');

                container.addEventListener('mouseenter', function() {
                    // Pause Swiper
                    swiper.autoplay.stop();

                    // Swap to hover image
                    image.src = image.getAttribute('data-hover-src');

                    // Enable transition and start scroll
                    image.style.transition = 'bottom 5s linear';
                    image.style.bottom = `calc(100% - ${container.offsetHeight}px)`;
                });

                container.addEventListener('mouseleave', function() {
                    // Resume Swiper
                    swiper.autoplay.start();

                    // Swap back to default image
                    image.src = 'https://jaikvik.in/lab/new-post-video/img/Jaikvik%20banner/new/youtube-ads.jpg';

                    // Reset position
                    image.style.transition = 'bottom 0.5s ease';
                    image.style.bottom = '0px';
                });

                // Initial position
                setImagePosition(container);
            });

            // Update positions on resize
            window.addEventListener('resize', () => {
                containers.forEach(setImagePosition);
            });
        });
    </script>
</body>

</html>