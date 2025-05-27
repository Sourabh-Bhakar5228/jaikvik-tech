<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Video Showcase</title>
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

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--dark-color);
            font-family: "Mulish", sans-serif;
            overflow-x: hidden;
        }

        .video-showcase {
            position: relative;
            width: 100%;
            max-width: 1450px;
            padding: 20px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .primary-video-area,
        .secondary-video-area {
            flex: 1;
            min-width: 280px;
            display: flex;
            flex-direction: column;
        }

        .header-box {
            text-align: left;
            margin-bottom: 20px;
        }

        .header-box h2 {
            font-size: clamp(18px, 2.5vw, 22px);
            font-weight: 600;
            color: #e5e5e5;
            padding-bottom: 8px;
            margin: 0;
            display: inline-block;
            position: relative;
        }

        .header-box h2::after {
            content: "\f105";
            font-family: FontAwesome;
            font-size: 16px;
            right: -15px;
            top: 4px;
            color: var(--colorRed);
            position: absolute;
            transition: var(--transition);
        }

        .header-box h2 a {
            color: #e5e5e5;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: var(--transition);
        }

        .header-box h2:hover a span {
            width: 80px;
        }

        .header-box h2 a span {
            font-size: 12px;
            color: var(--colorRed);
            padding-top: 5px;
            width: 0;
            overflow: hidden;
            white-space: nowrap;
            transition: all 0.3s linear;
        }

        .video-gallery {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
        }

        .video-item {
            width: 100%;
            height: clamp(200px, 40vw, 400px);
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            transition: var(--transition);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            background: #000;
        }

        .full-video,
        .teaser-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .teaser-video {
            z-index: 2;
        }

        .video-details {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background: var(--card-gradient);
            color: white;
            z-index: 3;
            transition: var(--transition);
        }

        .video-details h3 {
            font-size: clamp(14px, 2vw, 18px);
            margin-bottom: 5px;
            font-weight: 600;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .video-details p {
            font-size: clamp(12px, 1.5vw, 14px);
        }

        .video-label {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: clamp(10px, 1.2vw, 12px);
            font-weight: 600;
            text-transform: uppercase;
            z-index: 4;
            transition: var(--transition);
        }

        .start-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(255, 77, 77, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
            opacity: 0;
            transition: var(--transition);
            cursor: pointer;
        }

        .start-button i {
            color: white;
            font-size: 24px;
            margin-left: 3px;
        }

        .video-item:hover .start-button {
            opacity: 1;
        }

        .video-item:hover .video-label,
        .video-item:hover .video-details {
            opacity: 0;
        }

        .expanded-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .expanded-video video {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .expanded-video::before {
            content: 'Loading...';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 1.2rem;
            display: none;
        }

        .expanded-video.loading::before {
            display: block;
        }

        .exit-fullscreen {
            position: absolute;
            top: 15px;
            right: 15px;
            color: white;
            font-size: 24px;
            cursor: pointer;
            z-index: 1001;
            background: rgba(0, 0, 0, 0.5);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-message {
            display: none;
            color: white;
            text-align: center;
            padding: 20px;
            background: rgba(255, 77, 77, 0.8);
            border-radius: 8px;
        }

        @media (max-width: 992px) {
            .video-showcase {
                flex-direction: column;
                padding: 15px;
            }

            .video-item {
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .video-item {
                height: 250px;
            }

            .video-details {
                padding: 10px;
            }

            .start-button {
                width: 50px;
                height: 50px;
            }

            .start-button i {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .video-item {
                height: 200px;
            }

            .video-details h3 {
                font-size: 14px;
            }

            .video-details p {
                font-size: 12px;
            }

            .video-label {
                padding: 3px 8px;
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <section class="video-showcase">
        <div class="primary-video-area">
            <div class="header-box">
                <h2><a href="#">Our Corporate Videos <span>Explore All</span></a></h2>
            </div>
            <div class="video-gallery">
                <div class="video-item">
                    <span class="video-label">Featured</span>
                    <video class="teaser-video" loop playsinline muted loading="lazy">
                        <source src="https://jaikvik.in/lab/new-post-video/video/corporate-video/addwatt-sd-version.mp4" type="video/mp4">
                    </video>
                    <video class="full-video" playsinline loading="lazy">
                        <source src="https://jaikvik.in/lab/new-post-video/video/corporate-video/addwatt-sd-version.mp4" type="video/mp4">
                    </video>
                    <div class="video-details">
                        <h3>Company Overview</h3>
                        <p>Learn about our mission and values</p>
                    </div>
                    <div class="start-button" role="button" aria-label="Play video">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="error-message">Video failed to load</div>
                </div>
            </div>
        </div>
        <div class="secondary-video-area">
            <div class="header-box">
                <h2><a href="#"> Corporate Video <span>Watch Now</span></a></h2>
            </div>
            <div class="video-gallery">
                <div class="video-item" id="highlighted-video">
                    <span class="video-label">Highlight</span>
                    <video class="teaser-video" loop playsinline muted loading="lazy">
                        <source src="https://jaikvik.in/lab/new-post-video/video/corporate-video/regent-hitech-2.mp4" type="video/mp4">
                    </video>
                    <video class="full-video" playsinline loading="lazy">
                        <source src="https://jaikvik.in/lab/new-post-video/video/corporate-video/regent-hitech-2.mp4" type="video/mp4">
                    </video>
                    <div class="video-details">
                        <h3>Featured Content</h3>
                        <p>Our latest corporate presentation</p>
                    </div>
                    <div class="start-button" role="button" aria-label="Play video">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="error-message">Video failed to load</div>
                </div>
            </div>
        </div>
    </section>
    <div class="expanded-video">
        <span class="exit-fullscreen" role="button" aria-label="Close fullscreen">×</span>
        <video controls loading="lazy">
            <source src="https://jaikvik.in/lab/new-post-video/video/corporate-video/addwatt-sd-version.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="error-message">Video failed to load</div>
    </div>
    <div class="expanded-video">
        <span class="exit-fullscreen" role="button" aria-label="Close fullscreen">×</span>
        <video controls loading="lazy">
            <source src="https://jaikvik.in/lab/new-post-video/video/corporate-video/regent-hitech-2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="error-message">Video failed to load</div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoItems = document.querySelectorAll('.video-item');
            const expandedContainer = document.querySelector('.expanded-video');
            const expandedVideo = expandedContainer.querySelector('video');
            const exitFullscreen = document.querySelector('.exit-fullscreen');

            function showError(item, message) {
                const errorMessage = item.querySelector('.error-message');
                errorMessage.textContent = message;
                errorMessage.style.display = 'block';
                setTimeout(() => errorMessage.style.display = 'none', 3000);
            }

            function playVideoWithSound(video) {
                video.muted = false;
                video.play().catch(error => {
                    video.muted = true;
                    video.play().catch(err => console.error('Playback failed:', err));
                });
            }

            function muteAndLoopVideo(video) {
                video.muted = true;
                video.loop = true;
                video.play().catch(err => console.error('Loop playback failed:', err));
            }

            function openFullscreen(videoSrc, item) {
                if (!videoSrc) {
                    showError(item, 'No video source available');
                    return;
                }
                expandedContainer.style.display = 'flex';
                expandedContainer.classList.add('loading');
                expandedVideo.src = videoSrc;
                expandedVideo.muted = false;
                expandedVideo.controls = true;

                expandedVideo.play().catch(error => {
                    showError(expandedContainer, 'Playback failed');
                    expandedVideo.muted = true;
                    expandedVideo.play().catch(err => showError(expandedContainer, 'Muted playback failed'));
                });

                expandedVideo.onended = () => {
                    expandedContainer.style.display = 'none';
                    expandedVideo.src = '';
                    expandedContainer.classList.remove('loading');
                };

                expandedVideo.addEventListener('loadstart', () => expandedContainer.classList.add('loading'));
                expandedVideo.addEventListener('canplay', () => expandedContainer.classList.remove('loading'));
                expandedVideo.addEventListener('error', () => showError(expandedContainer, 'Failed to load video'));
            }

            videoItems.forEach(item => {
                const teaserVideo = item.querySelector('.teaser-video');
                const fullVideo = item.querySelector('.full-video');
                const startButton = item.querySelector('.start-button');
                const fullSource = fullVideo?.querySelector('source')?.src || '';

                if (!fullSource || !teaserVideo) {
                    showError(item, 'Video source missing');
                    return;
                }

                muteAndLoopVideo(teaserVideo);

                item.addEventListener('mouseenter', () => {
                    if (window.innerWidth > 768) playVideoWithSound(teaserVideo);
                });

                item.addEventListener('mouseleave', () => {
                    if (window.innerWidth > 768) muteAndLoopVideo(teaserVideo);
                });

                startButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    openFullscreen(fullSource, item);
                });

                item.addEventListener('click', (e) => {
                    if (e.target !== startButton) openFullscreen(fullSource, item);
                });

                item.addEventListener('touchstart', (e) => {
                    e.preventDefault();
                    openFullscreen(fullSource, item);
                });
            });

            exitFullscreen.addEventListener('click', () => {
                expandedVideo.pause();
                expandedVideo.src = '';
                expandedContainer.style.display = 'none';
                expandedContainer.classList.remove('loading');
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === "Escape" && expandedContainer.style.display === 'flex') {
                    expandedVideo.pause();
                    expandedVideo.src = '';
                    expandedContainer.style.display = 'none';
                    expandedContainer.classList.remove('loading');
                }
            });

            window.addEventListener('resize', () => {
                videoItems.forEach(item => {
                    const teaserVideo = item.querySelector('.teaser-video');
                    if (teaserVideo && teaserVideo.paused) {
                        muteAndLoopVideo(teaserVideo);
                    }
                });
            });
        });
    </script>
</body>

</html>