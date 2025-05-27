<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCIAL MEDIA MARKETING - Connecting Brands with Audience</title>
    <meta name="description" content="Explore Social Media Marketing at Jaikvik Technology. Connect brands with audiences through strategic content, ads, and engagement to boost visibility, loyalty, and growth in the digital age.">
    <meta name="keywords" content="Social Media Marketing, Brand Engagement, Jaikvik Technology, Digital Marketing, Social Platforms">
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
            --smm-primary-color: #ffffff;
            /* Text color: White */
            --smm-secondary-color: #ffffff;
            /* Secondary text color: White */
            --smm-accent-color: #ff0000;
            /* Button color: Red */
            --smm-light-gray: #1a1a1a;
            /* Section background: Dark Grey */
            --smm-medium-gray: #ffffff;
            /* Text color for readability: White */
            --smm-dark-gray: #000000;
            /* Main background: Black */
            --smm-highlight-color: #1a1a1a;
            /* Highlight: Dark Grey */
        }

        body {
            color: var(--smm-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--smm-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .smm-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--smm-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .smm-preloader .smm-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--smm-light-gray);
            border-top: 6px solid var(--smm-accent-color);
            border-radius: 50%;
            animation: smm-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes smm-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .smm-hero-section {
            position: relative;
            background: url('https://img.freepik.com/free-photo/corporate-management-strategy-solution-branding-concept_53876-167088.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--smm-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--smm-light-gray);
        }

        .smm-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .smm-hero-content {
            position: relative;
            z-index: 2;
            animation: smm-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .smm-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--smm-accent-color);
            animation: smm-typing 4s steps(50, end), smm-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--smm-primary-color);
        }

        .smm-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: smm-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--smm-primary-color);
        }

        @keyframes smm-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes smm-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes smm-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes smm-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .smm-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--smm-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .smm-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--smm-accent-color);
            transition: width 0.7s ease-out;
        }

        .smm-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-heading.visible::after {
            width: 100%;
        }

        .smm-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--smm-light-gray);
            animation: smm-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes smm-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .smm-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--smm-dark-gray);
        }

        .smm-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--smm-medium-gray);
            font-weight: 300;
        }

        .smm-text-section {
            margin: 40px 0;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .smm-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--smm-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .smm-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .smm-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .smm-block-content {
            flex: 1;
        }

        .smm-expand-btn {
            background: var(--smm-accent-color);
            color: var(--smm-primary-color);
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

        .smm-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .smm-expand-btn:hover {
            background: #cc0000;
            /* Slightly darker red for hover */
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .smm-expand-btn:hover::before {
            left: 100%;
        }

        .smm-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .smm-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-spreadsheet-view,
        .smm-info-block {
            flex: 1;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .smm-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .smm-highlight-section {
            background: var(--smm-light-gray);
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
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .smm-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .smm-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .smm-product-grid.visible {
            opacity: 1;
        }

        .smm-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .smm-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .smm-product-item:hover .smm-product-item-inner {
            transform: rotateY(180deg);
        }

        .smm-product-item-front,
        .smm-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .smm-product-item-back {
            background: var(--smm-light-gray);
            color: var(--smm-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .smm-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .smm-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .smm-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--smm-medium-gray);
            padding: 0 10px;
        }

        .smm-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .smm-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-data-tables,
        .smm-visual-charts {
            flex: 1;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--smm-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .smm-table,
        .smm-table th,
        .smm-table td {
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-table th,
        .smm-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .smm-table th {
            background: var(--smm-light-gray);
            color: var(--smm-primary-color);
        }

        .smm-table tr:nth-child(even) {
            background-color: var(--smm-highlight-color);
        }

        .smm-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .smm-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-video-player,
        .smm-video-info {
            flex: 1;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .smm-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .smm-questions-section {
            margin: 30px 0;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--smm-highlight-color);
            padding-bottom: 12px;
        }

        .smm-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--smm-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .smm-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .smm-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .smm-questions-section summary:hover {
            color: var(--smm-accent-color);
        }

        .smm-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: smm-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--smm-medium-gray);
        }

        @keyframes smm-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .smm-navigation-links,
        .smm-research-section {
            margin: 30px 0;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-navigation-links.visible,
        .smm-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-nav-link {
            color: var(--smm-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .smm-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--smm-accent-color);
            transition: width 0.4s ease;
        }

        .smm-nav-link:hover {
            color: var(--smm-accent-color);
        }

        .smm-nav-link:hover::after {
            width: 100%;
        }

        .smm-business-guide {
            margin: 30px 0;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-guide-btn {
            background: var(--smm-accent-color);
            color: var(--smm-primary-color);
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

        .smm-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .smm-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .smm-guide-btn:hover::before {
            left: 100%;
        }

        .smm-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-stats-panel,
        .smm-contact-panel {
            flex: 1;
        }

        .smm-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .smm-stat-card {
            background: var(--smm-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--smm-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .smm-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--smm-accent-color);
        }

        .smm-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--smm-primary-color);
            margin: 0;
        }

        .smm-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--smm-medium-gray);
            margin: 8px 0 0;
        }

        .smm-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .smm-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--smm-medium-gray);
            text-align: center;
        }

        .smm-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .smm-contact-input,
        .smm-contact-textarea {
            padding: 10px;
            border: 1px solid var(--smm-highlight-color);
            border-radius: 6px;
            background: var(--smm-light-gray);
            color: var(--smm-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .smm-contact-input:hover,
        .smm-contact-textarea:hover {
            border-color: var(--smm-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .smm-contact-input:focus,
        .smm-contact-textarea:focus {
            outline: none;
            border-color: var(--smm-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .smm-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .smm-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .smm-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--smm-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .smm-checkbox-options label:hover {
            color: var(--smm-primary-color);
        }

        .smm-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--smm-medium-gray);
            margin: 8px 0;
        }

        .smm-submit-btn {
            background: var(--smm-accent-color);
            color: var(--smm-primary-color);
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

        .smm-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .smm-submit-btn:hover {
            background: #cc0000;
        }

        .smm-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .smm-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--smm-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .smm-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .smm-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--smm-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--smm-highlight-color);
        }

        .smm-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--smm-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--smm-accent-color);
        }

        .smm-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .smm-visual-diagram circle {
            fill: none;
            stroke: var(--smm-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: smm-dash 6s linear infinite;
        }

        @keyframes smm-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .smm-visual-label {
            position: absolute;
            background: var(--smm-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--smm-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--smm-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .smm-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--smm-accent-color);
        }

        .smm-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--smm-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--smm-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: smm-pulse 3s ease-in-out infinite;
        }

        .smm-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes smm-pulse {

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
            .smm-hero-content h1 {
                font-size: 2.5rem;
            }

            .smm-hero-content p {
                font-size: 1.2rem;
            }

            .smm-content-block {
                padding: 25px;
            }

            .smm-heading {
                font-size: 1.75rem;
            }

            .smm-text {
                font-size: 1.05rem;
            }

            .smm-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .smm-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .smm-hero-content h1 {
                font-size: 3rem;
            }

            .smm-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .smm-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .smm-content-block img {
                max-width: 550px;
            }

            .smm-data-display,
            .smm-metrics-display,
            .smm-video-section,
            .smm-stats-contact {
                flex-direction: row;
            }

            .smm-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .smm-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .smm-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .smm-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .smm-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .smm-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .smm-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .smm-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .smm-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .smm-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .smm-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="smm-preloader">
        <div class="smm-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="smm-hero-section" aria-label="Social Media Marketing Hero">
        <div class="smm-hero-content">
            <h1>Boost Your Brand with Social Media Marketing</h1>
            <p>Engage, grow, and convert with Jaikvik Technology</p>
            <a href="#smm-overview" class="smm-expand-btn" role="button" aria-label="Explore Social Media Marketing Solutions">Explore Now</a>
        </div>
    </section>

    <div class="smm-main-content">
        <div class="smm-text-section">
            <div class="smm-content-block">
                <div class="smm-block-content">
                    <h2 class="smm-heading">What Is Social Media Marketing?</h2>
                    <p class="smm-text">
                        Social Media Marketing (SMM) is the use of social media platforms to connect with your audience, build your brand, increase sales, and drive website traffic. It involves creating and sharing content on platforms like Instagram, Facebook, Twitter, LinkedIn, and TikTok to achieve marketing and branding goals.<br>
                        SMM is more than just posting content; it’s about crafting strategic campaigns that resonate with your target audience. By leveraging analytics, targeted ads, and engaging content, businesses can foster meaningful connections with customers. At Jaikvik Technology, our SMM solutions help businesses create impactful social media strategies tailored to their unique needs.<br>
                        Effective SMM includes content creation, audience engagement, influencer partnerships, and performance tracking to ensure campaigns deliver measurable results. Whether you’re a small business or a global brand, SMM is a powerful tool to amplify your online presence and drive growth.<span class="smm-ellipsis">...</span><span class="smm-expand-content" style="display: none;">
                            <br>Jaikvik Technology’s SMM services are designed to maximize your brand’s reach and engagement. We offer customized content calendars, advanced analytics, and platform-specific strategies to ensure your campaigns stand out. From creating viral TikTok videos to managing LinkedIn thought leadership posts, our solutions adapt to your goals, helping you connect with audiences across platforms.<br>
                            In today’s digital age, social media is a critical touchpoint for customer engagement. Businesses using SMM can increase brand awareness by up to 80% and generate 3x more leads compared to traditional marketing, according to industry studies. Our approach combines creativity with data-driven insights to deliver campaigns that not only engage but also convert.
                        </span>
                    </p>
                    <button class="smm-expand-btn" data-section="0" aria-label="Toggle SMM Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/social-media-marketing-concept-marketing-with-applications_23-2150063172.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Social Media Marketing Solutions">
            </div>

            <div class="smm-content-block">
                <img src="https://img.freepik.com/free-photo/medium-shot-men-holding-smartphone_23-2150208243.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="SMM Features">
                <div class="smm-block-content">
                    <h2 class="smm-heading">What Does Social Media Marketing Do?</h2>
                    <p class="smm-text">
                        Social Media Marketing empowers businesses to build stronger relationships with their audience through targeted, engaging content. Here’s how it works:<br>
                        <strong>Content Creation & Curation</strong><br>
                        SMM involves crafting high-quality posts, videos, and stories tailored to each platform’s audience. This ensures your brand’s message is compelling and consistent across channels.<br>
                        <strong>Audience Engagement</strong><br>
                        By responding to comments, messages, and mentions, SMM fosters two-way communication, building trust and loyalty with your followers.<br><span class="smm-ellipsis">...</span><span class="smm-expand-content" style="display: none;">
                            <strong>Targeted Advertising</strong><br>
                            SMM platforms offer advanced ad tools to reach specific demographics, interests, and behaviors, ensuring your campaigns deliver maximum ROI.<br>
                            <strong>Analytics & Insights</strong><br>
                            Track campaign performance with real-time data on reach, engagement, and conversions, allowing you to optimize strategies for better results.<br>
                            <strong>Influencer Collaboration</strong><br>
                            Partner with influencers to amplify your brand’s reach and credibility, tapping into their engaged follower base.<br>
                            Jaikvik Technology’s SMM solutions include tools like automated posting schedules, AI-driven audience insights, and cross-platform integration with tools like Hootsuite, Buffer, and Google Analytics. Our strategies help businesses increase engagement rates by up to 50% and drive measurable growth.
                        </span>
                    </p>
                    <button class="smm-expand-btn" data-section="1" aria-label="Toggle SMM Functionality">Read More</button>
                </div>
            </div>

            <div class="smm-content-block">
                <div class="smm-block-content">
                    <h2 class="smm-heading">Why Should Businesses Use SMM?</h2>
                    <p class="smm-text">
                        Social Media Marketing offers numerous benefits for businesses looking to grow their online presence:<br>
                        <strong>Brand Awareness:</strong> SMM increases visibility by reaching millions of users on platforms where they spend hours daily.<br>
                        <strong>Customer Engagement:</strong> Direct interaction with followers builds stronger relationships and fosters brand loyalty.<br>
                        <strong>Cost-Effective:</strong> Compared to traditional advertising, SMM offers high ROI with targeted campaigns at lower costs.<br>
                        <strong>Data-Driven Insights:</strong> Analytics provide actionable data to refine strategies and improve campaign performance.<br><span class="smm-ellipsis">...</span><span class="smm-expand-content" style="display: none;">
                            <strong>Scalability:</strong> SMM campaigns can be scaled to suit businesses of any size, from startups to enterprises.<br>
                            <strong>Essential Components of SMM</strong><br>
                            A comprehensive SMM strategy includes:<br>
                            <strong>Content Planning</strong><br>
                            Develop content calendars to ensure consistent, high-quality posts aligned with your brand.<br>
                            <strong>Social Listening</strong><br>
                            Monitor conversations and trends to understand audience sentiment and tailor your approach.<br>
                            <strong>Ad Management</strong><br>
                            Create and optimize paid campaigns to reach new audiences and drive conversions.<br>
                            <strong>Engagement Tools</strong><br>
                            Use chatbots, polls, and live streams to interact with followers in real-time.<br>
                            <strong>Analytics Dashboards</strong><br>
                            Track KPIs like engagement rate, click-through rate, and follower growth to measure success.<br>
                            Businesses using Jaikvik Technology’s SMM services benefit from dedicated account managers, 24/7 support, and integration with e-commerce platforms, CRM systems, and email marketing tools. Studies show that businesses with active SMM strategies see a 60% increase in customer retention and a 40% boost in website traffic.
                        </span>
                    </p>
                    <button class="smm-expand-btn" data-section="2" aria-label="Toggle SMM Benefits">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/medium-shot-people-addicted-social-media_23-2149834257.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="SMM Benefits">
            </div>

            <div class="smm-content-block">
                <img src="https://img.freepik.com/free-vector/marketing-concept-illustration_114360-3903.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="SMM Use Cases">
                <div class="smm-block-content">
                    <h2 class="smm-heading">SMM for Different Industries</h2>
                    <p class="smm-text">
                        Social Media Marketing is versatile, offering tailored solutions for various industries:<br>
                        <strong>1. Retail & E-commerce</strong><br>
                        ● SMM drives sales through shoppable posts, targeted ads, and influencer campaigns on platforms like Instagram and Pinterest.<br>
                        ● Businesses use SMM to promote flash sales, build loyalty programs, and engage with customers in real-time.<br>
                        <strong>2. Hospitality</strong><br>
                        ● Hotels and restaurants leverage SMM to showcase experiences, share user-generated content, and promote events on platforms like Facebook and TikTok.<br><span class="smm-ellipsis">...</span><span class="smm-expand-content" style="display: none;">
                            ● Live streams and Stories keep followers engaged with behind-the-scenes content.<br>
                            <strong>3. Real Estate</strong><br>
                            ● Agents use SMM to share virtual tours, promote listings, and engage with clients on LinkedIn and Instagram.<br>
                            ● Targeted ads help reach potential buyers in specific locations.<br>
                            <strong>4. Nonprofits</strong><br>
                            ● Nonprofits use SMM to raise awareness, share impact stories, and drive donations through platforms like Twitter and Facebook.<br>
                            ● Crowdfunding campaigns gain traction through viral content and influencer partnerships.<br>
                            <strong>5. B2B Companies</strong><br>
                            SMM on LinkedIn helps B2B businesses establish thought leadership, generate leads, and nurture long-term client relationships.<br>
                            <strong>6. Education</strong><br>
                            ● Schools and universities use SMM to promote courses, engage with students, and share alumni success stories on YouTube and Instagram.<br>
                            ● Live Q&A sessions attract prospective students.<br>
                            <strong>7. Healthcare</strong><br>
                            ● Clinics use SMM to share health tips, promote wellness programs, and engage with patients on Facebook and Twitter.<br>
                            ● Patient testimonials build trust and credibility.<br>
                            Jaikvik Technology’s SMM solutions are customized for each industry. For example, a retail brand might use our services to increase Instagram sales by 30%, while a nonprofit could boost donations by 25% through targeted Facebook campaigns. Our strategies deliver measurable results across sectors.
                        </span>
                    </p>
                    <button class="smm-expand-btn" data-section="3" aria-label="Toggle SMM Use Cases">Read More</button>
                </div>
            </div>
        </div>

        <section class="smm-integration-visual">
            <h2 class="smm-heading">SMM Integration Overview</h2>
            <div class="smm-visual-container">
                <div class="smm-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="smm-core-circle">Social Media Strategy</div>
                    <div class="smm-visual-label" style="top: 8%; left: 50%; transform: translateX(-50%);">Content Creation</div>
                    <div class="smm-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">Audience Targeting</div>
                    <div class="smm-visual-label" style="top: 50%; left: 4%; transform: translateY(-50%);">Ad Management</div>
                    <div class="smm-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">Engagement Tools</div>
                    <div class="smm-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Analytics Tracking</div>
                    <div class="smm-visual-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Influencer Outreach</div>
                    <div class="smm-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Social Listening</div>
                    <div class="smm-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">Brand Monitoring</div>
                    <div class="smm-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Campaign Automation</div>
                </div>
            </div>
        </section>


        <?php include 'socail-media-reascrch.php' ?>

        <section class="smm-stats-contact">
            <div class="smm-stats-panel">
                <h2 class="smm-heading">Rising Numbers, Building Confidence</h2>
                <div class="smm-stats-container">
                    <div class="smm-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="smm-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="smm-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="smm-stat-card">
                        <h3>2500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="smm-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="smm-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="smm-certifications-list">
                    <div>
                        <p class="smm-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="smm-text">Google Ads Creative Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="smm-contact-panel">
                <h2 class="smm-heading">Let's Discuss Now</h2>
                <p class="smm-text">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="smm-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="smm-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="smm-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="smm-checkbox-options">
                        <label><input type="checkbox" name="service" value="web-design" aria-label="Web Design / Development"> Web Design / Development</label>
                        <label><input type="checkbox" name="service" value="seo" aria-label="Search Engine Optimization"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox" name="service" value="ecommerce" aria-label="eCommerce"> eCommerce</label>
                        <label><input type="checkbox" name="service" value="mobile-app" aria-label="Mobile App"> Mobile App</label>
                        <label><input type="checkbox" name="service" value="smm" aria-label="Social Media Marketing"> Social Media Marketing (SMM)</label>
                        <label><input type="checkbox" name="service" value="ppc" aria-label="Pay Per Click"> Pay Per Click (PPC)</label>
                        <label><input type="checkbox" name="service" value="content" aria-label="Content Writing"> Content Writing</label>
                        <label><input type="checkbox" name="service" value="smo" aria-label="Social Media"> Social Media (SMO)</label>
                        <label><input type="checkbox" name="service" value="hosting" aria-label="Web Hosting / Maintenance"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="smm-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="smm-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="smm-submit-btn" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.smm-preloader');
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
        document.querySelectorAll('.smm-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.smm-expand-content');
                const ellipsis = button.parentElement.querySelector('.smm-ellipsis');
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
            const elements = document.querySelectorAll('.smm-content-block, .smm-data-display, .smm-highlight-section, .smm-product-grid, .smm-metrics-display, .smm-video-section, .smm-questions-section, .smm-navigation-links, .smm-research-section, .smm-business-guide, .smm-stats-contact, .smm-integration-visual, .smm-stat-card, .smm-heading');
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
            const productItems = document.querySelectorAll('.smm-product-item');
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