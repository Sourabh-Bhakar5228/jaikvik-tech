<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPC, META AND YOUTUBE ADS</title>
    <meta name="description" content="Explore PPC, Meta, and YouTube Ads with Jaikvik Technology. Target smart, engage deeper, and convert faster with strategies across Google Ads, Meta platforms, and YouTube for measurable growth.">
    <meta name="keywords" content="PPC Advertising, Meta Ads, YouTube Ads, Digital Marketing, Jaikvik Technology">
    <!-- Favicon Link -->
    <link rel="icon" type="image/x-icon" href="https://jaikvik.in/lab/new-post-video/img/logo/favicon.png">
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
            --ads-primary-color: #ffffff;
            /* Text color: White */
            --ads-secondary-color: #ffffff;
            /* Secondary text color: White */
            --ads-accent-color: #ff0000;
            /* Button color: Red */
            --ads-light-gray: #1a1a1a;
            /* Section background: Dark Grey */
            --ads-medium-gray: #ffffff;
            /* Text color for readability: White */
            --ads-dark-gray: #000000;
            /* Main background: Black */
            --ads-highlight-color: #1a1a1a;
            /* Highlight: Dark Grey */
        }

        body {
            color: var(--ads-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--ads-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .ads-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--ads-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .ads-preloader .ads-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--ads-light-gray);
            border-top: 6px solid var(--ads-accent-color);
            border-radius: 50%;
            animation: ads-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes ads-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .ads-hero-section {
            position: relative;
            background: url('https://img.freepik.com/premium-photo/youtube-google-facebook-instagram-ads-launch-with-rocket-marketing-social-media_694006-316.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--ads-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--ads-light-gray);
        }

        .ads-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .ads-hero-content {
            position: relative;
            z-index: 2;
            animation: ads-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .ads-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--ads-accent-color);
            animation: ads-typing 4s steps(50, end), ads-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--ads-primary-color);
        }

        .ads-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: ads-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--ads-primary-color);
        }

        @keyframes ads-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes ads-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes ads-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes ads-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .ads-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--ads-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .ads-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--ads-accent-color);
            transition: width 0.7s ease-out;
        }

        .ads-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-heading.visible::after {
            width: 100%;
        }

        .ads-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--ads-light-gray);
            animation: ads-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes ads-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .ads-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--ads-dark-gray);
        }

        .ads-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--ads-medium-gray);
            font-weight: 300;
        }

        .ads-text-section {
            margin: 40px 0;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .ads-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--ads-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .ads-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .ads-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .ads-block-content {
            flex: 1;
        }

        .ads-expand-btn {
            background: var(--ads-accent-color);
            color: var(--ads-primary-color);
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: auto;
        }

        .ads-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .ads-expand-btn:hover {
            background: #cc0000;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .ads-expand-btn:hover::before {
            left: 100%;
        }

        .ads-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .ads-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-spreadsheet-view,
        .ads-info-block {
            flex: 1;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .ads-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .ads-highlight-section {
            background: var(--ads-light-gray);
            padding: 20px;
            margin: 40px 0;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .ads-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .ads-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .ads-product-grid.visible {
            opacity: 1;
        }

        .ads-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .ads-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .ads-product-item:hover .ads-product-item-inner {
            transform: rotateY(180deg);
        }

        .ads-product-item-front,
        .ads-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .ads-product-item-back {
            background: var(--ads-light-gray);
            color: var(--ads-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .ads-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .ads-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .ads-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--ads-medium-gray);
            padding: 0 10px;
        }

        .ads-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .ads-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-data-tables,
        .ads-visual-charts {
            flex: 1;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--ads-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .ads-table,
        .ads-table th,
        .ads-table td {
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-table th,
        .ads-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .ads-table th {
            background: var(--ads-light-gray);
            color: var(--ads-primary-color);
        }

        .ads-table tr:nth-child(even) {
            background-color: var(--ads-highlight-color);
        }

        .ads-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .ads-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-video-player,
        .ads-video-info {
            flex: 1;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .ads-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .ads-questions-section {
            margin: 30px 0;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--ads-highlight-color);
            padding-bottom: 12px;
        }

        .ads-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--ads-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .ads-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .ads-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .ads-questions-section summary:hover {
            color: var(--ads-accent-color);
        }

        .ads-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: ads-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--ads-medium-gray);
        }

        @keyframes ads-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .ads-navigation-links,
        .ads-research-section {
            margin: 30px 0;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-navigation-links.visible,
        .ads-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-nav-link {
            color: var(--ads-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .ads-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--ads-accent-color);
            transition: width 0.4s ease;
        }

        .ads-nav-link:hover {
            color: var(--ads-accent-color);
        }

        .ads-nav-link:hover::after {
            width: 100%;
        }

        .ads-business-guide {
            margin: 30px 0;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-guide-btn {
            background: var(--ads-accent-color);
            color: var(--ads-primary-color);
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.4s ease;
            display: inline-block;
            position: relative;
            overflow: hidden;
            font-size: 0.9rem;
        }

        .ads-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .ads-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .ads-guide-btn:hover::before {
            left: 100%;
        }

        .ads-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-stats-panel,
        .ads-contact-panel {
            flex: 1;
        }

        .ads-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .ads-stat-card {
            background: var(--ads-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--ads-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .ads-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--ads-accent-color);
        }

        .ads-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--ads-primary-color);
            margin: 0;
        }

        .ads-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--ads-medium-gray);
            margin: 8px 0 0;
        }

        .ads-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .ads-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--ads-medium-gray);
            text-align: center;
        }

        .ads-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .ads-contact-input,
        .ads-contact-textarea {
            padding: 10px;
            border: 1px solid var(--ads-highlight-color);
            border-radius: 6px;
            background: var(--ads-light-gray);
            color: var(--ads-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .ads-contact-input:hover,
        .ads-contact-textarea:hover {
            border-color: var(--ads-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .ads-contact-input:focus,
        .ads-contact-textarea:focus {
            outline: none;
            border-color: var(--ads-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .ads-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .ads-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .ads-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--ads-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .ads-checkbox-options label:hover {
            color: var(--ads-primary-color);
        }

        .ads-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--ads-medium-gray);
            margin: 8px 0;
        }

        .ads-submit-btn {
            background: var(--ads-accent-color);
            color: var(--ads-primary-color);
            border: none;
            padding: 10px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            width: 100%;
            margin-top: 8px;
        }

        .ads-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .ads-submit-btn:hover {
            background: #cc0000;
        }

        .ads-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .ads-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--ads-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .ads-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ads-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--ads-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--ads-highlight-color);
        }

        .ads-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--ads-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--ads-accent-color);
        }

        .ads-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .ads-visual-diagram circle {
            fill: none;
            stroke: var(--ads-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: ads-dash 6s linear infinite;
        }

        @keyframes ads-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .ads-visual-label {
            position: absolute;
            background: var(--ads-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--ads-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--ads-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .ads-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--ads-accent-color);
        }

        .ads-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--ads-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--ads-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: ads-pulse 3s ease-in-out infinite;
        }

        .ads-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes ads-pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                transform: translate(-50%, -50%) scale(1.03);
            }
        }

        /* Media Queries */
        @media (min-width: 576px) {
            .ads-hero-content h1 {
                font-size: 2.5rem;
            }

            .ads-hero-content p {
                font-size: 1.2rem;
            }

            .ads-content-block {
                padding: 25px;
            }

            .ads-heading {
                font-size: 1.75rem;
            }

            .ads-text {
                font-size: 1.05rem;
            }

            .ads-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .ads-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .ads-hero-content h1 {
                font-size: 3rem;
            }

            .ads-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .ads-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .ads-content-block img {
                max-width: 550px;
            }

            .ads-data-display,
            .ads-metrics-display,
            .ads-video-section,
            .ads-stats-contact {
                flex-direction: row;
            }

            .ads-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ads-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .ads-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .ads-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .ads-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .ads-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .ads-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .ads-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .ads-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .ads-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .ads-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="ads-preloader">
        <div class="ads-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="ads-hero-section" aria-label="Digital Advertising Solutions Hero">
        <div class="ads-hero-content">
            <h1>Maximize Your Reach with Digital Ads</h1>
            <p>Drive results with PPC, Meta, and YouTube Ads by Jaikvik Technology</p>
            <a href="#ads-overview" class="ads-expand-btn" role="button" aria-label="Explore Advertising Solutions">Explore Now</a>
        </div>
    </section>

    <div class="ads-main-content">
        <div class="ads-text-section">
            <div class="ads-content-block">
                <div class="ads-block-content">
                    <h2 class="ads-heading">What Are PPC, Meta, and YouTube Ads?</h2>
                    <p class="ads-text">
                        Digital advertising, including PPC (Pay-Per-Click), Meta Ads, and YouTube Ads, is a powerful strategy to reach targeted audiences and drive conversions. These platforms allow businesses to create highly customizable campaigns tailored to specific demographics, interests, and behaviors.<br>
                        <strong>PPC Ads</strong> (e.g., Google Ads) enable businesses to bid on keywords, displaying ads on search engines and partner sites, paying only when users click.<br>
                        <strong>Meta Ads</strong> leverage Facebook and Instagram's vast user base for targeted campaigns, ideal for brand awareness and engagement.<br>
                        <strong>YouTube Ads</strong> deliver video-based promotions to a global audience, perfect for storytelling and product showcases.<br><span class="ads-ellipsis">...</span><span class="ads-expand-content" style="display: none;">
                            At Jaikvik Technology, our digital advertising solutions are designed to maximize ROI by optimizing ad spend, targeting the right audiences, and delivering measurable results. Whether you're a small business or a global brand, our strategies adapt to your goals, ensuring your ads resonate with your audience. From crafting compelling ad copy to analyzing performance metrics, we handle every aspect of your campaign to drive growth.<br>
                            In the competitive digital landscape, effective advertising is key to standing out. Our solutions help businesses increase website traffic, generate leads, and boost sales through precise targeting and creative ad formats. For example, a local retailer can use Meta Ads to promote seasonal discounts, while an e-commerce brand can leverage YouTube Ads to showcase product demos, driving a 20% increase in conversions.
                        </span>
                    </p>
                    <button class="ads-expand-btn" data-section="0" aria-label="Toggle Advertising Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/pile-3d-play-button-logos_1379-880.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Digital Advertising Solutions">
            </div>

            <div class="ads-content-block">
                <img src="https://img.freepik.com/premium-photo/women-using-mouse-keyboard-streaming-online-watching-video-internet-live-concert-show-tutorial_29488-3880.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Advertising Features">
                <div class="ads-block-content">
                    <h2 class="ads-heading">What Do These Ad Platforms Do?</h2>
                    <p class="ads-text">
                        Each advertising platform serves unique purposes, helping businesses achieve specific marketing goals:<br>
                        <strong>PPC Advertising</strong><br>
                        PPC campaigns drive immediate traffic by placing ads on search results and websites. Advertisers bid on keywords, ensuring ads appear for relevant searches, with costs incurred only per click.<br>
                        <strong>Meta Ads</strong><br>
                        Meta Ads harness the power of social media, targeting users based on demographics, interests, and behaviors. They support various formats like carousel ads, stories, and video ads.<br>
                        <strong>YouTube Ads</strong><br>
                        YouTube Ads engage viewers through skippable in-stream ads, bumper ads, or display ads, leveraging video content to build brand awareness.<br><span class="ads-ellipsis">...</span><span class="ads-expand-content" style="display: none;">
                            <strong>Campaign Optimization</strong><br>
                            Our team optimizes campaigns by analyzing performance data, adjusting bids, and refining targeting to maximize ROI. For example, A/B testing ad creatives can improve click-through rates by 15%.<br>
                            <strong>Analytics and Reporting</strong><br>
                            Detailed reports provide insights into impressions, clicks, conversions, and cost-per-acquisition, enabling data-driven decisions.<br>
                            <strong>Cross-Platform Integration</strong><br>
                            Jaikvik Technology integrates these platforms with tools like Google Analytics, CRM systems, and e-commerce platforms to streamline workflows and track customer journeys. Our solutions include AI-driven targeting, retargeting campaigns, and mobile-optimized ads to ensure your campaigns perform across devices.
                        </span>
                    </p>
                    <button class="ads-expand-btn" data-section="1" aria-label="Toggle Advertising Functionality">Read More</button>
                </div>
            </div>

            <div class="ads-content-block">
                <div class="ads-block-content">
                    <h2 class="ads-heading">Why Choose Digital Advertising?</h2>
                    <p class="ads-text">
                        Digital advertising offers unmatched benefits for businesses aiming to grow their online presence:<br>
                        <strong>Targeted Reach:</strong> Reach specific audiences with precision, ensuring ads are seen by those most likely to convert.<br>
                        <strong>Measurable Results:</strong> Track performance metrics like clicks, impressions, and conversions in real-time.<br>
                        <strong>Cost Efficiency:</strong> Pay only for results (e.g., clicks or views), making it budget-friendly.<br>
                        <strong>Scalability:</strong> Adjust campaigns to suit businesses of all sizes, from startups to enterprises.<br><span class="ads-ellipsis">...</span><span class="ads-expand-content" style="display: none;">
                            <strong>Brand Visibility:</strong> Increase brand awareness through engaging ad formats on high-traffic platforms.<br>
                            <strong>Key Components of Digital Advertising</strong><br>
                            <strong>Ad Creation:</strong> Design compelling visuals and copy tailored to each platform’s audience.<br>
                            <strong>Targeting:</strong> Use advanced tools to segment audiences by location, interests, and behavior.<br>
                            <strong>Bidding Strategies:</strong> Optimize bids to balance cost and performance, ensuring efficient ad spend.<br>
                            <strong>Analytics:</strong> Leverage data to refine campaigns and improve ROI.<br>
                            <strong>Retargeting:</strong> Re-engage users who interacted with your brand but didn’t convert.<br>
                            Jaikvik Technology’s advertising solutions include end-to-end campaign management, from strategy to execution. Our clients have seen up to a 200% increase in lead generation and a 25% reduction in cost-per-click through our optimized campaigns, proving the power of strategic digital advertising.
                        </span>
                    </p>
                    <button class="ads-expand-btn" data-section="2" aria-label="Toggle Advertising Benefits">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/social-media-marketing-analysis-youtube-channel-grown-3d-illustration_261703-186.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Advertising Benefits">
            </div>

            <div class="ads-content-block">
                <img src="https://img.freepik.com/free-vector/viral-content-abstract-concept-illustration_335657-3759.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Advertising Use Cases">
                <div class="ads-block-content">
                    <h2 class="ads-heading">Advertising for Different Industries</h2>
                    <p class="ads-text">
                        PPC, Meta, and YouTube Ads are versatile, serving various industries with tailored strategies:<br>
                        <strong>1. Retail and E-commerce</strong><br>
                        ● Use Meta Ads for targeted promotions and YouTube Ads for product demos to drive sales.<br>
                        ● PPC campaigns boost visibility for seasonal offers, increasing click-through rates.<br>
                        <strong>2. Real Estate</strong><br>
                        ● Meta Ads showcase property listings, while PPC targets local buyers searching for homes.<br><span class="ads-ellipsis">...</span><span class="ads-expand-content" style="display: none;">
                            ● YouTube Ads highlight virtual tours, engaging potential buyers emotionally.<br>
                            <strong>3. Healthcare</strong><br>
                            ● PPC promotes clinics and services, targeting local searches for healthcare providers.<br>
                            ● Meta Ads raise awareness for wellness programs, driving community engagement.<br>
                            <strong>4. Education</strong><br>
                            ● YouTube Ads showcase courses, while Meta Ads target students and parents.<br>
                            ● PPC drives enrollment by targeting keywords like “online courses.”<br>
                            <strong>5. Hospitality</strong><br>
                            ● Meta Ads promote hotel deals, while YouTube Ads highlight guest experiences.<br>
                            ● PPC targets travelers searching for accommodations, boosting bookings.<br>
                            Jaikvik Technology customizes campaigns for industries like finance (promoting investment services), B2B (lead generation), and nonprofits (fundraising). For example, an e-commerce client achieved a 30% increase in sales through our Meta Ads, while a real estate firm saw a 40% boost in inquiries via PPC.
                        </span>
                    </p>
                    <button class="ads-expand-btn" data-section="3" aria-label="Toggle Advertising Use Cases">Read More</button>
                </div>
            </div>
        </div>

        <section class="ads-integration-visual">
            <h2 class="ads-heading">Advertising Integration Overview</h2>
            <div class="ads-visual-container">
                <div class="ads-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="ads-core-circle">Ad Integration</div>
                    <div class="ads-visual-label" style="top: 8%; left: 50%; transform: translateX(-50%);">Audience Targeting</div>
                    <div class="ads-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">Campaign Automation</div>
                    <div class="ads-visual-label" style="top: 50%; left: 4%; transform: translateY(-50%);">Ad Creative Studio</div>
                    <div class="ads-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">Performance Analytics</div>
                    <div class="ads-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">ROI Tracking</div>
                    <div class="ads-visual-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Retargeting Tools</div>
                    <div class="ads-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Keyword Optimization</div>
                    <div class="ads-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">A/B Testing</div>
                    <div class="ads-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Ad Scheduling</div>
                </div>
            </div>
        </section>


        <?php include 'ppc-meta-youtube-reserch.php' ?>

        <section class="ads-stats-contact">
            <div class="ads-stats-panel">
                <h2 class="ads-heading">Rising Numbers, Building Confidence</h2>
                <div class="ads-stats-container">
                    <div class="ads-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="ads-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="ads-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="ads-stat-card">
                        <h3>2500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="ads-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="ads-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="ads-certifications-list">
                    <div>
                        <p class="ads-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="ads-text">Google Ads Creative Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="ads-contact-panel">
                <h2 class="ads-heading">Let's Discuss Now</h2>
                <p class="ads-text">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="ads-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="ads-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="ads-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="ads-checkbox-options">
                        <label><input type="checkbox" name="service" value="web-design" aria-label="Web Design / Development"> Web Design / Development</label>
                        <label><input type="checkbox" name="service" value="seo" aria-label="Search Engine Optimization"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox" name="service" value="ecommerce" aria-label="eCommerce"> eCommerce</label>
                        <label><input type="checkbox" name="service" value="mobile-app" aria-label="Mobile App"> Mobile App</label>
                        <label><input type="checkbox" name="service" value="ppc" aria-label="PPC Advertising"> PPC Advertising</label>
                        <label><input type="checkbox" name="service" value="meta-ads" aria-label="Meta Ads"> Meta Ads</label>
                        <label><input type="checkbox" name="service" value="youtube-ads" aria-label="YouTube Ads"> YouTube Ads</label>
                        <label><input type="checkbox" name="service" value="content" aria-label="Content Writing"> Content Writing</label>
                        <label><input type="checkbox" name="service" value="smo" aria-label="Social Media"> Social Media (SMO)</label>
                        <label><input type="checkbox" name="service" value="hosting" aria-label="Web Hosting / Maintenance"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="ads-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="ads-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="ads-submit-btn" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.ads-preloader');
            if (preloader) {
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => preloader.remove(), 700);
                }, 1200);
            }

            // Initialize animations
            initAnimations();
        });

        // Expand/Collapse Sections
        document.querySelectorAll('.ads-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.ads-expand-content');
                const ellipsis = button.parentElement.querySelector('.ads-ellipsis');
                if (content.style.display === 'none' || !content.style.display) {
                    content.style.display = 'inline';
                    if (ellipsis) ellipsis.style.display = 'none';
                    button.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    if (ellipsis) ellipsis.style.display = 'inline';
                    button.textContent = 'Read More';
                }
            });
        });

        // Initialize Animations
        function initAnimations() {
            const elements = document.querySelectorAll('.ads-content-block, .ads-data-display, .ads-highlight-section, .ads-product-grid, .ads-metrics-display, .ads-video-section, .ads-questions-section, .ads-navigation-links, .ads-research-section, .ads-business-guide, .ads-stats-contact, .ads-integration-visual, .ads-stat-card, .ads-heading');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });

            elements.forEach(element => observer.observe(element));

            // Product items animation
            const productItems = document.querySelectorAll('.ads-product-item');
            productItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add('visible');
                }, index * 200);
            });
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>