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






        <?php include 'coustmise-soft-reasrch.php' ?>
        <?php include 'contact-inner-page.php' ?>


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