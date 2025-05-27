<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing, Social Media, PPC, Meta, YouTube Ads & Brand Promotion</title>
    <meta name="description" content="Discover Digital Marketing, Social Media Marketing, PPC, Meta Ads, YouTube Ads, and Brand Promotion at Jaikvik Technology. Learn strategies to boost your online presence and business growth.">
    <meta name="keywords" content="Digital Marketing, Social Media Marketing, PPC, Meta Ads, YouTube Ads, Brand Promotion, Jaikvik Technology">
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
            --brand-primary-color: #ffffff;
            /* Text color: White */
            --brand-secondary-color: #ffffff;
            /* Secondary text color: White */
            --brand-accent-color: #ff0000;
            /* Button color: Red */
            --brand-light-gray: #1a1a1a;
            /* Section background: Dark Grey */
            --brand-medium-gray: #ffffff;
            /* Text color for readability: White */
            --brand-dark-gray: #000000;
            /* Main background: Black */
            --brand-highlight-color: #1a1a1a;
            /* Highlight: Dark Grey */
        }

        body {
            color: var(--brand-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--brand-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .brand-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--brand-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .brand-preloader .brand-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--brand-light-gray);
            border-top: 6px solid var(--brand-accent-color);
            border-radius: 50%;
            animation: brand-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes brand-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .brand-hero-section {
            position: relative;
            background: url('https://img.freepik.com/free-photo/social-media-marketing-concept-marketing-with-applications_23-2150063134.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brand-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--brand-light-gray);
        }

        .brand-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .brand-hero-content {
            position: relative;
            z-index: 2;
            animation: brand-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .brand-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--brand-accent-color);
            animation: brand-typing 4s steps(50, end), brand-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--brand-primary-color);
        }

        .brand-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: brand-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--brand-primary-color);
        }

        @keyframes brand-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes brand-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes brand-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes brand-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .brand-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--brand-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .brand-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--brand-accent-color);
            transition: width 0.7s ease-out;
        }

        .brand-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-heading.visible::after {
            width: 100%;
        }

        .brand-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--brand-light-gray);
            animation: brand-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes brand-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .brand-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--brand-dark-gray);
        }

        .brand-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--brand-medium-gray);
            font-weight: 300;
        }

        .brand-text-section {
            margin: 40px 0;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .brand-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--brand-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .brand-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .brand-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .brand-block-content {
            flex: 1;
        }

        .brand-expand-btn {
            background: var(--brand-accent-color);
            color: var(--brand-primary-color);
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

        .brand-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .brand-expand-btn:hover {
            background: #cc0000;
            /* Slightly darker red for hover */
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .brand-expand-btn:hover::before {
            left: 100%;
        }

        .brand-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .brand-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-spreadsheet-view,
        .brand-info-block {
            flex: 1;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .brand-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .brand-highlight-section {
            background: var(--brand-light-gray);
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
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .brand-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .brand-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .brand-product-grid.visible {
            opacity: 1;
        }

        .brand-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .brand-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .brand-product-item:hover .brand-product-item-inner {
            transform: rotateY(180deg);
        }

        .brand-product-item-front,
        .brand-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .brand-product-item-back {
            background: var(--brand-light-gray);
            color: var(--brand-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .brand-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .brand-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .brand-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--brand-medium-gray);
            padding: 0 10px;
        }

        .brand-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .brand-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-data-tables,
        .brand-visual-charts {
            flex: 1;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--brand-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .brand-table,
        .brand-table th,
        .brand-table td {
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-table th,
        .brand-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .brand-table th {
            background: var(--brand-light-gray);
            color: var(--brand-primary-color);
        }

        .brand-table tr:nth-child(even) {
            background-color: var(--brand-highlight-color);
        }

        .brand-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .brand-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-video-player,
        .brand-video-info {
            flex: 1;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .brand-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .brand-questions-section {
            margin: 30px 0;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--brand-highlight-color);
            padding-bottom: 12px;
        }

        .brand-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--brand-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .brand-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .brand-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .brand-questions-section summary:hover {
            color: var(--brand-accent-color);
        }

        .brand-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: brand-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--brand-medium-gray);
        }

        @keyframes brand-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .brand-navigation-links,
        .brand-research-section {
            margin: 30px 0;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-navigation-links.visible,
        .brand-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-nav-link {
            color: var(--brand-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .brand-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--brand-accent-color);
            transition: width 0.4s ease;
        }

        .brand-nav-link:hover {
            color: var(--brand-accent-color);
        }

        .brand-nav-link:hover::after {
            width: 100%;
        }

        .brand-business-guide {
            margin: 30px 0;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-guide-btn {
            background: var(--brand-accent-color);
            color: var(--brand-primary-color);
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

        .brand-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .brand-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .brand-guide-btn:hover::before {
            left: 100%;
        }

        .brand-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-stats-panel,
        .brand-contact-panel {
            flex: 1;
        }

        .brand-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .brand-stat-card {
            background: var(--brand-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--brand-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .brand-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--brand-accent-color);
        }

        .brand-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--brand-primary-color);
            margin: 0;
        }

        .brand-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--brand-medium-gray);
            margin: 8px 0 0;
        }

        .brand-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .brand-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--brand-medium-gray);
            text-align: center;
        }

        .brand-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .brand-contact-input,
        .brand-contact-textarea {
            padding: 10px;
            border: 1px solid var(--brand-highlight-color);
            border-radius: 6px;
            background: var(--brand-light-gray);
            color: var(--brand-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .brand-contact-input:hover,
        .brand-contact-textarea:hover {
            border-color: var(--brand-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .brand-contact-input:focus,
        .brand-contact-textarea:focus {
            outline: none;
            border-color: var(--brand-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .brand-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .brand-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .brand-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--brand-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .brand-checkbox-options label:hover {
            color: var(--brand-primary-color);
        }

        .brand-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--brand-medium-gray);
            margin: 8px 0;
        }

        .brand-submit-btn {
            background: var(--brand-accent-color);
            color: var(--brand-primary-color);
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

        .brand-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .brand-submit-btn:hover {
            background: #cc0000;
        }

        .brand-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .brand-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--brand-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .brand-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .brand-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--brand-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--brand-highlight-color);
        }

        .brand-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--brand-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--brand-accent-color);
        }

        .brand-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .brand-visual-diagram circle {
            fill: none;
            stroke: var(--brand-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: brand-dash 6s linear infinite;
        }

        @keyframes brand-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .brand-visual-label {
            position: absolute;
            background: var(--brand-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--brand-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--brand-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .brand-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--brand-accent-color);
        }

        .brand-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--brand-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--brand-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: brand-pulse 3s ease-in-out infinite;
        }

        .brand-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes brand-pulse {

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
            .brand-hero-content h1 {
                font-size: 2.5rem;
            }

            .brand-hero-content p {
                font-size: 1.2rem;
            }

            .brand-content-block {
                padding: 25px;
            }

            .brand-heading {
                font-size: 1.75rem;
            }

            .brand-text {
                font-size: 1.05rem;
            }

            .brand-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .brand-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .brand-hero-content h1 {
                font-size: 3rem;
            }

            .brand-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .brand-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .brand-content-block img {
                max-width: 550px;
            }

            .brand-data-display,
            .brand-metrics-display,
            .brand-video-section,
            .brand-stats-contact {
                flex-direction: row;
            }

            .brand-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .brand-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .brand-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .brand-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .brand-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .brand-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .brand-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .brand-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .brand-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .brand-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .brand-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="brand-preloader">
        <div class="brand-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="brand-hero-section" aria-label="Digital Marketing Hero">
        <div class="brand-hero-content">
            <h1>Elevate Your Brand with Digital Marketing</h1>
            <p>Boost your online presence with Jaikvik Technology's Digital Marketing Solutions</p>
            <a href="#digital-marketing-overview" class="brand-expand-btn" role="button" aria-label="Explore Digital Marketing Services">Explore Now</a>
        </div>
    </section>

    <div class="brand-main-content">
        <div class="brand-text-section">
            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">What Is Digital Marketing?</h2>
                    <p class="brand-text">
                        Digital Marketing encompasses strategies to promote your brand online, driving traffic, engagement, and conversions. It includes Social Media Marketing, PPC, Meta Ads, YouTube Ads, and Brand Promotion to enhance your online presence.<br>
                        At Jaikvik Technology, we offer tailored digital marketing solutions to meet your business goals. Our strategies leverage data-driven insights to maximize ROI and brand visibility.<br>
                        Our approach aligns with the latest trends, ensuring long-term success in a competitive digital landscape.<span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <br>We combine audience targeting, creative campaigns, and performance analytics to elevate your brand. Our team uses tools like Google Ads and social media analytics to optimize campaigns and achieve measurable results.<br>
                            For example, a retail client saw a 60% increase in online sales through our integrated digital marketing campaigns, while a startup gained 10,000 social media followers in three months.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="0" aria-label="Toggle Digital Marketing Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/corporate-management-strategy-solution-branding-concept_53876-167088.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Digital Marketing Overview">
            </div>

            <div class="brand-content-block">
                <img src="https://img.freepik.com/free-photo/digital-marketing-with-icons-business-people_53876-94833.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Social Media Marketing">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Social Media Marketing: Engaging Audiences</h2>
                    <p class="brand-text">
                        Social Media Marketing involves creating and sharing content on platforms like Instagram, Facebook, and Twitter to engage audiences and build brand loyalty. It includes:<br>
                        <strong>Content Creation:</strong> Crafting visually appealing posts and videos.<br>
                        <strong>Audience Targeting:</strong> Reaching the right demographics with tailored campaigns.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Social Analytics:</strong> Tracking engagement metrics to refine strategies.<br>
                            Jaikvik Technology’s social media services drive engagement, with clients seeing up to 50% growth in follower interactions after implementing our content strategies.<br>
                            For instance, a restaurant chain increased foot traffic by 20% through targeted Instagram campaigns and influencer collaborations.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="1" aria-label="Toggle Social Media Marketing Description">Read More</button>
                </div>
            </div>

            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">PPC: Driving Instant Traffic</h2>
                    <p class="brand-text">
                        Pay-Per-Click (PPC) advertising delivers instant traffic through targeted ads on platforms like Google Ads. Key elements include:<br>
                        <strong>Keyword Targeting:</strong> Bidding on relevant search terms to attract clicks.<br>
                        <strong>Ad Optimization:</strong> Creating compelling ad copy and visuals.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Budget Management:</strong> Maximizing ROI with cost-effective campaigns.<br>
                            Jaikvik Technology’s PPC services ensure high click-through rates, with clients achieving a 30% increase in conversions within weeks of campaign launches.<br>
                            For example, an e-commerce store reduced cost-per-click by 25% while doubling sales through our optimized PPC campaigns.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="2" aria-label="Toggle PPC Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/map-lying-wooden-table_53876-105723.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="PPC Advertising">
            </div>

            <div class="brand-content-block">
                <img src="https://img.freepik.com/free-vector/marketing-consulting-concept-illustration_114360-9027.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Meta Ads">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Meta Ads: Precision Targeting</h2>
                    <p class="brand-text">
                        Meta Ads leverage Facebook and Instagram’s vast user base for precise audience targeting. Key features include:<br>
                        <strong>Demographic Targeting:</strong> Reaching specific age groups, interests, and locations.<br>
                        <strong>Ad Formats:</strong> Using carousel ads, stories, and videos for engagement.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Retargeting:</strong> Re-engaging users who visited your site or interacted with your brand.<br>
                            Jaikvik Technology’s Meta Ads campaigns boost conversions, with clients reporting a 40% increase in leads through targeted ad funnels.<br>
                            For instance, a fitness brand saw a 35% rise in sign-ups after running Meta Ads with our optimized audience targeting.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="3" aria-label="Toggle Meta Ads Description">Read More</button>
                </div>
            </div>

            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">YouTube Ads: Captivating Video Campaigns</h2>
                    <p class="brand-text">
                        YouTube Ads engage audiences through video content on the world’s largest video platform. Key strategies include:<br>
                        <strong>Skippable Ads:</strong> Creating compelling 5-second intros to hook viewers.<br>
                        <strong>Targeting Options:</strong> Reaching audiences based on interests and viewing habits.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Analytics Tracking:</strong> Measuring views, clicks, and conversions to optimize campaigns.<br>
                            Jaikvik Technology’s YouTube Ads services drive brand awareness, with clients achieving a 50% increase in video engagement after our campaigns.<br>
                            For example, a tech startup gained 100,000 views on their product launch video through our targeted YouTube Ads.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="4" aria-label="Toggle YouTube Ads Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-vector/marketing-consulting-concept-illustration_114360-9027.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="YouTube Ads">
            </div>

            <div class="brand-content-block">
                <img src="https://img.freepik.com/free-vector/mobile-marketing-isometric-style_23-2148896785.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Brand Promotion">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Brand Promotion: Building Identity</h2>
                    <p class="brand-text">
                        Brand Promotion creates a strong, recognizable identity through strategic campaigns. Key elements include:<br>
                        <strong>Storytelling:</strong> Crafting narratives that resonate with your audience.<br>
                        <strong>Multi-Channel Campaigns:</strong> Promoting across social media, email, and influencers.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Consistency:</strong> Maintaining cohesive visuals and messaging across platforms.<br>
                            Jaikvik Technology’s brand promotion services enhance visibility, with clients seeing a 45% increase in brand recall after our campaigns.<br>
                            For instance, a fashion brand doubled its online engagement through our integrated brand promotion strategies.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="5" aria-label="Toggle Brand Promotion Description">Read More</button>
                </div>
            </div>
        </div>

        <section class="brand-integration-visual">
            <h2 class="brand-heading">Digital Marketing Integration</h2>
            <div class="brand-visual-container">
                <div class="brand-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="brand-core-circle">Digital Marketing</div>
                    <div class="brand-visual-label" style="top: 8%; left: 50%; transform: translateX(-50%);">Social Media</div>
                    <div class="brand-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">PPC Campaigns</div>
                    <div class="brand-visual-label" style="top: 50%; left: 4%; transform: translateY(-50%);">Meta Ads</div>
                    <div class="brand-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">YouTube Ads</div>
                    <div class="brand-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Brand Promotion</div>
                    <div class="brand-visual-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Audience Targeting</div>
                    <div class="brand-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Content Creation</div>
                    <div class="brand-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">Analytics</div>
                    <div class="brand-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Ad Optimization</div>
                </div>
            </div>
        </section>

        <?php include 'digital-market-reacrch.php' ?>

        <section class="brand-stats-contact">
            <div class="brand-stats-panel">
                <h2 class="brand-heading">Rising Numbers, Building Confidence</h2>
                <div class="brand-stats-container">
                    <div class="brand-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>2500+</h3>
                        <p>Campaigns Launched</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="brand-certifications-list">
                    <div>
                        <p class="brand-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="brand-text">Google Ads Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="brand-contact-panel">
                <h2 class="brand-heading">Let's Discuss Now</h2>
                <p class="brand-text">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="brand-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="brand-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="brand-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="brand-checkbox-options">
                        <label><input type="checkbox" name="service" value="web-design" aria-label="Web Design / Development"> Web Design / Development</label>
                        <label><input type="checkbox" name="service" value="seo" aria-label="Search Engine Optimization"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox" name="service" value="ecommerce" aria-label="eCommerce"> eCommerce</label>
                        <label><input type="checkbox" name="service" value="mobile-app" aria-label="Mobile App"> Mobile App</label>
                        <label><input type="checkbox" name="service" value="brand-promotion" aria-label="Brand Promotion"> Brand Promotion</label>
                        <label><input type="checkbox" name="service" value="ppc" aria-label="Pay Per Click"> Pay Per Click (PPC)</label>
                        <label><input type="checkbox" name="service" value="content" aria-label="Content Writing"> Content Writing</label>
                        <label><input type="checkbox" name="service" value="smo" aria-label="Social Media"> Social Media (SMO)</label>
                        <label><input type="checkbox" name="service" value="hosting" aria-label="Web Hosting / Maintenance"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="brand-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="brand-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="brand-submit-btn" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.brand-preloader');
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
        document.querySelectorAll('.brand-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.brand-expand-content');
                const ellipsis = button.parentElement.querySelector('.brand-ellipsis');
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
            const elements = document.querySelectorAll('.brand-content-block, .brand-data-display, .brand-highlight-section, .brand-product-grid, .brand-metrics-display, .brand-video-section, .brand-questions-section, .brand-navigation-links, .brand-research-section, .brand-business-guide, .brand-stats-contact, .brand-integration-visual, .brand-stat-card, .brand-heading');
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
            const productItems = document.querySelectorAll('.brand-product-item');
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