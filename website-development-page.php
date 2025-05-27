<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE DEVELOPMENT - A Comprehensive Guide to Website Development</title>
    <meta name="description" content="Explore a comprehensive guide to website development at Jaikvik Technology. Learn how custom websites enhance digital presence, user interaction, and business growth with tailored design and functionality.">
    <meta name="keywords" content="Website Development, Custom Websites, Jaikvik Technology, Web Design, Digital Presence">
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
            --web-primary-color: #ffffff;
            /* Text color: White */
            --web-secondary-color: #ffffff;
            /* Secondary text color: White */
            --web-accent-color: #ff0000;
            /* Button color: Red */
            --web-light-gray: #1a1a1a;
            /* Section background: Dark Grey */
            --web-medium-gray: #ffffff;
            /* Text color for readability: White */
            --web-dark-gray: #000000;
            /* Main background: Black */
            --web-highlight-color: #1a1a1a;
            /* Highlight: Dark Grey */
        }

        body {
            color: var(--web-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--web-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .web-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--web-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .web-preloader .web-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--web-light-gray);
            border-top: 6px solid var(--web-accent-color);
            border-radius: 50%;
            animation: web-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes web-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .web-hero-section {
            position: relative;
            background: url('https://img.freepik.com/free-vector/website-development-banner-computer-with-constructor-tools_80328-113.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--web-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--web-light-gray);
        }

        .web-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .web-hero-content {
            position: relative;
            z-index: 2;
            animation: web-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .web-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--web-accent-color);
            animation: web-typing 4s steps(50, end), web-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--web-primary-color);
        }

        .web-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: web-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--web-primary-color);
        }

        @keyframes web-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes web-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes web-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes web-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .web-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--web-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .web-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--web-accent-color);
            transition: width 0.7s ease-out;
        }

        .web-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-heading.visible::after {
            width: 100%;
        }

        .web-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--web-light-gray);
            animation: web-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes web-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .web-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--web-dark-gray);
        }

        .web-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--web-medium-gray);
            font-weight: 300;
        }

        .web-text-section {
            margin: 40px 0;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .web-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--web-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .web-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .web-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .web-block-content {
            flex: 1;
        }

        .web-expand-btn {
            background: var(--web-accent-color);
            color: var(--web-primary-color);
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

        .web-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .web-expand-btn:hover {
            background: #cc0000;
            /* Slightly darker red for hover */
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .web-expand-btn:hover::before {
            left: 100%;
        }

        .web-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .web-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-spreadsheet-view,
        .web-info-block {
            flex: 1;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--web-highlight-color);
        }

        .web-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .web-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .web-highlight-section {
            background: var(--web-light-gray);
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
            border: 1px solid var(--web-highlight-color);
        }

        .web-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .web-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .web-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .web-product-grid.visible {
            opacity: 1;
        }

        .web-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .web-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .web-product-item:hover .web-product-item-inner {
            transform: rotateY(180deg);
        }

        .web-product-item-front,
        .web-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .web-product-item-back {
            background: var(--web-light-gray);
            color: var(--web-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .web-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .web-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .web-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--web-medium-gray);
            padding: 0 10px;
        }

        .web-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .web-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-data-tables,
        .web-visual-charts {
            flex: 1;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--web-highlight-color);
        }

        .web-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--web-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .web-table,
        .web-table th,
        .web-table td {
            border: 1px solid var(--web-highlight-color);
        }

        .web-table th,
        .web-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .web-table th {
            background: var(--web-light-gray);
            color: var(--web-primary-color);
        }

        .web-table tr:nth-child(even) {
            background-color: var(--web-highlight-color);
        }

        .web-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .web-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-video-player,
        .web-video-info {
            flex: 1;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--web-highlight-color);
        }

        .web-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .web-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .web-questions-section {
            margin: 30px 0;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--web-highlight-color);
        }

        .web-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--web-highlight-color);
            padding-bottom: 12px;
        }

        .web-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--web-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .web-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .web-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .web-questions-section summary:hover {
            color: var(--web-accent-color);
        }

        .web-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: web-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--web-medium-gray);
        }

        @keyframes web-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .web-navigation-links,
        .web-research-section {
            margin: 30px 0;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--web-highlight-color);
        }

        .web-navigation-links.visible,
        .web-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-nav-link {
            color: var(--web-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .web-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--web-accent-color);
            transition: width 0.4s ease;
        }

        .web-nav-link:hover {
            color: var(--web-accent-color);
        }

        .web-nav-link:hover::after {
            width: 100%;
        }

        .web-business-guide {
            margin: 30px 0;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--web-highlight-color);
        }

        .web-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-guide-btn {
            background: var(--web-accent-color);
            color: var(--web-primary-color);
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

        .web-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, emetery, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .web-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .web-guide-btn:hover::before {
            left: 100%;
        }

        .web-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--web-highlight-color);
        }

        .web-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-stats-panel,
        .web-contact-panel {
            flex: 1;
        }

        .web-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .web-stat-card {
            background: var(--web-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--web-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .web-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--web-accent-color);
        }

        .web-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--web-primary-color);
            margin: 0;
        }

        .web-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--web-medium-gray);
            margin: 8px 0 0;
        }

        .web-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .web-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--web-medium-gray);
            text-align: center;
        }

        .web-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .web-contact-input,
        .web-contact-textarea {
            padding: 10px;
            border: 1px solid var(--web-highlight-color);
            border-radius: 6px;
            background: var(--web-light-gray);
            color: var(--web-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .web-contact-input:hover,
        .web-contact-textarea:hover {
            border-color: var(--web-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .web-contact-input:focus,
        .web-contact-textarea:focus {
            outline: none;
            border-color: var(--web-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .web-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .web-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .web-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--web-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .web-checkbox-options label:hover {
            color: var(--web-primary-color);
        }

        .web-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--web-medium-gray);
            margin: 8px 0;
        }

        .web-submit-btn {
            background: var(--web-accent-color);
            color: var(--web-primary-color);
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

        .web-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .web-submit-btn:hover {
            background: #cc0000;
        }

        .web-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .web-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--web-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .web-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .web-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--web-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--web-highlight-color);
        }

        .web-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--web-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--web-accent-color);
        }

        .web-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .web-visual-diagram circle {
            fill: none;
            stroke: var(--web-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: web-dash 6s linear infinite;
        }

        @keyframes web-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .web-visual-label {
            position: absolute;
            background: var(--web-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--web-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--web-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .web-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--web-accent-color);
        }

        .web-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--web-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--web-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: web-pulse 3s ease-in-out infinite;
        }

        .web-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes web-pulse {

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
            .web-hero-content h1 {
                font-size: 2.5rem;
            }

            .web-hero-content p {
                font-size: 1.2rem;
            }

            .web-content-block {
                padding: 25px;
            }

            .web-heading {
                font-size: 1.75rem;
            }

            .web-text {
                font-size: 1.05rem;
            }

            .web-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .web-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .web-hero-content h1 {
                font-size: 3rem;
            }

            .web-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .web-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .web-content-block img {
                max-width: 550px;
            }

            .web-data-display,
            .web-metrics-display,
            .web-video-section,
            .web-stats-contact {
                flex-direction: row;
            }

            .web-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .web-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .web-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .web-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .web-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .web-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .web-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .web-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .web-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .web-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .web-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="web-preloader">
        <div class="web-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="web-hero-section" aria-label="Web Solutions Hero">
        <div class="web-hero-content">
            <h1>Empower Your Business Online</h1>
            <p>Build stunning e-commerce, corporate websites, WooCommerce stores, and online portals with Jaikvik Technology</p>
            <a href="#web-overview" class="web-expand-btn" role="button" aria-label="Explore Web Solutions">Explore Now</a>
        </div>
    </section>

    <div class="web-main-content">
        <div class="web-text-section">
            <div class="web-content-block">
                <div class="web-block-content">
                    <h2 class="web-heading">What Are Web Solutions?</h2>
                    <p class="web-text">
                        Web solutions encompass a range of platforms and tools designed to establish and enhance a business's online presence. These include e-commerce websites, corporate websites, WooCommerce stores, and online portals, each tailored to meet specific business needs.<br>
                        E-commerce websites enable businesses to sell products and services online, offering features like product catalogs, secure payment gateways, and customer management systems. Corporate websites serve as digital storefronts for businesses, showcasing their brand, services, and values to build trust and credibility. WooCommerce, a powerful WordPress plugin, transforms websites into fully functional online stores with customizable features. Online portals act as centralized platforms for users to access information, services, or collaborate, such as customer portals or employee intranets.<br>
                        At Jaikvik Technology, our web solutions are designed to be scalable, secure, and user-friendly, ensuring seamless integration with existing systems and delivering exceptional user experiences.<span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <br>Our solutions empower businesses to reach global audiences, streamline operations, and drive growth. Whether you're a retailer launching an e-commerce store, a corporation building a professional website, or an organization creating a custom portal, our team ensures your digital presence aligns with your business goals. For instance, an e-commerce platform can reduce cart abandonment by 20% with personalized recommendations, while a corporate website can increase lead generation by 30% through optimized design and SEO.<br>
                            In the digital era, a robust online presence is critical for success. Our web solutions combine cutting-edge technology, responsive design, and strategic insights to help businesses stand out in competitive markets. From startups to enterprises, we deliver tailored solutions that enhance brand visibility and customer engagement.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="0" aria-label="Toggle Web Solutions Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/website-development-links-seo-webinar-cyberspace-concept_53876-120953.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Web Solutions">
            </div>

            <div class="web-content-block">
                <img src="https://img.freepik.com/premium-photo/website-design-software-provide-snugly-template-online-retail-business_31965-514820.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Web Features">
                <div class="web-block-content">
                    <h2 class="web-heading">What Do Web Solutions Offer?</h2>
                    <p class="web-text">
                        Web solutions provide businesses with the tools to create, manage, and optimize their online presence. Here's an overview of their key functionalities:<br>
                        <strong>E-commerce Functionality</strong><br>
                        E-commerce websites and WooCommerce stores offer product management, secure checkout processes, inventory tracking, and customer account management, enabling businesses to sell efficiently online.<br>
                        <strong>Corporate Branding</strong><br>
                        Corporate websites focus on brand storytelling, showcasing company values, services, and achievements to build credibility and attract clients or partners.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>Online Portals</strong><br>
                            Portals provide centralized access to information or services, such as customer support portals, employee intranets, or community platforms, improving collaboration and user engagement.<br>
                            <strong>SEO and Analytics</strong><br>
                            Built-in SEO tools and analytics dashboards help businesses optimize content, track visitor behavior, and improve search engine rankings.<br>
                            <strong>Responsive Design</strong><br>
                            All our web solutions are mobile-friendly, ensuring seamless performance across devices, which is critical as 60% of web traffic comes from mobile users.<br>
                            Jaikvik Technology's web solutions also include integrations with payment gateways (e.g., Stripe, PayPal), CRM systems, and marketing tools like Mailchimp. Features like AI-driven product recommendations, live chat support, and automated workflows enhance user experience and operational efficiency.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="1" aria-label="Toggle Web Functionality">Read More</button>
                </div>
            </div>

            <div class="web-content-block">
                <div class="web-block-content">
                    <h2 class="web-heading">Why Choose Web Solutions?</h2>
                    <p class="web-text">
                        Web solutions are essential for businesses aiming to thrive in the digital landscape:<br>
                        <strong>Global Reach:</strong> E-commerce and corporate websites allow businesses to connect with customers worldwide, breaking geographical barriers.<br>
                        <strong>Scalability:</strong> From small WooCommerce stores to complex online portals, our solutions grow with your business.<br>
                        <strong>Enhanced User Experience:</strong> Responsive designs and intuitive interfaces ensure customers enjoy seamless interactions.<br>
                        <strong>Data-Driven Insights:</strong> Analytics tools provide valuable data on user behavior, helping businesses optimize strategies.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>Cost Efficiency:</strong> Automating processes like inventory management or customer support reduces operational costs.<br>
                            <strong>Core Components of Web Solutions</strong><br>
                            <strong>Content Management:</strong> Easy-to-use CMS platforms like WordPress allow businesses to update content without technical expertise.<br>
                            <strong>E-commerce Tools:</strong> Features like shopping carts, discount codes, and order tracking enhance online selling.<br>
                            <strong>Security:</strong> SSL certificates, secure payment gateways, and GDPR compliance protect user data.<br>
                            <strong>Integration:</strong> Connect with CRM, ERP, or marketing tools for streamlined operations.<br>
                            Jaikvik Technology's web solutions offer robust security, 24/7 support, and regular updates to keep your platform competitive. Businesses using our e-commerce solutions have seen up to 40% sales growth, while corporate websites have boosted lead generation by 25% through optimized UX and SEO.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="2" aria-label="Toggle Web Benefits">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/3d-rendering-website-hosting-concept_23-2149484783.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Web Benefits">
            </div>

            <div class="web-content-block">
                <img src="https://img.freepik.com/premium-vector/web-development-programmers-landing-page_138260-18.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Web Use Cases">
                <div class="web-block-content">
                    <h2 class="web-heading">Web Solutions for Different Industries</h2>
                    <p class="web-text">
                        Web solutions are versatile, serving various industries with tailored functionalities:<br>
                        <strong>1. Retail and E-commerce</strong><br>
                        ● E-commerce websites and WooCommerce stores enable retailers to manage products, process payments, and offer personalized shopping experiences.<br>
                        ● Features like abandoned cart recovery and loyalty programs boost sales.<br>
                        <strong>2. Corporate Sector</strong><br>
                        ● Corporate websites showcase company profiles, services, and case studies, enhancing brand credibility and lead generation.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>3. Education</strong><br>
                            ● Online portals provide students with access to course materials, schedules, and communication tools, streamlining academic processes.<br>
                            <strong>4. Healthcare</strong><br>
                            ● Portals allow patients to book appointments, access medical records, and communicate with providers, improving care delivery.<br>
                            <strong>5. Real Estate</strong><br>
                            ● Corporate websites and portals display property listings, virtual tours, and client inquiry forms, simplifying sales processes.<br>
                            <strong>6. Nonprofits</strong><br>
                            ● Websites and portals facilitate fundraising, volunteer management, and donor engagement, amplifying outreach efforts.<br>
                            <strong>7. Hospitality</strong><br>
                            ● E-commerce platforms and portals manage bookings, guest preferences, and loyalty programs, enhancing customer experiences.<br>
                            Jaikvik Technology's web solutions are customized to meet industry-specific needs. For example, a retail e-commerce store reduced cart abandonment by 25% with our automated email campaigns, while a healthcare portal cut appointment no-shows by 20% through SMS reminders.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="3" aria-label="Toggle Web Use Cases">Read More</button>
                </div>
            </div>

            <!-- E-commerce Section -->
            <div class="web-content-block" id="web-ecommerce">
                <div class="web-block-content">
                    <h2 class="web-heading">E-commerce Websites</h2>
                    <p class="web-text">
                        E-commerce websites are powerful platforms that enable businesses to sell products and services online, reaching customers globally. These websites are equipped with essential features to streamline online selling:<br>
                        <strong>Key Features:</strong><br>
                        ● <strong>Product Management:</strong> Easily manage product listings, categories, and variations.<br>
                        ● <strong>Secure Payments:</strong> Integration with trusted payment gateways like Stripe and PayPal ensures safe transactions.<br>
                        ● <strong>Customer Accounts:</strong> Allow customers to create accounts, track orders, and save preferences.<br>
                        ● <strong>Cart and Checkout:</strong> Optimized checkout processes reduce cart abandonment.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>Benefits:</strong><br>
                            ● <strong>Global Reach:</strong> Sell to customers worldwide without physical store limitations.<br>
                            ● <strong>Personalization:</strong> AI-driven recommendations increase sales by up to 15%.<br>
                            ● <strong>Scalability:</strong> Handle growing product catalogs and traffic with ease.<br>
                            ● <strong>Analytics:</strong> Track sales, customer behavior, and inventory in real-time.<br>
                            Jaikvik Technology builds e-commerce websites with responsive designs, SEO optimization, and integrations with marketing tools like Mailchimp. Our clients have reported a 30% increase in online sales within six months of launching their e-commerce platforms.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="4" aria-label="Toggle E-commerce Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-vector/web-development-flat-landing-page-creative-team-designers-developers-work-together-illustration-full-stack-development-software-engineering-web-page-composition-with-people-characters_9209-3545.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="E-commerce Websites">
            </div>

            <!-- WooCommerce Section -->
            <div class="web-content-block" id="web-woocommerce">
                <img src="https://img.freepik.com/free-vector/banner-written-great-your-website-online-courses_81522-4532.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="WooCommerce Stores">
                <div class="web-block-content">
                    <h2 class="web-heading">WooCommerce Stores</h2>
                    <p class="web-text">
                        WooCommerce, a WordPress plugin, transforms websites into fully functional online stores. It’s ideal for small to medium-sized businesses due to its flexibility and affordability.<br>
                        <strong>Key Features:</strong><br>
                        ● <strong>Customizable Stores:</strong> Tailor your store’s design and functionality with thousands of themes and plugins.<br>
                        ● <strong>Inventory Management:</strong> Track stock levels and automate restocking alerts.<br>
                        ● <strong>Payment Flexibility:</strong> Support for multiple payment methods, including digital wallets.<br>
                        ● <strong>WordPress Integration:</strong> Seamlessly manage content and sales in one platform.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>Benefits:</strong><br>
                            ● <strong>Cost-Effective:</strong> Lower setup costs compared to custom e-commerce platforms.<br>
                            ● <strong>SEO-Friendly:</strong> Leverage WordPress’s SEO capabilities to rank higher on search engines.<br>
                            ● <strong>Scalability:</strong> Grow from a small store to a large enterprise with ease.<br>
                            ● <strong>Community Support:</strong> Access a vast ecosystem of plugins and developer support.<br>
                            Jaikvik Technology’s WooCommerce solutions include mobile-friendly designs and integrations with tools like Google Analytics and Facebook Ads. Our clients have seen a 25% boost in conversions after optimizing their WooCommerce stores.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="5" aria-label="Toggle WooCommerce Description">Read More</button>
                </div>
            </div>

            <!-- Corporate Website Section -->
            <div class="web-content-block" id="web-corporate">
                <div class="web-block-content">
                    <h2 class="web-heading">Corporate Websites</h2>
                    <p class="web-text">
                        Corporate websites serve as the digital face of a business, showcasing its brand, services, and values. They are designed to build trust, attract clients, and generate leads.<br>
                        <strong>Key Features:</strong><br>
                        ● <strong>Brand Storytelling:</strong> Highlight your company’s mission, vision, and achievements.<br>
                        ● <strong>Lead Generation:</strong> Contact forms, CTAs, and live chat drive customer inquiries.<br>
                        ● <strong>Portfolio Showcase:</strong> Display case studies, projects, or client testimonials.<br>
                        ● <strong>SEO Optimization:</strong> Improve visibility on search engines.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>Benefits:</strong><br>
                            ● <strong>Credibility:</strong> A professional website enhances trust among clients and partners.<br>
                            ● <strong>Lead Growth:</strong> Optimized designs can increase leads by up to 30%.<br>
                            ● <strong>Global Presence:</strong> Reach stakeholders worldwide with a polished online presence.<br>
                            ● <strong>Analytics:</strong> Monitor visitor behavior to refine marketing strategies.<br>
                            Jaikvik Technology creates corporate websites with responsive layouts, fast load times, and integrations with CRM systems like Salesforce. Our corporate clients have reported a 20% increase in client inquiries after launching their websites.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="6" aria-label="Toggle Corporate Websites Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-vector/girl-boy-with-social-profile-message_24877-53922.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Corporate Websites">
            </div>

            <!-- Online Portal Section -->
            <div class="web-content-block" id="web-portal">
                <img src="https://img.freepik.com/free-vector/web-design-background_1300-39.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Online Portals">
                <div class="web-block-content">
                    <h2 class="web-heading">Online Portals</h2>
                    <p class="web-text">
                        Online portals are centralized platforms that provide users with access to information, services, or collaboration tools. They are ideal for businesses, educational institutions, and organizations.<br>
                        <strong>Key Features:</strong><br>
                        ● <strong>User Management:</strong> Role-based access for admins, employees, or customers.<br>
                        ● <strong>Collaboration Tools:</strong> Features like forums, document sharing, and messaging.<br>
                        ● <strong>Integration:</strong> Connect with existing systems like ERP or CRM.<br>
                        ● <strong>Security:</strong> Robust authentication and data encryption.<br><span class="web-ellipsis">...</span><span class="web-expand-content" style="display: none;">
                            <strong>Benefits:</strong><br>
                            ● <strong>Efficiency:</strong> Streamline processes like customer support or employee workflows.<br>
                            ● <strong>Engagement:</strong> Centralized platforms boost user interaction by 35%.<br>
                            ● <strong>Scalability:</strong> Support thousands of users without performance issues.<br>
                            ● <strong>Customization:</strong> Tailor portals to specific industry needs, such as healthcare or education.<br>
                            Jaikvik Technology’s online portals are built with user-friendly interfaces and integrations with tools like Google Workspace. Our portals have helped organizations reduce operational costs by 15% through automation.
                        </span>
                    </p>
                    <button class="web-expand-btn" data-section="7" aria-label="Toggle Online Portals Description">Read More</button>
                </div>
            </div>
        </div>

        <section class="web-integration-visual">
            <h2 class="web-heading">Web Integration Overview</h2>
            <div class="web-visual-container">
                <div class="web-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="web-core-circle">Web Integration</div>
                    <div class="web-visual-label" style="top: 8%; left: 50%; transform: translateX(-50%);">Payment Gateways</div>
                    <div class="web-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">CRM Integration</div>
                    <div class="web-visual-label" style="top: 50%; left: 4%; transform: translateY(-50%);">SEO Tools</div>
                    <div class="web-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">Analytics</div>
                    <div class="web-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Marketing Automation</div>
                    <div class="web-visual-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Live Chat</div>
                    <div class="web-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Social Media</div>
                    <div class="web-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">ERP Systems</div>
                    <div class="web-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Email Marketing</div>
                </div>
            </div>
        </section>


        <?php include 'web-dev-industery-reserch.php' ?>


        <section class="web-stats-contact">
            <div class="web-stats-panel">
                <h2 class="web-heading">Rising Numbers, Building Confidence</h2>
                <div class="web-stats-container">
                    <div class="web-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="web-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="web-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="web-stat-card">
                        <h3>2500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="web-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="web-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="web-certifications-list">
                    <div>
                        <p class="web-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="web-text">Google Ads Creative Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="web-contact-panel">
                <h2 class="web-heading">Let's Discuss Now</h2>
                <p class="web-text">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="web-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="web-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="web-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="web-checkbox-options">
                        <label><input type="checkbox" name="service" value="web-design" aria-label="Web Design / Development"> Web Design / Development</label>
                        <label><input type="checkbox" name="service" value="seo" aria-label="Search Engine Optimization"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox" name="service" value="ecommerce" aria-label="eCommerce"> eCommerce</label>
                        <label><input type="checkbox" name="service" value="mobile-app" aria-label="Mobile App"> Mobile App</label>
                        <label><input type="checkbox" name="service" value="web-solutions" aria-label="Web Solutions"> Web Solutions</label>
                        <label><input type="checkbox" name="service" value="ppc" aria-label="Pay Per Click"> Pay Per Click (PPC)</label>
                        <label><input type="checkbox" name="service" value="content" aria-label="Content Writing"> Content Writing</label>
                        <label><input type="checkbox" name="service" value="smo" aria-label="Social Media"> Social Media (SMO)</label>
                        <label><input type="checkbox" name="service" value="hosting" aria-label="Web Hosting / Maintenance"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="web-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="web-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="web-submit-btn" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.web-preloader');
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
        document.querySelectorAll('.web-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.web-expand-content');
                const ellipsis = button.parentElement.querySelector('.web-ellipsis');
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
            const elements = document.querySelectorAll('.web-content-block, .web-data-display, .web-highlight-section, .web-product-grid, .web-metrics-display, .web-video-section, .web-questions-section, .web-navigation-links, .web-research-section, .web-business-guide, .web-stats-contact, .web-integration-visual, .web-stat-card, .web-heading');
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
            const productItems = document.querySelectorAll('.web-product-item');
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