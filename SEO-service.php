<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOOGLE SEO SERVICES & WEBSITE AUDIT</title>
    <meta name="description" content="Discover Google SEO Services and Website Audit Reports at Jaikvik Technology. Learn strategies for On-Page SEO, Off-Page SEO, and Technical SEO to boost your website’s ranking and performance.">
    <meta name="keywords" content="Google SEO Services, Website Audit, On-Page SEO, Off-Page SEO, Technical SEO, Jaikvik Technology">
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
            background: url('https://img.freepik.com/free-photo/top-view-cloud-with-word-seo_1134-68.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
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
    <section class="brand-hero-section" aria-label="SEO Services Hero">
        <div class="brand-hero-content">
            <h1>Boost Your Rankings with Google SEO Services</h1>
            <p>Optimize your website with Jaikvik Technology's SEO and Audit Solutions</p>
            <a href="#seo-overview" class="brand-expand-btn" role="button" aria-label="Explore SEO Services">Explore Now</a>
        </div>
    </section>

    <div class="brand-main-content">
        <div class="brand-text-section">
            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">What Are Google SEO Services?</h2>
                    <p class="brand-text">
                        Google SEO Services encompass strategies to improve your website’s visibility on search engines, driving organic traffic and enhancing user experience. These services include Website Audit Reports, On-Page SEO, Off-Page SEO, and Technical SEO to ensure your site ranks higher.<br>
                        At Jaikvik Technology, we provide comprehensive SEO solutions tailored to your business needs. Our audits identify performance gaps, while our SEO strategies optimize content, backlinks, and technical aspects to boost rankings.<br>
                        Our approach ensures long-term success by aligning with Google’s algorithms and best practices.<span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <br>We combine keyword research, content optimization, and technical fixes to enhance your site’s authority. Our team uses tools like Google Analytics and Search Console to monitor performance and adapt strategies for maximum ROI.<br>
                            For example, an e-commerce site could see a 50% increase in organic traffic within months through our targeted SEO campaigns, while a local business might improve local search rankings with optimized Google My Business profiles.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="0" aria-label="Toggle SEO Services Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/magnifying-glass-with-seo-concepts_1134-81.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="SEO Services Overview">
            </div>

            <div class="brand-content-block" id="website-audit">
                <img src="https://img.freepik.com/free-photo/seo-website-development-data-network-concept_53876-127578.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Website Audit Report">
                <div class="brand-block-content">
                    <h2 class="brand-heading">What Is a Website Audit Report?</h2>
                    <p class="brand-text">
                        A Website Audit Report is a detailed analysis of your website’s performance, identifying issues affecting SEO, usability, and speed. It covers:<br>
                        <strong>Technical Issues</strong><br>
                        Broken links, slow loading times, and mobile responsiveness.<br>
                        <strong>Content Gaps</strong><br>
                        Missing keywords, duplicate content, and thin pages.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Security Concerns</strong><br>
                            SSL issues, outdated plugins, and vulnerable code.<br>
                            Jaikvik Technology’s audits provide actionable recommendations to fix issues and improve rankings. Our reports include prioritized tasks, such as optimizing meta tags or fixing crawl errors, to enhance your site’s performance.<br>
                            For instance, a client reduced bounce rates by 30% after implementing our audit recommendations, leading to higher engagement and conversions.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="1" aria-label="Toggle Website Audit Description">Read More</button>
                </div>
            </div>

            <div class="brand-content-block" id="on-page-seo">
                <div class="brand-block-content">
                    <h2 class="brand-heading">On-Page SEO: Optimizing Content</h2>
                    <p class="brand-text">
                        On-Page SEO focuses on optimizing individual web pages to rank higher. Key elements include:<br>
                        <strong>Keyword Optimization:</strong> Using relevant keywords in titles, headers, and content.<br>
                        <strong>Content Quality:</strong> Creating engaging, informative content that meets user intent.<br>
                        <strong>Meta Tags:</strong> Crafting compelling meta titles and descriptions.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Image Optimization:</strong> Using alt text and compressed images for faster load times.<br>
                            <strong>Internal Linking:</strong> Connecting related pages to improve navigation and dwell time.<br>
                            Jaikvik Technology’s On-Page SEO services ensure your content is user-friendly and search-engine optimized. Our clients have seen up to a 40% increase in click-through rates after optimizing meta descriptions and headers.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="2" aria-label="Toggle On-Page SEO Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/seo-word-written-computer_192941-1129.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="On-Page SEO">
            </div>

            <div class="brand-content-block" id="off-page-seo">
                <img src="https://img.freepik.com/premium-photo/seo-search-engine-optimization-modish-ecommerce-online-retail-business_31965-63120.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Off-Page SEO">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Off-Page SEO: Building Authority</h2>
                    <p class="brand-text">
                        Off-Page SEO enhances your website’s authority through external factors:<br>
                        <strong>Backlink Building:</strong> Acquiring high-quality backlinks from reputable sites.<br>
                        <strong>Social Signals:</strong> Leveraging social media to boost brand visibility.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Guest Posting:</strong> Publishing content on authoritative blogs to drive traffic.<br>
                            <strong>Local Citations:</strong> Listing your business on directories like Yelp and Google My Business.<br>
                            Jaikvik Technology’s Off-Page SEO strategies focus on ethical link-building and brand mentions, resulting in a 25% increase in domain authority for clients within six months.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="3" aria-label="Toggle Off-Page SEO Description">Read More</button>
                </div>
            </div>

            <div class="brand-content-block" id="technical-seo">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Technical SEO: Enhancing Performance</h2>
                    <p class="brand-text">
                        Technical SEO optimizes your website’s infrastructure for better crawling and indexing:<br>
                        <strong>Site Speed:</strong> Reducing load times with caching and compression.<br>
                        <strong>Mobile Optimization:</strong> Ensuring responsive design for all devices.<br>
                        <strong>XML Sitemaps:</strong> Helping search engines navigate your site.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Schema Markup:</strong> Adding structured data to improve rich snippets.<br>
                            <strong>Security:</strong> Implementing HTTPS and fixing vulnerabilities.<br>
                            Jaikvik Technology’s Technical SEO services improve site performance, with clients reporting a 35% reduction in page load times and higher rankings after fixes.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="4" aria-label="Toggle Technical SEO Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/seo-search-engine-optimization-modish-ecommerce-online-retail-business_31965-46392.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Technical SEO">
            </div>
        </div>

        <?php include 'seo-reasrch.php' ?>
        <?php include 'contact-inner-page.php' ?>


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