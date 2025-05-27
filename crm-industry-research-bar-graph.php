<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Relationship Management Market Report</title>
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: #ffffff;
            --accent-color: #ff0000;
            --light-gray: #1a1a1a;
            --medium-gray: #ffffff;
            --dark-gray: #1a1a2e;
            --highlight-color: #1a1a1a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Mulish", sans-serif
        }

        body {
            background-color: var(--dark-gray);
            color: var(--primary-color);
            line-height: 1.6;
        }

        .content-wrapper {
            width: 88%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 0;
        }

        .page-header {
            background-color: var(--light-gray);
            padding: 45px 0;
            text-align: center;
            margin-bottom: 55px;
            border-bottom: 3px solid var(--accent-color);
        }

        h1 {
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

        h2 {
            font-size: 2.2rem;
            font-weight: 500;
            margin: 40px 0 20px;
            color: var(--accent-color);
            position: relative;
        }

        h3 {
            font-size: 1.4rem;
            font-weight: 400;
            margin: 30px 0 15px;
            color: var(--secondary-color);
        }

        p {
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

        .info-section {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 30px 0;
            border: 1px solid var(--accent-color);
            position: relative;
            overflow: hidden;
        }

        .info-section::before {
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

        .action-button {
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

        .action-button:hover {
            background-color: #cc0000;
            transform: translateY(-3px);
        }

        .popup-overlay {
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

        .popup-content {
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

        .dismiss-button {
            position: absolute;
            top: 15px;
            right: 20px;
            color: var(--secondary-color);
            font-size: 28px;
            font-weight: 600;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .dismiss-button:hover {
            color: var(--accent-color);
            transform: rotate(90deg);
        }

        .input-group {
            margin-bottom: 22px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #555;
            background-color: #222;
            color: var(--primary-color);
            font-size: 0.95rem;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus,
        .input-group select:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .graph-section {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .graph-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 35px;
        }

        .graph-heading {
            text-align: center;
            margin-bottom: 18px;
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--accent-color);
        }

        .histogram {
            height: 300px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            margin-top: 18px;
        }

        .histogram-bar {
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

        .bar-caption {
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

        .bar-data {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            background-color: var(--light-gray);
        }

        th,
        td {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid #2a2a2a;
        }

        th {
            background-color: var(--highlight-color);
            color: var(--accent-color);
            font-weight: 500;
            font-size: 0.9rem;
        }

        tr {
            transition: background-color 0.3s ease;
        }

        tr:hover {
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

        .navigation-tabs {
            display: flex;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tab-link {
            padding: 10px 20px;
            background-color: var(--light-gray);
            border: 1px solid var(--accent-color);
            color: var(--secondary-color);
            cursor: pointer;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .tab-link:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .tab-link.selected {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.selected {
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

        .contents-section {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .contents-section ul {
            list-style: none;
            padding-left: 20px;
        }

        .contents-section ul li {
            margin-bottom: 10px;
            position: relative;
            font-size: 1rem;
        }

        .contents-section ul li:before {
            content: '→';
            color: var(--accent-color);
            position: absolute;
            left: -18px;
        }

        .contents-section ul ul {
            padding-left: 30px;
        }

        .contents-section a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contents-section a:hover {
            color: var(--accent-color);
        }

        .lists-section {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .lists-section ol {
            padding-left: 22px;
        }

        .lists-section ol li {
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                width: 92%;
                padding: 25px 0;
            }

            h1 {
                font-size: 2.4rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            h3 {
                font-size: 1.2rem;
            }

            .graph-grid {
                grid-template-columns: 1fr;
            }

            .popup-content {
                margin: 20% auto;
                width: 95%;
                padding: 25px;
            }

            .navigation-tabs {
                flex-direction: column;
            }

            .tab-link {
                width: 100%;
                margin-bottom: 8px;
            }
        }
    </style>
</head>

<body>
    <div id="requestPopup" class="popup-overlay">
        <div class="popup-content">
            <span class="dismiss-button">×</span>
            <h2>Request Free Sample</h2>
            <p>Please fill out this form to download the free sample report.</p>

            <form id="requestForm">
                <div class="input-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="name" required>
                </div>

                <div class="input-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" id="emailAddress" name="email" required>
                </div>

                <div class="input-group">
                    <label for="companyName">Company Name</label>
                    <input type="text" id="companyName" name="company" required>
                </div>

                <div class="input-group">
                    <label for="position">Job Title</label>
                    <input type="text" id="position" name="jobTitle" required>
                </div>

                <div class="input-group">
                    <label for="sector">Industry</label>
                    <select id="sector" name="industry" required>
                        <option value="">Select Industry</option>
                        <option value="BFSI">Banking & Financial Services</option>
                        <option value="Retail">Retail</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="IT">IT & Telecom</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Government">Government & Education</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="location">Country</label>
                    <input type="text" id="location" name="country" required>
                </div>

                <button type="submit" class="action-button">Download Sample Report</button>
            </form>
        </div>
    </div>

    <header class="page-header">
        <div class="content-wrapper">
            <h1>Customer Relationship Management Market Report</h1>
            <p>Global Analysis & Forecasts 2024-2030</p>
            <!-- <button id="openRequestPopup" class="action-button">Request Free Sample</button> -->
        </div>
    </header>

    <div class="content-wrapper">
        <div class="info-section">
            <h3>Market Highlights</h3>
            <p>The global CRM market was valued at <strong>USD 73.40 billion in 2024</strong> and is projected to grow at a <strong>CAGR of 14.6%</strong> from 2025 to 2030, reaching <strong>USD 163.16 billion by 2030</strong>.</p>
            <p>Key drivers include hyper-personalization, AI & automation, and robust social media customer service solutions.</p>
        </div>
        <!-- 
        <div class="navigation-tabs">
            <button class="tab-link selected" onclick="showTab('marketSummary')">Overview</button>
            <button class="tab-link" onclick="showTab('contents')">Table of Contents</button>
            <button class="tab-link" onclick="showTab('marketSegments')">Segmentation</button>
            <button class="tab-link" onclick="showTab('regionalInsights')">Regional Analysis</button>
            <button class="tab-link" onclick="showTab('marketPlayers')">Key Companies</button>
        </div>

        <div id="marketSummary" class="tab-panel selected">
            <h2>Market Overview</h2>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="CRM Market Overview" class="market-image">

            <p>The global customer relationship management market is experiencing significant growth driven by digital transformation across industries. Organizations are increasingly adopting CRM platforms to enhance customer engagement, streamline operations, and gain competitive advantage.</p>

            <div class="graph-section">
                <h3>Market Size Projection (2024-2030)</h3>
                <div class="histogram" id="marketGrowthGraph">
                    Bars will be added by JavaScript 
    </div>
    </div>

    <h3>Key Trends Driving Growth</h3>
    <ul>
        <li>Hyper-personalization of customer service</li>
        <li>Integration of AI and automation</li>
        <li>Social media monitoring and engagement</li>
        <li>Cloud-based CRM solutions</li>
        <li>Mobile CRM accessibility</li>
    </ul>
    </div>

    <div id="marketSegments" class="tab-panel">
        <h2>Market Segmentation</h2>

        <div class="graph-grid">
            <div class="graph-col">
                <div class="graph-section">
                    <div class="graph-heading">By Solution (2024 Revenue Share)</div>
                    <div class="histogram" id="solutionGraph">
                        <Bars will be added by JavaScript 
    </div>
    </div>
    </div>
    <div class="graph-col">
        <div class="graph-section">
            <div class="graph-heading">By Deployment (2024 Revenue Share)</div>
            <div class="histogram" id="deploymentGraph">
                Bars will be added by JavaScript 
            </div>
        </div>
    </div>
    </div>

    <div class="graph-grid">
        <div class="graph-col">
            <div class="graph-section">
                <div class="graph-heading">By Enterprise Size (2024 Revenue Share)</div>
                <div class="histogram" id="enterpriseGraph">
                    <!-- Bars will be added by JavaScript 
                </div>
            </div>
        </div>
        <div class="graph-col">
            <div class="graph-section">
                <div class="graph-heading">By End-use (2024 Revenue Share)</div>
                <div class="histogram" id="enduseGraph">
                    <!-- Bars will be added by JavaScript
                </div>
            </div>
        </div>
    </div>

    <h3>Solution Segment Growth Rates</h3>
    <table>
        <thead>
            <tr>
                <th>Solution</th>
                <th>2024 Revenue Share</th>
                <th>Projected CAGR (2025-2030)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Customer Service</td>
                <td>22.0%</td>
                <td>14.2%</td>
            </tr>
            <tr>
                <td>Customer Experience Management</td>
                <td>18.5%</td>
                <td>15.1%</td>
            </tr>
            <tr>
                <td>Analytics</td>
                <td>15.3%</td>
                <td>16.8%</td>
            </tr>
            <tr>
                <td>Marketing Automation</td>
                <td>14.7%</td>
                <td>14.9%</td>
            </tr>
            <tr>
                <td>Social Media Monitoring</td>
                <td>10.2%</td>
                <td>17.2%</td>
            </tr>
        </tbody>
    </table>
    </div>

    <div id="regionalInsights" class="tab-panel">
        <h2>Regional Analysis</h2>
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Global CRM Market" class="market-image">

        <div class="graph-section">
            <div class="graph-heading">Regional Market Share (2024)</div>
            <div class="histogram" id="regionalGraph">
                <!-- Bars will be added by JavaScript 
            </div>
        </div>

        <h3>Key Regional Insights</h3>
        <div class="info-section">
            <h4>North America</h4>
            <p>Dominates with 42.8% market share in 2024. The U.S. leads in mobile CRM adoption and AI integration.</p>
        </div>

        <div class="info-section">
            <h4>Europe</h4>
            <p>Strong growth in UK and Germany with government initiatives and strategic partnerships driving adoption.</p>
        </div>

        <div class="info-section">
            <h4>Asia Pacific</h4>
            <p>Fastest growing region at 16.3% CAGR, led by China and India with expanding e-commerce sectors.</p>
        </div>

        <h3>Country-Level Growth Projections</h3>
        <table>
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Market Size (2024)</th>
                    <th>Projected CAGR</th>
                    <th>Key Drivers</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>U.S.</td>
                    <td>$31.4B</td>
                    <td>14.2%</td>
                    <td>Mobile CRM, AI integration</td>
                </tr>
                <tr>
                    <td>China</td>
                    <td>$12.8B</td>
                    <td>16.8%</td>
                    <td>Cloud adoption, e-commerce</td>
                </tr>
                <tr>
                    <td>India</td>
                    <td>$5.2B</td>
                    <td>17.5%</td>
                    <td>SMB adoption, digital initiatives</td>
                </tr>
                <tr>
                    <td>Germany</td>
                    <td>$7.1B</td>
                    <td>13.9%</td>
                    <td>Enterprise solutions</td>
                </tr>
                <tr>
                    <td>UK</td>
                    <td>$6.3B</td>
                    <td>14.1%</td>
                    <td>Government partnerships</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="marketPlayers" class="tab-panel">
        <h2>Key Market Players</h2>
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="CRM Companies" class="market-image">

        <div class="graph-section">
            <h3>Market Share of Leading Companies (2024)</h3>
            <div class="histogram" id="companyGraph">
                <!-- Bars will be added by JavaScript
            </div>
        </div>

        <h3>Recent Developments</h3>
        <table>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Date</th>
                    <th>Development</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Salesforce</td>
                    <td>Jul 2023</td>
                    <td>Launched 'Sales Planning' solution powered by CRM data</td>
                </tr>
                <tr>
                    <td>Creatio</td>
                    <td>Nov 2023</td>
                    <td>Partnered with Zolution in Singapore for no-code platform</td>
                </tr>
                <tr>
                    <td>Oracle</td>
                    <td>Dec 2023</td>
                    <td>Initiated 'Mostaqbali' program in Saudi Arabia for tech training</td>
                </tr>
                <tr>
                    <td>Zoho</td>
                    <td>Jan 2023</td>
                    <td>Launched new version of 'Bigin' CRM for small businesses</td>
                </tr>
                <tr>
                    <td>SugarCRM</td>
                    <td>Jun 2023</td>
                    <td>Partnered with sales-i for enhanced B2B sales analytics</td>
                </tr>
            </tbody>
        </table>

        <h3>Emerging Companies</h3>
        <ul>
            <li>Insightly, Inc.</li>
            <li>Creatio</li>
            <li>CopperCRM, Inc.</li>
            <li>Freshworks Inc.</li>
            <li>Zoho Corporation</li>
        </ul>
    </div>

    <div id="contents" class="tab-panel">
        <h2>Table of Contents</h2>
        <div class="contents-section">
            <h3>Chapter 1. Methodology and Scope</h3>
            <ul>
                <li>1.1. Market Segmentation and Scope</li>
                <li>1.2. Research Methodology
                    <ul>
                        <li>1.2.1. Information Procurement</li>
                    </ul>
                </li>
                <li>1.3. Information or Data Analysis</li>
                <li>1.4. Methodology</li>
                <li>1.5. Research Scope and Assumptions</li>
                <li>1.6. Market Formulation & Validation</li>
                <li>1.7. Country Based Segment Share Calculation</li>
                <li>1.8. List of Data Sources</li>
            </ul>

            <h3>Chapter 2. Executive Summary</h3>
            <ul>
                <li>2.1. Market Outlook</li>
                <li>2.2. Segment Outlook</li>
                <li>2.3. Competitive Insights</li>
            </ul>

            <h3>Chapter 3. Customer Relationship Management Market Variables, Trends, & Scope</h3>
            <ul>
                <li>3.1. Market Lineage Outlook</li>
                <li>3.2. Market Dynamics
                    <ul>
                        <li>3.2.1. Market Driver Analysis</li>
                        <li>3.2.2. Market Restraint Analysis</li>
                        <li>3.2.3. Industry Challenge</li>
                    </ul>
                </li>
                <li>3.3. Customer Relationship Management Market Analysis Tools
                    <ul>
                        <li>3.3.1. Industry Analysis - Porter’s
                            <ul>
                                <li>3.3.1.1. Bargaining power of the suppliers</li>
                                <li>3.3.1.2. Bargaining power of the buyers</li>
                                <li>3.3.1.3. Threats of substitution</li>
                                <li>3.3.1.4. Threats from new entrants</li>
                                <li>3.3.1.5. Competitive rivalry</li>
                            </ul>
                        </li>
                        <li>3.3.2. PESTEL Analysis
                            <ul>
                                <li>3.3.2.1. Political landscape</li>
                                <li>3.3.2.2. Economic landscape</li>
                                <li>3.3.2.3. Social landscape</li>
                                <li>3.3.2.4. Technological landscape</li>
                                <li>3.3.2.5. Environmental landscape</li>
                                <li>3.3.2.6. Legal landscape</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <h3>Chapter 4. Customer Relationship Management Market Platform Outlook</h3>
            <ul>
                <li>4.1. Customer Relationship Management Market, By Platform Analysis & Market Share, 2024 & 2030</li>
                <li>4.2. Customer Service
                    <ul>
                        <li>4.2.1. Customer service market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>4.3. Customer Experience Management
                    <ul>
                        <li>4.3.1. Customer experience management market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>4.4. Analytics
                    <ul>
                        <li>4.4.1. Analytics market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>4.5. Marketing Automation
                    <ul>
                        <li>4.5.1. Marketing automation market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>4.6. Salesforce Automation
                    <ul>
                        <li>4.6.1. Salesforce automation market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>4.7. Social Media Monitoring
                    <ul>
                        <li>4.7.1. Social Media Monitoring market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>4.8. Others
                    <ul>
                        <li>4.8.1. Others market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
            </ul>

            <h3>Chapter 5. Customer Relationship Management Market Deployment Outlook</h3>
            <ul>
                <li>5.1. Customer Relationship Management Market, By Deployment Analysis & Market Share, 2024 & 2030</li>
                <li>5.2. On Premise
                    <ul>
                        <li>5.2.1. On Premise market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>5.3. Cloud
                    <ul>
                        <li>5.3.1. Cloud market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
            </ul>

            <h3>Chapter 6. Customer Relationship Management Market Enterprise Size Outlook</h3>
            <ul>
                <li>6.1. Customer Relationship Management Market, By Enterprise Size Analysis & Market Share, 2024 & 2030</li>
                <li>6.2. Large Enterprise
                    <ul>
                        <li>6.2.1. Large enterprise market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>6.3. Small & Medium Enterprises
                    <ul>
                        <li>6.3.1. Small & medium enterprises market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
            </ul>

            <h3>Chapter 7. Customer Relationship Management Market End Use Outlook</h3>
            <ul>
                <li>7.1. Customer Relationship Management Market, By End Use Analysis & Market Share, 2024 & 2030</li>
                <li>7.2. BFSI
                    <ul>
                        <li>7.2.1. BFSI market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>7.3. Retail
                    <ul>
                        <li>7.3.1. Retail market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>7.4. Healthcare
                    <ul>
                        <li>7.4.1. Healthcare market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>7.5. Telecom & IT
                    <ul>
                        <li>7.5.1. Telecom & IT market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>7.6. Discrete Manufacturing
                    <ul>
                        <li>7.6.1. Discrete manufacturing market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>7.7. Government & Education
                    <ul>
                        <li>7.7.1. Government & education market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
                <li>7.8. Others
                    <ul>
                        <li>7.8.1. Others market estimates and forecasts, 2018 - 2030 (USD Billion)</li>
                    </ul>
                </li>
            </ul>

            <h3>Chapter 8. Customer Relationship Management Market: Regional Estimates & Trend Analysis</h3>
            <ul>
                <li>8.1. Customer Relationship Management Market Share, By Region, 2024 & 2030 (USD Billion)</li>
                <li>8.2. North America
                    <ul>
                        <li>8.2.1. North America Customer Relationship Management Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                        <li>8.2.2. U.S.
                            <ul>
                                <li>8.2.2.1. U.S. Customer Relationship Management Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                            </ul>
                        </li>
                        <li>8.2.3. Canada
                            <ul>
                                <li>8.2.3.1. Canada Customer Relationship Management Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                            </ul>
                        </li>
                        <li>8.2.4. Mexico
                            <ul>
                                <li>8.2.4.1. Mexico Customer Relationship Management Market Estimates and Forecasts, 2018 - 2030 (USD Billion)</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <h3>Chapter 9. Competitive Landscape</h3>
            <ul>
                <li>9.1. Company Categorization</li>
                <li>9.2. Company Market Positioning</li>
                <li>9.3. Company Heat Map Analysis</li>
                <li>9.4. Company Profiles/Listing
                    <ul>
                        <li>9.4.1. Adobe
                            <ul>
                                <li>9.4.1.1. Participant’s Overview</li>
                                <li>9.4.1.2. Financial Performance</li>
                                <li>9.4.1.3. Product Benchmarking</li>
                                <li>9.4.1.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.2. ClickUp
                            <ul>
                                <li>9.4.2.1. Participant’s Overview</li>
                                <li>9.4.2.2. Financial Performance</li>
                                <li>9.4.2.3. Product Benchmarking</li>
                                <li>9.4.2.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.3. Copper CRM, Inc.
                            <ul>
                                <li>9.4.3.1. Participant’s Overview</li>
                                <li>9.4.3.2. Financial Performance</li>
                                <li>9.4.3.3. Product Benchmarking</li>
                                <li>9.4.3.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.4. Creatio
                            <ul>
                                <li>9.4.4.1. Participant’s Overview</li>
                                <li>9.4.4.2. Financial Performance</li>
                                <li>9.4.4.3. Product Benchmarking</li>
                                <li>9.4.4.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.5. Freshworks Inc.
                            <ul>
                                <li>9.4.5.1. Participant’s Overview</li>
                                <li>9.4.5.2. Financial Performance</li>
                                <li>9.4.5.3. Product Benchmarking</li>
                                <li>9.4.5.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.6. Insightly Inc.
                            <ul>
                                <li>9.4.6.1. Participant’s Overview</li>
                                <li>9.4.6.2. Financial Performance</li>
                                <li>9.4.6.3. Product Benchmarking</li>
                                <li>9.4.6.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.7. Microsoft Corporation
                            <ul>
                                <li>9.4.7.1. Participant’s Overview</li>
                                <li>9.4.7.2. Financial Performance</li>
                                <li>9.4.7.3. Product Benchmarking</li>
                                <li>9.4.7.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.8. monday.com
                            <ul>
                                <li>9.4.8.1. Participant’s Overview</li>
                                <li>9.4.8.2. Financial Performance</li>
                                <li>9.4.8.3. Product Benchmarking</li>
                                <li>9.4.8.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.9. Nimble
                            <ul>
                                <li>9.4.9.1. Participant’s Overview</li>
                                <li>9.4.9.2. Financial Performance</li>
                                <li>9.4.9.3. Product Benchmarking</li>
                                <li>9.4.9.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.10. Oracle Corporation
                            <ul>
                                <li>9.4.10.1. Participant’s Overview</li>
                                <li>9.4.10.2. Financial Performance</li>
                                <li>9.4.10.3. Product Benchmarking</li>
                                <li>9.4.10.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.11. Salesforce.com, Inc.
                            <ul>
                                <li>9.4.11.1. Participant’s Overview</li>
                                <li>9.4.11.2. Financial Performance</li>
                                <li>9.4.11.3. Product Benchmarking</li>
                                <li>9.4.11.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.12. SAP SE
                            <ul>
                                <li>9.4.12.1. Participant’s Overview</li>
                                <li>9.4.12.2. Financial Performance</li>
                                <li>9.4.12.3. Product Benchmarking</li>
                                <li>9.4.12.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.13. SugarCRM Inc.
                            <ul>
                                <li>9.4.13.1. Participant’s Overview</li>
                                <li>9.4.13.2. Financial Performance</li>
                                <li>9.4.13.3. Product Benchmarking</li>
                                <li>9.4.13.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.14. Zendesk
                            <ul>
                                <li>9.4.14.1. Participant’s Overview</li>
                                <li>9.4.14.2. Financial Performance</li>
                                <li>9.4.14.3. Product Benchmarking</li>
                                <li>9.4.14.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                        <li>9.4.15. Zoho Corporation Pvt. Ltd.
                            <ul>
                                <li>9.4.15.1. Participant’s Overview</li>
                                <li>9.4.15.2. Financial Performance</li>
                                <li>9.4.15.3. Product Benchmarking</li>
                                <li>9.4.15.4. Strategic Initiatives</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <h2>List of Tables</h2>
        <div class="lists-section">
            <ol>
                <li>Global customer relationship management market size estimates & forecasts 2018 - 2030 (USD Billion)</li>
                <li>Global customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Global customer relationship management market, by platform 2018 - 2030 (USD Billion)</li>
                <li>Global customer relationship management market, by deployment 2018 - 2030 (USD Billion)</li>
                <li>Global customer relationship management market, by enterprise size 2018 - 2030 (USD Billion)</li>
                <li>Global customer relationship management market, by end use 2018 - 2030 (USD Billion)</li>
                <li>Customer service customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Analytics customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Marketing automation customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Salesforce automation customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Social media monitoring customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Others customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>On Premise customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Cloud customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Large enterprise customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
                <li>Small & medium enterprises customer relationship management market, by region 2018 - 2030 (USD Billion)</li>
            </ol>
        </div>

        <h2>List of Figures</h2>
        <div class="lists-section">
            <ol>
                <li>Customer relationship management market segmentation</li>
                <li>Information procurement</li>
                <li>Data analysis models</li>
                <li>Market formulation and validation</li>
                <li>Data validating & publishing</li>
                <li>Market snapshot</li>
                <li>Segment snapshot, by platform</li>
                <li>Segment snapshot, by deployment</li>
                <li>Segment snapshot, by enterprise size</li>
                <li>Segment snapshot by end use</li>
                <li>Competitive landscape snapshot</li>
                <li>Customer relationship management market value, 2018–2030 (USD Billion)</li>
                <li>Customer relationship management market - Industry value chain analysis</li>
                <li>Customer relationship management market - Market trends</li>
                <li>Customer relationship management market: Porter’s analysis</li>
                <li>Customer relationship management market: PESTEL analysis</li>
                <li>Customer relationship management market, by platform: Key takeaways</li>
                <li>Customer relationship management market, by platform: Market share, 2024 & 2030</li>
                <li>Customer service customer relationship management market estimates & forecasts, 2018 - 2030 (USD Billion)</li>
            </ol>
        </div>
    </div>

    <div class="info-section">
        <h3>Report Coverage</h3>
        <p>This report provides comprehensive analysis of the CRM market from 2018-2030, including:</p>
        <ul>
            <li>Competitive benchmarking</li>
            <li>Historical data & forecasts</li>
            <li>Company revenue shares</li>
            <li>Regional opportunities</li>
            <li>Latest trends & dynamics</li>
        </ul>
        <button id="getFullReport" class="action-button">Download Full Report</button>
    </div> -->
    </div>

    <script>
        // Popup functionality
        const popup = document.getElementById("requestPopup");
        const openPopupBtn = document.getElementById("openRequestPopup");
        const dismissBtn = document.getElementsByClassName("dismiss-button")[0];
        const fullReportBtn = document.getElementById("getFullReport");
        const requestForm = document.getElementById("requestForm");

        openPopupBtn.onclick = function() {
            popup.style.display = "block";
        }

        dismissBtn.onclick = function() {
            popup.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }

        requestForm.onsubmit = function(e) {
            e.preventDefault();

            const formData = {
                name: document.getElementById("fullName").value,
                email: document.getElementById("emailAddress").value,
                company: document.getElementById("companyName").value,
                jobTitle: document.getElementById("position").value,
                industry: document.getElementById("sector").value,
                country: document.getElementById("location").value,
                timestamp: new Date().toISOString()
            };

            console.log("Sample Request Form Data:", formData);

            downloadSamplePDF(formData);

            popup.style.display = "none";
            requestForm.reset();

            return false;
        }

        function downloadSamplePDF(formData) {
            const content = `
                Customer Relationship Management Market Report - Sample
                ====================================================
                
                Thank you for your interest, ${formData.name}!
                
                This sample report contains key highlights from our full CRM market analysis.
                
                Request Details:
                - Name: ${formData.name}
                - Email: ${formData.email}
                - Company: ${formData.company}
                - Industry: ${formData.industry}
                - Country: ${formData.country}
                
                Key Market Highlights:
                - Market Size (2024): $73.40 billion
                - Projected CAGR (2025-2030): 14.6%
                - 2030 Projection: $163.16 billion
                
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
            a.download = 'CRM_Market_Report_Sample.pdf';

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
        }

        function showTab(tabId) {
            const tabPanels = document.getElementsByClassName('tab-panel');
            for (let i = 0; i < tabPanels.length; i++) {
                tabPanels[i].classList.remove('selected');
            }

            const tabLinks = document.getElementsByClassName('tab-link');
            for (let i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove('selected');
            }

            document.getElementById(tabId).classList.add('selected');
            event.currentTarget.classList.add('selected');
        }

        const marketSizeData = [{
                year: '2024',
                value: 73.4
            },
            {
                year: '2025',
                value: 82.43
            },
            {
                year: '2026',
                value: 93.2
            },
            {
                year: '2027',
                value: 105.8
            },
            {
                year: '2028',
                value: 120.1
            },
            {
                year: '2029',
                value: 136.5
            },
            {
                year: '2030',
                value: 163.16
            }
        ];

        const solutionData = [{
                name: 'Customer Service',
                value: 22.0
            },
            {
                name: 'Experience Mgmt',
                value: 18.5
            },
            {
                name: 'Analytics',
                value: 15.3
            },
            {
                name: 'Marketing Auto',
                value: 14.7
            },
            {
                name: 'Salesforce Auto',
                value: 12.3
            },
            {
                name: 'Social Media',
                value: 10.2
            },
            {
                name: 'Others',
                value: 7.0
            }
        ];

        const deploymentData = [{
                name: 'Cloud',
                value: 58.2
            },
            {
                name: 'On-Premise',
                value: 41.8
            }
        ];

        const enterpriseData = [{
                name: 'Large',
                value: 59.9
            },
            {
                name: 'SME',
                value: 40.1
            }
        ];

        const enduseData = [{
                name: 'Retail',
                value: 24.5
            },
            {
                name: 'BFSI',
                value: 20.3
            },
            {
                name: 'IT & Telecom',
                value: 18.7
            },
            {
                name: 'Healthcare',
                value: 15.2
            },
            {
                name: 'Manufacturing',
                value: 12.1
            },
            {
                name: 'Government',
                value: 6.8
            },
            {
                name: 'Others',
                value: 2.4
            }
        ];

        const regionalData = [{
                name: 'North America',
                value: 42.8
            },
            {
                name: 'Europe',
                value: 28.4
            },
            {
                name: 'Asia Pacific',
                value: 21.6
            },
            {
                name: 'Middle East & Africa',
                value: 4.7
            },
            {
                name: 'Latin America',
                value: 2.5
            }
        ];

        const companyData = [{
                name: 'Salesforce',
                value: 19.8
            },
            {
                name: 'SAP',
                value: 12.4
            },
            {
                name: 'Microsoft',
                value: 11.7
            },
            {
                name: 'Oracle',
                value: 9.3
            },
            {
                name: 'Adobe',
                value: 7.6
            },
            {
                name: 'Others',
                value: 39.2
            }
        ];

        function createHistogram(containerId, data, isCurrency = false, isPercentage = false) {
            const container = document.getElementById(containerId);
            container.innerHTML = '';

            const maxValue = Math.max(...data.map(item => item.value));

            data.forEach((item, index) => {
                const barHeight = (item.value / maxValue) * 100;
                const bar = document.createElement('div');
                bar.className = 'histogram-bar';
                bar.style.height = `${barHeight}%`;
                bar.style.animationDelay = `${index * 0.15}s`;

                const barCaption = document.createElement('div');
                barCaption.className = 'bar-caption';
                barCaption.textContent = item.name;

                const barData = document.createElement('div');
                barData.className = 'bar-data';
                if (isCurrency) {
                    barData.textContent = `$${item.value}B`;
                } else if (isPercentage) {
                    barData.textContent = `${item.value}%`;
                } else {
                    barData.textContent = item.value;
                }

                bar.appendChild(barData);
                bar.appendChild(barCaption);
                container.appendChild(bar);
            });
        }

        window.onload = function() {
            createHistogram('marketGrowthGraph', marketSizeData, true);
            createHistogram('solutionGraph', solutionData, false, true);
            createHistogram('deploymentGraph', deploymentData, false, true);
            createHistogram('enterpriseGraph', enterpriseData, false, true);
            createHistogram('enduseGraph', enduseData, false, true);
            createHistogram('regionalGraph', regionalData, false, true);
            createHistogram('companyGraph', companyData, false, true);
        };
    </script>
</body>

</html>