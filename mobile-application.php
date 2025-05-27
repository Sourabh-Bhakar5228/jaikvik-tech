<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover the Best Mobile Apps for Every Need</title>
    <meta name="description" content="Choose Jaikvik Technology for innovative approaches and creative, simple-to-use, and high-performing mobile apps that are customized to your company's demands.">
    <meta name="keywords" content="Mobile Apps, Mobile Application Development, Business Growth, Jaikvik Technology">
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
            --mobile-app-primary-color: #ffffff;
            /* Text color: White */
            --mobile-app-secondary-color: #ffffff;
            /* Secondary text color: White */
            --mobile-app-accent-color: #ff0000;
            /* Button color: Red */
            --mobile-app-light-gray: #1a1a1a;
            /* Section background: Dark Grey */
            --mobile-app-medium-gray: #ffffff;
            /* Text color for readability: White */
            --mobile-app-dark-gray: #000000;
            /* Main background: Black */
            --mobile-app-highlight-color: #1a1a1a;
            /* Highlight: Dark Grey */
        }

        body {
            color: var(--mobile-app-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--mobile-app-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .mobile-app-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--mobile-app-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .mobile-app-preloader .mobile-app-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--mobile-app-light-gray);
            border-top: 6px solid var(--mobile-app-accent-color);
            border-radius: 50%;
            animation: mobile-app-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes mobile-app-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .mobile-app-hero-section {
            position: relative;
            background: url('https://img.freepik.com/free-vector/app-development-banner_33099-1720.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--mobile-app-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--mobile-app-light-gray);
        }

        .mobile-app-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .mobile-app-hero-content {
            position: relative;
            z-index: 2;
            animation: mobile-app-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .mobile-app-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--mobile-app-accent-color);
            animation: mobile-app-typing 4s steps(50, end), mobile-app-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--mobile-app-primary-color);
        }

        .mobile-app-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: mobile-app-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--mobile-app-primary-color);
        }

        @keyframes mobile-app-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes mobile-app-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes mobile-app-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes mobile-app-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .mobile-app-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--mobile-app-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .mobile-app-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--mobile-app-accent-color);
            transition: width 0.7s ease-out;
        }

        .mobile-app-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-heading.visible::after {
            width: 100%;
        }

        .mobile-app-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--mobile-app-light-gray);
            animation: mobile-app-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes mobile-app-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .mobile-app-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--mobile-app-dark-gray);
        }

        .mobile-app-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--mobile-app-medium-gray);
            font-weight: 300;
        }

        .mobile-app-text-section {
            margin: 40px 0;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .mobile-app-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .mobile-app-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .mobile-app-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .mobile-app-block-content {
            flex: 1;
        }

        .mobile-app-expand-btn {
            background: var(--mobile-app-accent-color);
            color: var(--mobile-app-primary-color);
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

        .mobile-app-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .mobile-app-expand-btn:hover {
            background: #cc0000;
            /* Slightly darker red for hover */
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .mobile-app-expand-btn:hover::before {
            left: 100%;
        }

        .mobile-app-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .mobile-app-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-spreadsheet-view,
        .mobile-app-info-block {
            flex: 1;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .mobile-app-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .mobile-app-highlight-section {
            background: var(--mobile-app-light-gray);
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
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .mobile-app-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .mobile-app-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .mobile-app-product-grid.visible {
            opacity: 1;
        }

        .mobile-app-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .mobile-app-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .mobile-app-product-item:hover .mobile-app-product-item-inner {
            transform: rotateY(180deg);
        }

        .mobile-app-product-item-front,
        .mobile-app-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .mobile-app-product-item-back {
            background: var(--mobile-app-light-gray);
            color: var(--mobile-app-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .mobile-app-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .mobile-app-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .mobile-app-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--mobile-app-medium-gray);
            padding: 0 10px;
        }

        .mobile-app-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .mobile-app-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-data-tables,
        .mobile-app-visual-charts {
            flex: 1;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--mobile-app-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .mobile-app-table,
        .mobile-app-table th,
        .mobile-app-table td {
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-table th,
        .mobile-app-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .mobile-app-table th {
            background: var(--mobile-app-light-gray);
            color: var(--mobile-app-primary-color);
        }

        .mobile-app-table tr:nth-child(even) {
            background-color: var(--mobile-app-highlight-color);
        }

        .mobile-app-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .mobile-app-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-video-player,
        .mobile-app-video-info {
            flex: 1;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .mobile-app-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .mobile-app-questions-section {
            margin: 30px 0;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--mobile-app-highlight-color);
            padding-bottom: 12px;
        }

        .mobile-app-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--mobile-app-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .mobile-app-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .mobile-app-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .mobile-app-questions-section summary:hover {
            color: var(--mobile-app-accent-color);
        }

        .mobile-app-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: mobile-app-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--mobile-app-medium-gray);
        }

        @keyframes mobile-app-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mobile-app-navigation-links,
        .mobile-app-research-section {
            margin: 30px 0;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-navigation-links.visible,
        .mobile-app-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-nav-link {
            color: var(--mobile-app-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .mobile-app-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--mobile-app-accent-color);
            transition: width 0.4s ease;
        }

        .mobile-app-nav-link:hover {
            color: var(--mobile-app-accent-color);
        }

        .mobile-app-nav-link:hover::after {
            width: 100%;
        }

        .mobile-app-business-guide {
            margin: 30px 0;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-guide-btn {
            background: var(--mobile-app-accent-color);
            color: var(--mobile-app-primary-color);
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

        .mobile-app-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .mobile-app-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .mobile-app-guide-btn:hover::before {
            left: 100%;
        }

        .mobile-app-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-stats-panel,
        .mobile-app-contact-panel {
            flex: 1;
        }

        .mobile-app-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .mobile-app-stat-card {
            background: var(--mobile-app-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--mobile-app-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .mobile-app-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--mobile-app-accent-color);
        }

        .mobile-app-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--mobile-app-primary-color);
            margin: 0;
        }

        .mobile-app-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--mobile-app-medium-gray);
            margin: 8px 0 0;
        }

        .mobile-app-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .mobile-app-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--mobile-app-medium-gray);
            text-align: center;
        }

        .mobile-app-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .mobile-app-contact-input,
        .mobile-app-contact-textarea {
            padding: 10px;
            border: 1px solid var(--mobile-app-highlight-color);
            border-radius: 6px;
            background: var(--mobile-app-light-gray);
            color: var(--mobile-app-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .mobile-app-contact-input:hover,
        .mobile-app-contact-textarea:hover {
            border-color: var(--mobile-app-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .mobile-app-contact-input:focus,
        .mobile-app-contact-textarea:focus {
            outline: none;
            border-color: var(--mobile-app-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .mobile-app-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .mobile-app-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .mobile-app-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--mobile-app-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .mobile-app-checkbox-options label:hover {
            color: var(--mobile-app-primary-color);
        }

        .mobile-app-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--mobile-app-medium-gray);
            margin: 8px 0;
        }

        .mobile-app-submit-btn {
            background: var(--mobile-app-accent-color);
            color: var(--mobile-app-primary-color);
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

        .mobile-app-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .mobile-app-submit-btn:hover {
            background: #cc0000;
        }

        .mobile-app-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .mobile-app-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--mobile-app-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .mobile-app-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-app-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--mobile-app-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--mobile-app-highlight-color);
        }

        .mobile-app-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--mobile-app-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--mobile-app-accent-color);
        }

        .mobile-app-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .mobile-app-visual-diagram circle {
            fill: none;
            stroke: var(--mobile-app-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: mobile-app-dash 6s linear infinite;
        }

        @keyframes mobile-app-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .mobile-app-visual-label {
            position: absolute;
            background: var(--mobile-app-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--mobile-app-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--mobile-app-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .mobile-app-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--mobile-app-accent-color);
        }

        .mobile-app-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--mobile-app-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--mobile-app-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: mobile-app-pulse 3s ease-in-out infinite;
        }

        .mobile-app-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes mobile-app-pulse {

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
            .mobile-app-hero-content h1 {

                font-size: 2.5rem;
            }

            .mobile-app-hero-content p {
                font-size: 1.2rem;
            }

            .mobile-app-content-block {
                padding: 25px;
            }

            .mobile-app-heading {
                font-size: 1.75rem;
            }

            .mobile-app-text {
                font-size: 1.05rem;
            }

            .mobile-app-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .mobile-app-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .mobile-app-hero-content h1 {
                font-size: 3rem;
            }

            .mobile-app-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .mobile-app-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .mobile-app-content-block img {
                max-width: 550px;
            }

            .mobile-app-data-display,
            .mobile-app-metrics-display,
            .mobile-app-video-section,
            .mobile-app-stats-contact {
                flex-direction: row;
            }

            .mobile-app-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .mobile-app-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .mobile-app-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .mobile-app-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .mobile-app-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .mobile-app-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .mobile-app-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .mobile-app-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .mobile-app-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .mobile-app-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .mobile-app-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="mobile-app-preloader">
        <div class="mobile-app-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="mobile-app-hero-section" aria-label="Mobile Application Solutions Hero" id="mobile-app-hero">
        <div class="mobile-app-hero-content">
            <h1>Empower Your Business with Mobile Apps</h1>
            <p>Build innovative mobile applications with Jaikvik Technology</p>
            <a href="#mobile-app-overview" class="mobile-app-expand-btn" role="button" aria-label="Explore Mobile App Solutions">Explore Now</a>
        </div>
    </section>

    <div class="mobile-app-main-content">
        <div class="mobile-app-text-section">
            <div class="mobile-app-content-block">
                <div class="mobile-app-block-content">
                    <h2 class="mobile-app-heading">What Are Mobile Applications?</h2>
                    <p class="mobile-app-text">
                        Mobile applications, or apps, are software programs designed to run on mobile devices like smartphones and tablets. They provide users with seamless access to services, information, and functionalities tailored for mobile use. Apps leverage device capabilities such as GPS, cameras, and touch interfaces to deliver intuitive experiences.<br>
                        At Jaikvik Technology, we develop custom mobile apps that align with your business goals, whether for iOS, Android, or cross-platform solutions. Our apps are built to enhance user engagement, streamline operations, and drive growth by integrating advanced features like push notifications, offline capabilities, and secure payment gateways.<br>
                        Mobile apps are essential in today’s digital-first world, enabling businesses to connect with customers anytime, anywhere. From e-commerce platforms to fitness trackers, apps transform how businesses operate and engage with their audience.<span class="mobile-app-ellipsis">...</span><span class="mobile-app-expand-content" style="display: none;">
                            <br>Our development process emphasizes user-centric design, ensuring apps are intuitive and visually appealing. We incorporate technologies like AI, AR, and IoT to create cutting-edge solutions. For example, a retail app we developed increased user retention by 40% through personalized recommendations, while a healthcare app reduced patient wait times by 20% with real-time scheduling.<br>
                            Mobile apps empower businesses to stay competitive by offering convenience, personalization, and accessibility. Whether you're a startup or an enterprise, our scalable solutions adapt to your needs, delivering measurable results and a strong return on investment.
                        </span>
                    </p>
                    <button class="mobile-app-expand-btn" data-section="0" aria-label="Toggle Mobile App Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/representation-user-experience-interface-design_23-2150169865.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile Application Solutions">
            </div>

            <div class="mobile-app-content-block">
                <img src="https://img.freepik.com/premium-photo/application-interface-ui-smartphone-3d-rendering_110893-146.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Features">
                <div class="mobile-app-block-content">
                    <h2 class="mobile-app-heading">What Do Mobile Apps Do?</h2>
                    <p class="mobile-app-text">
                        Mobile apps serve as powerful tools to enhance business operations and customer engagement. Here’s how they function:<br>
                        <strong>User Engagement</strong><br>
                        Apps provide personalized experiences through features like push notifications, in-app messaging, and tailored content, keeping users connected with your brand.<br>
                        <strong>Streamlined Operations</strong><br>
                        Apps automate tasks such as order processing, appointment scheduling, and customer support, improving efficiency and reducing manual workloads.<br><span class="mobile-app-ellipsis">...</span><span class="mobile-app-expand-content" style="display: none;">
                            <strong>Data Insights</strong><br>
                            Mobile apps collect valuable user data, such as behavior patterns and preferences, enabling businesses to make informed decisions and optimize strategies.<br>
                            <strong>Cross-Platform Accessibility</strong><br>
                            With frameworks like Flutter and React Native, we create apps that work seamlessly on both iOS and Android, maximizing reach without compromising performance.<br>
                            <strong>Integration Capabilities</strong><br>
                            Our apps integrate with existing systems like CRM, ERP, or payment gateways, ensuring a cohesive digital ecosystem.<br>
                            Jaikvik Technology’s mobile apps also offer advanced features like geolocation services, real-time analytics, and secure authentication. For instance, a logistics app we built improved delivery efficiency by 30% through optimized route planning, showcasing the transformative power of mobile solutions.
                        </span>
                    </p>
                    <button class="mobile-app-expand-btn" data-section="1" aria-label="Toggle Mobile App Functionality">Read More</button>
                </div>
            </div>

            <div class="mobile-app-content-block">
                <div class="mobile-app-block-content">
                    <h2 class="mobile-app-heading">Why Choose Mobile Apps for Your Business?</h2>
                    <p class="mobile-app-text">
                        Mobile apps offer unmatched advantages for businesses aiming to stay competitive:<br>
                        <strong>Enhanced Customer Experience:</strong> Apps deliver personalized, on-the-go access to services, boosting customer satisfaction and loyalty.<br>
                        <strong>Increased Reach:</strong> With billions of smartphone users worldwide, apps provide a direct channel to engage a global audience.<br>
                        <strong>Operational Efficiency:</strong> Automation and integration streamline processes, saving time and reducing costs.<br>
                        <strong>Scalability:</strong> Apps grow with your business, supporting new features and user growth without compromising performance.<br><span class="mobile-app-ellipsis">...</span><span class="mobile-app-expand-content" style="display: none;">
                            <strong>Competitive Advantage:</strong> A well-designed app sets you apart from competitors, offering unique features and a modern user experience.<br>
                            <strong>Core Components of Mobile Apps</strong><br>
                            A robust mobile app typically includes:<br>
                            <strong>User Interface (UI/UX)</strong><br>
                            Intuitive designs that ensure ease of use and engagement.<br>
                            <strong>Backend Development</strong><br>
                            Secure servers and APIs to handle data processing and storage.<br>
                            <strong>Push Notifications</strong><br>
                            Real-time alerts to keep users informed and engaged.<br>
                            <strong>Analytics</strong><br>
                            Tools to track user behavior and app performance.<br>
                            <strong>Security</strong><br>
                            Encryption and authentication to protect user data.<br>
                            Jaikvik Technology’s apps are built with cutting-edge security protocols, 24/7 support, and regular updates. Businesses using our apps report up to a 200% increase in customer engagement and a 25% reduction in operational costs, proving the value of mobile solutions.
                        </span>
                    </p>
                    <button class="mobile-app-expand-btn" data-section="2" aria-label="Toggle Mobile App Benefits">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/businessman-using-smartphone-with-tablet-surrounding-by-app-social-icon-3d-render_110893-306.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Benefits">
            </div>

            <div class="mobile-app-content-block">
                <img src="https://img.freepik.com/free-photo/representations-user-experience-interface-design_23-2150038902.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Use Cases">
                <div class="mobile-app-block-content">
                    <h2 class="mobile-app-heading">Mobile Apps Across Industries</h2>
                    <p class="mobile-app-text">
                        Mobile apps are versatile, serving diverse industries with tailored solutions:<br>
                        <strong>1. Retail and E-commerce</strong><br>
                        ● Apps enable seamless shopping with features like product catalogs, secure checkouts, and loyalty programs.<br>
                        ● Push notifications drive sales through personalized offers and cart abandonment reminders.<br>
                        <strong>2. Healthcare</strong><br>
                        ● Apps manage patient records, schedule appointments, and provide telemedicine services.<br><span class="mobile-app-ellipsis">...</span><span class="mobile-app-expand-content" style="display: none;">
                            ● They improve patient engagement with reminders and health tracking features.<br>
                            <strong>3. Real Estate</strong><br>
                            ● Apps showcase property listings, virtual tours, and facilitate client communication.<br>
                            ● Agents use apps to manage inquiries and track deals in real time.<br>
                            <strong>4. Nonprofit Organizations</strong><br>
                            ● Apps streamline fundraising, volunteer management, and donor engagement.<br>
                            ● They enhance outreach with event notifications and donation portals.<br>
                            <strong>5. B2B Enterprises</strong><br>
                            Apps support lead generation, contract management, and team collaboration, ensuring efficient B2B interactions.<br>
                            <strong>6. Education</strong><br>
                            ● Apps deliver e-learning content, manage student data, and facilitate parent-teacher communication.<br>
                            ● They enhance engagement with interactive tools and progress tracking.<br>
                            <strong>7. Hospitality</strong><br>
                            ● Apps manage bookings, guest preferences, and loyalty programs.<br>
                            ● They improve guest experiences with real-time updates and feedback systems.<br>
                            Jaikvik Technology’s apps are customized for industries like logistics (for real-time tracking), finance (for secure transactions), and entertainment (for streaming services). For example, our e-commerce app boosted sales by 35% through personalized recommendations, while a fitness app increased user activity by 50% with gamified features.
                        </span>
                    </p>
                    <button class="mobile-app-expand-btn" data-section="3" aria-label="Toggle Mobile App Use Cases">Read More</button>
                </div>
            </div>
        </div>

        <section class="mobile-app-integration-visual" id="mobile-app-integration">
            <h2 class="mobile-app-heading">Mobile App Integration Overview</h2>
            <div class="mobile-app-visual-container">
                <div class="mobile-app-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="mobile-app-core-circle">App Integration</div>
                    <div class="mobile-app-visual-label" style="top: 8%; left: 50%; transform: translateX(-50%);">User Authentication</div>
                    <div class="mobile-app-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">Push Notifications</div>
                    <div class="mobile-app-visual-label" style="top: 50%; left: 4%; transform: translateY(-50%);">Geolocation Services</div>
                    <div class="mobile-app-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">In-App Analytics</div>
                    <div class="mobile-app-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Payment Gateways</div>
                    <div class="mobile-app-visual-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Social Media Integration</div>
                    <div class="mobile-app-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Cloud Sync</div>
                    <div class="mobile-app-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">API Management</div>
                    <div class="mobile-app-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Offline Mode</div>
                </div>
            </div>
        </section>
        <!-- 
        <section class="mobile-app-data-display" id="mobile-app-data">
            <div class="mobile-app-spreadsheet-view">
                <h2 class="mobile-app-heading">Mobile App Data Overview</h2>
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQe8x2y3z4t5u6v7w8x9y0z1a2b3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1u2v3w4x5y6z7a8b9c/pubhtml?widget=true&headers=false" title="Mobile App Data Spreadsheet"></iframe>
            </div>
            <div class="mobile-app-info-block">
                <h2 class="mobile-app-heading">Why Mobile Apps Matter</h2>
                <p class="mobile-app-text">Mobile applications empower businesses to engage customers directly on their devices. They streamline operations, enhance user experiences, and provide actionable insights through data analytics.<br>
                    Key benefits include:</p>
                <ul>
                    <li>Improved user engagement</li>
                    <li>Streamlined business processes</li>
                    <li>Real-time data insights</li>
                    <li>Global accessibility</li>
                </ul>
            </div>
        </section>

        <section class="mobile-app-highlight-section" id="mobile-app-highlight">
            <img src="https://img.freepik.com/free-photo/representation-user-experience-interface-design_23-2150169853.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Insights">
            <p class="mobile-app-text">
                Transform your business with our custom mobile app solutions. Designed to enhance user experiences, our apps integrate advanced features like AI-driven analytics, secure payments, and real-time notifications. Whether for e-commerce, healthcare, or education, our apps drive engagement and efficiency. Partner with Jaikvik Technology to build scalable, user-friendly apps that deliver measurable results.
            </p>
        </section>

        <section class="mobile-app-product-grid" id="mobile-app-products">
            <div class="mobile-app-product-item">
                <div class="mobile-app-product-item-inner">
                    <div class="mobile-app-product-item-front">
                        <img src="https://img.freepik.com/premium-vector/mobile-app-development-concept-people-building-create-software-application-giant-smartphone-flat-illustration_138260-672.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Product 1">
                        <p>E-commerce App</p>
                    </div>
                    <div class="mobile-app-product-item-back">
                        <p>Seamless shopping with secure payments and personalized recommendations</p>
                    </div>
                </div>
            </div>
            <div class="mobile-app-product-item">
                <div class="mobile-app-product-item-inner">
                    <div class="mobile-app-product-item-front">
                        <img src="https://img.freepik.com/premium-vector/mobile-app-web-feature-premium-template-ui-kit_234432-8.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Product 2">
                        <p>Healthcare App</p>
                    </div>
                    <div class="mobile-app-product-item-back">
                        <p>Appointment scheduling and telemedicine integration</p>
                    </div>
                </div>
            </div>
            <div class="mobile-app-product-item">
                <div class="mobile-app-product-item-inner">
                    <div class="mobile-app-product-item-front">
                        <img src="https://img.freepik.com/premium-vector/mobile-app-web-feature-premium-template-ui-kit_234432-8.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Product 3">
                        <p>Fitness App</p>
                    </div>
                    <div class="mobile-app-product-item-back">
                        <p>Gamified workouts and progress tracking</p>
                    </div>
                </div>
            </div>
            <div class="mobile-app-product-item">
                <div class="mobile-app-product-item-inner">
                    <div class="mobile-app-product-item-front">
                        <img src="https://img.freepik.com/free-vector/neon-landing-page-with-smartphone-template_23-2148364027.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mobile App Product 4">
                        <p>Education App</p>
                    </div>
                    <div class="mobile-app-product-item-back">
                        <p>Interactive e-learning with real-time progress reports</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobile-app-metrics-display" id="mobile-app-metrics">
            <div class="mobile-app-data-tables">
                <h2 class="mobile-app-heading">Mobile App Performance Metrics</h2>
                <table class="mobile-app-table">
                    <tr>
                        <th>Metric</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>User Retention</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>App Downloads</td>
                        <td>10K+</td>
                    </tr>
                    <tr>
                        <td>Engagement Rate</td>
                        <td>35%</td>
                    </tr>
                    <tr>
                        <td>User Satisfaction</td>
                        <td>92%</td>
                    </tr>
                </table>
                <h2 class="mobile-app-heading">User Demographics</h2>
                <table class="mobile-app-table">
                    <tr>
                        <th>Segment</th>
                        <th>Percentage</th>
                    </tr>
                    <tr>
                        <td>18-34 Years</td>
                        <td>60%</td>
                    </tr>
                    <tr>
                        <td>35+ Years</td>
                        <td>40%</td>
                    </tr>
                </table>
            </div>
            <div class="mobile-app-visual-charts">
                <h2 class="mobile-app-heading">Analytics Overview</h2>
                <img src="https://img.freepik.com/free-photo/representations-user-experience-interface-design_23-2150104519.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="User Engagement Graph">
                <p class="mobile-app-text">User Engagement Trends</p>
                <img src="https://img.freepik.com/free-vector/phone-customization-concept-illustration_114360-4135.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Download Growth Graph">
                <p class="mobile-app-text">Download Growth Metrics</p>
            </div>
        </section>

        <section class="mobile-app-video-section" id="mobile-app-video">
            <div class="mobile-app-video-player">
                <h2 class="mobile-app-heading">Mobile App Reels</h2>
                <video controls aria-label="Mobile App Demo Video">
                    <source src="https://videos.pexels.com/video-files/3252147/3252147-sd_640_360_25fps.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="mobile-app-video-info">
                <h2 class="mobile-app-heading">Explore App Features</h2>
                <p class="mobile-app-text">Watch our reels to see how our mobile apps can elevate your business. From seamless UI to powerful integrations, discover the future of mobile solutions.</p>
            </div>
        </section>

        <section class="mobile-app-questions-section" id="mobile-app-faq">
            <h2 class="mobile-app-heading">Frequently Asked Questions</h2>
            <details>
                <summary>What is a mobile application?</summary>
                <p class="mobile-app-text">A mobile application is software designed for smartphones and tablets, offering tailored functionalities like e-commerce, health tracking, or education, with seamless user experiences.</p>
            </details>
            <details>
                <summary>How do mobile apps benefit businesses?</summary>
                <p class="mobile-app-text">Mobile apps enhance customer engagement, streamline operations, provide data insights, and increase accessibility, driving loyalty and revenue growth.</p>
            </details>
            <details>
                <summary>Can small businesses afford mobile apps?</summary>
                <p class="mobile-app-text">Yes, our scalable solutions are cost-effective for small businesses, offering high ROI through automation and improved customer experiences.</p>
            </details>
            <details>
                <summary>How long does app development take?</summary>
                <p class="mobile-app-text">Development time depends on complexity. Simple apps take 2-3 months, while complex apps may take 6-12 months. We ensure timely delivery with regular updates.</p>
            </details>
        </section>

        <section class="mobile-app-navigation-links" id="mobile-app-nav">
            <h2 class="mobile-app-heading">Explore More</h2>
            <p><a href="#mobile-app-overview" class="mobile-app-nav-link" aria-label="Go to Mobile App Overview">App Overview</a> | <a href="#mobile-app-products" class="mobile-app-nav-link" aria-label="Go to Products">Products</a> | <a href="#mobile-app-metrics" class="mobile-app-nav-link" aria-label="Go to Analytics">Analytics</a> | <a href="#mobile-app-faq" class="mobile-app-nav-link" aria-label="Go to FAQ">FAQ</a></p>
        </section>

        <section class="mobile-app-research-section" id="mobile-app-research">
            <h2 class="mobile-app-heading">Industry Research</h2>
            <p class="mobile-app-text">Discover the latest trends in mobile app development. Learn how businesses leverage apps to enhance user experiences and stay ahead in the digital era.</p>
        </section>

        <section class="mobile-app-business-guide" id="mobile-app-guide">
            <h2 class="mobile-app-heading">MSME Mobile App Guide</h2>
            <p class="mobile-app-text">Download our guide for MSMEs to build effective mobile apps and transform your digital presence.</p>
            <a href="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" download class="mobile-app-guide-btn" aria-label="Download MSME Mobile App Guide">Download PDF</a>
        </section> -->

        <?php include 'mobile-application-industry-reasearch.php' ?>
        <section class="mobile-app-stats-contact" id="mobile-app-contact">
            <div class="mobile-app-stats-panel">
                <h2 class="mobile-app-heading">Rising Numbers, Building Confidence</h2>
                <div class="mobile-app-stats-container">
                    <div class="mobile-app-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="mobile-app-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="mobile-app-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="mobile-app-stat-card">
                        <h3>2500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="mobile-app-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="mobile-app-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="mobile-app-certifications-list">
                    <div>
                        <p class="mobile-app-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="mobile-app-text">Google Ads Creative Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="mobile-app-contact-panel">
                <h2 class="mobile-app-heading">Let's Discuss Now</h2>
                <p class="mobile-app-text">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="mobile-app-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="mobile-app-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="mobile-app-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="mobile-app-checkbox-options">
                        <label><input type="checkbox" name="service" value="web-design" aria-label="Web Design / Development"> Web Design / Development</label>
                        <label><input type="checkbox" name="service" value="seo" aria-label="Search Engine Optimization"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox" name="service" value="ecommerce" aria-label="eCommerce"> eCommerce</label>
                        <label><input type="checkbox" name="service" value="mobile-app" aria-label="Mobile App"> Mobile App</label>
                        <label><input type="checkbox" name="service" value="crm" aria-label="CRM Development"> CRM Development</label>
                        <label><input type="checkbox" name="service" value="ppc" aria-label="Pay Per Click"> Pay Per Click (PPC)</label>
                        <label><input type="checkbox" name="service" value="content" aria-label="Content Writing"> Content Writing</label>
                        <label><input type="checkbox" name="service" value="smo" aria-label="Social Media"> Social Media (SMO)</label>
                        <label><input type="checkbox" name="service" value="hosting" aria-label="Web Hosting / Maintenance"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="mobile-app-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="mobile-app-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="mobile-app-submit-btn" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.mobile-app-preloader');
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
        document.querySelectorAll('.mobile-app-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.mobile-app-expand-content');
                const ellipsis = button.parentElement.querySelector('.mobile-app-ellipsis');
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
            const elements = document.querySelectorAll('.mobile-app-content-block, .mobile-app-data-display, .mobile-app-highlight-section, .mobile-app-product-grid, .mobile-app-metrics-display, .mobile-app-video-section, .mobile-app-questions-section, .mobile-app-navigation-links, .mobile-app-research-section, .mobile-app-business-guide, .mobile-app-stats-contact, .mobile-app-integration-visual, .mobile-app-stat-card, .mobile-app-heading');
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
            const productItems = document.querySelectorAll('.mobile-app-product-item');
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