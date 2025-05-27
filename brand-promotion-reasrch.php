<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Promotion Market Report</title>
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
    <div id="brandPromotionSampleModal" class="modal-overlay">
        <div class="modal-content" id="modalContent">
            <span class="close-button" id="modalCloseButton">×</span>
            <h2 class="section-title" id="modalTitle">Request Free Sample</h2>
            <p class="text-paragraph" id="modalDescription">Please fill out this form to download the free Brand Promotion market report sample.</p>

            <form id="brandPromotionSampleForm" class="form-container">
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
            <h1 class="main-title" id="reportTitle">Brand Promotion Market Report</h1>
            <p class="text-paragraph" id="reportSubtitle">Global Analysis & Forecasts 2024-2030</p>
            <!-- <button id="openBrandPromotionModal" class="primary-button">Request Free Sample</button> -->
        </div>
    </header>

    <div class="main-container" id="mainContent">
        <div class="info-container" id="marketHighlights">
            <h3 class="sub-title">Market Highlights</h3>
            <p class="text-paragraph">The global brand promotion market was valued at <strong>USD 28.5 billion in 2024</strong> and is projected to grow at a <strong>CAGR of 12.3%</strong> from 2025 to 2030, reaching <strong>USD 58.7 billion by 2030</strong>.</p>
            <p class="text-paragraph">Key drivers include the growing importance of brand visibility, increased digital marketing investments, and the rise of influencer and content-driven promotion strategies.</p>
        </div>

    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("brandPromotionSampleModal");
        const openModalBtn = document.getElementById("openBrandPromotionModal");
        const closeBtn = document.getElementById("modalCloseButton");
        const sampleForm = document.getElementById("brandPromotionSampleForm");
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
            console.log("Brand Promotion Sample Request Form Data:", formData);
            generateSamplePDF(formData);
            modal.style.display = "none";
            sampleForm.reset();
            return false;
        };

        function generateSamplePDF(formData) {
            const content = `
                Brand Promotion Market Report - Sample
                ====================================================
                
                Thank you for your interest, ${formData.name}!
                
                This sample report contains key highlights from our full Brand Promotion market analysis.
                
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
            a.download = 'Brand_Promotion_Market_Report_Sample.pdf';
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

        const brandPromotionMarketSizeData = [{
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
                name: 'Digital Campaigns',
                value: 28.5
            },
            {
                name: 'Influencer',
                value: 24.3
            },
            {
                name: 'Content',
                value: 22.7
            },
            {
                name: 'Traditional',
                value: 16.8
            },
            {
                name: 'Others',
                value: 7.7
            }
        ];

        const deploymentData = [{
                name: 'Social Media',
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
            renderChart('brandPromotionGrowthChart', brandPromotionMarketSizeData, true);
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