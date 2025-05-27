<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Application Market Report</title>
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
            <h1>Mobile Application Market Report</h1>
            <p>Global Analysis & Forecasts 2024-2030</p>
            <!-- <button id="openRequestPopup" class="action-button">Request Free Sample</button> -->
        </div>
    </header>

    <div class="content-wrapper">
        <div class="info-section">
            <h3>Market Highlights</h3>
            <p>The global mobile application market was valued at <strong>USD 255.7 billion in 2024</strong> and is projected to grow at a <strong>CAGR of 14.3%</strong> from 2025 to 2030, reaching <strong>USD 583.4 billion by 2030</strong>.</p>
            <p>Key drivers include increased smartphone penetration, advancements in AI and AR technologies, and growing demand for mobile gaming and e-commerce apps.</p>
        </div>

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
                Mobile Application Market Report - Sample
                ====================================================
                
                Thank you for your interest, ${formData.name}!
                
                This sample report contains key highlights from our full mobile application market analysis.
                
                Request Details:
                - Name: ${formData.name}
                - Email: ${formData.email}
                - Company: ${formData.company}
                - Industry: ${formData.industry}
                - Country: ${formData.country}
                
                Key Market Highlights:
                - Market Size (2024): $255.7 billion
                - Projected CAGR (2025-2030): 14.3%
                - 2030 Projection: $583.4 billion
                
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
            a.download = 'Mobile_Application_Market_Report_Sample.pdf';

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
                value: 255.7
            },
            {
                year: '2025',
                value: 292.3
            },
            {
                year: '2026',
                value: 334.1
            },
            {
                year: '2027',
                value: 381.9
            },
            {
                year: '2028',
                value: 436.5
            },
            {
                year: '2029',
                value: 498.9
            },
            {
                year: '2030',
                value: 583.4
            }
        ];

        const solutionData = [{
                name: 'Gaming',
                value: 28.5
            },
            {
                name: 'E-commerce',
                value: 22.3
            },
            {
                name: 'Social Media',
                value: 18.7
            },
            {
                name: 'Productivity',
                value: 15.4
            },
            {
                name: 'Others',
                value: 15.1
            }
        ];

        const deploymentData = [{
                name: 'Android',
                value: 62.4
            },
            {
                name: 'iOS',
                value: 37.6
            }
        ];

        const enterpriseData = [{
                name: 'Google Play',
                value: 52.8
            },
            {
                name: 'App Store',
                value: 39.2
            },
            {
                name: 'Others',
                value: 8.0
            }
        ];

        const enduseData = [{
                name: 'Gaming',
                value: 28.5
            },
            {
                name: 'Retail',
                value: 22.3
            },
            {
                name: 'Telecom & IT',
                value: 18.7
            },
            {
                name: 'Healthcare',
                value: 15.4
            },
            {
                name: 'BFSI',
                value: 10.2
            },
            {
                name: 'Government',
                value: 3.5
            },
            {
                name: 'Others',
                value: 1.4
            }
        ];

        const regionalData = [{
                name: 'North America',
                value: 38.5
            },
            {
                name: 'Asia Pacific',
                value: 32.4
            },
            {
                name: 'Europe',
                value: 22.1
            },
            {
                name: 'Latin America',
                value: 4.2
            },
            {
                name: 'Middle East & Africa',
                value: 2.8
            }
        ];

        const companyData = [{
                name: 'Google',
                value: 22.5
            },
            {
                name: 'Apple',
                value: 18.3
            },
            {
                name: 'Tencent',
                value: 14.7
            },
            {
                name: 'ByteDance',
                value: 12.2
            },
            {
                name: 'Meta',
                value: 9.8
            },
            {
                name: 'Others',
                value: 22.5
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