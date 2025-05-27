<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Production Services Market Report</title>
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

        .main-wrapper {
            width: 88%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 0;
        }

        .header-block {
            background-color: var(--light-gray);
            padding: 45px 0;
            text-align: center;
            margin-bottom: 55px;
            border-bottom: 3px solid var(--accent-color);
        }

        .primary-heading {
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

        .section-heading {
            font-size: 2.2rem;
            font-weight: 500;
            margin: 40px 0 20px;
            color: var(--accent-color);
            position: relative;
        }

        .sub-heading {
            font-size: 1.4rem;
            font-weight: 400;
            margin: 30px 0 15px;
            color: var(--secondary-color);
        }

        .content-text {
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

        .info-block {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 30px 0;
            border: 1px solid var(--accent-color);
            position: relative;
            overflow: hidden;
        }

        .info-block::before {
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

        .modal-window {
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

        .modal-inner {
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

        .modal-close {
            position: absolute;
            top: 15px;
            right: 20px;
            color: var(--secondary-color);
            font-size: 28px;
            font-weight: 600;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .modal-close:hover {
            color: var(--accent-color);
            transform: rotate(90deg);
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #555;
            background-color: #222;
            color: var(--primary-color);
            font-size: 0.95rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .chart-wrapper {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .chart-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 35px;
        }

        .chart-caption {
            text-align: center;
            margin-bottom: 18px;
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--accent-color);
        }

        .bar-chart {
            height: 300px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            margin-top: 18px;
        }

        .chart-column {
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

        .column-label {
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

        .column-value {
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

        .data-grid {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            background-color: var(--light-gray);
        }

        .grid-header,
        .grid-cell {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid #2a2a2a;
        }

        .grid-header {
            background-color: var(--highlight-color);
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .grid-row {
            transition: background-color 0.3s ease;
        }

        .grid-row:hover {
            background-color: #2a2a2a;
        }

        .media-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            margin: 30px 0;
            border: 2px solid var(--accent-color);
            transition: transform 0.3s ease;
        }

        .media-image:hover {
            transform: scale(1.03);
        }

        .nav-menu {
            display: flex;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .menu-item {
            padding: 10px 20px;
            background-color: var(--light-gray);
            border: 1px solid var(--accent-color);
            color: var(--secondary-color);
            cursor: pointer;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .menu-item.active {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
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

        .toc-block {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .toc-block ul {
            list-style: none;
            padding-left: 20px;
        }

        .toc-block ul li {
            margin-bottom: 10px;
            position: relative;
            font-size: 1rem;
        }

        .toc-block ul li:before {
            content: '→';
            color: var(--accent-color);
            position: absolute;
            left: -18px;
        }

        .toc-block ul ul {
            padding-left: 30px;
        }

        .toc-block a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .toc-block a:hover {
            color: var(--accent-color);
        }

        .list-block {
            background-color: var(--light-gray);
            padding: 28px;
            margin: 35px 0;
            border: 1px solid var(--accent-color);
        }

        .list-block ol {
            padding-left: 22px;
        }

        .list-block ol li {
            margin-bottom: 10px;
            color: var(--secondary-color);
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .main-wrapper {
                width: 92%;
                padding: 25px 0;
            }

            .primary-heading {
                font-size: 2.4rem;
            }

            .section-heading {
                font-size: 1.8rem;
            }

            .sub-heading {
                font-size: 1.2rem;
            }

            .chart-layout {
                grid-template-columns: 1fr;
            }

            .modal-inner {
                margin: 20% auto;
                width: 95%;
                padding: 25px;
            }

            .nav-menu {
                flex-direction: column;
            }

            .menu-item {
                width: 100%;
                margin-bottom: 8px;
            }
        }
    </style>
</head>

<body>
    <div id="filmProductionModal" class="modal-window">
        <div class="modal-inner" id="modalBox">
            <span class="modal-close" id="modalExit">×</span>
            <h2 class="section-heading" id="modalHeader">Request Free Sample</h2>
            <p class="content-text" id="modalText">Please fill out this form to download the free Film Production Services market report sample.</p>

            <form id="filmProductionForm" class="form-wrapper">
                <div class="form-group" id="nameGroup">
                    <label for="nameField" class="form-label">Full Name</label>
                    <input type="text" id="nameField" name="name" required>
                </div>

                <div class="form-group" id="emailGroup">
                    <label for="emailField" class="form-label">Email Address</label>
                    <input type="email" id="emailField" name="email" required>
                </div>

                <div class="form-group" id="companyGroup">
                    <label for="companyField" class="form-label">Company Name</label>
                    <input type="text" id="companyField" name="company" required>
                </div>

                <div class="form-group" id="jobTitleGroup">
                    <label for="jobTitleField" class="form-label">Job Title</label>
                    <input type="text" id="jobTitleField" name="jobTitle" required>
                </div>

                <div class="form-group" id="industryGroup">
                    <label for="industryField" class="form-label">Industry</label>
                    <select id="industryField" name="industry" required>
                        <option value="">Select Industry</option>
                        <option value="Media">Media</option>
                        <option value="Advertising">Advertising</option>
                        <option value="Corporate">Corporate</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group" id="countryGroup">
                    <label for="countryField" class="form-label">Country</label>
                    <input type="text" id="countryField" name="country" required>
                </div>

                <button type="submit" class="action-button" id="submitForm">Download Sample Report</button>
            </form>
        </div>
    </div>

    <header class="header-block" id="mainHeaderBlock">
        <div class="main-wrapper" id="headerWrapper">
            <h1 class="primary-heading" id="reportHeader">Film Production Services Market Report</h1>
            <p class="content-text" id="reportSubheader">Global Analysis & Forecasts 2024-2030</p>
            <!-- <button id="openFilmProductionModal" class="action-button">Request Free Sample</button> -->
        </div>
    </header>

    <div class="main-wrapper" id="contentWrapper">
        <div class="info-block" id="marketSummary">
            <h3 class="sub-heading">Market Highlights</h3>
            <p class="content-text">The global Film Production Services market was valued at <strong>USD 28.5 billion in 2024</strong> and is projected to grow at a <strong>CAGR of 12.3%</strong> from 2025 to 2030, reaching <strong>USD 58.7 billion by 2030</strong>.</p>
            <p class="content-text">Key drivers include the rising demand for corporate videos, YouTube ads, and product explainer videos, alongside advancements in production technologies and increasing investments in TV commercials and photoshoots.</p>
        </div>

    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("filmProductionModal");
        const openModalBtn = document.getElementById("openFilmProductionModal");
        const closeBtn = document.getElementById("modalExit");
        const sampleForm = document.getElementById("filmProductionForm");
        const fullReportBtn = document.getElementById("downloadReport");

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
                name: document.getElementById("nameField").value,
                email: document.getElementById("emailField").value,
                company: document.getElementById("companyField").value,
                jobTitle: document.getElementById("jobTitleField").value,
                industry: document.getElementById("industryField").value,
                country: document.getElementById("countryField").value,
                timestamp: new Date().toISOString()
            };
            console.log("Film Production Services Sample Request Form Data:", formData);
            generateSamplePDF(formData);
            modal.style.display = "none";
            sampleForm.reset();
            return false;
        };

        function generateSamplePDF(formData) {
            const content = `
                Film Production Services Market Report - Sample
                ====================================================
                
                Thank you for your interest, ${formData.name}!
                
                This sample report contains key highlights from our full Film Production Services market analysis.
                
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
            a.download = 'Film_Production_Services_Market_Report_Sample.pdf';
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

        function showTab(tabId) {
            const tabPanels = document.getElementsByClassName('tab-panel');
            for (let i = 0; i < tabPanels.length; i++) {
                tabPanels[i].classList.remove('active');
            }
            const menuItems = document.getElementsByClassName('menu-item');
            for (let i = 0; i < menuItems.length; i++) {
                menuItems[i].classList.remove('active');
            }
            document.getElementById(tabId).classList.add('active');
            event.currentTarget.classList.add('active');
        }

        const filmProductionMarketSizeData = [{
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

        const serviceData = [{
                name: 'Corporate Video',
                value: 28.5
            },
            {
                name: 'YouTube Ads',
                value: 24.3
            },
            {
                name: 'TV Commercials',
                value: 22.7
            },
            {
                name: 'Explainer Video',
                value: 16.8
            },
            {
                name: 'Others',
                value: 7.7
            }
        ];

        const platformData = [{
                name: 'Digital Platforms',
                value: 68.4
            },
            {
                name: 'Traditional Media',
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

        const industryData = [{
                name: 'Media',
                value: 30.1
            },
            {
                name: 'Advertising',
                value: 25.4
            },
            {
                name: 'Corporate',
                value: 20.7
            },
            {
                name: 'Entertainment',
                value: 15.2
            },
            {
                name: 'Others',
                value: 8.6
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
                bar.className = 'chart-column';
                bar.style.height = `${barHeight}%`;
                bar.style.animationDelay = `${index * 0.15}s`;
                const barLabel = document.createElement('div');
                barLabel.className = 'column-label';
                barLabel.textContent = item.name;
                const barValue = document.createElement('div');
                barValue.className = 'column-value';
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
            renderChart('filmProductionChart', filmProductionMarketSizeData, true);
            renderChart('serviceTypeChart', serviceData, false, true);
            renderChart('platformChart', platformData, false, true);
            renderChart('enterpriseSizeChart', enterpriseData, false, true);
            renderChart('industryChart', industryData, false, true);
            renderChart('regionalMarketShare', regionalData, false, true);
            renderChart('companyShareChart', companyData, false, true);
        };
    </script>
</body>

</html>