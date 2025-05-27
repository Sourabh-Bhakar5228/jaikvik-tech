<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate World News & Insights</title>
    <meta name="description" content="Stay updated with Corporate World News at Jaikvik Insights. Explore trends, mergers, acquisitions, and corporate strategies to stay ahead in the business world.">
    <meta name="keywords" content="Corporate World News, Business Insights, Mergers and Acquisitions, Corporate Strategies, Jaikvik Insights">
    <!-- Favicon Link -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
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
            background: url('https://img.freepik.com/free-photo/crystal-globe-with-stock-information_1150-17697.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
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
            white-space: nowrap;
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
    <section class="brand-hero-section" aria-label="Corporate News Hero">
        <div class="brand-hero-content">
            <h1>Stay Ahead with Corporate World News</h1>
            <p>Discover the latest business trends and insights with Jaikvik Insights</p>
            <a href="#news-overview" class="brand-expand-btn" role="button" aria-label="Explore Corporate News">Explore Now</a>
        </div>
    </section>

    <div class="brand-main-content">
        <div class="brand-text-section">
            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">What Is Corporate World News?</h2>
                    <p class="brand-text">
                        Corporate World News covers the latest developments in the global business landscape, including mergers, acquisitions, leadership changes, and market trends. Jaikvik Insights provides in-depth analysis and updates to keep you informed.<br>
                        Our platform offers detailed reports on corporate strategies, financial performance, and industry shifts. We deliver actionable insights to help businesses and professionals stay competitive.<br>
                        Our coverage aligns with the dynamic corporate environment, ensuring you’re always in the know.<span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <br>We combine expert analysis, market data, and real-time updates to provide a comprehensive view of the corporate world. Our team uses tools like Bloomberg Terminal and Reuters to track performance and deliver insights.<br>
                            For example, a tech firm could leverage our insights to anticipate competitor moves, while a financial analyst might use our reports to inform investment decisions.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="0" aria-label="Toggle Corporate News Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/business-people-working-data-project_53876-41687.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Corporate News Overview">
            </div>

            <div class="brand-content-block">
                <img src="https://img.freepik.com/free-photo/global-business-graph-growth-world-map-concept_53876-21165.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Mergers and Acquisitions">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Mergers and Acquisitions</h2>
                    <p class="brand-text">
                        Mergers and Acquisitions (M&A) shape the corporate landscape by consolidating businesses or expanding market reach. Key aspects include:<br>
                        <strong>Deal Analysis:</strong> Evaluating financial and strategic impacts.<br>
                        <strong>Market Trends:</strong> Tracking industries driving M&A activity.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Regulatory Insights:</strong> Understanding antitrust and compliance issues.<br>
                            Jaikvik Insights provides detailed M&A reports, highlighting opportunities and risks. Our analysis has helped clients navigate deals, with one company achieving a 20% stock increase post-acquisition due to our strategic guidance.<br>
                            We cover sectors like tech, healthcare, and energy, offering data-driven recommendations.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="1" aria-label="Toggle M&A Description">Read More</button>
                </div>
            </div>

            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Corporate Strategies</h2>
                    <p class="brand-text">
                        Corporate Strategies define how businesses achieve growth and competitiveness. Key elements include:<br>
                        <strong>Market Expansion:</strong> Entering new regions or segments.<br>
                        <strong>Innovation:</strong> Investing in R&D for product development.<br>
                        <strong>Sustainability:</strong> Adopting eco-friendly practices.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Talent Management:</strong> Building strong leadership pipelines.<br>
                            Jaikvik Insights analyzes successful strategies, helping clients adapt. For instance, a retail chain increased market share by 15% after implementing our recommended diversification strategy.<br>
                            We provide case studies and benchmarks to guide strategic planning.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="2" aria-label="Toggle Corporate Strategies Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/digital-world-map-hologram-blue-background_1379-900.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Corporate Strategies">
            </div>

            <div class="brand-content-block">
                <img src="https://img.freepik.com/free-photo/cityscape-with-little-planet-effect_1359-245.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Industry Trends">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Industry Trends</h2>
                    <p class="brand-text">
                        Industry Trends highlight shifts shaping the corporate world:<br>
                        <strong>Digital Transformation:</strong> Adopting AI and cloud technologies.<br>
                        <strong>Globalization:</strong> Expanding cross-border operations.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Workforce Dynamics:</strong> Embracing remote and hybrid models.<br>
                            Jaikvik Insights tracks trends across industries, providing forecasts and recommendations. Our reports helped a manufacturing firm pivot to automation, boosting efficiency by 30%.<br>
                            Stay ahead with our insights on emerging markets and technologies.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="3" aria-label="Toggle Industry Trends Description">Read More</button>
                </div>
            </div>

            <div class="brand-content-block">
                <div class="brand-block-content">
                    <h2 class="brand-heading">Financial Performance</h2>
                    <p class="brand-text">
                        Financial Performance metrics reveal a company’s health and growth potential:<br>
                        <strong>Revenue Growth:</strong> Analyzing sales and market share.<br>
                        <strong>Profit Margins:</strong> Assessing cost efficiency.<br>
                        <strong>Stock Performance:</strong> Tracking market confidence.<br><span class="brand-ellipsis">...</span><span class="brand-expand-content" style="display: none;">
                            <strong>Debt Management:</strong> Evaluating leverage and liquidity.<br>
                            Jaikvik Insights offers detailed financial analysis, helping investors and executives make informed decisions. A client improved cash flow by 25% after implementing our cost-optimization strategies.<br>
                            Our reports include comparative analysis and industry benchmarks.
                        </span>
                    </p>
                    <button class="brand-expand-btn" data-section="4" aria-label="Toggle Financial Performance Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/businessman-drawing-graph-transparent-glass-board_23-2147899742.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Financial Performance">
            </div>
        </div>

        <section class="brand-integration-visual">
            <h2 class="brand-heading">Corporate News Integration</h2>
            <div class="brand-visual-container">
                <div class="brand-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="brand-core-circle">Corporate Insights</div>
                    <div class="brand-visual-label" style="top: 8%; left: 50%; transform: translateX(-50%);">Mergers & Acquisitions</div>
                    <div class="brand-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">Corporate Strategies</div>
                    <div class="brand-visual-label" style="top: 50%; left: 4%; transform: translateY(-50%);">Industry Trends</div>
                    <div class="brand-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">Financial Performance</div>
                    <div class="brand-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Market Analysis</div>
                    <div class="brand-visual-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Leadership Changes</div>
                    <div class="brand-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Innovation Trends</div>
                    <div class="brand-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">Regulatory Updates</div>
                    <div class="brand-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Global Expansion</div>
                </div>
            </div>
        </section>

        <section class="brand-data-display">
            <div class="brand-spreadsheet-view">
                <h2 class="brand-heading">Market Performance Data</h2>
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQe8x2y3z4t5u6v7w8x9y0z1a2b3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1u2v3w4x5y6z7a8b9c/pubhtml?widget=true&headers=false" title="Market Performance Data Spreadsheet"></iframe>
            </div>
            <div class="brand-info-block">
                <h2 class="brand-heading">Why Corporate News Matters</h2>
                <p class="brand-text">Corporate News keeps you informed about business dynamics, enabling better decision-making. It covers trends, financials, and strategies to enhance competitiveness.<br>
                    Key benefits include:</p>
                <ul>
                    <li>Strategic market positioning</li>
                    <li>Informed investment decisions</li>
                    <li>Competitive advantage</li>
                    <li>Enhanced business planning</li>
                </ul>
            </div>
        </section>

        <section class="brand-highlight-section">
            <img src="https://img.freepik.com/premium-photo/with-corporate-emblem-aipowered-brain-future-business-goals-media-sign-media-s_410516-134262.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Corporate Insights">
            <p class="brand-text">
                Stay ahead with our comprehensive corporate news coverage. Our insights cover mergers, strategies, and trends, providing actionable data for businesses and professionals. From market analysis to leadership updates, Jaikvik Insights drives informed decisions.
            </p>
        </section>

        <section class="brand-product-grid">
            <div class="brand-product-item">
                <div class="brand-product-item-inner">
                    <div class="brand-product-item-front">
                        <img src="https://img.freepik.com/free-photo/businessman-interacting-with-futuristic-graphics_23-2151003712.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="News Tool 1">
                        <p>News Tool 1</p>
                    </div>
                    <div class="brand-product-item-back">
                        <p>M&A Reports</p>
                    </div>
                </div>
            </div>
            <div class="brand-product-item">
                <div class="brand-product-item-inner">
                    <div class="brand-product-item-front">
                        <img src="https://img.freepik.com/premium-photo/global-connection-internet-network-modernization-smart-city_31965-11236.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="News Tool 2">
                        <p>News Tool 2</p>
                    </div>
                    <div class="brand-product-item-back">
                        <p>Strategy Analysis</p>
                    </div>
                </div>
            </div>
            <div class="brand-product-item">
                <div class="brand-product-item-inner">
                    <div class="brand-product-item-front">
                        <img src="https://img.freepik.com/free-photo/one-world-peace-connection-relationship-interconnection-concept_53876-13735.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="News Tool 3">
                        <p>News Tool 3</p>
                    </div>
                    <div class="brand-product-item-back">
                        <p>Trend Forecasts</p>
                    </div>
                </div>
            </div>
            <div class="brand-product-item">
                <div class="brand-product-item-inner">
                    <div class="brand-product-item-front">
                        <img src="https://img.freepik.com/free-vector/character-illustration-people-with-global-network-concept_53876-43079.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="News Tool 4">
                        <p>News Tool 4</p>
                    </div>
                    <div class="brand-product-item-back">
                        <p>Financial Insights</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-metrics-display">
            <div class="brand-data-tables">
                <h2 class="brand-heading">Market Performance Metrics</h2>
                <table class="brand-table">
                    <tr>
                        <th>Metric</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Market Share</td>
                        <td>12%</td>
                    </tr>
                    <tr>
                        <td>Revenue Growth</td>
                        <td>8%</td>
                    </tr>
                    <tr>
                        <td>Stock Performance</td>
                        <td>+15%</td>
                    </tr>
                    <tr>
                        <td>Profit Margin</td>
                        <td>22%</td>
                    </tr>
                </table>
                <h2 class="brand-heading">Industry Breakdown</h2>
                <table class="brand-table">
                    <tr>
                        <th>Industry</th>
                        <th>Growth Rate</th>
                    </tr>
                    <tr>
                        <td>Technology</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>Healthcare</td>
                        <td>7%</td>
                    </tr>
                </table>
            </div>
            <div class="brand-visual-charts">
                <h2 class="brand-heading">Market Analytics</h2>
                <img src="https://img.freepik.com/free-photo/binary-world-map-blue-graphics-concept_53876-132303.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Revenue Trend Graph">
                <p class="brand-text">Revenue Growth Trends</p>
                <img src="https://img.freepik.com/free-photo/globe-with-world-map_116348-36.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Market Share Graph">
                <p class="brand-text">Market Share Metrics</p>
            </div>
        </section>

        <section class="brand-video-section">
            <div class="brand-video-player">
                <h2 class="brand-heading">Corporate News Reels</h2>
                <video controls aria-label="Corporate News Demo Video">
                    <source src="https://videos.pexels.com/video-files/4170125/4170125-sd_640_360_30fps.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="brand-video-info">
                <h2 class="brand-heading">Explore Business Insights</h2>
                <p class="brand-text">Watch our reels to discover how Jaikvik Insights delivers actionable corporate news and analysis. From M&A to market trends, stay informed with our tools.</p>
            </div>
        </section>

        <section class="brand-questions-section">
            <h2 class="brand-heading">Frequently Asked Questions</h2>
            <details>
                <summary>What is Corporate World News?</summary>
                <p class="brand-text">It covers global business developments, including mergers, strategies, and trends, providing insights for professionals and businesses.</p>
            </details>
            <details>
                <summary>How do M&A reports help?</summary>
                <p class="brand-text">They analyze deal impacts, risks, and opportunities, aiding strategic decision-making for investors and executives.</p>
            </details>
            <details>
                <summary>What are key corporate strategies?</summary>
                <p class="brand-text">They include market expansion, innovation, sustainability, and talent management to drive growth and competitiveness.</p>
            </details>
            <details>
                <summary>How often are industry trends updated?</summary>
                <p class="brand-text">We provide real-time updates and quarterly forecasts to keep you informed on market shifts.</p>
            </details>
        </section>

        <section class="brand-navigation-links">
            <h2 class="brand-heading">Explore More</h2>
            <p><a href="#news-overview" class="brand-nav-link" aria-label="Go to News Overview">News Overview</a> | <a href="#news-tools" class="brand-nav-link" aria-label="Go to Tools">Tools</a> | <a href="#analytics-section" class="brand-nav-link" aria-label="Go to Analytics">Analytics</a> | <a href="#faq-section" class="brand-nav-link" aria-label="Go to FAQ">FAQ</a></p>
        </section>

        <section class="brand-research-section">
            <h2 class="brand-heading">Business Insights</h2>
            <p class="brand-text">Stay updated with our latest research on corporate trends. Learn how businesses leverage strategies and market data to drive growth.</p>
        </section>

        <section class="brand-business-guide">
            <h2 class="brand-heading">Corporate Strategy Guide</h2>
            <p class="brand-text">Download our guide for businesses to implement effective strategies and stay competitive in the corporate world.</p>
            <a href="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" download class="brand-guide-btn" aria-label="Download Corporate Strategy Guide">Download PDF</a>
        </section>

        <section class="brand-stats-contact">
            <div class="brand-stats-panel">
                <h2 class="brand-heading">Rising Numbers, Building Trust</h2>
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
                        <p>Reports Delivered</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="brand-stat-card">
                        <h3>50+</h3>
                        <p>Team of Analysts</p>
                    </div>
                </div>
                <div class="brand-certifications-list">
                    <div>
                        <p class="brand-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="brand-text">Business Analysis Certification completed by .. on June 28, 2023</p>
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
                        <label><input type="checkbox" name="service" value="market-analysis" aria-label="Market Analysis"> Market Analysis</label>
                        <label><input type="checkbox" name="service" value="strategy-consulting" aria-label="Strategy Consulting"> Strategy Consulting</label>
                        <label><input type="checkbox" name="service" value="financial-reports" aria-label="Financial Reports"> Financial Reports</label>
                        <label><input type="checkbox" name="service" value="trend-forecasts" aria-label="Trend Forecasts"> Trend Forecasts</label>
                        <label><input type="checkbox" name="service" value="m-and-a-advisory" aria-label="M&A Advisory"> M&A Advisory</label>
                        <label><input type="checkbox" name="service" value="industry-insights" aria-label="Industry Insights"> Industry Insights</label>
                        <label><input type="checkbox" name="service" value="leadership-analysis" aria-label="Leadership Analysis"> Leadership Analysis</label>
                        <label><input type="checkbox" name="service" value="competitive-analysis" aria-label="Competitive Analysis"> Competitive Analysis</label>
                        <label><input type="checkbox" name="service" value="custom-reports" aria-label="Custom Reports"> Custom Reports</label>
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