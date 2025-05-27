<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Market Report</title>
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: #ffffff;
            --accent-color: #ff0000;
            --light-gray: #1a1a1a;
            --medium-gray: #ffffff;
            --dark-gray: #000000;
            --highlight-color: #1a1a1a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--dark-gray);
            color: var(--primary-color);
            line-height: 1.6;
        }

        .main-container {
            width: 88%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 0;
        }

        .header-section {
            background-color: var(--light-gray);
            padding: 45px 0;
            text-align: center;
            margin-bottom: 55px;
            border-bottom: 3px solid var(--accent-color);
        }

        .main-title {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--accent-color);
            animation: slide-in-title 1s ease-in-out;
        }

        @keyframes slide-in-title {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 500;
            margin: 40px 0 20px;
            color: var(--accent-color);
            position: relative;
        }

        .sub-title {
            font-size: 1.4rem;
            font-weight: 400;
            margin: 30px 0 15px;
            color: var(--secondary-color);
        }

        .text-paragraph {
            margin-bottom: 18px;
            font-size: 1.05rem;
            animation: reveal-text 1.2s ease-in-out;
        }

        @keyframes reveal-text {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .info-container {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 30px 0;
            border: 1px solid var(--accent-color);
            position: relative;
            overflow: hidden;
        }

        .info-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: glow 3s infinite;
        }

        @keyframes glow {
            0% {
                left: -100%;
            }

            50% {
                left: 100%;
            }

            100% {
                left: 100%;
            }
        }

        .primary-button {
            display: inline-flex;
            align-items: center;
            background-color: var(--accent-color);
            color: var(--primary-color);
            padding: 12px 22px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .primary-button:hover {
            background-color: #cc0000;
            transform: translateY(-3px);
        }

        .modal-overlay {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            overflow-y: auto;
            animation: reveal-overlay 0.5s ease;
        }

        @keyframes reveal-overlay {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal-content {
            background-color: var(--light-gray);
            margin: 12% auto;
            padding: 35px;
            width: 90%;
            max-width: 500px;
            position: relative;
            animation: scale-in-popup 0.5s ease;
        }

        @keyframes scale-in-popup {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .close-button {
            position: absolute;
            top: 15px;
            right: 20px;
            color: var(--secondary-color);
            font-size: 28px;
            font-weight: 600;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .close-button:hover {
            color: var(--accent-color);
            transform: rotate(90deg);
        }

        .form-field {
            margin-bottom: 22px;
        }

        .form-field label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .form-field input,
        .form-field select {
            width: 100%;
            padding: 12px;
            border: 1px solid #555;
            background-color: #222;
            color: var(--primary-color);
            font-size: 0.95rem;
            transition: border-color 0.3s ease;
        }

        .form-field input:focus,
        .form-field select:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .chart-container {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .chart-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 35px;
        }

        .chart-title {
            text-align: center;
            margin-bottom: 18px;
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--accent-color);
        }

        .histogram-chart {
            height: 300px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            margin-top: 18px;
        }

        .chart-bar {
            width: 50px;
            background: var(--accent-color);
            margin: 0 10px;
            position: relative;
            transform: scaleY(0);
            transform-origin: bottom;
            animation: expand-bar 1.5s ease-out forwards;
        }

        @keyframes expand-bar {
            0% {
                transform: scaleY(0);
            }

            100% {
                transform: scaleY(1);
            }
        }

        .bar-label {
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9rem;
            text-align: center;
            width: 100%;
            color: var(--secondary-color);
            animation: reveal-caption 1.8s ease-out;
        }

        .bar-value {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.9rem;
            color: var(--secondary-color);
            animation: reveal-caption 1.8s ease-out;
        }

        @keyframes reveal-caption {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            background-color: var(--light-gray);
        }

        .table-header,
        .table-cell {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid #2a2a2a;
        }

        .table-header {
            background-color: var(--highlight-color);
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .table-row {
            transition: background-color 0.3s ease;
        }

        .table-row:hover {
            background-color: #2a2a2a;
        }

        .market-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            margin: 30px 0;
            border: 2px solid var(--accent-color);
            transition: transform 0.3s ease;
        }

        .market-image:hover {
            transform: scale(1.03);
        }

        .nav-tabs {
            display: flex;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tab-button {
            padding: 10px 20px;
            background-color: var(--light-gray);
            border: 1px solid var(--accent-color);
            color: var(--secondary-color);
            cursor: pointer;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .tab-button:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .tab-button.active {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: slide-in-panel 0.5s ease;
        }

        @keyframes slide-in-panel {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .toc-section {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .toc-section ul {
            list-style: none;
            padding-left: 20px;
        }

        .toc-section ul li {
            margin-bottom: 10px;
            position: relative;
            font-size: 1rem;
        }

        .toc-section ul li:before {
            content: '→';
            color: var(--accent-color);
            position: absolute;
            left: -18px;
        }

        .toc-section ul ul {
            padding-left: 30px;
        }

        .toc-section a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .toc-section a:hover {
            color: var(--accent-color);
        }

        .list-section {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .list-section ol {
            padding-left: 22px;
        }

        .list-section ol li {
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .main-container {
                width: 92%;
                padding: 25px 0;
            }

            .main-title {
                font-size: 2.4rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .sub-title {
                font-size: 1.2rem;
            }

            .chart-grid {
                grid-template-columns: 1fr;
            }

            .modal-content {
                margin: 20% auto;
                width: 95%;
                padding: 25px;
            }

            .nav-tabs {
                flex-direction: column;
            }

            .tab-button {
                width: 100%;
                margin-bottom: 8px;
            }
        }
    </style>
</head>

<body>
    <div id="digitalMarketingSampleModal" class="modal-overlay">
        <div class="modal-content" id="modalContent">
            <span class="close-button" id="modalCloseButton">×</span>
            <h2 class="section-title" id="modalTitle">Request Free Sample</h2>
            <p class="text-paragraph" id="modalDescription">Please fill out this form to download the free Digital Marketing market report sample.</p>

            <form id="digitalMarketingSampleForm" class="form-container">
                <div class="form-field" id="nameField">
                    <label for="nameInput" class="form-label">Full Name</label>
                    <input type="text" id="nameInput" name="name" required>
                </div>

                <div class="form-field" id="emailField">
                    <label for="emailInput" class="form-label">Email Address</label>
                    <input type="email" id="emailInput" name="email" required>
                </div>

                <div class="form-field" id="companyField">
                    <label for="companyInput" class="form-label">Company Name</label>
                    <input type="text" id="companyInput" name="company" required>
                </div>

                <div class="form-field" id="jobTitleField">
                    <label for="jobTitleInput" class="form-label">Job Title</label>
                    <input type="text" id="jobTitleInput" name="jobTitle" required>
                </div>

                <div class="form-field" id="industryField">
                    <label for="industrySelect" class="form-label">Industry</label>
                    <select id="industrySelect" name="industry" required>
                        <option value="">Select Industry</option>
                        <option value="Technology">Technology</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Finance">Finance</option>
                        <option value="Retail">Retail</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-field" id="countryField">
                    <label for="countryInput" class="form-label">Country</label>
                    <input type="text" id="countryInput" name="country" required>
                </div>

                <button type="submit" class="primary-button" id="submitSampleButton">Download Sample Report</button>
            </form>
        </div>
    </div>

    <header class="header-section" id="mainHeader">
        <div class="main-container" id="headerContainer">
            <h1 class="main-title" id="reportTitle">Digital Marketing Market Report</h1>
            <p class="text-paragraph" id="reportSubtitle">Global Analysis & Forecasts 2024-2030</p>
            <button id="openDigitalMarketingModal" class="primary-button">Request Free Sample</button>
        </div>
    </header>

    <div class="main-container" id="mainContent">
        <div class="info-container" id="marketHighlights">
            <h3 class="sub-title">Market Highlights</h3>
            <p class="text-paragraph">The global digital marketing market was valued at <strong>USD 28.5 billion in 2024</strong> and is projected to grow at a <strong>CAGR of 12.3%</strong> from 2025 to 2030, reaching <strong>USD 58.7 billion by 2030</strong>.</p>
            <p class="text-paragraph">Key drivers include the demand for personalized marketing strategies, digital transformation initiatives, and the rise of data-driven marketing solutions.</p>
        </div>

        <div class="nav-tabs" id="navigationTabs">
            <button class="tab-button active" onclick="displayTab('digitalMarketingOverview')" id="overviewTab">Overview</button>
            <button class="tab-button" onclick="displayTab('tableOfContents')" id="contentsTab">Table of Contents</button>
            <button class="tab-button" onclick="displayTab('marketSegmentation')" id="segmentsTab">Segmentation</button>
            <button class="tab-button" onclick="displayTab('regionalAnalysis')" id="regionalTab">Regional Analysis</button>
            <button class="tab-button" onclick="displayTab('keyPlayers')" id="playersTab">Key Companies</button>
        </div>

        <div id="digitalMarketingOverview" class="tab-content active">
            <h2 class="section-title">Market Overview</h2>
            <img src="https://images.unsplash.com/photo-1516321310767-2f915dddb827?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Digital Marketing Market Overview" class="market-image" id="overviewImage">

            <p class="text-paragraph">The global digital marketing market is expanding rapidly due to the need for targeted campaigns, enhanced analytics, and integration with emerging technologies like AI and machine learning.</p>

            <div class="chart-container" id="marketSizeChart">
                <h3 class="sub-title">Market Size Projection (2024-2030)</h3>
                <div class="histogram-chart" id="digitalMarketingGrowthChart">
                    <!-- Bars will be added by JavaScript -->
                </div>
            </div>

            <h3 class="sub-title">Key Trends Driving Growth</h3>
            <ul class="trend-list" id="trendsList">
                <li class="trend-item">Rise of AI-driven advertising</li>
                <li class="trend-item">Increased focus on video marketing</li>
                <li class="trend-item">Growth of social media advertising</li>
                <li class="trend-item">Adoption of programmatic advertising</li>
                <li class="trend-item">Emphasis on data privacy and compliance</li>
            </ul>
        </div>

        <div id="marketSegmentation" class="tab-content">
            <h2 class="section-title">Market Segmentation</h2>

            <div class="chart-grid" id="segmentCharts">
                <div class="chart-col" id="solutionChartCol">
                    <div class="chart-container">
                        <div class="chart-title">By Solution Type (2024 Revenue Share)</div>
                        <div class="histogram-chart" id="solutionChart">
                            <!-- Bars will be added by JavaScript -->
                        </div>
                    </div>
                </div>
                <div class="chart-col" id="deploymentChartCol">
                    <div class="chart-container">
                        <div class="chart-title">By Deployment (2024 Revenue Share)</div>
                        <div class="histogram-chart" id="deploymentChart">
                            <!-- Bars will be added by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="chart-grid" id="additionalSegmentCharts">
                <div class="chart-col" id="enterpriseChartCol">
                    <div class="chart-container">
                        <div class="chart-title">By Enterprise Size (2024 Revenue Share)</div>
                        <div class="histogram-chart" id="enterpriseChart">
                            <!-- Bars will be added by JavaScript -->
                        </div>
                    </div>
                </div>
                <div class="chart-col" id="endUseChartCol">
                    <div class="chart-container">
                        <div class="chart-title">By End-use (2024 Revenue Share)</div>
                        <div class="histogram-chart" id="endUseChart">
                            <!-- Bars will be added by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="sub-title">Solution Type Growth Rates</h3>
            <table class="data-table" id="solutionTable">
                <thead>
                    <tr class="table-row">
                        <th class="table-header">Solution Type</th>
                        <th class="table-header">2024 Revenue Share</th>
                        <th class="table-header">Projected CAGR (2025-2030)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td class="table-cell">Social Media Marketing</td>
                        <td class="table-cell">28.5%</td>
                        <td class="table-cell">12.8%</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">SEO</td>
                        <td class="table-cell">24.3%</td>
                        <td class="table-cell">12.4%</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Content Marketing</td>
                        <td class="table-cell">22.7%</td>
                        <td class="table-cell">12.1%</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Email Marketing</td>
                        <td class="table-cell">16.8%</td>
                        <td class="table-cell">11.9%</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Others</td>
                        <td class="table-cell">7.7%</td>
                        <td class="table-cell">11.5%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="regionalAnalysis" class="tab-content">
            <h2 class="section-title">Regional Analysis</h2>
            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Global Digital Marketing Market" class="market-image" id="regionalImage">

            <div class="chart-container" id="regionalMarketChart">
                <div class="chart-title">Regional Market Share (2024)</div>
                <div class="histogram-chart" id="regionalShareChart">
                    <!-- Bars will be added by JavaScript -->
                </div>
            </div>

            <h3 class="sub-title">Key Regional Insights</h3>
            <div class="info-container" id="northAmericaInfo">
                <h4 class="sub-title">North America</h4>
                <p class="text-paragraph">Holds 38.2% market share in 2024, driven by advanced digital ecosystems and high investment in marketing technologies.</p>
            </div>

            <div class="info-container" id="asiaPacificInfo">
                <h4 class="sub-title">Asia Pacific</h4>
                <p class="text-paragraph">Fastest-growing region with a 13.8% CAGR, fueled by rapid digital adoption in India and China.</p>
            </div>

            <div class="info-container" id="europeInfo">
                <h4 class="sub-title">Europe</h4>
                <p class="text-paragraph">Strong growth in Germany and the UK, driven by investments in e-commerce and social media marketing.</p>
            </div>

            <h3 class="sub-title">Country-Level Growth Projections</h3>
            <table class="data-table" id="countryGrowthTable">
                <thead>
                    <tr class="table-row">
                        <th class="table-header">Country</th>
                        <th class="table-header">Market Size (2024)</th>
                        <th class="table-header">Projected CAGR</th>
                        <th class="table-header">Key Drivers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td class="table-cell">U.S.</td>
                        <td class="table-cell">$10.9B</td>
                        <td class="table-cell">12.0%</td>
                        <td class="table-cell">E-commerce, tech innovation</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">China</td>
                        <td class="table-cell">$6.3B</td>
                        <td class="table-cell">14.2%</td>
                        <td class="table-cell">Social media, mobile marketing</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Germany</td>
                        <td class="table-cell">$4.8B</td>
                        <td class="table-cell">11.8%</td>
                        <td class="table-cell">E-commerce, content marketing</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">India</td>
                        <td class="table-cell">$3.9B</td>
                        <td class="table-cell">14.5%</td>
                        <td class="table-cell">Digital adoption, SMEs</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">UK</td>
                        <td class="table-cell">$3.2B</td>
                        <td class="table-cell">11.5%</td>
                        <td class="table-cell">Social media, SEO</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="keyPlayers" class="tab-content">
            <h2 class="section-title">Key Market Players</h2>
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Digital Marketing Companies" class="market-image" id="playersImage">

            <div class="chart-container" id="companyShareChart">
                <h3 class="sub-title">Market Share of Leading Companies (2024)</h3>
                <div class="histogram-chart" id="companyChart">
                    <!-- Bars will be added by JavaScript -->
                </div>
            </div>

            <h3 class="sub-title">Recent Developments</h3>
            <table class="data-table" id="developmentsTable">
                <thead>
                    <tr class="table-row">
                        <th class="table-header">Company</th>
                        <th class="table-header">Date</th>
                        <th class="table-header">Development</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td class="table-cell">WPP</td>
                        <td class="table-cell">Jun 2023</td>
                        <td class="table-cell">Launched AI-powered advertising platform</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Publicis Groupe</td>
                        <td class="table-cell">Jul 2023</td>
                        <td class="table-cell">Expanded programmatic advertising services</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Omnicom Group</td>
                        <td class="table-cell">Aug 2023</td>
                        <td class="table-cell">Introduced advanced analytics for social media</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">Dentsu</td>
                        <td class="table-cell">Sep 2023</td>
                        <td class="table-cell">Enhanced data privacy solutions</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">IPG</td>
                        <td class="table-cell">Oct 2023</td>
                        <td class="table-cell">Launched video marketing suites</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="sub-title">Emerging Companies</h3>
            <ul class="company-list" id="emergingCompanies">
                <li class="company-item">HubSpot</li>
                <li class="company-item">Hootsuite</li>
                <li class="company-item">Sprout Social</li>
                <li class="company-item">Marketo</li>
                <li class="company-item">Act-On Software</li>
            </ul>
        </div>

        <div id="tableOfContents" class="tab-content">
            <h2 class="section-title">Table of Contents</h2>
            <div class="toc-section" id="tocContainer">
                <h3 class="sub-title">Chapter 1. Methodology and Scope</h3>
                <ul class="toc-list" id="methodologyList">
                    <li class="toc-item">1.1. Market Segmentation and Scope</li>
                    <li class="toc-item">1.2. Research Methodology
                        <ul class="toc-sublist">
                            <li class="toc-subitem">1.2.1. Information Procurement</li>
                        </ul>
                    </li>
                    <li class="toc-item">1.3. Information or Data Analysis</li>
                    <li class="toc-item">1.4. Methodology</li>
                    <li class="toc-item">1.5. Research Scope and Assumptions</li>
                    <li class="toc-item">1.6. Market Formulation & Validation</li>
                    <li class="toc-item">1.7. Country Based Segment Share Calculation</li>
                    <li class="toc-item">1.8. List of Data Sources</li>
                </ul>

                <h3 class="sub-title">Chapter 2. Executive Summary</h3>
                <ul class="toc-list" id="executiveSummaryList">
                    <li class="toc-item">2.1. Market Outlook</li>
                    <li class="toc-item">2.2. Segment Outlook</li>
                    <li class="toc-item">2.3. Competitive Insights</li>
                </ul>

                <h3 class="sub-title">Chapter 3. Digital Marketing Market Variables, Trends, & Scope</h3>
                <ul class="toc-list" id="marketTrendsList">
                    <li class="toc-item">3.1. Market Lineage Outlook</li>
                    <li class="toc-item">3.2. Market Dynamics
                        <ul class="toc-sublist">
                            <li class="toc-subitem">3.2.1. Market Driver Analysis</li>
                            <li class="toc-subitem">3.2.2. Market Restraint Analysis</li>
                            <li class="toc-subitem">3.2.3. Industry Challenge</li>
                        </ul>
                    </li>
                    <li class="toc-item">3.3. Digital Marketing Market Analysis Tools
                        <ul class="toc-sublist">
                            <li class="toc-subitem">3.3.1. Industry Analysis - Porter’s
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">3.3.1.1. Bargaining power of the suppliers</li>
                                    <li class="toc-subsubitem">3.3.1.2. Bargaining power of the buyers</li>
                                    <li class="toc-subsubitem">3.3.1.3. Threats of substitution</li>
                                    <li class="toc-subsubitem">3.3.1.4. Threats from new entrants</li>
                                    <li class="toc-subsubitem">3.3.1.5. Competitive rivalry</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">3.3.2. PESTEL Analysis
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">3.3.2.1. Political landscape</li>
                                    <li class="toc-subsubitem">3.3.2.2. Economic landscape</li>
                                    <li class="toc-subsubitem">3.3.2.3. Social landscape</li>
                                    <li class="toc-subsubitem">3.3.2.4. Technological landscape</li>
                                    <li class="toc-subsubitem">3.3.2.5. Environmental landscape</li>
                                    <li class="toc-subsubitem">3 trinidad-and-tobago">3.3.2.6. Legal landscape</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Chapter 4. Digital Marketing Market Solution Type Outlook</h3>
                <ul class="toc-list" id="solutionOutlook">
                    <li class="toc-item">4.1. Digital Marketing Market, By Solution Type Analysis & Market Share, 2024 & 2030</li>
                    <li class="toc-item">4.2. Social Media Marketing
                        <ul class="toc-sublist">
                            <li class="toc-subitem">4.2.1. Social Media Marketing market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">4.3. SEO
                        <ul class="toc-sublist">
                            <li class="toc-subitem">4.3.1. SEO market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">4.4. Content Marketing
                        <ul class="toc-sublist">
                            <li class="toc-subitem">4.4.1. Content Marketing market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">4.5. Email Marketing
                        <ul class="toc-sublist">
                            <li class="toc-subitem">4.5.1. Email Marketing market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">4.6. Others
                        <ul class="toc-sublist">
                            <li class="toc-subitem">4.6.1. Others market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Chapter 5. Digital Marketing Market Deployment Outlook</h3>
                <ul class="toc-list" id="deploymentOutlook">
                    <li class="toc-item">5.1. Digital Marketing Market, By Deployment Analysis & Market Share, 2024 & 2030</li>
                    <li class="toc-item">5.2. Cloud
                        <ul class="toc-sublist">
                            <li class="toc-subitem">5.2.1. Cloud market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">5.3. On-premise
                        <ul class="toc-sublist">
                            <li class="toc-subitem">5.3.1. On-premise market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Chapter 6. Digital Marketing Market Enterprise Size Outlook</h3>
                <ul class="toc-list" id="enterpriseOutlook">
                    <li class="toc-item">6.1. Digital Marketing Market, By Enterprise Size Analysis & Market Share, 2024 & 2030</li>
                    <li class="toc-item">6.2. Large Enterprises
                        <ul class="toc-sublist">
                            <li class="toc-subitem">6.2.1. Large Enterprises market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">6.3. SMEs
                        <ul class="toc-sublist">
                            <li class="toc-subitem">6.3.1. SMEs market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Chapter 7. Digital Marketing Market End Use Outlook</h3>
                <ul class="toc-list" id="endUseOutlook">
                    <li class="toc-item">7.1. Digital Marketing Market, By End Use Analysis & Market Share, 2024 & 2030</li>
                    <li class="toc-item">7.2. Technology
                        <ul class="toc-sublist">
                            <li class="toc-subitem">7.2.1. Technology market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">7.3. Healthcare
                        <ul class="toc-sublist">
                            <li class="toc-subitem">7.3.1. Healthcare market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">7.4. Finance
                        <ul class="toc-sublist">
                            <li class="toc-subitem">7.4.1. Finance market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item"> 7.5. Retail
                        <ul class="toc-sublist">
                            <li class="toc-subitem">7.5.1. Retail market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">7.6. Manufacturing
                        <ul class="toc-sublist">
                            <li class="toc-subitem">7.6.1. Manufacturing market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                    <li class="toc-item">7.7. Others
                        <ul class="toc-sublist">
                            <li class="toc-subitem">7.7.1. Others market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Chapter 8. Digital Marketing Market: Regional Estimates & Trend Analysis</h3>
                <ul class="toc-list" id="regionalOutlook">
                    <li class="toc-item">8.1. Digital Marketing Market Share, By Region, 2024 & 2030 (USD Billion)</li>
                    <li class="toc-item">8.2. North America
                        <ul class="toc-sublist">
                            <li class="toc-subitem">8.2.1. North America Digital Marketing Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                            <li class="toc-subitem">8.2.2. U.S.
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">8.2.2.1. U.S. Digital Marketing Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">8.2.3. Canada
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">8.2.3.1. Canada Digital Marketing Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">8.2.4. Mexico
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">8.2.4.1. Mexico Digital Marketing Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Chapter 9. Competitive Landscape</h3>
                <ul class="toc-list" id="competitiveLandscape">
                    <li class="toc-item">9.1. Company Categorization</li>
                    <li class="toc-item">9.2. Company Market Positioning</li>
                    <li class="toc-item">9.3. Company Heat Map Analysis</li>
                    <li class="toc-item">9.4. Company Profiles/Listing
                        <ul class="toc-sublist">
                            <li class="toc-subitem">9.4.1. WPP
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.1.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.1.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.1.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.1.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.2. Publicis Groupe
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.2.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.2.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.2.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.2.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.3. Omnicom Group
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.3.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.3.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.3.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.3.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.4. Dentsu
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.4.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.4.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.4.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.4.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.5. IPG
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.5.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.5.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.5.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.5.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.6. HubSpot
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.6.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.6.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.6.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.6.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.7. Hootsuite
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.7.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.7.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.7.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.7.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.8. Sprout Social
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.8.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.8.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.8.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.8.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.9. Marketo
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.9.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.9.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.9.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.9.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                            <li class="toc-subitem">9.4.10. Act-On Software
                                <ul class="toc-subsublist">
                                    <li class="toc-subsubitem">9.4.10.1. Participant’s Overview</li>
                                    <li class="toc-subsubitem">9.4.10.2. Financial Performance</li>
                                    <li class="toc-subsubitem">9.4.10.3. Product Benchmarking</li>
                                    <li class="toc-subsubitem">9.4.10.4. Strategic Initiatives</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <h2 class="section-title">List of Tables</h2>
                <div class="list-section" id="tablesList">
                    <ol class="ordered-list">
                        <li class="list-item">Global Digital Marketing market size estimates & forecasts 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Global Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Global Digital Marketing market, by solution type 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Global Digital Marketing market, by deployment 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Global Digital Marketing market, by enterprise size 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Global Digital Marketing market, by end use 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Social Media Marketing Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">SEO Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Content Marketing Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Email Marketing Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Others Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Cloud Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">On-premise Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">Large Enterprises Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                        <li class="list-item">SMEs Digital Marketing market, by region 2018 - 2030 (USD Billion)</li>
                    </ol>
                </div>

                <h2 class="section-title">List of Figures</h2>
                <div class="list-section" id="figuresList">
                    <ol class="ordered-list">
                        <li class="list-item">Digital Marketing market segmentation</li>
                        <li class="list-item">Information procurement</li>
                        <li class="list-item">Data analysis models</li>
                        <li class="list-item">Market formulation and validation</li>
                        <li class="list-item">Data validating & publishing</li>
                        <li class="list-item">Market snapshot</li>
                        <li class="list-item">Segment snapshot, by solution type</li>
                        <li class="list-item">Segment snapshot, by deployment</li>
                        <li class="list-item">Segment snapshot, by enterprise size</li>
                        <li class="list-item">Segment snapshot by end use</li>
                        <li class="list-item">Competitive landscape snapshot</li>
                        <li class="list-item">Digital Marketing market value, 2018–2030 (USD Billion)</li>
                        <li class="list-item">Digital Marketing market - Industry value chain analysis</li>
                        <li class="list-item">Digital Marketing market - Market trends</li>
                        <li class="list-item">Digital Marketing market: Porter’s analysis</li>
                        <li class="list-item">Digital Marketing market: PESTEL analysis</li>
                        <li class="list-item">Digital Marketing market, by solution type: Key takeaways</li>
                        <li class="list-item">Digital Marketing market, by solution type: Market share, 2024 & 2030</li>
                        <li class="list-item">Social Media Marketing Digital Marketing market estimates & forecasts, 2018 - 2030 (USD Billion)</li>
                    </ol>
                </div>
            </div>

            <div class="info-container" id="reportCoverage">
                <h3 class="sub-title">Report Coverage</h3>
                <p class="text-paragraph">This report provides comprehensive analysis of the Digital Marketing market from 2018-2030, including:</p>
                <ul class="coverage-list" id="coverageItems">
                    <li class="coverage-item">Competitive benchmarking</li>
                    <li class="coverage-item">Historical data & forecasts</li>
                    <li class="coverage-item">Company revenue shares</li>
                    <li class="coverage-item">Regional opportunities</li>
                    <li class="coverage-item">Latest trends & dynamics</li>
                </ul>
                <button id="downloadFullReport" class="primary-button">Download Full Report</button>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("digitalMarketingSampleModal");
        const openModalBtn = document.getElementById("openDigitalMarketingModal");
        const closeBtn = document.getElementById("modalCloseButton");
        const sampleForm = document.getElementById("digitalMarketingSampleForm");
        const fullReportBtn = document.getElementById("downloadFullReport");

        openModalBtn.onclick = function() {
            modal.style.display = "block";
        };

        closeBtn.onclick = function() {
            modal.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };

        sampleForm.onsubmit = function(e) {
            e.preventDefault();
            const formData = {
                name: document.getElementById("nameInput").value,
                email: document.getElementById("emailInput").value,
                company: document.getElementById("companyInput").value,
                jobTitle: document.getElementById("jobTitleInput").value,
                industry: document.getElementById("industrySelect").value,
                country: document.getElementById("countryInput").value,
                timestamp: new Date().toISOString()
            };
            console.log("Digital Marketing Sample Request Form Data:", formData);
            generateSamplePDF(formData);
            modal.style.display = "none";
            sampleForm.reset();
            return false;
        };

        function generateSamplePDF(formData) {
            const content = `
                Digital Marketing Market Report - Sample
                ====================================================
                
                Thank you for your interest, ${formData.name}!
                
                This sample report contains key highlights from our full Digital Marketing market analysis.
                
                Request Details:
                - Name: ${formData.name}
                - Email: ${formData.email}
                - Company: ${formData.company}
                - Industry: ${formData.industry}
                - Country: ${formData.country}
                
                Key Market Highlights:
                - Market Size (2024): $28.5 billion
                - Projected CAGR (2025-2030): 12.3%
                - 2030 Projection: $58.7 billion
                
                This is a sample document. The full report contains complete analysis,
                charts, and data tables across all market segments.
                
                Requested on: ${new Date().toLocaleString()}
            `;
            const blob = new Blob([content], {
                type: 'application/pdf'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Digital_Marketing_Market_Report_Sample.pdf';
            document.body.appendChild(a);
            a.click();
            setTimeout(() => {
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }, 100);
            alert("Thank you! Your sample report is downloading now.");
        }

        fullReportBtn.onclick = function() {
            alert("Please complete your purchase to download the full report.");
        };

        function displayTab(tabId) {
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
            }
            const tabButtons = document.getElementsByClassName('tab-button');
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active');
            }
            document.getElementById(tabId).classList.add('active');
            event.currentTarget.classList.add('active');
        }

        const digitalMarketingMarketSizeData = [{
                year: '2024',
                value: 28.5
            },
            {
                year: '2025',
                value: 32.0
            },
            {
                year: '2026',
                value: 35.9
            },
            {
                year: '2027',
                value: 40.3
            },
            {
                year: '2028',
                value: 45.3
            },
            {
                year: '2029',
                value: 50.9
            },
            {
                year: '2030',
                value: 58.7
            }
        ];

        const solutionData = [{
                name: 'Social Media',
                value: 28.5
            },
            {
                name: 'SEO',
                value: 24.3
            },
            {
                name: 'Content',
                value: 22.7
            },
            {
                name: 'Email',
                value: 16.8
            },
            {
                name: 'Others',
                value: 7.7
            }
        ];

        const deploymentData = [{
                name: 'Cloud',
                value: 68.4
            },
            {
                name: 'On-premise',
                value: 31.6
            }
        ];

        const enterpriseData = [{
                name: 'Large Enterprises',
                value: 55.2
            },
            {
                name: 'SMEs',
                value: 44.8
            }
        ];

        const endUseData = [{
                name: 'Technology',
                value: 30.1
            },
            {
                name: 'Healthcare',
                value: 20.4
            },
            {
                name: 'Finance',
                value: 18.7
            },
            {
                name: 'Retail',
                value: 15.2
            },
            {
                name: 'Manufacturing',
                value: 10.6
            },
            {
                name: 'Others',
                value: 5.0
            }
        ];

        const regionalData = [{
                name: 'North America',
                value: 38.2
            },
            {
                name: 'Asia Pacific',
                value: 28.7
            },
            {
                name: 'Europe',
                value: 22.4
            },
            {
                name: 'Latin America',
                value: 6.8
            },
            {
                name: 'MEA',
                value: 3.9
            }
        ];

        const companyData = [{
                name: 'WPP',
                value: 18.5
            },
            {
                name: 'Publicis',
                value: 15.2
            },
            {
                name: 'Omnicom',
                value: 12.7
            },
            {
                name: 'Dentsu',
                value: 10.4
            },
            {
                name: 'IPG',
                value: 8.9
            },
            {
                name: 'Others',
                value: 34.3
            }
        ];

        function renderChart(containerId, data, isCurrency = false, isPercentage = false) {
            const container = document.getElementById(containerId);
            container.innerHTML = '';
            const maxValue = Math.max(...data.map(item => item.value));
            data.forEach((item, index) => {
                const barHeight = (item.value / maxValue) * 100;
                const bar = document.createElement('div');
                bar.className = 'chart-bar';
                bar.style.height = `${barHeight}%`;
                bar.style.animationDelay = `${index * 0.15}s`;
                const barLabel = document.createElement('div');
                barLabel.className = 'bar-label';
                barLabel.textContent = item.name;
                const barValue = document.createElement('div');
                barValue.className = 'bar-value';
                if (isCurrency) {
                    barValue.textContent = `$${item.value}B`;
                } else if (isPercentage) {
                    barValue.textContent = `${item.value}%`;
                } else {
                    barValue.textContent = item.value;
                }
                bar.appendChild(barValue);
                bar.appendChild(barLabel);
                container.appendChild(bar);
            });
        }

        window.onload = function() {
            renderChart('digitalMarketingGrowthChart', digitalMarketingMarketSizeData, true);
            renderChart('solutionChart', solutionData, false, true);
            renderChart('deploymentChart', deploymentData, false, true);
            renderChart('enterpriseChart', enterpriseData, false, true);
            renderChart('endUseChart', endUseData, false, true);
            renderChart('regionalShareChart', regionalData, false, true);
            renderChart('companyChart', companyData, false, true);
        };
    </script>
</body>

</html>