<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Sliders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
        :root {
            --colorRed: #ff4d4d;
            --colorBlack: #000;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .media-video-section,
        .media-image-gallery {
            max-width: 1500px;
            margin: 20px auto;
            box-sizing: border-box;
        }

        /* Image Gallery CSS */
        .media-image-gallery {
            overflow: hidden;
            padding: 20px;

            &:hover .gallery-controls {
                opacity: 1;
            }

            &:hover .gallery-header h2::after {
                opacity: 1;
            }

            .gallery-header {
                margin-bottom: 20px;

                h2 {
                    color: #e5e5e5;
                    font-size: 22px;
                    display: inline-block;
                    position: relative;
                    text-transform: uppercase;

                    &::after {
                        position: absolute;
                        content: "\f054";
                        font-family: "Font Awesome 6 Free";
                        font-weight: 900;
                        font-size: 16px;
                        right: -15px;
                        top: 6px;
                        color: var(--colorRed);
                        transition: all 0.3s ease-in;
                        opacity: 0;
                    }

                    &:hover span {
                        width: 100px;
                    }

                    a {
                        display: flex;
                        align-items: center;
                        gap: 8px;
                        text-decoration: none;
                        color: inherit;

                        span {
                            font-size: 15px;
                            color: var(--colorRed);
                            padding-top: 4px;
                            width: 0;
                            overflow: hidden;
                            white-space: nowrap;
                            transition: all 0.3s linear;
                        }
                    }
                }
            }

            .swiper-wrapper {
                .swiper-slide {
                    .gallery-item {
                        position: relative;
                        padding: 15px 0;
                        overflow: hidden;

                        .item-image {
                            margin: 0;
                            overflow: hidden;
                            position: relative;
                            transition: transform 0.4s ease-in-out;

                            img {
                                width: 100%;
                                height: auto;
                                object-fit: cover;
                                transition: transform 0.4s ease-in-out;
                            }
                        }

                        &:hover .item-image {
                            transform: scale(1.05);
                            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
                        }

                        .enlarge-link {
                            a {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                display: block;
                            }
                        }
                    }
                }
            }

            .swiper-pagination-bullets.swiper-pagination-horizontal {
                top: 10px;
                bottom: initial;
                text-align: right;
                padding-right: 15px;
                z-index: -1;
            }

            .swiper-pagination-bullet {
                background-color: #666;
                opacity: 1;
                border-radius: 0;
                margin: 2px !important;
                height: 4px;
                width: 12px;
            }

            .swiper-pagination-bullet-active {
                background-color: #e5e5e5;
                width: 12px;
                height: 4px;
                border-radius: 0;
            }

            .gallery-controls {
                opacity: 0;
                transition: all 0.2s ease;

                .swiper-button-prev {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    border: 2px solid var(--colorRed);
                    background-color: var(--colorBlack);
                    top: calc(50% + 15px);

                    &:hover:after {
                        transform: translateX(-4px);
                    }

                    &::after {
                        content: "\f053";
                        font-family: "Font Awesome 6 Free";
                        font-weight: 900;
                        font-size: 20px;
                        color: var(--colorRed);
                        transition: all 0.3s linear;
                    }
                }

                .swiper-button-next {
                    right: 15px;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    border: 2px solid var(--colorRed);
                    background-color: var(--colorBlack);
                    top: calc(50% + 15px);

                    &:hover:after {
                        transform: translateX(4px);
                    }

                    &::after {
                        content: "\f054";
                        font-family: "Font Awesome 6 Free";
                        font-weight: 900;
                        font-size: 20px;
                        color: var(--colorRed);
                        transition: all 0.3s linear;
                    }
                }
            }
        }

        /* Video Section CSS */
        .media-video-section {
            padding: 0px 25px 0px 25px;

            &:hover .video-gallery .video-controls {
                opacity: 1;
            }

            &:hover .video-gallery .video-header h2::after {
                opacity: 1;
            }

            .video-gallery {
                overflow: hidden;

                .video-header {
                    margin-bottom: 5px;

                    h2 {
                        color: #e5e5e5;
                        font-size: 20px;
                        display: inline-block;
                        position: relative;
                        text-transform: uppercase;

                        &::after {
                            position: absolute;
                            content: "\f105";
                            font-family: "Font Awesome 6 Free";
                            font-weight: 900;
                            font-size: 15px;
                            right: -10px;
                            top: 7px;
                            color: var(--colorRed);
                            transition: all 0.4s ease-in;
                            opacity: 0;
                        }

                        &:hover span {
                            width: 80px;
                        }

                        a {
                            display: flex;
                            align-items: center;
                            gap: 5px;
                            text-decoration: none;
                            color: inherit;

                            span {
                                font-size: 14px;
                                color: var(--colorRed);
                                padding-top: 5px;
                                width: 0;
                                overflow: hidden;
                                white-space: nowrap;
                                transition: all 0.3s linear;
                            }
                        }
                    }
                }

                .swiper-wrapper {
                    .swiper-slide {
                        .video-wrapper {
                            border-radius: 5px;
                            margin-top: 20px;
                            margin-bottom: 20px;

                            .video-container {
                                position: relative;
                                overflow: hidden;
                                aspect-ratio: 8 / 5;

                                video {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    display: block;
                                    transition: all 0.3s ease;
                                }

                                &:hover {
                                    transform: scale(1.5);
                                }
                            }
                        }
                    }
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

                .video-controls {
                    opacity: 0;
                    transition: all 0.2s ease;

                    .swiper-button-prev {
                        width: 35px;
                        height: 35px;
                        border-radius: 50px;
                        border: 2px solid var(--colorRed);
                        background-color: var(--colorBlack);
                        top: calc(50% + 20px);

                        &:hover:after {
                            transform: translateX(-5px);
                        }

                        &::after {
                            content: "\f104";
                            font-family: "Font Awesome 6 Free";
                            font-weight: 900;
                            font-size: 18px;
                            color: var(--colorRed);
                            transition: all 0.3s linear;
                        }
                    }

                    .swiper-button-next {
                        right: 10px;
                        width: 35px;
                        height: 35px;
                        border-radius: 50px;
                        border: 2px solid var(--colorRed);
                        background-color: var(--colorBlack);
                        top: calc(50% + 20px);

                        &:hover:after {
                            transform: translateX(5px);
                        }

                        &::after {
                            content: "\f105";
                            font-family: "Font Awesome 6 Free";
                            font-weight: 900;
                            font-size: 18px;
                            color: var(--colorRed);
                            transition: all 0.3s linear;
                        }
                    }
                }
            }
        }

        @media screen and (max-width: 300px) {

            .media-video-section,
            .media-image-gallery {
                padding: 10px;
            }

            .video-gallery .video-header h2,
            .media-image-gallery .gallery-header h2 {
                font-size: 18px;
            }

            .video-controls .swiper-button-prev,
            .video-controls .swiper-button-next,
            .gallery-controls .swiper-button-prev,
            .gallery-controls .swiper-button-next {
                width: 30px;
                height: 30px;

                &::after {
                    font-size: 16px;
                }
            }
        }

        @media screen and (min-width: 1200px) {

            .media-video-section,
            .media-image-gallery {
                padding: 30px;
            }

            .video-gallery .video-header h2,
            .media-image-gallery .gallery-header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <!-- Video Gallery Section -->
    <section class="media-video-section">
        <div class="swiper video-gallery">
            <div class="video-header">
                <h2>
                    <a href="#">Our videos <span>Explore All</span></a>
                </h2>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/1.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/2.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/3.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/4.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/5.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/6.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/7.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/8.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/9.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/10.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/11.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/12.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/13.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/14.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/15.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/16.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/17.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/18.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/19.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/thumbnail/video/20.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <video muted class="gallery-video" controls>
                                <source src="https://jaikvik.in/lab/new-post-video/videos/GSB-Video.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="video-controls">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <div class="swiper media-image-gallery">
        <div class="gallery-header">
            <h2>
                <a href="#">Image Gallery <span>Explore More</span></a>
            </h2>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="gallery-item">
                    <figure class="item-image">
                        <img src="https://jaikvik.in/lab/new-post-video/banners/accessories-1.jpg" alt="galleryImage">
                    </figure>
                    <div class="enlarge-link">
                        <a href="https://jaikvik.in/lab/new-post-video/banners/accessories-1.jpg" class="lightbox-image" data-fancybox="gallery"></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="gallery-item">
                    <figure class="item-image">
                        <img src="https://jaikvik.in/lab/new-post-video/banners/arc-315.jpg" alt="galleryImage">
                    </figure>
                    <div class="enlarge-link">
                        <a href="https://jaikvik.in/lab/new-post-video/banners/arc-315.jpg" class="lightbox-image" data-fancybox="gallery"></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="gallery-item">
                    <figure class="item-image">
                        <img src="https://jaikvik.in/lab/new-post-video/banners/mig-welding-torch-1.jpg" alt="galleryImage">
                    </figure>
                    <div class="enlarge-link">
                        <a href="https://jaikvik.in/lab/new-post-video/banners/mig-welding-torch-1.jpg" class="lightbox-image" data-fancybox="gallery"></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="gallery-item">
                    <figure class="item-image">
                        <img src="https://jaikvik.in/lab/new-post-video/banners/acoustic-nest-banners-5.jpg" alt="galleryImage">
                    </figure>
                    <div class="enlarge-link">
                        <a href="https://jaikvik.in/lab/new-post-video/banners/acoustic-nest-banners-5.jpg" class="lightbox-image" data-fancybox="gallery"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="gallery-controls">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        // Initialize Image Gallery
        function initImageGallery() {
            return new Swiper(".media-image-gallery", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                speed: 800,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    }
                }
            });
        }

        // Initialize Video Gallery
        function initVideoGallery() {
            return new Swiper(".video-gallery", {
                loop: true,
                speed: 1000,
                effect: "slide",
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1.1,
                        spaceBetween: 20,
                    },
                    480: {
                        slidesPerView: 1.2,
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
        }

        // Video Interaction Handler
        function setupVideoInteractions(videoGallery) {
            document.querySelectorAll('.gallery-video').forEach(video => {
                video.addEventListener('mouseenter', () => {
                    video.muted = false;
                    video.volume = 1.0;
                    video.play();
                    videoGallery.autoplay.stop();
                });

                video.addEventListener('mouseleave', () => {
                    video.pause();
                    video.currentTime = 0;
                    video.muted = true;
                    videoGallery.autoplay.start();
                });

                video.addEventListener('play', () => {
                    videoGallery.autoplay.stop();
                });

                video.addEventListener('pause', () => {
                    videoGallery.autoplay.start();
                });

                video.addEventListener('ended', () => {
                    videoGallery.autoplay.start();
                });
            });
        }

        // Initialize galleries
        const imageGallery = initImageGallery();
        const videoGallery = initVideoGallery();
        setupVideoInteractions(videoGallery);
    </script>
</body>

</html>