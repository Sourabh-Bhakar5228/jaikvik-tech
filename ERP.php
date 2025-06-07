<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transform Your Business with Innovative ERP Solutions</title>
    <meta name="description" content="Discover the power of top-notch ERP solutions at Jaikvik Technology to bring your business up to speed. Our customized approaches offer real-time insights and automatically coordinate crucial features, considerably improving decision-making abilities.">
    <meta name="keywords" content="ERP Solutions, Enterprise Resource Planning, Business Growth, Jaikvik Technology">
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
            --erp-primary-color: #ffffff;
            --erp-secondary-color: #ffffff;
            --erp-accent-color: #ff0000;
            --erp-light-gray: #1a1a1a;
            --erp-medium-gray: #ffffff;
            --erp-dark-gray: #000000;
            --erp-highlight-color: #1a1a1a;
        }

        body {
            color: var(--erp-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--erp-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .erp-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--erp-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .erp-preloader .erp-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--erp-light-gray);
            border-top: 6px solid var(--erp-accent-color);
            border-radius: 50%;
            animation: erp-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes erp-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .erp-hero-section {
            position: relative;
            background: url('https://img.freepik.com/premium-photo/businessman-using-laptop-with-erp-icon-virtual-screen-enterprise-resource-planning-manage-company_562859-5802.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--erp-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--erp-light-gray);
        }

        .erp-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .erp-hero-content {
            position: relative;
            z-index: 2;
            animation: erp-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .erp-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--erp-accent-color);
            animation: erp-typing 4s steps(50, end), erp-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--erp-primary-color);
        }

        .erp-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: erp-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--erp-primary-color);
        }

        @keyframes erp-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes erp-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes erp-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes erp-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .erp-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--erp-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .erp-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: Serif 3px;
            background: var(--erp-accent-color);
            transition: width 0.7s ease-out;
        }

        .erp-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-heading.visible::after {
            width: 100%;
        }

        .erp-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--erp-light-gray);
            animation: erp-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes erp-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .erp-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--erp-dark-gray);
        }

        .erp-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--erp-medium-gray);
            font-weight: 300;
        }

        .erp-text-section {
            margin: 40px 0;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .erp-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--erp-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .erp-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .erp-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .erp-block-content {
            flex: 1;
        }

        .erp-expand-btn {
            background: var(--erp-accent-color);
            color: var(--erp-primary-color);
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

        .erp-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .erp-expand-btn:hover {
            background: #cc0000;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .erp-expand-btn:hover::before {
            left: 100%;
        }

        .erp-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .erp-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-spreadsheet-view,
        .erp-info-block {
            flex: 1;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .erp-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .erp-highlight-section {
            background: var(--erp-light-gray);
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
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .erp-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .erp-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .erp-product-grid.visible {
            opacity: 1;
        }

        .erp-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .erp-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .erp-product-item:hover .erp-product-item-inner {
            transform: rotateY(180deg);
        }

        .erp-product-item-front,
        .erp-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .erp-product-item-back {
            background: var(--erp-light-gray);
            color: var(--erp-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .erp-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .erp-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .erp-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--erp-medium-gray);
            padding: 0 10px;
        }

        .erp-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .erp-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-data-tables,
        .erp-visual-charts {
            flex: 1;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--erp-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .erp-table,
        .erp-table th,
        .erp-table td {
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-table th,
        .erp-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .erp-table th {
            background: var(--erp-light-gray);
            color: var(--erp-primary-color);
        }

        .erp-table tr:nth-child(even) {
            background-color: var(--erp-highlight-color);
        }

        .erp-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .erp-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-video-player,
        .erp-video-info {
            flex: 1;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .erp-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .erp-questions-section {
            margin: 30px 0;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--erp-highlight-color);
            padding-bottom: 12px;
        }

        .erp-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--erp-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .erp-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .erp-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .erp-questions-section summary:hover {
            color: var(--erp-accent-color);
        }

        .erp-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: erp-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--erp-medium-gray);
        }

        @keyframes erp-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .erp-navigation-links,
        .erp-research-section {
            margin: 30px 0;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-navigation-links.visible,
        .erp-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-nav-link {
            color: var(--erp-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .erp-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--erp-accent-color);
            transition: width 0.4s ease;
        }

        .erp-nav-link:hover {
            color: var(--erp-accent-color);
        }

        .erp-nav-link:hover::after {
            width: 100%;
        }

        .erp-business-guide {
            margin: 30px 0;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-guide-btn {
            background: var(--erp-accent-color);
            color: var(--erp-primary-color);
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

        .erp-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .erp-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .erp-guide-btn:hover::before {
            left: 100%;
        }

        .erp-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-stats-panel,
        .erp-contact-panel {
            flex: 1;
        }

        .erp-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .erp-stat-card {
            background: var(--erp-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--erp-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .erp-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--erp-accent-color);
        }

        .erp-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--erp-primary-color);
            margin: 0;
        }

        .erp-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--erp-medium-gray);
            margin: 8px 0 0;
        }

        .erp-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .erp-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--erp-medium-gray);
            text-align: center;
        }

        .erp-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .erp-contact-input,
        .erp-contact-textarea {
            padding: 10px;
            border: 1px solid var(--erp-highlight-color);
            border-radius: 6px;
            background: var(--erp-light-gray);
            color: var(--erp-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .erp-contact-input:hover,
        .erp-contact-textarea:hover {
            border-color: var(--erp-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .erp-contact-input:focus,
        .erp-contact-textarea:focus {
            outline: none;
            border-color: var(--erp-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .erp-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .erp-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .erp-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--erp-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .erp-checkbox-options label:hover {
            color: var(--erp-primary-color);
        }

        .erp-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--erp-medium-gray);
            margin: 8px 0;
        }

        .erp-submit-btn {
            background: var(--erp-accent-color);
            color: var(--erp-primary-color);
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

        .erp-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .erp-submit-btn:hover {
            background: #cc0000;
        }

        .erp-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .erp-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--erp-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .erp-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .erp-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--erp-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--erp-highlight-color);
        }

        .erp-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--erp-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--erp-accent-color);
        }

        .erp-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .erp-visual-diagram circle {
            fill: none;
            stroke: var(--erp-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: erp-dash 6s linear infinite;
        }

        @keyframes erp-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .erp-visual-label {
            position: absolute;
            background: var(--erp-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--erp-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--erp-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .erp-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--erp-accent-color);
        }

        .erp-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--erp-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--erp-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: erp-pulse 3s ease-in-out infinite;
        }

        .erp-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes erp-pulse {

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
            .erp-hero-content h1 {
                font-size: 2.5rem;
            }

            .erp-hero-content p {
                font-size: 1.2rem;
            }

            .erp-content-block {
                padding: 25px;
            }

            .erp-heading {
                font-size: 1.75rem;
            }

            .erp-text {
                font-size: 1.05rem;
            }

            .erp-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .erp-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .erp-hero-content h1 {
                font-size: 3rem;
            }

            .erp-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .erp-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .erp-content-block img {
                max-width: 550px;
            }

            .erp-data-display,
            .erp-metrics-display,
            .erp-video-section,
            .erp-stats-contact {
                flex-direction: row;
            }

            .erp-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .erp-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .erp-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .erp-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .erp-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .erp-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .erp-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .erp-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .erp-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .erp-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .erp-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="erp-preloader">
        <div class="erp-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="erp-hero-section" aria-label="ERP Solutions Hero">
        <div class="erp-hero-content">
            <h1>Transform Your Business with ERP</h1>
            <p>Unlock the power of enterprise resource planning with Jaikvik Technology</p>
            <a href="#erp-overview" class="erp-expand-btn" role="button" aria-label="Explore ERP Solutions">Explore Now</a>
        </div>
    </section>

    <div class="erp-main-content">
        <div class="erp-text-section">
            <div class="erp-content-block">
                <div class="erp-block-content">
                    <h2 class="erp-heading">What Is ERP?</h2>
                    <p class="erp-text">
                        ERP, which stands for Enterprise Resource Planning, refers to a strategic method of managing and integrating the core business processes of a company. It combines technology, processes, and data to efficiently operate finance, supply chain, manufacturing, human resources, and other business functions.<br>
                        ERP systems act as a central hub for businesses to manage vital operational data: inventory levels, production schedules, financial records, employee information, etc. It is not merely a large database but the operational backbone of an organization, facilitating collaboration across departments, automating routine tasks, and providing real-time visibility into business performance.<br>
                        Modern ERP systems feature artificial intelligence insights, advanced analytics, and integration capabilities that help businesses make data-driven decisions and improve operational efficiency. ERP solutions are essential for businesses of all sizes and across all industries, helping them streamline operations and drive growth.<span class="erp-ellipsis">...</span><span class="erp-expand-content" style="display: none;">
                            <br>At Jaikvik Technology, our ERP solutions are designed to empower businesses by integrating seamlessly with existing systems, offering customizable workflows, and providing real-time insights. Whether you're a small startup or a large enterprise, our ERP adapts to your needs, ensuring you have complete control over your business processes. From inventory management to financial reporting, ERP transforms how businesses operate and compete in today's digital economy.<br>
                            In today's fast-paced business environment, companies must optimize their operations to stay competitive. An ERP system is not just a tool but a strategic asset that helps organizations automate processes, reduce costs, and improve decision-making. By leveraging ERP, businesses can enhance productivity, improve customer service, and gain a competitive edge. For instance, a manufacturing company using ERP can optimize production schedules based on real-time demand, while a retail business can use it to manage inventory across multiple locations, reducing stockouts and overstock situations.
                        </span>
                    </p>
                    <button class="erp-expand-btn" data-section="0" aria-label="Toggle ERP Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-erp-illustration_23-2149379505.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="ERP Solutions">
            </div>

            <div class="erp-content-block">
                <img src="https://img.freepik.com/free-photo/enterprise-resource-planning-holographic-interface_23-2149092251.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="ERP Features">
                <div class="erp-block-content">
                    <h2 class="erp-heading">What Does ERP Do?</h2>
                    <p class="erp-text">
                        At its core, an ERP system is designed to integrate and automate core business processes. Here is the rundown on its functionality:<br>
                        <strong>Centralizing Business Data</strong><br>
                        ERP systems consolidate data from various departments into a single database. This includes financial records, inventory levels, production schedules, and human resources information. This ensures data consistency and provides real-time visibility across the organization.<br>
                        <strong>Streamlining Operations</strong><br>
                        An ERP system connects different business functions, eliminating data silos and improving workflow efficiency. This enables departments to work together more effectively and reduces manual data entry.<br><span class="erp-ellipsis">...</span><span class="erp-expand-content" style="display: none;">
                            <strong>Automation of Business Processes</strong><br>
                            ERP systems automate routine tasks such as order processing, inventory updates, payroll calculations, and financial reporting. This reduces errors, saves time, and allows employees to focus on higher-value activities.
                            <br><strong>Financial Management</strong><br>
                            ERP provides comprehensive financial tools including general ledger, accounts payable/receivable, budgeting, and financial reporting. This gives businesses better control over their finances and improves regulatory compliance.<br>
                            <strong>Supply Chain Management</strong><br>
                            ERP helps manage the entire supply chain from procurement to delivery, optimizing inventory levels, reducing lead times, and improving supplier relationships.<br>
                            Beyond these essentials, Jaikvik Technology's ERP offers advanced features like AI-driven demand forecasting, mobile access for remote management, and integration with tools like e-commerce platforms, CRM systems, and business intelligence software. This ensures your business stays agile and competitive in today's dynamic market.
                        </span>
                    </p>
                    <button class="erp-expand-btn" data-section="1" aria-label="Toggle ERP Functionality">Read More</button>
                </div>
            </div>

            <div class="erp-content-block">
                <div class="erp-block-content">
                    <h2 class="erp-heading">Why Should Enterprises Opt for ERP?</h2>
                    <p class="erp-text">
                        There are so many reasons why ERP systems are essential:<br>
                        <strong>Operational Efficiency:</strong> ERP eliminates redundant processes and automates routine tasks, significantly improving productivity.<br>
                        <strong>Data Visibility:</strong> With real-time reporting and analytics, ERP provides actionable insights that help businesses make informed decisions.<br>
                        <strong>Scalability:</strong> ERP systems grow with your business, adapting to changing needs and supporting expansion.<br>
                        <strong>Cost Reduction:</strong> By improving efficiency and reducing errors, ERP systems help lower operational costs.<br><span class="erp-ellipsis">...</span><span class="erp-expand-content" style="display: none;">
                            <strong>Regulatory Compliance:</strong> ERP systems help maintain accurate records and generate reports needed for compliance with industry regulations.<br>
                            <strong>Core Components Of ERP</strong><br>
                            A comprehensive ERP system typically includes these key modules:<br>
                            <strong>Financial Management</strong><br>
                            The foundation of any ERP system, managing accounting, budgeting, and financial reporting.<br>
                            <strong>Supply Chain Management</strong><br>
                            Tools for procurement, inventory control, order management, and logistics.<br>
                            <strong>Manufacturing</strong><br>
                            Production planning, scheduling, quality control, and shop floor management.<br>
                            <strong>Human Resources</strong><br>
                            Employee records, payroll, benefits administration, and talent management.<br>
                            <strong>Customer Relationship Management</strong><br>
                            Sales automation, customer service, and marketing tools (often integrated with standalone CRM systems).<br>
                            <strong>Business Intelligence</strong><br>
                            Advanced reporting, analytics, and data visualization capabilities.<br>
                            Enterprises choosing Jaikvik Technology's ERP also benefit from enhanced security with role-based access controls, 24/7 support, and regular updates that keep your system aligned with industry best practices. Studies show businesses using ERP can see up to a 40% reduction in operational costs and a 30% improvement in order fulfillment times—proof that ERP is a strategic investment in business success.
                        </span>
                    </p>
                    <button class="erp-expand-btn" data-section="2" aria-label="Toggle ERP Benefits">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-vector/enterprise-resource-planning-erp-modules-finance-procurement-manufacturing-inventory_518018-2415.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="ERP Benefits">
            </div>

            <div class="erp-content-block">
                <img src="https://img.freepik.com/free-vector/erp-infographic_23-2149371099.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="ERP Use Cases">
                <div class="erp-block-content">
                    <h2 class="erp-heading">ERP for Different Industries</h2>
                    <p class="erp-text">
                        The use of ERP has expanded across many industries today, providing tailored solutions for specific operational needs. Here's how various sectors leverage ERP to improve efficiency and drive growth:<br>
                        <strong>1. Manufacturing</strong><br>
                        ● ERP helps manufacturers optimize production schedules, manage inventory, and maintain quality control.<br>
                        ● It provides real-time visibility into shop floor operations and helps coordinate supply chain activities.<br>
                        <strong>2. Retail</strong><br>
                        ● Retailers use ERP to manage inventory across multiple locations, analyze sales trends, and streamline purchasing.<br><span class="erp-ellipsis">...</span><span class="erp-expand-content" style="display: none;">
                            ● It integrates with e-commerce platforms to provide a unified view of online and in-store sales.<br>
                            <strong>3. Healthcare</strong><br>
                            ● Healthcare providers use ERP to manage patient records, schedule appointments, and track medical supplies.<br>
                            ● It helps maintain compliance with healthcare regulations and improves billing accuracy.<br>
                            <strong>4. Construction</strong><br>
                            ● ERP systems help construction firms manage projects, track equipment, and control costs.<br>
                            ● They provide tools for job costing, subcontractor management, and resource allocation.<br>
                            <strong>5. Professional Services</strong><br>
                            ● Consulting firms and agencies use ERP to track projects, manage resources, and invoice clients.<br>
                            ● It helps optimize utilization rates and improve project profitability.<br>
                            ERP solutions can be customized to meet the unique requirements of virtually any industry, helping organizations streamline operations, reduce costs, and improve decision-making.<br>
                            <strong>Who Can Implement ERP?</strong><br>
                            ERP systems are valuable for organizations of all sizes and across all industries. Here's who can benefit from ERP implementation:<br>
                            <strong>1. Small Businesses</strong><br>
                            ● Small businesses use ERP to automate processes and gain better visibility into their operations.<br>
                            ● Cloud-based ERP solutions make it affordable for SMBs to access enterprise-grade functionality.<br>
                            <strong>2. Mid-Sized Companies</strong><br>
                            ● Growing companies use ERP to support expansion and manage increasing complexity.<br>
                            ● ERP helps them compete with larger enterprises by improving efficiency and scalability.<br>
                            <strong>3. Large Enterprises</strong><br>
                            ● Multinational corporations rely on ERP to standardize processes across locations and business units.<br>
                            ● Advanced ERP systems support global operations with multi-currency and multi-language capabilities.<br>
                            <strong>4. Manufacturing Companies</strong><br>
                            ● Manufacturers use ERP to optimize production, manage supply chains, and maintain quality standards.<br>
                            <strong>5. Distribution Companies</strong><br>
                            ● Wholesalers and distributors use ERP to manage inventory, optimize logistics, and improve order fulfillment.<br>
                            <strong>6. Service Organizations</strong><br>
                            ● Professional services firms use ERP to track projects, manage resources, and bill clients accurately.<br>
                            <strong>7. Nonprofit Organizations</strong><br>
                            ● Nonprofits use ERP to manage donations, track programs, and ensure financial accountability.<br>
                            <strong>8. Government Agencies</strong><br>
                            ● Public sector organizations use ERP to improve transparency, manage budgets, and deliver services efficiently.<br>
                            <strong>Benefits of Using an ERP</strong><br>
                            Implementing an ERP system delivers numerous advantages that can transform how a business operates:<br>
                            <strong>Improved Efficiency:</strong> By automating processes and eliminating redundant data entry, ERP significantly increases productivity.<br>
                            <strong>Better Decision Making:</strong> Real-time data and analytics provide insights that help managers make informed decisions.<br>
                            <strong>Enhanced Collaboration:</strong> ERP breaks down silos by providing a single source of truth accessible across departments.<br>
                            <strong>Regulatory Compliance:</strong> Built-in controls and audit trails help businesses meet industry and government regulations.<br>
                            <strong>Scalability:</strong> ERP systems grow with your business, supporting expansion into new markets and product lines.<br>
                            <strong>Key Attributes of Modern ERP</strong><br>
                            Today's ERP systems offer features designed to meet the needs of modern businesses:<br>
                            <strong>Cloud Deployment:</strong> Accessible from anywhere with an internet connection, with automatic updates.<br>
                            <strong>Mobile Access:</strong> Managers can approve workflows and view reports from smartphones and tablets.<br>
                            <strong>AI and Machine Learning:</strong> Predictive analytics and intelligent automation improve forecasting and decision-making.<br>
                            <strong>Integration Capabilities:</strong> ERP connects with other business systems like CRM, e-commerce, and BI tools.<br>
                            <strong>Implementing an ERP Solution</strong><br>
                            Successful ERP implementation requires careful planning and execution. Here are the key steps:<br>
                            <strong>Define Business Requirements:</strong> Identify pain points and objectives to determine what you need from an ERP system.<br>
                            <strong>Select the Right ERP:</strong> Choose a solution that fits your industry, size, and specific business needs.<br>
                            <strong>Prepare Your Data:</strong> Cleanse and organize data before migration to ensure accuracy in the new system.<br>
                            <strong>Train Your Team:</strong> Comprehensive training ensures users adopt the system and leverage its full potential.<br>
                            <strong>Go Live and Optimize:</strong> Launch the system and continuously refine processes to maximize benefits.<br>
                            <strong>Start Your ERP Journey with Jaikvik Technology</strong><br>
                            Implementing ERP with Jaikvik Technology ensures your business gets a solution tailored to your unique requirements. We specialize in delivering innovative ERP strategies that streamline operations, improve visibility, and drive growth. Our team works closely with you to understand your business processes and recommend the ideal ERP solution that will transform your operations.<br>
                            Jaikvik Technology is recognized as a leading provider of ERP solutions in Delhi NCR. Our ERP systems are designed to increase efficiency, reduce costs, and provide the flexibility to adapt to your evolving business needs. Whether you need to manage complex manufacturing processes, optimize your supply chain, or gain better financial control, our ERP solutions deliver the functionality and user-friendly interface your team needs to succeed.<br>
                            Partner with Jaikvik Technology to transform your business operations with a powerful, integrated ERP system. Let us help you achieve operational excellence and position your company for sustainable growth!<br>
                            <strong>Here are 6 frequently asked questions (FAQs) for ERP:</strong><br>
                            <strong>1. What is ERP and why is it important for businesses?</strong><br>
                            ERP (Enterprise Resource Planning) is software that integrates and automates core business processes. It's important because it improves efficiency, provides real-time data visibility, reduces costs, and helps businesses scale operations effectively.<br>
                            <strong>2. Is ERP suitable for small businesses?</strong><br>
                            Yes, modern cloud-based ERP systems are affordable and scalable, making them ideal for small businesses looking to streamline operations and support growth.<br>
                            <strong>3. What are the key features to look for in an ERP system?</strong><br>
                            Essential ERP features include:<br>
                            ● Financial management<br>
                            ● Inventory and supply chain management<br>
                            ● Production planning (for manufacturers)<br>
                            ● Reporting and analytics<br>
                            ● Integration capabilities<br>
                            ● User-friendly interface<br>
                            <strong>4. How long does ERP implementation typically take?</strong><br>
                            Implementation timelines vary based on business size and complexity. Small businesses might implement in 3-6 months, while large enterprises may take 12-18 months for a full rollout.<br>
                            <strong>5. What's the difference between ERP and accounting software?</strong><br>
                            While accounting software focuses only on financial transactions, ERP integrates all business functions including finance, operations, HR, and more, providing a complete view of the organization.<br>
                            <strong>6. Can ERP integrate with other business systems?</strong><br>
                            Yes, modern ERP systems can integrate with CRM, e-commerce platforms, business intelligence tools, and other specialized applications to create a unified business management ecosystem.<br>
                            Additionally, Jaikvik Technology's ERP supports industries like education (for student information systems), agriculture (for farm management), and logistics (for fleet management). For example, a food processing company might use our ERP to reduce inventory waste by 20% through better demand forecasting, while a professional services firm could improve billable utilization by 15% with resource management tools. Whatever your industry, our ERP delivers measurable results tailored to your specific challenges.
                        </span>
                    </p>
                    <button class="erp-expand-btn" data-section="3" aria-label="Toggle ERP Use Cases">Read More</button>
                </div>
            </div>
        </div>



        <?php include 'erp-industry-reasrch.php' ?>
        <?php include 'contact-inner-page.php' ?>




    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.erp-preloader');
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
        document.querySelectorAll('.erp-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.erp-expand-content');
                const ellipsis = button.parentElement.querySelector('.erp-ellipsis');
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
            const elements = document.querySelectorAll('.erp-content-block, .erp-data-display, .erp-highlight-section, .erp-product-grid, .erp-metrics-display, .erp-video-section, .erp-questions-section, .erp-navigation-links, .erp-research-section, .erp-business-guide, .erp-stats-contact, .erp-integration-visual, .erp-stat-card, .erp-heading');
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
            const productItems = document.querySelectorAll('.erp-product-item');
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