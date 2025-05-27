<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM & MEDIA PRODUCTION</title>
    <meta name="description" content="Explore Film and Media Production at Jaikvik Technology. Discover professional services in corporate videos, product explainers, TV commercials, YouTube ads, photoshoots, model shoots, interviews, and more.">
    <meta name="keywords" content="Film Production, Corporate Video, Product Explainer, TV Commercials, YouTube Ads, Photoshoot, Model Shoot, Interviews, Jaikvik Technology">
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/swiperJs.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        :root {
            --film-primary-color: #ffffff;
            --film-secondary-color: #ffffff;
            --film-accent-color: #ff0000;
            --film-light-gray: #1a1a1a;
            --film-medium-gray: #ffffff;
            --film-dark-gray: #000000;
            --film-highlight-color: #1a1a1a;
        }

        body {
            color: var(--film-primary-color);
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            background: var(--film-dark-gray);
        }

        html {
            scroll-behavior: smooth;
        }

        .film-preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--film-dark-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.7s ease-out;
        }

        .film-preloader .film-spinner {
            width: 60px;
            height: 60px;
            border: 6px solid var(--film-light-gray);
            border-top: 6px solid var(--film-accent-color);
            border-radius: 50%;
            animation: film-spin 1.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
        }

        @keyframes film-spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .film-hero-section {
            position: relative;
            background: url('https://img.freepik.com/free-vector/focus-group-discussion-movie_82472-700.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--film-primary-color);
            text-align: center;
            z-index: 2;
            overflow: hidden;
            background-color: var(--film-light-gray);
        }

        .film-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .film-hero-content {
            position: relative;
            z-index: 2;
            animation: film-slideIn 1.2s ease-out forwards;
            padding: 0 20px;
            width: 100%;
            margin: 0 auto;
        }

        .film-hero-content h1 {
            font-size: 2rem;
            font-weight: 700;
            overflow: hidden;
            white-space: wrap;
            border-right: 3px solid var(--film-accent-color);
            animation: film-typing 4s steps(50, end), film-blink-caret 0.8s step-end infinite;
            margin: 0 auto;
            color: var(--film-primary-color);
        }

        .film-hero-content p {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: film-fadeIn 1.5s ease-out forwards 0.5s;
            opacity: 0;
            color: var(--film-primary-color);
        }

        @keyframes film-slideIn {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes film-typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes film-blink-caret {
            50% {
                border-color: transparent;
            }
        }

        @keyframes film-fadeIn {
            to {
                opacity: 1;
            }
        }

        .film-title {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--film-primary-color);
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .film-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--film-accent-color);
            transition: width 0.7s ease-out;
        }

        .film-title.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-title.visible::after {
            width: 100%;
        }

        .film-title::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--film-light-gray);
            animation: film-revealText 1.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transform-origin: left;
        }

        @keyframes film-revealText {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .film-content-wrapper {
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
            position: relative;
            z-index: 4;
            background: var(--film-dark-gray);
        }

        .film-description {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--film-medium-gray);
            font-weight: 300;
        }

        .film-text-section {
            margin: 40px 0;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .film-content-section {
            display: flex;
            flex-direction: column;
            gap: 30px;
            background: var(--film-light-gray);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .film-content-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-content-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .film-content-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .film-block-content {
            flex: 1;
        }

        .film-toggle-button {
            background: var(--film-accent-color);
            color: var(--film-primary-color);
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

        .film-toggle-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .film-toggle-button:hover {
            background: #cc0000;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .film-toggle-button:hover::before {
            left: 100%;
        }

        .film-data-display {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin: 40px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .film-data-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-spreadsheet-view,
        .film-info-block {
            flex: 1;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--film-highlight-color);
        }

        .film-spreadsheet-view iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .film-spreadsheet-view iframe:hover {
            filter: brightness(100%) contrast(110%);
        }

        .film-highlight-section {
            background: var(--film-light-gray);
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
            border: 1px solid var(--film-highlight-color);
        }

        .film-highlight-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-highlight-section img {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
            transition: transform 0.5s ease, filter 0.5s ease;
            filter: brightness(80%) contrast(110%);
        }

        .film-highlight-section img:hover {
            transform: scale(1.03);
            filter: brightness(100%) contrast(110%);
        }

        .film-product-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transition: opacity 1.2s ease-out;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .film-product-grid.visible {
            opacity: 1;
        }

        .film-product-item {
            perspective: 1200px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .film-product-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-product-item-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.7s;
            transform-style: preserve-3d;
        }

        .film-product-item:hover .film-product-item-inner {
            transform: rotateY(180deg);
        }

        .film-product-item-front,
        .film-product-item-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
        }

        .film-product-item-back {
            background: var(--film-light-gray);
            color: var(--film-primary-color);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            text-align: center;
        }

        .film-product-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .film-product-item:hover img {
            filter: brightness(100%) contrast(110%);
        }

        .film-product-item p {
            text-align: center;
            margin-top: 15px;
            font-weight: 400;
            color: var(--film-medium-gray);
            padding: 0 10px;
        }

        .film-metrics-display {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .film-metrics-display.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-data-tables,
        .film-visual-charts {
            flex: 1;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--film-highlight-color);
        }

        .film-table {
            width: 100%;
            border-collapse: collapse;
            color: var(--film-medium-gray);
            font-size: 0.85rem;
            margin: 15px 0;
        }

        .film-table,
        .film-table th,
        .film-table td {
            border: 1px solid var(--film-highlight-color);
        }

        .film-table th,
        .film-table td {
            padding: 10px;
            text-align: left;
            font-weight: 400;
        }

        .film-table th {
            background: var(--film-light-gray);
            color: var(--film-primary-color);
        }

        .film-table tr:nth-child(even) {
            background-color: var(--film-highlight-color);
        }

        .film-video-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .film-video-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-video-player,
        .film-video-info {
            flex: 1;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--film-highlight-color);
        }

        .film-video-player video {
            width: 100%;
            border-radius: 12px;
            filter: brightness(80%) contrast(110%);
            transition: filter 0.5s ease;
        }

        .film-video-player video:hover {
            filter: brightness(100%) contrast(110%);
        }

        .film-questions-section {
            margin: 30px 0;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--film-highlight-color);
        }

        .film-questions-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-questions-section details {
            margin: 12px 0;
            border-bottom: 1px solid var(--film-highlight-color);
            padding-bottom: 12px;
        }

        .film-questions-section summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--film-primary-color);
            transition: color 0.4s ease;
            list-style: none;
            position: relative;
            padding-left: 30px;
            font-size: 1rem;
        }

        .film-questions-section summary::before {
            content: '+';
            position: absolute;
            left: 0;
            font-weight: bold;
            transition: transform 0.4s ease;
        }

        .film-questions-section details[open] summary::before {
            content: '-';
            transform: rotate(180deg);
        }

        .film-questions-section summary:hover {
            color: var(--film-accent-color);
        }

        .film-questions-section p {
            padding-left: 30px;
            margin-top: 8px;
            animation: film-fadeIn 0.6s ease-out;
            font-size: 0.9rem;
            color: var(--film-medium-gray);
        }

        .film-navigation-links,
        .film-research-section {
            margin: 30px 0;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid var(--film-highlight-color);
        }

        .film-navigation-links.visible,
        .film-research-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-nav-link {
            color: var(--film-primary-color);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
            font-size: 0.9rem;
        }

        .film-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--film-accent-color);
            transition: width 0.4s ease;
        }

        .film-nav-link:hover {
            color: var(--film-accent-color);
        }

        .film-nav-link:hover::after {
            width: 100%;
        }

        .film-business-guide {
            margin: 30px 0;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--film-highlight-color);
        }

        .film-business-guide.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-guide-button {
            background: var(--film-accent-color);
            color: var(--film-primary-color);
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

        .film-guide-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .film-guide-button:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .film-guide-button:hover::before {
            left: 100%;
        }

        .film-stats-contact {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 30px 0;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            border: 1px solid var(--film-highlight-color);
        }

        .film-stats-contact.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-stats-panel,
        .film-contact-panel {
            flex: 1;
        }

        .film-stats-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }

        .film-stat-card {
            background: var(--film-light-gray);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid var(--film-highlight-color);
            opacity: 0;
            transform: translateY(25px);
        }

        .film-stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            border-color: var(--film-accent-color);
        }

        .film-stat-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--film-primary-color);
            margin: 0;
        }

        .film-stat-card p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--film-medium-gray);
            margin: 8px 0 0;
        }

        .film-certifications-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .film-certifications-list p {
            font-size: 0.85rem;
            font-weight: 400;
            color: var(--film-medium-gray);
            text-align: center;
        }

        .film-contact-panel form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .film-contact-input,
        .film-contact-textarea {
            padding: 10px;
            border: 1px solid var(--film-highlight-color);
            border-radius: 6px;
            background: var(--film-light-gray);
            color: var(--film-primary-color);
            font-size: 0.9rem;
            transition: all 0.4s ease;
            width: 100%;
        }

        .film-contact-input:hover,
        .film-contact-textarea:hover {
            border-color: var(--film-accent-color);
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.12);
        }

        .film-contact-input:focus,
        .film-contact-textarea:focus {
            outline: none;
            border-color: var(--film-accent-color);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.12);
        }

        .film-contact-textarea {
            resize: vertical;
            height: 100px;
        }

        .film-service-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            margin: 8px 0;
        }

        .film-service-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 400;
            color: var(--film-medium-gray);
            transition: color 0.4s ease;
            cursor: pointer;
            font-size: 0.85rem;
        }

        .film-service-options label:hover {
            color: var(--film-primary-color);
        }

        .film-captcha-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--film-medium-gray);
            margin: 8px 0;
        }

        .film-submit-button {
            background: var(--film-accent-color);
            color: var(--film-primary-color);
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

        .film-submit-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .film-submit-button:hover {
            background: #cc0000;
        }

        .film-submit-button:hover::before {
            left: 100%;
        }

        .film-workflow-visual {
            margin: 30px 0;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            background: var(--film-light-gray);
            padding: 20px;
            border-radius: 12px;
        }

        .film-workflow-visual.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .film-workflow-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: var(--film-light-gray);
            position: relative;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--film-highlight-color);
        }

        .film-workflow-diagram {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: 12px;
            background: var(--film-light-gray);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--film-accent-color);
        }

        .film-workflow-diagram svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .film-workflow-diagram circle {
            fill: none;
            stroke: var(--film-medium-gray);
            stroke-width: 1.5;
            stroke-dasharray: 12, 12;
            animation: film-dash 6s linear infinite;
        }

        @keyframes film-dash {
            to {
                stroke-dashoffset: 24;
            }
        }

        .film-workflow-label {
            position: absolute;
            background: var(--film-light-gray);
            padding: 6px 12px;
            border: 1px solid var(--film-highlight-color);
            border-radius: 20px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            color: var(--film-primary-color);
            text-align: center;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .film-workflow-label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-color: var(--film-accent-color);
        }

        .film-workflow-core {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: var(--film-accent-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--film-primary-color);
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            animation: film-pulse 3s ease-in-out infinite;
        }

        .film-workflow-core:hover {
            transform: translate(-50%, -50%) scale(1.05);
        }

        @keyframes film-pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                transform: translate(-50%, -50%) scale(1.03);
            }
        }

        @media (min-width: 576px) {
            .film-hero-content h1 {
                font-size: 2.5rem;
            }

            .film-hero-content p {
                font-size: 1.2rem;
            }

            .film-content-section {
                padding: 25px;
            }

            .film-title {
                font-size: 1.75rem;
            }

            .film-description {
                font-size: 1.05rem;
            }

            .film-workflow-diagram {
                max-width: 350px;
                height: 350px;
            }

            .film-workflow-core {
                width: 120px;
                height: 120px;
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .film-hero-content h1 {
                font-size: 3rem;
            }

            .film-content-section {
                flex-direction: row;
                padding: 30px;
            }

            .film-content-section:nth-child(even) {
                flex-direction: row-reverse;
            }

            .film-content-section img {
                max-width: 550px;
            }

            .film-data-display,
            .film-metrics-display,
            .film-video-section,
            .film-stats-contact {
                flex-direction: row;
            }

            .film-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .film-stats-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .film-service-options {
                grid-template-columns: repeat(2, 1fr);
            }

            .film-workflow-diagram {
                max-width: 400px;
                height: 400px;
            }

            .film-workflow-core {
                width: 140px;
                height: 140px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .film-product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .film-workflow-diagram {
                max-width: 500px;
                height: 500px;
            }

            .film-workflow-core {
                width: 160px;
                height: 160px;
                font-size: 18px;
            }
        }

        @media (min-width: 1200px) {
            .film-product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .film-workflow-diagram {
                max-width: 600px;
                height: 600px;
            }

            .film-workflow-core {
                width: 180px;
                height: 180px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>


    <section class="film-hero-section" aria-label="Film Production Hero">
        <div class="film-hero-content">
            <h1>Create Impactful Stories with Film Production</h1>
            <p>Bring your vision to life with Jaikvik Technology's Film and Media Production Services</p>
            <a href="#film-overview" class="film-toggle-button" role="button" aria-label="Explore Film Production Services">Explore Now</a>
        </div>
    </section>

    <div class="film-content-wrapper">
        <div class="film-text-section">
            <div class="film-content-section">
                <div class="film-block-content">
                    <h2 class="film-title">What Is Film Production?</h2>
                    <p class="film-description">
                        Film production involves the creation of high-quality visual content, including corporate videos, product explainers, TV commercials, YouTube ads, photoshoots, model shoots, and interviews. It combines creative storytelling, advanced technology, and professional expertise to deliver compelling narratives that resonate with audiences.<br>
                        At Jaikvik Technology, we provide end-to-end film production services, from concept development to post-production. Our team uses state-of-the-art equipment and editing software to ensure your content stands out in a crowded digital landscape.<br>
                        Whether you're launching a product, building a corporate brand, or creating engaging ads, our solutions are tailored to meet your needs.<span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <br>Our process includes scriptwriting, storyboarding, filming, editing, and distribution, ensuring a seamless experience. We focus on creating emotionally engaging content that drives audience interaction and achieves your business goals.<br>
                            For example, a retail brand might use our product explainer videos to boost online sales by 30%, while a corporate client could enhance their reputation with a professionally crafted presentation video. Our analytics tools also help track viewer engagement to optimize future projects.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="0" aria-label="Toggle Film Production Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/close-up-camera_1048944-3803309.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Film Production Services">
            </div>

            <div class="film-content-section" id="corporate-video">
                <img src="https://img.freepik.com/free-photo/arrangement-cinema-elements-blue-background-with-copy-space_23-2148416775.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Corporate Video Presentation">
                <div class="film-block-content">
                    <h2 class="film-title">Corporate Video Presentation</h2>
                    <p class="film-description">
                        Corporate video presentations are powerful tools for communicating your brand’s story, values, and services. They are ideal for investor pitches, employee training, or showcasing company milestones.<br>
                        <strong>Professional Quality</strong><br>
                        High-definition visuals and clear audio ensure a polished, professional look.<br>
                        <strong>Custom Storytelling</strong><br>
                        Tailored scripts highlight your brand’s unique strengths and goals.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Wide Applications</strong><br>
                            Use corporate videos for internal communications, client pitches, or marketing campaigns.<br>
                            Jaikvik Technology’s corporate video services include on-site filming, voiceovers, and motion graphics to create engaging content. Our clients have reported a 25% increase in stakeholder engagement after using our videos in presentations.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="1" aria-label="Toggle Corporate Video Description">Read More</button>
                </div>
            </div>

            <div class="film-content-section" id="product-explainer">
                <div class="film-block-content">
                    <h2 class="film-title">Product Explainer Videos</h2>
                    <p class="film-description">
                        Product explainer videos simplify complex products or services, making them easy for customers to understand. They are perfect for e-commerce, SaaS, or tech startups.<br>
                        <strong>Clear Messaging</strong><br>
                        Concise scripts and visuals highlight key features and benefits.<br>
                        <strong>Engaging Formats</strong><br>
                        Animated or live-action videos capture audience attention.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Increased Conversions</strong><br>
                            Explainer videos can boost conversion rates by up to 20% by addressing customer pain points.<br>
                            Our team at Jaikvik Technology creates explainer videos that align with your brand identity, using 2D/3D animation or live footage. We also optimize videos for platforms like YouTube and social media to maximize reach.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="2" aria-label="Toggle Product Explainer Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/video-production-backstage-scenes-creating-video-content-professional-team_124865-39894.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Product Explainer Videos">
            </div>

            <div class="film-content-section" id="tv-commercial">
                <img src="https://img.freepik.com/free-photo/press-reporter-fallowing-leads-case_23-2149579746.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="TV Commercial Ads">
                <div class="film-block-content">
                    <h2 class="film-title">TV Commercial Ads</h2>
                    <p class="film-description">
                        TV commercial ads deliver high-impact messages to a broad audience, ideal for brand launches or product promotions.<br>
                        <strong>Broadcast Quality</strong><br>
                        Shot with professional cameras and edited for TV standards.<br>
                        <strong>Creative Concepts</strong><br>
                        Memorable storylines that resonate with viewers.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Wide Reach</strong><br>
                            Commercials can be adapted for regional or national broadcasts.<br>
                            Jaikvik Technology handles everything from casting to post-production, ensuring your ad meets industry standards. Our TV ads have helped clients achieve a 15% increase in brand recall.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="3" aria-label="Toggle TV Commercial Description">Read More</button>
                </div>
            </div>

            <div class="film-content-section" id="youtube-ads">
                <div class="film-block-content">
                    <h2 class="film-title">YouTube Ads</h2>
                    <p class="film-description">
                        YouTube ads are a cost-effective way to reach targeted audiences on the world’s largest video platform.<br>
                        <strong>Targeted Campaigns</strong><br>
                        Precise audience targeting based on demographics and interests.<br>
                        <strong>Engaging Formats</strong><br>
                        Skippable, non-skippable, or bumper ads tailored to your goals.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>High ROI</strong><br>
                            Optimized ads can achieve up to 10% higher click-through rates.<br>
                            Our team creates YouTube ads with compelling visuals and calls-to-action, optimized for mobile and desktop. We also provide analytics to track ad performance and refine strategies.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="4" aria-label="Toggle YouTube Ads Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/man-filming-with-professional-camera_23-2149066342.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="YouTube Ads">
            </div>

            <div class="film-content-section" id="photoshoot">
                <img src="https://img.freepik.com/premium-photo/cinema-camera-film-set-scenes-background-film-crew-production_1048944-12611948.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Photoshoot Services">
                <div class="film-block-content">
                    <h2 class="film-title">Photoshoot Services</h2>
                    <p class="film-description">
                        Professional photoshoots capture stunning visuals for marketing, e-commerce, or branding.<br>
                        <strong>High-Quality Images</strong><br>
                        Shot with professional lighting and edited for perfection.<br>
                        <strong>Versatile Applications</strong><br>
                        Ideal for product catalogs, social media, or websites.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Custom Styling</strong><br>
                            Tailored to your brand’s aesthetic and goals.<br>
                            Jaikvik Technology’s photoshoot services include location scouting, styling, and post-processing. Our clients have seen a 20% increase in social media engagement with our high-quality images.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="5" aria-label="Toggle Photoshoot Description">Read More</button>
                </div>
            </div>

            <div class="film-content-section" id="model-shoot">
                <div class="film-block-content">
                    <h2 class="film-title">Model Shoot</h2>
                    <p class="film-description">
                        Model shoots create captivating visuals for fashion, lifestyle, or product campaigns.<br>
                        <strong>Professional Talent</strong><br>
                        Work with experienced models and photographers.<br>
                        <strong>Creative Direction</strong><br>
                        Concepts that align with your brand’s vision.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Dynamic Results</strong><br>
                            Perfect for advertising, lookbooks, or social media.<br>
                            Our model shoot services include casting, makeup, and styling to ensure flawless results. Clients have reported a 30% boost in campaign engagement with our model shoot visuals.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="6" aria-label="Toggle Model Shoot Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/premium-photo/photographer-developing-film-darkroom-red-light_1280275-61227.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Model Shoot Services">
            </div>

            <div class="film-content-section" id="interview-videos">
                <img src="https://img.freepik.com/premium-photo/silhouette-production-crew-team-working-photo-shooting-studio-lighting-flash-led-headligh_258335-2020.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Interview Videos">
                <div class="film-block-content">
                    <h2 class="film-title">Interview Videos</h2>
                    <p class="film-description">
                        Interview videos showcase thought leadership, customer testimonials, or employee stories.<br>
                        <strong>Authentic Storytelling</strong><br>
                        Capture genuine moments with professional filming.<br>
                        <strong>Versatile Use</strong><br>
                        Ideal for corporate websites, social media, or events.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Engaging Content</strong><br>
                            Builds trust and credibility with audiences.<br>
                            Jaikvik Technology’s interview video services include multi-camera setups, lighting, and editing to create polished content. Our clients have used interview videos to increase audience trust by 25%.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="7" aria-label="Toggle Interview Videos Description">Read More</button>
                </div>
            </div>

            <div class="film-content-section">
                <div class="film-block-content">
                    <h2 class="film-title">Production Packages</h2>
                    <p class="film-description">
                        Our production packages offer comprehensive solutions for businesses of all sizes.<br>
                        <strong>Customizable Plans</strong><br>
                        Choose from basic, standard, or premium packages.<br>
                        <strong>End-to-End Services</strong><br>
                        Includes filming, editing, and distribution.<br><span class="film-ellipsis">...</span><span class="film-hidden-content" style="display: none;">
                            <strong>Cost-Effective</strong><br>
                            Bundled services save time and budget.<br>
                            Jaikvik Technology’s packages are designed to meet diverse needs, from small businesses needing a single video to enterprises requiring full-scale campaigns. Our packages have helped clients reduce production costs by 15% while maintaining high quality.
                        </span>
                    </p>
                    <button class="film-toggle-button" data-section="8" aria-label="Toggle Production Packages Description">Read More</button>
                </div>
                <img src="https://img.freepik.com/free-photo/flat-lay-film-elements-white-background_23-2148416833.jpg?uid=R186472209&ga=GA1.1.455755995.1738954286&semt=ais_hybrid&w=740" alt="Production Packages">
            </div>
        </div>



        <section class="film-workflow-visual">
            <h2 class="film-title">Film Production Workflow</h2>
            <div class="film-workflow-container">
                <div class="film-workflow-diagram">
                    <svg viewBox="0 0 700 700">
                        <circle cx="350" cy="350" r="120" />
                        <circle cx="350" cy="350" r="180" />
                        <circle cx="350" cy="350" r="240" />
                        <circle cx="350" cy="350" r="300" />
                    </svg>
                    <div class="film-workflow-core">Production Workflow</div>
                    <div class="film-workflow-label" style="top: 8%; left: 50%; transform: translateX(-50%);">Pre-Production</div>
                    <div class="film-workflow-label" style="top: 18%; left: 8%; transform: translateY(-50%);">Scriptwriting</div>
                    <div class="film-workflow-label" style="top: 50%; left: 4%; transform: translateY(-50%);">Filming</div>
                    <div class="film-workflow-label" style="bottom: 18%; left: 8%; transform: translateY(50%);">Post-Production</div>
                    <div class="film-workflow-label" style="bottom: 8%; right: 8%; transform: translateY(50%);">Distribution</div>
                    <div class="film-workflow-label" style="top: 50%; right: 4%; transform: translateY(-50%);">Editing</div>
                    <div class="film-workflow-label" style="top: 18%; right: 8%; transform: translateY(-50%);">Storyboarding</div>
                    <div class="film-workflow-label" style="top: 38%; left: 18%; transform: translate(-50%, -50%);">Casting</div>
                    <div class="film-workflow-label" style="top: 38%; right: 18%; transform: translate(50%, -50%);">Analytics</div>
                </div>
            </div>
        </section>


        <?php include 'film-industry-rearsch.php' ?>

        <section class="film-stats-contact">
            <div class="film-stats-panel">
                <h2 class="film-title">Rising Numbers, Building Confidence</h2>
                <div class="film-stats-container">
                    <div class="film-stat-card">
                        <h3>1050+</h3>
                        <p>Global Clients Served</p>
                    </div>
                    <div class="film-stat-card">
                        <h3>25+</h3>
                        <p>Countries Served</p>
                    </div>
                    <div class="film-stat-card">
                        <h3>07+</h3>
                        <p>Years of Trust</p>
                    </div>
                    <div class="film-stat-card">
                        <h3>2500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="film-stat-card">
                        <h3>95%</h3>
                        <p>Client Retention</p>
                    </div>
                    <div class="film-stat-card">
                        <h3>50+</h3>
                        <p>Team of Professionals</p>
                    </div>
                </div>
                <div class="film-certifications-list">
                    <div>
                        <p class="film-description">4.9 Star Customer Rating by 250+ verified customers</p>
                    </div>
                    <div>
                        <p class="film-description">Adobe Premiere Pro Certification completed by .. on June 28, 2023</p>
                    </div>
                </div>
            </div>
            <div class="film-contact-panel">
                <h2 class="film-title">Let's Discuss Your Project</h2>
                <p class="film-description">Fill out the form and our team will get back to you</p>
                <form aria-label="Contact Form">
                    <input type="text" class="film-contact-input" placeholder="Name" required aria-label="Name">
                    <input type="email" class="film-contact-input" placeholder="Email" required aria-label="Email">
                    <input type="tel" class="film-contact-input" placeholder="Phone Number" required aria-label="Phone Number">
                    <label>What services interest you?</label>
                    <div class="film-service-options">
                        <label><input type="checkbox" name="service" value="corporate-video" aria-label="Corporate Video"> Corporate Video</label>
                        <label><input type="checkbox" name="service" value="product-explainer" aria-label="Product Explainer"> Product Explainer</label>
                        <label><input type="checkbox" name="service" value="tv-commercial" aria-label="TV Commercial"> TV Commercial</label>
                        <label><input type="checkbox" name="service" value="youtube-ads" aria-label="YouTube Ads"> YouTube Ads</label>
                        <label><input type="checkbox" name="service" value="photoshoot" aria-label="Photoshoot"> Photoshoot</label>
                        <label><input type="checkbox" name="service" value="model-shoot" aria-label="Model Shoot"> Model Shoot</label>
                        <label><input type="checkbox" name="service" value="interview" aria-label="Interview"> Interview</label>
                        <label><input type="checkbox" name="service" value="production-packages" aria-label="Production Packages"> Production Packages</label>
                        <label><input type="checkbox" name="service" value="others" aria-label="Others"> Others</label>
                    </div>
                    <textarea class="film-contact-textarea" placeholder="Write Your Message" required aria-label="Message"></textarea>
                    <div class="film-captcha-verification">
                        <label><input type="checkbox" required aria-label="CAPTCHA Verification"> I'm not a robot</label>
                        <span>reCAPTCHA Privacy - Terms</span>
                    </div>
                    <button type="submit" class="film-submit-button" aria-label="Submit Contact Form">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>

    <script>
        window.addEventListener('load', () => {
            const preloader = document.querySelector('.film-preloader');
            if (preloader) {
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => preloader.remove(), 700);
                }, 1200);
            }

            setupFilmAnimations();
        });

        document.querySelectorAll('.film-toggle-button').forEach(button => {
            button.addEventListener('click', () => {
                const section = button.getAttribute('data-section');
                const content = button.parentElement.querySelector('.film-hidden-content');
                const ellipsis = button.parentElement.querySelector('.film-ellipsis');
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

        function setupFilmAnimations() {
            const elements = document.querySelectorAll('.film-content-section, .film-data-display, .film-highlight-section, .film-product-grid, .film-metrics-display, .film-video-section, .film-questions-section, .film-navigation-links, .film-research-section, .film-business-guide, .film-stats-contact, .film-workflow-visual, .film-stat-card, .film-title');
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

            const productItems = document.querySelectorAll('.film-product-item');
            productItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add('visible');
                }, index * 200);
            });
        }

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