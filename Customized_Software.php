<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlock Efficiency with Customized Software Solutions</title>
    <meta name="description" content="Explore tailored software solutions at Jaikvik Technology designed to meet your unique business needs. Enhance productivity, streamline workflows, and stay competitive with custom-built applications.">
    <meta name="keywords" content="Custom Software Solutions, Business Software, Jaikvik Technology, Workflow Automation">
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
            --cs-primary-color: #ffffff;
            /* Text color: White */
            --cs-secondary-color: #ffffff;
            /* Secondary text color: White */
            --cs-accent-color: #ff0000;
            /* Button color: Red */
            --cs-light-gray: #1a1a1a;
            /* Section background: Dark Grey */
            --cs-medium-gray: #ffffff;
            /* Text color for readability: White */
            --cs-dark-gray: #000000;
            /* Main background: Black */
            --cs-highlight-color: #1a1a1a;
            /* Highlight: Dark Grey */
        }

        body {
            color: var(--cs-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--cs-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .cs-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--cs-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .cs-preloader .cs-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--cs-light-gray);
            border-top: 6px solid var(--cs-accent-color);
            border-radius: 50%;
            animation: cs-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes cs-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hero Section */
        .cs-hero-section {
            position: relative;
            background: url('https://img.freepik.com/premium-photo/man-hand-typing-keyboard-computer-with-software-testing-inscription-icon-vr-screen-business-modern-technology-internet-networking-concept_1296497-5284.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--cs-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--cs-light-gray);
        }

        .cs-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .cs-hero-content {
            position: relative;
            z-index: 2;
            animation: cs-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .cs-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--cs-accent-color);
            animation: cs-typing 4s steps(50, end), cs-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--cs-primary-color);
        }

        .cs-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: cs-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--cs-primary-color);
        }

        @keyframes cs-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes cs-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes cs-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes cs-fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Text Animation */
        .cs-heading {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--cs-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .cs-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--cs-accent-color);
            transition: width 0.7s ease-out;
        }

        .cs-heading.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-heading.visible::after {
            width: 100%;
        }

        .cs-heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--cs-light-gray);
            animation: cs-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes cs-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .cs-main-content {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--cs-dark-gray);
        }

        .cs-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--cs-medium-gray);
            font-weight: 300;
        }

        .cs-text-section {
            margin: 40px 0;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .cs-content-block {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--cs-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .cs-content-block.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-content-block img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .cs-content-block img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .cs-block-content {
            flex: 1;
        }

        .cs-expand-btn {
            background: var(--cs-accent-color);
            color: var(--cs-primary-color);
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

        .cs-expand-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .cs-expand-btn:hover {
            background: #cc0000;
            /* Slightly darker red for hover */
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .cs-expand-btn:hover::before {
            left: 100%;
        }

        .cs-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .cs-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-spreadsheet-view,
        .cs-info-block {
            flex: 1;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .cs-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .cs-highlight-section {
            background: var(--cs-light-gray);
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
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .cs-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .cs-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .cs-product-grid.visible {
            opacity: 1;
        }

        .cs-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .cs-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .cs-product-item:hover .cs-product-item-inner {
            transform: rotateY(180deg);
        }

        .cs-product-item-front,
        .cs-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .cs-product-item-back {
            background: var(--cs-light-gray);
            color: var(--cs-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .cs-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .cs-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .cs-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--cs-medium-gray);
            padding: 0 10px;
        }

        .cs-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .cs-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-data-tables,
        .cs-visual-charts {
            flex: 1;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--cs-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .cs-table,
        .cs-table th,
        .cs-table td {
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-table th,
        .cs-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .cs-table th {
            background: var(--cs-light-gray);
            color: var(--cs-primary-color);
        }

        .cs-table tr:nth-child(even) {
            background-color: var(--cs-highlight-color);
        }

        .cs-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .cs-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-video-player,
        .cs-video-info {
            flex: 1;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .cs-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .cs-questions-section {
            margin: 30px 0;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--cs-highlight-color);
            padding-bottom: 12px;
        }

        .cs-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--cs-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .cs-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .cs-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .cs-questions-section summary:hover {
            color: var(--cs-accent-color);
        }

        .cs-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: cs-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--cs-medium-gray);
        }

        @keyframes cs-fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cs-navigation-links,
        .cs-research-section {
            margin: 30px 0;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-navigation-links.visible,
        .cs-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-nav-link {
            color: var(--cs-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .cs-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--cs-accent-color);
            transition: width 0.4s ease;
        }

        .cs-nav-link:hover {
            color: var(--cs-accent-color);
        }

        .cs-nav-link:hover::after {
            width: 100%;
        }

        .cs-business-guide {
            margin: 30px 0;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-guide-btn {
            background: var(--cs-accent-color);
            color: var(--cs-primary-color);
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

        .cs-guide-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .cs-guide-btn:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .cs-guide-btn:hover::before {
            left: 100%;
        }

        .cs-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-stats-panel,
        .cs-contact-panel {
            flex: 1;
        }

        .cs-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .cs-stat-card {
            background: var(--cs-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--cs-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .cs-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--cs-accent-color);
        }

        .cs-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--cs-primary-color);
            margin: 0;
        }

        .cs-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--cs-medium-gray);
            margin: 8px 0 0;
        }

        .cs-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .cs-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--cs-medium-gray);
            text-align: center;
        }

        .cs-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .cs-contact-input,
        .cs-contact-textarea {
            padding: 10px;
            border: 1px solid var(--cs-highlight-color);
            border-radius: 6px;
            background: var(--cs-light-gray);
            color: var(--cs-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .cs-contact-input:hover,
        .cs-contact-textarea:hover {
            border-color: var(--cs-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .cs-contact-input:focus,
        .cs-contact-textarea:focus {
            outline: none;
            border-color: var(--cs-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .cs-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .cs-checkbox-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .cs-checkbox-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--cs-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .cs-checkbox-options label:hover {
            color: var(--cs-primary-color);
        }

        .cs-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--cs-medium-gray);
            margin: 8px 0;
        }

        .cs-submit-btn {
            background: var(--cs-accent-color);
            color: var(--cs-primary-color);
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

        .cs-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .cs-submit-btn:hover {
            background: #cc0000;
        }

        .cs-submit-btn:hover::before {
            left: 100%;
        }

        /* Diagram Styles */
        .cs-integration-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--cs-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .cs-integration-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cs-visual-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--cs-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--cs-highlight-color);
        }

        .cs-visual-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--cs-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--cs-accent-color);
        }

        .cs-visual-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .cs-visual-diagram circle {
            fill: none;
            stroke: var(--cs-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: cs-dash 6s linear infinite;
        }

        @keyframes cs-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .cs-visual-label {
            position: absolute;
            background: var(--cs-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--cs-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--cs-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .cs-visual-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--cs-accent-color);
        }

        .cs-core-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--cs-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--cs-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: cs-pulse 3s ease-in-out infinite;
        }

        .cs-core-circle:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes cs-pulse {

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
            .cs-hero-content h1 {
                font-size: 2.5rem;
            }

            .cs-hero-content p {
                font-size: 1.2rem;
            }

            .cs-content-block {
                padding: 25px;
            }

            .cs-heading {
                font-size: 1.75rem;
            }

            .cs-text {
                font-size: 1.05rem;
            }

            .cs-visual-diagram {
                max-width: 350px;
                height: 350px;
            }

            .cs-core-circle {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .cs-hero-content h1 {
                font-size: 3rem;
            }

            .cs-content-block {
                flex-direction: row;
                padding: 30px;
            }

            .cs-content-block:nth-child(even) {
                flex-direction: row-reverse;
            }

            .cs-content-block img {
                max-width: 550px;
            }

            .cs-data-display,
            .cs-metrics-display,
            .cs-video-section,
            .cs-stats-contact {
                flex-direction: row;
            }

            .cs-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .cs-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .cs-checkbox-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .cs-visual-diagram {
                max-width: 400px;
                height: 400px;
            }

            .cs-core-circle {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .cs-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .cs-visual-diagram {
                max-width: 500px;
                height: 500px;
            }

            .cs-core-circle {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .cs-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .cs-visual-diagram {
                max-width: 600px;
                height: 600px;
            }

            .cs-core-circle {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <!-- <div class="cs-preloader">
        <div class="cs-spinner"></div>
    </div> -->

    <!-- Hero Section -->
    <section class="cs-hero-section" aria-label="Custom Software Solutions Hero">
        <div class="cs-hero-content">
            <h1>Transform Your Business with Custom Software</h1>
            <p>Unlock the power of tailored solutions with Jaikvik Technology</p>
            <a href="#cs-overview" class="cs-expand-btn" role="button" aria-label="Explore Custom Software Solutions">Explore Now</a>
        </div>
    </section>

    <div class="cs-main-content">
        <div class="cs-text-section">
            <div class="cs-content-block">
                <div class="cs-block-content">
                    <h2 class="cs-heading">What Is Custom Software?</h2>
                    <p class="cs-text">
                        Custom Software refers to applications and systems developed specifically to meet the unique needs of a business or organization. Unlike off-the-shelf software, custom solutions are tailored to fit specific workflows, processes, and objectives, offering unparalleled flexibility and efficiency.<br>
                        Custom software acts as a digital backbone, integrating seamlessly with existing systems, automating complex tasks, and providing a platform for innovation. It can range from mobile apps to enterprise systems, designed to enhance productivity and solve industry-specific challenges.<br>
                        At Jaikvik Technology, our custom software solutions are built to empower businesses by aligning technology with their goals. Whether you're a startup or an enterprise, our solutions adapt to your requirements, ensuring scalability and performance.<span class="cs-ellipsis">...</span><span class="cs-expand-content" style="display: none;">
                            <br>Our development process involves close collaboration with clients to understand their needs, followed by designing, building, and deploying software that drives results. From streamlining operations to enhancing customer experiences, custom software transforms how businesses operate in a competitive digital landscape.<br>
                            For example, a logistics company might use custom software to optimize delivery routes, reducing fuel costs by 20%, while a retail business could deploy a tailored e-commerce platform to boost online sales by 30%. By leveraging custom software, businesses can achieve operational excellence, improve decision-making, and deliver exceptional value to their customers.
                        </span>
                    </p>
                    <button class="cs-expand-btn" data-section="0" aria-label="Toggle Custom Software Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/man-hand-typing-keyboard-computer-with-software-testing-inscription-icon-vr-screen-business-modern-technology-internet-networking-concept_1296497-5284.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Solutions">
            </div>

            <div class="cs-content-block">
                <img src="https://img.freepik.com/premium-vector/customizable-flat-illustration-code-optimization_203633-8821.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Features">
                <div class="cs-block-content">
                    <h2 class="cs-heading">What Does Custom Software Do?</h2>
                    <p class="cs-text">
                        Custom software is designed to address specific business challenges by providing tailored functionality. Here's how it works:<br>
                        <strong>Process Optimization</strong><br>
                        Custom software streamlines workflows by automating repetitive tasks, reducing manual errors, and integrating with existing tools, ensuring smooth operations.<br>
                        <strong>Data Management</strong><br>
                        It centralizes data, offering real-time access to critical information, which enables faster decision-making and improved business insights.<br><span class="cs-ellipsis">...</span><span class="cs-expand-content" style="display: none;">
                            <strong>Scalable Solutions</strong><br>
                            Custom software grows with your business, allowing for updates and new features as your needs evolve, ensuring long-term relevance.<br>
                            <strong>Enhanced User Experience</strong><br>
                            By focusing on user-centric design, custom software provides intuitive interfaces that improve employee productivity and customer satisfaction.<br>
                            Jaikvik Technology's custom software includes features like AI-driven analytics, cloud integration, and mobile accessibility. For instance, a healthcare provider could use our software to manage patient records securely, while a manufacturing firm might deploy it to monitor production in real time, reducing downtime by 15%.
                        </span>
                    </p>
                    <button class="cs-expand-btn" data-section="1" aria-label="Toggle Custom Software Functionality">Read More</button>
                </div>
            </div>

            <div class="cs-content-block">
                <div class="cs-block-content">
                    <h2 class="cs-heading">Why Should Enterprises Opt for Custom Software?</h2>
                    <p class="cs-text">
                        Custom software offers distinct advantages over generic solutions:<br>
                        <strong>Tailored Fit:</strong> Built to match your specific processes, ensuring maximum efficiency and minimal disruption.<br>
                        <strong>Competitive Edge:</strong> Unique features give businesses an advantage by addressing niche requirements that off-the-shelf software can't.<br>
                        <strong>Cost Efficiency:</strong> While initial costs may be higher, custom software reduces long-term expenses by eliminating unused features and licensing fees.<br>
                        <strong>Security:</strong> Custom solutions can include robust, industry-specific security measures, protecting sensitive data.<br><span class="cs-ellipsis">...</span><span class="cs-expand-content" style="display: none;">
                            <strong>Integration:</strong> Seamlessly connects with existing systems, reducing silos and improving data flow across departments.<br>
                            <strong>Core Components of Custom Software</strong><br>
                            A robust custom software solution typically includes:<br>
                            <strong>Custom APIs</strong><br>
                            Enable integration with third-party tools and platforms for enhanced functionality.<br>
                            <strong>Workflow Automation</strong><br>
                            Automates repetitive tasks, freeing up resources for strategic initiatives.<br>
                            <strong>Analytics Dashboards</strong><br>
                            Provide real-time insights into performance, helping businesses make data-driven decisions.<br>
                            <strong>User Management</strong><br>
                            Controls access and permissions, ensuring data security and compliance.<br>
                            Enterprises choosing Jaikvik Technology's custom software benefit from end-to-end support, from ideation to maintenance. Our solutions have helped businesses achieve up to a 40% increase in operational efficiency and a 25% reduction in costs, proving that custom software is a strategic investment.
                        </span>
                    </p>
                    <button class="cs-expand-btn" data-section="2" aria-label="Toggle Custom Software Benefits">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-vector/application-programming-interface_773186-1533.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Benefits">
            </div>

            <div class="cs-content-block">
                <img src="https://img.freepik.com/free-photo/representation-user-experience-interface-design_23-2150169834.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Use Cases">
                <div class="cs-block-content">
                    <h2 class="cs-heading">Custom Software for Different Industries</h2>
                    <p class="cs-text">
                        Custom software is versatile, serving various industries with tailored solutions:<br>
                        <strong>1. Retail and E-commerce</strong><br>
                        ● Custom software creates personalized shopping experiences, optimizes inventory, and automates order processing.<br>
                        ● E-commerce platforms use custom solutions to enhance checkout processes and integrate with payment gateways.<br>
                        <strong>2. Healthcare</strong><br>
                        ● Manages patient records, automates appointment scheduling, and ensures compliance with regulations like HIPAA.<br><span class="cs-ellipsis">...</span><span class="cs-expand-content" style="display: none;">
                            ● Enables telemedicine platforms and integrates with medical devices for real-time monitoring.<br>
                            <strong>3. Real Estate</strong><br>
                            ● Streamlines property management, automates client communications, and integrates with listing platforms.<br>
                            ● Provides virtual tour capabilities and market analysis tools.<br>
                            <strong>4. Nonprofit Organizations</strong><br>
                            ● Manages donor databases, automates fundraising campaigns, and tracks volunteer activities.<br>
                            ● Enhances outreach with tailored communication tools.<br>
                            <strong>5. Manufacturing</strong><br>
                            ● Optimizes supply chain management, monitors production in real time, and automates quality control.<br>
                            ● Integrates with IoT devices for predictive maintenance.<br>
                            Jaikvik Technology's custom software delivers measurable results. For example, a retail client reduced inventory costs by 20% with our stock management system, while a healthcare provider improved patient satisfaction by 30% through automated reminders. Our solutions are designed to meet the unique challenges of each industry, ensuring maximum impact.
                        </span>
                    </p>
                    <button class="cs-expand-btn" data-section="3" aria-label="Toggle Custom Software Use Cases">Read More</button>
                </div>
            </div>
        </div>

        <section class="cs-integration-visual">
            <h2 class="cs-heading">Custom Software Integration Overview</h2>
            <div class="cs-visual-container">
                <div class="cs-visual-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="cs-core-circle">Software Integration</div>
                    <div class="cs-visual-label" style="top: 3%; left: 50%; transform: translateX(-50%);">API Development</div>
                    <div class="cs-visual-label" style="top: 18%; left: 8%; transform: translateY(-50%);">Cloud Integration</div>
                    <div class="cs-visual-label" style="top: 70%; left: 4%; transform: translateY(-50%);">Workflow Automation</div>
                    <div class="cs-visual-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">AI & Machine Learning</div>
                    <div class="cs-visual-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Data Analytics</div>
                    <div class="cs-visual-label" style="top: 65%; right: 4%; transform: translateY(-50%);">Mobile Compatibility</div>
                    <div class="cs-visual-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Security Protocols</div>
                    <div class="cs-visual-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">UI/UX Design</div>
                    <div class="cs-visual-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Scalability</div>
                </div>
            </div>
        </section>


        <!-- 
        <section class="cs-data-display">
            <div class="cs-spreadsheet-view">
                <h2 class="cs-heading">Custom Software Data Overview</h2>
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQe8x2y3z4t5u6v7w8x9y0z1a2b3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1u2v3w4x5y6z7a8b9c/pubhtml?widget=true&headers=false" title="Custom Software Data Spreadsheet"></iframe>
            </div>
            <div class="cs-info-block">
                <h2 class="cs-heading">Why Custom Software Matters</h2>
                <p class="cs-text">Custom software is built to address the specific needs of a business, offering tailored solutions that enhance efficiency and drive growth. It integrates with existing systems, automates processes, and provides actionable insights.<br>
                    Key benefits include:</p>
                <ul>
                    <li>Improved operational efficiency</li>
                    <li>Enhanced scalability</li>
                    <li>Better data management</li>
                    <li>Customized user experiences</li>
                </ul>
            </div>
        </section>

        <section class="cs-highlight-section">
            <img src="https://img.freepik.com/premium-vector/programmer-developer-engineer-with-laptop-sitting-office-desk-holding-pen-while-coding-developing-concept-illustration_270158-427.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Insights">
            <p class="cs-text">
                Unlock your business's potential with our custom software solutions. Designed to fit your unique needs, our software streamlines operations, enhances user experiences, and provides data-driven insights. From mobile apps to enterprise systems, Jaikvik Technology delivers scalable, secure, and innovative solutions that drive growth and efficiency.
            </p>
        </section>

        <section class="cs-product-grid">
            <div class="cs-product-item">
                <div class="cs-product-item-inner">
                    <div class="cs-product-item-front">
                        <img src="https://img.freepik.com/premium-vector/web-designer-modern-flat-concept-web-banner-design-man-working-with-website-layout-places_9209-7925.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Product 1">
                        <p>Custom Software Product 1</p>
                    </div>
                    <div class="cs-product-item-back">
                        <p>Tailored analytics for business intelligence</p>
                    </div>
                </div>
            </div>
            <div class="cs-product-item">
                <div class="cs-product-item-inner">
                    <div class="cs-product-item-front">
                        <img src="https://img.freepik.com/premium-photo/html-system-websites-concept_23-2150323528.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Product 2">
                        <p>Custom Software Product 2</p>
                    </div>
                    <div class="cs-product-item-back">
                        <p>Automated workflow solutions</p>
                    </div>
                </div>
            </div>
            <div class="cs-product-item">
                <div class="cs-product-item-inner">
                    <div class="cs-product-item-front">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-rpa-illustration_23-2149243386.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Product 3">
                        <p>Custom Software Product 3</p>
                    </div>
                    <div class="cs-product-item-back">
                        <p>Secure cloud-based platforms</p>
                    </div>
                </div>
            </div>
            <div class="cs-product-item">
                <div class="cs-product-item-inner">
                    <div class="cs-product-item-front">
                        <img src="https://img.freepik.com/free-vector/flat-illustration-content-management-system_23-2148815975.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Custom Software Product 4">
                        <p>Custom Software Product 4</p>
                    </div>
                    <div class="cs-product-item-back">
                        <p>Mobile-first enterprise apps</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cs-metrics-display">
            <div class="cs-data-tables">
                <h2 class="cs-heading">Custom Software Performance Metrics</h2>
                <table class="cs-table">
                    <tr>
                        <th>Metric</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Efficiency Gains</td>
                        <td>40%</td>
                    </tr>
                    <tr>
                        <td>Cost Reduction</td>
                        <td>25%</td>
                    </tr>
                    <tr>
                        <td>User Adoption</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td>System Uptime</td>
                        <td>99.9%</td>
                    </tr>
                </table>
                <h2 class="cs-heading">Industry Adoption</h2>
                <table class="cs-table">
                    <tr>
                        <th>Industry</th>
                        <th>Percentage</th>
                    </tr>
                    <tr>
                        <td>Enterprise</td>
                        <td>45%</td>
                    </tr>
                    <tr>
                        <td>SME</td>
                        <td>55%</td>
                    </tr>
                </table>
            </div>
            <div class="cs-visual-charts">
                <h2 class="cs-heading">Analytics Overview</h2>
                <img src="https://img.freepik.com/free-photo/person-working-html-computer_23-2150038840.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Performance Trend Graph">
                <p class="cs-text">Performance Trend Analysis</p>
                <img src="https://img.freepik.com/premium-photo/paas-platform-as-service-womaan-hand-touching-paas-icon-vr-screen-desk-background-internet-technology-development-concept_1296497-5291.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="User Engagement Graph">
                <p class="cs-text">User Engagement Metrics</p>
            </div>
        </section>

        <section class="cs-video-section">
            <div class="cs-video-player">
                <h2 class="cs-heading">Custom Software Reels</h2>
                <video controls aria-label="Custom Software Demo Video">
                    <source src="https://videos.pexels.com/video-files/30991071/13247536_640_360_25fps.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="cs-video-info">
                <h2 class="cs-heading">Explore Custom Software Features</h2>
                <p class="cs-text">Watch our reels to learn how our custom software solutions can transform your business. From automation to analytics, discover the power of tailored technology.</p>
            </div>
        </section>

        <section class="cs-questions-section">
            <h2 class="cs-heading">Frequently Asked Questions</h2>
            <details>
                <summary>What is custom software?</summary>
                <p class="cs-text">Custom software is a tailored application developed to meet the specific needs of a business, offering unique functionality and seamless integration with existing systems.</p>
            </details>
            <details>
                <summary>How does custom software improve efficiency?</summary>
                <p class="cs-text">It automates repetitive tasks, integrates with existing tools, and provides tailored workflows, reducing manual work and boosting productivity.</p>
            </details>
            <details>
                <summary>Is custom software suitable for small businesses?</summary>
                <p class="cs-text">Yes, custom software can be scaled to fit small businesses, offering cost-effective solutions that grow with their needs.</p>
            </details>
            <details>
                <summary>How long does custom software development take?</summary>
                <p class="cs-text">Development time depends on complexity. Simple solutions can take weeks, while enterprise systems may require months. We ensure timely delivery with minimal disruption.</p>
            </details>
        </section>

        <section class="cs-navigation-links">
            <h2 class="cs-heading">Explore More</h2>
            <p><a href="#cs-overview" class="cs-nav-link" aria-label="Go to Custom Software Overview">Overview</a> | <a href="#product-list" class="cs-nav-link" aria-label="Go to Products">Products</a> | <a href="#analytics-section" class="cs-nav-link" aria-label="Go to Analytics">Analytics</a> | <a href="#faq-section" class="cs-nav-link" aria-label="Go to FAQ">FAQ</a></p>
        </section>

        <section class="cs-research-section">
            <h2 class="cs-heading">Industry Research</h2>
            <p class="cs-text">Stay ahead with our latest insights on custom software trends and innovations. Learn how businesses leverage tailored solutions to drive growth and maintain a competitive edge.</p>
        </section>

        <section class="cs-business-guide">
            <h2 class="cs-heading">MSME Custom Software Guide</h2>
            <p class="cs-text">Download our comprehensive guide for MSMEs to implement custom software effectively and transform your operations.</p>
            <a href="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" download class="cs-guide-btn" aria-label="Download MSME Custom Software Guide">Download PDF</a>
        </section> -->



        <?php include 'coustmise-soft-reasrch.php' ?>

        <section class="cs-stats-contact">
            <div class="cs-stats-panel">
                <h2 class="cs-heading">Rising Numbers, Building Confidence</h2>
                <div class="cs-stats-container">
                    <div class="cs-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="cs-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="cs-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="cs-stat-card">
                        <h3>2500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="cs-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="cs-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="cs-certifications-list">
                    <div>
                        <p class="cs-text">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="cs-text">Google Ads Creative Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="cs-contact-panel">
                <h2 class="cs-heading">Let's Discuss Now</h2>
                <p class="cs-text">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="cs-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="cs-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="cs-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="cs-checkbox-options">
                        <label><input type="checkbox" name="service" value="web-design" aria-label="Web Design / Development"> Web Design / Development</label>
                        <label><input type="checkbox" name="service" value="seo" aria-label="Search Engine Optimization"> Search Engine Optimization (SEO)</label>
                        <label><input type="checkbox" name="service" value="ecommerce" aria-label="eCommerce"> eCommerce</label>
                        <label><input type="checkbox" name="service" value="mobile-app" aria-label="Mobile App"> Mobile App</label>
                        <label><input type="checkbox" name="service" value="custom-software" aria-label="Custom Software Development"> Custom Software Development</label>
                        <label><input type="checkbox" name="service" value="ppc" aria-label="Pay Per Click"> Pay Per Click (PPC)</label>
                        <label><input type="checkbox" name="service" value="content" aria-label="Content Writing"> Content Writing</label>
                        <label><input type="checkbox" name="service" value="smo" aria-label="Social Media"> Social Media (SMO)</label>
                        <label><input type="checkbox" name="service" value="hosting" aria-label="Web Hosting / Maintenance"> Web Hosting / Maintenance</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="cs-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="cs-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="cs-submit-btn" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.cs-preloader');
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
        document.querySelectorAll('.cs-expand-btn').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.cs-expand-content');
                const ellipsis = button.parentElement.querySelector('.cs-ellipsis');
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
            const elements = document.querySelectorAll('.cs-content-block, .cs-data-display, .cs-highlight-section, .cs-product-grid, .cs-metrics-display, .cs-video-section, .cs-questions-section, .cs-navigation-links, .cs-research-section, .cs-business-guide, .cs-stats-contact, .cs-integration-visual, .cs-stat-card, .cs-heading');
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
            const productItems = document.querySelectorAll('.cs-product-item');
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