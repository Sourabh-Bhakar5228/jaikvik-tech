<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Showcase Slider</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff4d4d;
            --secondary-color: #6c63ff;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --card-gradient: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            --colorRed: #ff4d4d;
            --colorBlack: #1a1a2e;
        }

        .service-showcase-container {
            position: relative;
            width: 100%;
            padding: 0 25px;
            margin: 30px auto;
            overflow: hidden;
        }

        .service-showcase-container:hover .service-slider-main .slider-controls-container {
            opacity: 1;
        }

        .service-showcase-container:hover .service-slider-main .section-header-container h2::after {
            opacity: 1;
        }

        .section-header-container {
            text-align: left;
            font-family: "Mulish", sans-serif;
            position: relative;
            margin-bottom: 5px;
        }

        .section-header-container h2 {
            font-size: 20px;
            font-weight: 600;
            color: #e5e5e5;
            position: relative;
            padding-bottom: 10px;
            margin: 0;
            display: inline-block;
        }

        .section-header-container h2::after {
            position: absolute;
            content: "\f105";
            font-family: FontAwesome;
            font-size: 15px;
            right: -10px;
            top: 7px;
            color: var(--colorRed);
            transition: all 0.4s ease-in;
            opacity: 0;
        }

        .section-header-container h2 a {
            color: #e5e5e5;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: var(--transition);
        }

        .section-header-container h2:hover a span {
            width: 80px;
        }

        .section-header-container h2 a span {
            font-size: 14px;
            color: var(--colorRed);
            display: inline-block;
            padding-top: 5px;
            width: 0px;
            overflow: hidden;
            white-space: nowrap;
            transition: all 0.3s linear;
        }

        .slider-controls-container {
            opacity: 0;
            transition: all 0.2s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            width: 100%;
            padding: 0 25px;
            box-sizing: border-box;
            bottom: -160px;
        }

        .slider-nav-btn {
            width: 35px;
            height: 35px;
            border-radius: 50px;
            border: 2px solid var(--colorRed);
            background-color: var(--colorBlack);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .slider-nav-btn:hover::after {
            transform: translateX(-5px);
        }

        .slider-nav-btn.slider-next-btn:hover::after {
            transform: translateX(5px);
        }

        .slider-nav-btn::after {
            font-family: FontAwesome;
            font-size: 18px;
            color: var(--colorRed);
            transition: all 0.3s linear;
        }

        .slider-nav-btn.slider-prev-btn::after {
            content: "\f104";
        }

        .slider-nav-btn.slider-next-btn::after {
            content: "\f105";
        }

        .slider-nav-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .service-slider-main {
            position: relative;
            width: 100%;
            padding-bottom: 80px;
            overflow: hidden;
        }

        .service-slide-item {
            width: 280px;
            height: auto;
            transition: var(--transition);
        }

        .service-card-item {
            width: 100%;
            height: 300px;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            transition: var(--transition);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            background: #fff;
            transform: translateZ(0);
        }

        .service-card-item:hover {
            transform: scale(1.25);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6), 0 0 30px rgba(192, 192, 192, 0.8);
            z-index: 20;
        }

        .card-main-img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: var(--transition);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .service-card-item:hover .card-main-img {
            opacity: 0;
            visibility: hidden;
        }

        .card-gallery-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: var(--transition);
            z-index: 2;
        }

        .service-card-item:hover .card-gallery-slider {
            opacity: 1;
        }

        .card-gallery-slider .swiper-slide {
            width: 100%;
            height: 100%;
        }

        .card-gallery-slider .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .card-content-wrapper {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: var(--card-gradient);
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
            z-index: 3;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .service-card-item:hover .card-content-wrapper {
            transform: translateY(0);
        }

        .card-content-wrapper h3 {
            font-size: 1.4rem;
            margin-bottom: 8px;
            font-weight: 600;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .card-content-wrapper p {
            font-size: 0.9rem;
            line-height: 1.4;
            opacity: 0.9;
            margin-bottom: 8px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .card-content-wrapper a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            color: transparent;
            text-decoration: none;
            z-index: 4;
            display: block;
        }

        .card-content-wrapper a::after {
            content: 'Learn More';
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 500;
            opacity: 0;
            transform: translateY(10px);
            transition: var(--transition);
            z-index: 5;
        }

        .service-card-item:hover .card-content-wrapper a::after {
            opacity: 1;
            transform: translateY(0);
        }

        .card-content-wrapper a:hover::after {
            color: #fff;
        }

        .card-badge-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary-color);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 5;
            opacity: 0;
            transform: translateY(-20px);
            transition: var(--transition);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .service-card-item:hover .card-badge-tag {
            opacity: 1;
            transform: translateY(0);
        }

        .swiper-pagination-bullets.swiper-pagination-horizontal {
            top: 12px;
            bottom: initial;
            text-align: right;
            padding-right: 20px;
            z-index: -1;
        }

        .swiper-pagination-bullet {
            background-color: rgb(103, 103, 103);
            opacity: 1;
            border-radius: 0 !important;
            margin: 1px !important;
            height: 3px;
            width: 10px;
        }

        .swiper-pagination-bullet-active {
            background-color: #e5e5e5;
            width: 10px;
            height: 3px;
            border-radius: 0 !important;
        }

        /* Responsive Styles */
        @media (max-width: 1400px) {
            .service-showcase-container {
                max-width: 1200px;
            }

            .service-slide-item {
                width: 260px;
                padding-left: 30px;
            }

            .service-card-item {
                height: 280px;
            }

            .service-card-item:hover {
                transform: scale(1.2);
            }

            .slider-nav-btn {
                width: 32px;
                height: 32px;
            }

            .slider-nav-btn::after {
                font-size: 16px;
            }
        }

        @media (max-width: 1200px) {
            .service-showcase-container {
                max-width: 1000px;
            }

            .service-slide-item {
                width: 240px;
            }

            .service-card-item {
                height: 260px;
            }

            .service-card-item:hover {
                transform: scale(1.18);
            }

            .slider-nav-btn {
                width: 30px;
                height: 30px;
            }

            .slider-nav-btn::after {
                font-size: 14px;
            }

            .service-slider-main {
                padding-bottom: 70px;
            }
        }

        @media (max-width: 992px) {
            .service-showcase-container {
                max-width: 800px;
            }

            .service-slide-item {
                width: 220px;
            }

            .service-card-item {
                height: 240px;
            }

            .service-card-item:hover {
                transform: scale(1.15);
            }

            .slider-nav-btn {
                width: 28px;
                height: 28px;
            }

            .slider-nav-btn::after {
                font-size: 12px;
            }

            .service-slider-main {
                padding-bottom: 60px;
            }
        }

        @media (max-width: 768px) {
            .service-showcase-container {
                max-width: 600px;
                margin: 20px auto;
                padding: 0 15px;
            }

            .service-slide-item {
                width: 200px;
            }

            .service-card-item {
                height: 220px;
                padding-left: 20px;
            }

            .service-card-item:hover {
                transform: scale(1.12);
            }

            .slider-nav-btn {
                width: 26px;
                height: 26px;
            }

            .slider-nav-btn::after {
                font-size: 10px;
            }

            .card-content-wrapper {
                padding: 15px;
            }

            .card-content-wrapper h3 {
                font-size: 1.2rem;
            }

            .card-content-wrapper p {
                font-size: 0.8rem;
            }

            .card-content-wrapper a::after {
                font-size: 0.8rem;
            }

            .service-slider-main {
                padding-bottom: 50px;
            }
        }

        @media (max-width: 576px) {
            .service-showcase-container {
                max-width: 90%;
                margin: 15px auto;
            }

            .service-slide-item {
                width: 180px;
                padding-left: 15px;
            }

            .service-card-item {
                height: 200px;
            }

            .service-card-item:hover {
                transform: scale(1.1);
            }

            .slider-nav-btn {
                width: 24px;
                height: 24px;
            }

            .slider-nav-btn::after {
                font-size: 10px;
            }

            .card-content-wrapper {
                padding: 12px;
            }

            .card-content-wrapper h3 {
                font-size: 1rem;
            }

            .card-content-wrapper p {
                font-size: 0.75rem;
            }

            .card-content-wrapper a::after {
                font-size: 0.75rem;
            }

            .card-badge-tag {
                font-size: 0.6rem;
                padding: 3px 8px;
            }

            .service-slider-main {
                padding-bottom: 45px;
            }

            .slider-controls-container {
                bottom: -80px;
            }
        }

        @media (max-width: 480px) {
            .service-showcase-container {
                max-width: 95%;
            }

            .service-slide-item {
                width: 160px;
            }

            .service-card-item {
                height: 180px;
            }

            .service-card-item:hover {
                transform: scale(1.08);
            }

            .slider-nav-btn {
                width: 22px;
                height: 22px;
            }

            .slider-nav-btn::after {
                font-size: 8px;
            }

            .card-content-wrapper {
                padding: 10px;
            }

            .card-content-wrapper h3 {
                font-size: 0.9rem;
            }

            .card-content-wrapper p {
                font-size: 0.7rem;
            }

            .card-content-wrapper a::after {
                font-size: 0.7rem;
            }

            .card-badge-tag {
                font-size: 0.55rem;
                padding: 3px 6px;
            }

            .service-slider-main {
                padding-bottom: 40px;
            }

            .slider-controls-container {
                bottom: -110px;
            }
        }

        @media (max-width: 400px) {
            .service-showcase-container {
                max-width: 98%;
            }

            .service-slide-item {
                width: 150px;
            }

            .service-card-item {
                height: 170px;
            }

            .service-card-item:hover {
                transform: scale(1.05);
            }

            .slider-nav-btn {
                width: 20px;
                height: 20px;
            }

            .slider-nav-btn::after {
                font-size: 8px;
            }

            .card-content-wrapper {
                padding: 8px;
            }

            .card-content-wrapper h3 {
                font-size: 0.8rem;
            }

            .card-content-wrapper p {
                font-size: 0.65rem;
            }

            .card-content-wrapper a::after {
                font-size: 0.65rem;
            }

            .card-badge-tag {
                font-size: 0.5rem;
                padding: 2px 5px;
            }

            .service-slider-main {
                padding-bottom: 35px;
            }

            .slider-controls-container {
                bottom: -110px;
            }
        }

        @media (hover: none) {
            .service-card-item.active {
                transform: scale(var(--hover-scale)) !important;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6), 0 0 30px rgba(192, 192, 192, 0.8) !important;
                z-index: 20 !important;
            }

            .service-card-item.active .card-main-img {
                opacity: 0 !important;
                visibility: hidden !important;
            }

            .service-card-item.active .card-gallery-slider {
                opacity: 1 !important;
            }

            .service-card-item.active .card-content-wrapper {
                transform: translateY(0) !important;
            }

            .service-card-item.active .card-badge-tag {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }

            .service-card-item.active .card-content-wrapper a::after {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
        }
    </style>
</head>

<body>
    <section class="service-showcase-container">
        <div class="swiper service-slider-main">
            <div class="section-header-container">
                <h2><a href="#">Our Services <span>Explore All</span></a></h2>
                <div class="slider-controls-container">
                    <button class="slider-nav-btn slider-prev-btn"></button>
                    <button class="slider-nav-btn slider-next-btn"></button>
                </div>
            </div>
            <div class="swiper-wrapper">
                <!-- Service 1 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <span class="card-badge-tag">Popular</span>
                        <img src="https://images.unsplash.com/photo-1630442923896-244dd3717b35?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8TW9iaWxlJTIwQXBwJTIwRGV2ZWxvcG1lbnR8ZW58MHx8MHx8fDA%3D" class="card-main-img" alt="Mobile App Development">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1721080250995-5a83519eb2a0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8TW9iaWxlJTIwQXBwJTIwRGV2ZWxvcG1lbnR8ZW58MHx8MHx8fDA%3Ds" alt="Mobile App 1"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1517292987719-0369a794ec0f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fE1vYmlsZSUyMEFwcCUyMERldmVsb3BtZW50fGVufDB8fDB8fHww" alt="Mobile App 2"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fE1vYmlsZSUyMEFwcCUyMERldmVsb3BtZW50fGVufDB8fDB8fHww" alt="Mobile App 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>Mobile App Development</h3>
                            <p>Custom native and cross-platform mobile applications for iOS and Android platforms.</p>
                            <a href="mobile-application.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <span class="card-badge-tag">Featured</span>
                        <img src="https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8V2ViJTIwRGV2ZWxvcG1lbnR8ZW58MHx8MHx8fDA%3D" class="card-main-img" alt="Web Development">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1593720213428-28a5b9e94613?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8V2ViJTIwRGV2ZWxvcG1lbnR8ZW58MHx8MHx8fDA%3D" alt="Web Dev 1"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fFdlYiUyMERldmVsb3BtZW50fGVufDB8fDB8fHww" alt="Web Dev 2"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fFdlYiUyMERldmVsb3BtZW50fGVufDB8fDB8fHww" alt="Web Dev 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>Web Development</h3>
                            <p>Responsive, high-performance websites and web applications with modern technologies.</p>
                            <a href="website-development-page.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8VUklMkZVWCUyMERlc2lnbnxlbnwwfHwwfHx8MA%3D%3D" class="card-main-img" alt="UI/UX Design">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fFVJJTJGVVglMjBEZXNpZ258ZW58MHx8MHx8fDA%3D" alt="UI/UX 1"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1602576666092-bf6447a729fc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fFVJJTJGVVglMjBEZXNpZ258ZW58MHx8MHx8fDA%3D" alt="UI/UX 2"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1602576666092-bf6447a729fc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fFVJJTJGVVglMjBEZXNpZ258ZW58MHx8MHx8fDA%3D" alt="UI/UX 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>Film Production</h3>
                            <p>Crafting compelling visual stories through creative direction, professional cinematography, and seamless.</p>
                            <a href="Film_production.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <span class="card-badge-tag">Hot</span>
                        <img src="https://plus.unsplash.com/premium_photo-1681488262364-8aeb1b6aac56?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8RSUyMGNvbW1lcmNlJTIwU29sdXRpb25zfGVufDB8fDB8fHww" class="card-main-img" alt="E-commerce Solutions">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1684785618727-378a3a5e91c5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fEUlMjBjb21tZXJjZSUyMFNvbHV0aW9uc3xlbnwwfHwwfHx8MA%3D%3D" alt="E-commerce 1"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1661456268709-bac8e7f21e51?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fEUlMjBjb21tZXJjZSUyMFNvbHV0aW9uc3xlbnwwfHwwfHx8MA%3D%3D" alt="E-commerce 2"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1726138383736-3c848a2c7769?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fEUlMjBjb21tZXJjZSUyMFNvbHV0aW9uc3xlbnwwfHwwfHx8MA%3D%3D" alt="E-commerce 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>E-commerce Solutions</h3>
                            <p>Complete online store solutions with secure payment gateways and inventory management.</p>
                            <a href="website-development-page.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <img src="https://plus.unsplash.com/premium_photo-1683120968693-9af51578770e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Q2xvdWQlMjBTZXJ2aWNlc3xlbnwwfHwwfHx8MA%3D%3D" class="card-main-img" alt="Cloud Services">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1683836722608-60ab4d1b58e5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Q2xvdWQlMjBTZXJ2aWNlc3xlbnwwfHwwfHx8MA%3D%3D" alt="Cloud 1"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1681487942927-e1a2786e6036?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Q2xvdWQlMjBTZXJ2aWNlc3xlbnwwfHwwfHx8MA%3D%3D" alt="Cloud 2"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1683288706548-e8b6bb72fe86?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fENsb3VkJTIwU2VydmljZXN8ZW58MHx8MHx8fDA%3D" alt="Cloud 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>Cloud Services</h3>
                            <p>Scalable cloud infrastructure, migration, and management solutions for your business.</p>
                            <a href="Customized_Software.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <span class="card-badge-tag">New</span>
                        <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8RGlnaXRhbCUyME1hcmtldGluZ3xlbnwwfHwwfHx8MA%3D%3D" class="card-main-img" alt="Digital Marketing">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1537731121640-bc1c4aba9b80?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fERpZ2l0YWwlMjBNYXJrZXRpbmd8ZW58MHx8MHx8fDA%3D" alt="Digital Marketing 1"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1683262038148-2ac280407276?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fERpZ2l0YWwlMjBNYXJrZXRpbmd8ZW58MHx8MHx8fDA%3D" alt="Digital Marketing 2"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1611926653458-09294b3142bf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fERpZ2l0YWwlMjBNYXJrZXRpbmd8ZW58MHx8MHx8fDA%3D" alt="Digital Marketing 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>Digital Marketing</h3>
                            <p>Strategic SEO, targeted PPC campaigns, and impactful social media marketing to increase visibility, drive traffic, and grow your brand online.</p>
                            <a href="digital-marketing.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <img src="https://plus.unsplash.com/premium_photo-1661877737564-3dfd7282efcb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Q3liZXJzZWN1cml0eXxlbnwwfHwwfHx8MA%3D%3D" class="card-main-img" alt="Cybersecurity">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Q3liZXJzZWN1cml0eXxlbnwwfHwwfHx8MA%3D%3D" alt="Cybersecurity 1"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1674669009418-2643aa58b11b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Q3liZXJzZWN1cml0eXxlbnwwfHwwfHx8MA%3D%3D" alt="Cybersecurity 2"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Q3liZXJzZWN1cml0eXxlbnwwfHwwfHx8MA%3D%3D" alt="Cybersecurity 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>PPC, Meta, YouTube Ads</h3>
                            <p>Data-driven ad strategies across Google, Meta, and YouTube to maximize ROI, increase conversions, and reach your target audience effectively.</p>
                            <a href="PPC-Meta-YouTube-Ads.php"></a>
                        </div>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="swiper-slide service-slide-item">
                    <div class="service-card-item">
                        <span class="card-badge-tag">Trending</span>
                        <img src="https://plus.unsplash.com/premium_photo-1726666269043-fb16e54646d0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8QUklMjBTb2x1dGlvbnN8ZW58MHx8MHx8fDA%3D" class="card-main-img" alt="AI Solutions">
                        <div class="card-gallery-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1661727567905-01e580328c2d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QUklMjBTb2x1dGlvbnN8ZW58MHx8MHx8fDA%3D" alt="AI Solutions 1"></div>
                                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1738003667850-a2fb736e31b3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8QUklMjBTb2x1dGlvbnN8ZW58MHx8MHx8fDA%3D" alt="AI Solutions 2"></div>
                                <div class="swiper-slide"><img src="https://plus.unsplash.com/premium_photo-1683121710572-7723bd2e235d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YWl8ZW58MHx8MHx8fDA%3D" alt="AI Solutions 3"></div>
                            </div>
                        </div>
                        <div class="card-content-wrapper">
                            <h3>Social Media</h3>
                            <p>Engaging content strategies, community management, and platform-specific campaigns to grow your brand and connect with your audience.</p>
                            <a href="social-media-page.php"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the main slider
            const mainServiceSlider = new Swiper('.service-slider-main', {
                slidesPerView: 'auto',
                spaceBetween: 25,
                loop: true,
                speed: 800,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                direction: 'horizontal',
                navigation: {
                    nextEl: '.slider-next-btn',
                    prevEl: '.slider-prev-btn',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    type: 'bullets',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.1,
                        spaceBetween: 15
                    },
                    400: {
                        slidesPerView: 1.1,
                        spaceBetween: 15
                    },
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 2.1,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 2.2,
                        spaceBetween: 18
                    },
                    768: {
                        slidesPerView: 2.2,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 3.2,
                        spaceBetween: 22
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 25
                    },
                    1400: {
                        slidesPerView: 4.2,
                        spaceBetween: 25
                    }
                },
                on: {
                    init: function() {
                        this.update();
                    }
                }
            });

            // Initialize hover gallery sliders (inner sliders) with lazy loading
            const gallerySliders = [];
            document.querySelectorAll('.card-gallery-slider').forEach((sliderEl, index) => {
                const gallerySlider = new Swiper(sliderEl, {
                    slidesPerView: 1,
                    loop: true,
                    speed: 1000,
                    lazy: {
                        loadPrevNext: true,
                        loadPrevNextAmount: 2
                    },
                    autoplay: {
                        delay: 1500,
                        disableOnInteraction: false,
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    allowTouchMove: false,
                    noSwiping: true,
                    noSwipingClass: 'swiper-slide',
                    on: {
                        init: function() {
                            this.update();
                            this.slides.forEach(slide => {
                                const img = slide.querySelector('img');
                                if (img && img.src) {
                                    img.loading = 'lazy';
                                    img.onload = () => this.update();
                                    img.onerror = () => {
                                        console.log('Failed to load image:', img.src);
                                        img.src = 'https://picsum.photos/600/400'; // Fallback image
                                    };
                                }
                            });
                        }
                    }
                });
                gallerySliders.push(gallerySlider);

                const serviceCard = sliderEl.closest('.service-card-item');
                if (!serviceCard) return; // Safety check

                // Desktop hover handling for inner slider
                serviceCard.addEventListener('mouseenter', () => {
                    serviceCard.classList.add('active');
                    gallerySlider.autoplay.start();
                    gallerySlider.update();
                    mainServiceSlider.autoplay.stop();
                });

                serviceCard.addEventListener('mouseleave', () => {
                    serviceCard.classList.remove('active');
                    gallerySlider.autoplay.stop();
                    gallerySlider.slideTo(0);
                    mainServiceSlider.autoplay.start();
                });

                // Touch device handling for inner slider
                serviceCard.addEventListener('click', function(e) {
                    // Allow link navigation
                    if (e.target.closest('a')) {
                        return; // Let the browser handle the link
                    }
                    e.preventDefault(); // Prevent default for non-link clicks
                    document.querySelectorAll('.service-card-item.active').forEach(card => {
                        if (card !== serviceCard) {
                            card.classList.remove('active');
                            const slider = card.querySelector('.card-gallery-slider')?.swiper;
                            if (slider) {
                                slider.autoplay.stop();
                                slider.slideTo(0);
                            }
                        }
                    });

                    if (serviceCard.classList.contains('active')) {
                        serviceCard.classList.remove('active');
                        gallerySlider.autoplay.stop();
                        gallerySlider.slideTo(0);
                        mainServiceSlider.autoplay.start();
                    } else {
                        serviceCard.classList.add('active');
                        gallerySlider.autoplay.start();
                        gallerySlider.update();
                        mainServiceSlider.autoplay.stop();
                    }
                });

                // Ensure links don't trigger card click behavior
                serviceCard.querySelectorAll('.card-content-wrapper a').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.stopPropagation(); // Prevent card click handler
                    });
                });
            });

            // Stop main slider when hovering over entire section
            const showcaseSection = document.querySelector('.service-showcase-container');
            if (showcaseSection) {
                showcaseSection.addEventListener('mouseenter', () => {
                    mainServiceSlider.autoplay.stop();
                });
                showcaseSection.addEventListener('mouseleave', () => {
                    if (!document.querySelector('.service-card-item.active')) {
                        mainServiceSlider.autoplay.start();
                    }
                });
            }

            // Close active card when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.service-card-item')) {
                    document.querySelectorAll('.service-card-item.active').forEach(card => {
                        card.classList.remove('active');
                        const slider = card.querySelector('.card-gallery-slider')?.swiper;
                        if (slider) {
                            slider.autoplay.stop();
                            slider.slideTo(0);
                        }
                    });
                    mainServiceSlider.autoplay.start();
                }
            });

            // Force update all sliders after initialization
            setTimeout(() => {
                mainServiceSlider.update();
                gallerySliders.forEach(slider => slider.update());
            }, 100);
        });
    </script>
</body>

</html>