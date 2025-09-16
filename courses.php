<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | Eduedge Pro</title>
    <!-- css -->
    <?php include 'style_css.php'; ?>
    <!-- css -->
</head>

<body class="enterprise_color">
    <!-- header -->
    <?php include 'components/enterprise-header.php'; ?>
    <!-- header -->
    <div class="toprem"></div>
    <div class="tpbrd">
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb-item">
                    <li>
                        <a href="<?php echo $base_url; ?>">Home</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a class="active">Cources</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="course_listing">
                <div class="left_fltr">
                    <div class="filter_bx">
                        <div class="ftclr">
                            <h3>Filter</h3>
                            <a id="clearBtn">Clear All</a>
                        </div>
                        <div class="all_fltr">
                            <label><input type="checkbox" class="filter-checkbox" value="Investment Banker">Investment Banker</label>
                            <label><input type="checkbox" class="filter-checkbox" value="Financial Analyst">Financial Analyst</label>
                            <label><input type="checkbox" class="filter-checkbox" value="Risk Manager">Risk Manager</label>
                            <label><input type="checkbox" class="filter-checkbox" value="Professional Trader">Professional Trader</label>
                            <label><input type="checkbox" class="filter-checkbox" value="Data Scientist">Data Scientist</label>
                            <label><input type="checkbox" class="filter-checkbox" value="Consultant">Consultant</label>
                        </div>
                    </div>
                </div>
                <div class="right_course">
                    <div class="insd_crs">
                        <h1 class="blue_mnhdng">Learning Pathways and Certifications</h1>
                        <div class="all_crsse">
                            <div class="ins_crsse" data-role="Investment Banker">
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/investment-banker/applied-excel.webp" alt="Certificate image" width="384" height="160">
                                        <small>Investment Banker</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Applied Excel Modelling for Investment Banking</h2>
                                        <p>Master advanced Excel and dynamic financial models for valuation, forecasting, and investment decision-making in IB roles.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Financial & Analytical Skills</li>
                                            <li>Technical & Data Skills</li>
                                            <li>Market & Industry Knowledge</li>
                                            <li>Soft & Professional Skills</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>38 Hours</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">15,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>investment-banker/applied-excel-modelling-for-investment-banking.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/investment-banker/derivatives.webp" alt="Certificate image" width="384" height="160">
                                        <small>Investment Banker</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Derivatives for Investment Banking</h2>
                                        <p>Gain expertise in derivatives pricing, analytics, and hedging strategies essential for trading and global markets roles.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>F&O, option chain analysis & analytics</li>
                                            <li>Derivatives pricing models and applications</li>
                                            <li>Hedging & risk management strategies</li>
                                            <li>Real-world trading & investment use cases</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">17,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>investment-banker/derivates-for-investment-banking.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/investment-banker/risk-management.webp" alt="Certificate image" width="384" height="160">
                                        <small>Investment Banker</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Risk Management for Investment Banking</h2>
                                        <p>Learn quantitative risk modeling, regulatory frameworks, and portfolio risk assessment for investment banking environments.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>VaR, CVaR & Monte Carlo simulations</li>
                                            <li>Credit risk assessment & stress testing</li>
                                            <li>Statistical methods for portfolio risk</li>
                                            <li>Industry-standard risk models for IB</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">22,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>investment-banker/risk-management-for-investment-banking.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/investment-banker/equity-research.webp" alt="Certificate image" width="384" height="160">
                                        <small>Investment Banker</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Equity Research and Fundamental Analysis</h2>
                                        <p>Develop equity valuation skills and build research reports using real-world case studies and financial modeling.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Fundamental analysis of stocks & sectors</li>
                                            <li>Valuation modeling and forecasting techniques</li>
                                            <li>Equity research report building</li>
                                            <li>Equity report reading & writing skills</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>investment-banker/equity-research-and-fundamental-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/investment-banker/transaction-advisory.webp" alt="Certificate image" width="384" height="160">
                                        <small>Investment Banker</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>M&A, Transaction Advisory & LBO Deal Structuring</h2>
                                        <p>Master M&A strategy, synergy analysis, and LBO modeling to evaluate and structure high-value deals.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>M&A process & deal lifecycle</li>
                                            <li>Synergy analysis & valuation of intangibles</li>
                                            <li>LBO modeling & deal structuring</li>
                                            <li>Due diligence & risk assessment</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>investment-banker/m-a-transaction-advisory-and-lbo-deal-structuring.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/investment-banker/option-strategies.webp" alt="Certificate image" width="384" height="160">
                                        <small>Investment Banker</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Options Strategies and Greeks</h2>
                                        <p>Learn advanced options strategies, Greek metrics, and hedging techniques essential for global markets roles.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Core options strategies (spreads, straddles, condors)</li>
                                            <li>Application of Greeks (Delta, Gamma, Theta, Vega)</li>
                                            <li>Evaluating portfolio-level Greeks and profiles</li>
                                            <li>Hedging & Options VaR calculation techniques</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">20,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>investment-banker/options-strategies-and-greeks.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            </div>
                            <!-- certificate-cards -->

                            <!-- FINANCE -->
                            <!-- certificate-cards -->
                            <div class="ins_crsse" data-role="Financial Analyst">
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/financial-analyst/essential-modelling.webp" alt="Certificate image" width="384" height="160">
                                        <small>Financial Analyst</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Essential Excel Modelling for Financial Analysis</h2>
                                        <p>Build robust Excel-based financial models with valuation, forecasting, and scenario analysis skills for finance and investment roles.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>3-Statement modeling (Income, Balance Sheet, Cash Flow)</li>
                                            <li>Valuation techniques (DCF, LBO, Comparable Analysis)</li>
                                            <li>Scenario & sensitivity analysis for risk assessment</li>
                                            <li>Data visualization & dashboards for financial insights</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">15,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>financial-analyst/essential-excel-modelling-for-investment-banking.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/financial-analyst/financial-projection.webp" alt="Certificate image" width="384" height="160">
                                        <small>Financial Analyst</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Financial Projections & Valuation</h2>
                                        <p>Develop expertise in financial forecasting and valuation models to assess business value and investment potential.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Revenue, cost, and cash flow projections</li>
                                            <li>Valuation models (DCF, LBO, Multiples-based)</li>
                                            <li>Scenario & sensitivity analysis for risk assessment</li>
                                            <li>Excel-based dynamic financial modeling</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>financial-analyst/financial-projections-and-valuation.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/financial-analyst/statistical-finance.webp" alt="Certificate image" width="384" height="160">
                                        <small>Financial Analyst</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Statistical Finance</h2>
                                        <p>Apply statistical techniques and machine learning to risk modeling, financial forecasting, and investment analysis.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Time series forecasting for financial trends</li>
                                            <li>Multiple & logistic regression modeling</li>
                                            <li>ML & AI for risk assessment</li>
                                            <li>Monte Carlo simulations & scenario analysis</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">17,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>financial-analyst/statistical-finance.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/financial-analyst/dashboarding-bi.webp" alt="Certificate image" width="384" height="160">
                                        <small>Financial Analyst</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Financial Dashboarding with Power BI</h2>
                                        <p>Create interactive dashboards for real-time financial insights using Power BI and advanced visualization tools.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Data modeling & transformation for finance</li>
                                            <li>Interactive dashboards with real-time insights</li>
                                            <li>DAX & Power Query for automation</li>
                                            <li>KPI tracking and performance monitoring</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">15,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>financial-analyst/financial-dashboarding-with-power-bi.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/financial-analyst/pythin-financial-analysis.webp" alt="Certificate image" width="384" height="160">
                                        <small>Financial Analyst</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Python for Financial Analysis</h2>
                                        <p>Leverage Python for data analysis, risk modeling, and forecasting to enhance financial decision-making.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Pandas & NumPy for data manipulation</li>
                                            <li>Regression & Monte Carlo for risk modeling</li>
                                            <li>Time-series forecasting for market trends</li>
                                            <li>ML & AI-driven financial modeling</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>financial-analyst/python-for-financial-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/financial-analyst/global-financial-markets.webp" alt="Certificate image" width="384" height="160">
                                        <small>Financial Analyst</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Global Financial Markets & Asset Classes</h2>
                                        <p>Understand global markets, asset classes, and trading strategies with a focus on risk-return analysis.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Equities, fixed income, and valuation</li>
                                            <li>Derivatives & structured products (options, swaps)</li>
                                            <li>Commodities, FX & alternative investments</li>
                                            <li>Risk-return analysis and portfolio strategies</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">12,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>financial-analyst/global-financial-markets-and-asset-classes.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            </div>
                            <!-- certificate-cards -->
                            <!-- FINANCE -->

                            <!-- RISK MANAGER -->

                            <!-- certificate-cards -->
                            <div class="ins_crsse" data-role="Risk Manager">
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/statistical-finance.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Statistical Finance</h2>
                                        <p>Master statistical and machine learning techniques to model risk, forecast trends, and enable data-driven decisions in finance.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Time series forecasting for risk variables</li>
                                            <li>Statistical risk modeling with regression</li>
                                            <li>ML & AI-driven risk analysis</li>
                                            <li>Monte Carlo simulations & stress testing</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">17,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/statistical-finance.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/python-analyst.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Python for Risk Analyst</h2>
                                        <p>Use Python to analyze financial data, model risks, and automate reporting for risk assessment and forecasting.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Pandas & NumPy for data handling</li>
                                            <li>Risk modeling with regression & Monte Carlo</li>
                                            <li>Time-series forecasting for risk trends</li>
                                            <li>ML & AI for predictive analysis</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/python-for-risk-analyst.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/market-risk.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Market Risk Modelling using Excel</h2>
                                        <p>Learn to model Value at Risk (VaR) and regulatory risk metrics under Basel 2.5 and FRTB frameworks in Excel.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>VaR models (Parametric, Historical, Monte Carlo)</li>
                                            <li>Correlated Monte Carlo portfolio simulations</li>
                                            <li>Backtesting & model validation techniques</li>
                                            <li>Basel 2.5 & FRTB calculations in Excel</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/market-risk-modelling-using-excel.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                 <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/modelling-python.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Market Risk Modelling using Python</h2>
                                        <p>Master Python for advanced market risk modelling, covering VaR, expected shortfall, stress testing.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Build VaR models</li>
                                            <li>Perform portfolio simulations</li>
                                            <li>Apply backtesting methods</li>
                                            <li>Handle RNIV treatment</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">35,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/market-risk-modelling-using-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/credit-risk-excel.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Credit Risk Modelling using Excel & Python</h2>
                                        <p>Model credit risk using PD, LGD, EAD, and Basel standards, plus stress test and validate credit exposures.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>PD, LGD, EAD modeling techniques</li>
                                            <li>Credit scoring and ratings validation</li>
                                            <li>Basel II & III IRB approach</li>
                                            <li>Stress testing and capital adequacy</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">35,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/credit-risk-modelling-using-excel-and-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/credit-risk.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Counterparty Credit Risk using Excel & Python</h2>
                                        <p>Learn CCR exposures, SA-CCR, CVA, IMM-CVA, and Wrong-Way Risk modeling using simulations and regulatory frameworks.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>SA-CCR, SA-CVA & IMM-CVA models</li>
                                            <li>Wrong-Way Risk identification & mitigation</li>
                                            <li>Monte Carlo PFE simulations for derivatives</li>
                                            <li>Basel III-compliant CCR frameworks</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">45,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/counterparty-credit-risk-using-excel-and-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/liquidity-risk.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Liquidity Risk and FR 2052a Reporting</h2>
                                        <p>Gain expertise in liquidity metrics (LCR, NSFR), stress testing, and FR 2052a regulatory compliance reporting.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>LCR & NSFR calculations and optimization</li>
                                            <li>Intraday liquidity and funding risk modeling</li>
                                            <li>Stress testing & contingency planning</li>
                                            <li>FR 2052a reporting requirements</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">35,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/liquidity-risk-and-fr-2052a-reporting.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/risk-manager/frtb-sa.webp" alt="Certificate image" width="384" height="160">
                                        <small>Risk Manager</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>FRTB-SA and IMA in Excel & Python</h2>
                                        <p>Hands-on training in FRTB-SA & IMA frameworks, ES modeling, and Basel III-compliant capital charge calculations.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>FRTB-SA & IMA implementation</li>
                                            <li>Sensitivity aggregation and ES modeling</li>
                                            <li>Basel III capital computation techniques</li>
                                            <li>Excel & Python-based FRTB modeling</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">45,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>risk-manager/frtb-sa-and-ima-in-excel-and-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            </div>
                            <!-- certificate-cards -->

                            <!-- RISK MANAGER -->

                            <!-- PROFESSIONAL TRADER -->

                            <!-- certificate-cards -->
                            <div class="ins_crsse" data-role="Professional Trader">
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/professional-trader/essential-analysis.webp" alt="Certificate image" width="384" height="160">
                                        <small>Professional Trader</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Essential Technical Analysis</h2>
                                        <p>Build a strong foundation in market trends, price action, and indicators to make informed trading decisions.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Candlestick patterns & trend analysis</li>
                                            <li>Demand and supply zones and strategies</li>
                                            <li>Moving averages & momentum indicators</li>
                                            <li>Momentum and mean reversion strategies</li>
                                            <li>Risk management using technical indicators</li>
                                            <li>Developing a comprehensive trading plan</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">20,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>professional-trader/essential-technical-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/professional-trader/advance-analysis.webp" alt="Certificate image" width="384" height="160">
                                        <small>Professional Trader</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Advanced Technical Analysis</h2>
                                        <p>Master complex indicators, patterns, and trading psychology to refine precision trading strategies for dynamic markets.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Elliott Wave Theory & market cycles</li>
                                            <li>Harmonic patterns & Fibonacci extensions</li>
                                            <li>Advanced candlestick, OI & volume analysis</li>
                                            <li>Algorithmic indicators & quantitative models</li>
                                            <li>Technical analysis for options trading</li>
                                            <li>Live market trading & strategy optimization</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">35,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>professional-trader/advanced-technical-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/professional-trader/quantitative-trading.webp" alt="Certificate image" width="384" height="160">
                                        <small>Professional Trader</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Quantitative Trading Strategies using Python</h2>
                                        <p>Learn to design systematic, data-driven trading strategies using statistical models, ML, and backtesting in Python.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Statistical arbitrage & mean reversion strategies</li>
                                            <li>Factor investing & smart beta approaches</li>
                                            <li>ML & AI for predictive modeling in trading</li>
                                            <li>Volatility trading strategies using quantitative methods</li>
                                            <li>Backtesting and performance evaluation in Python</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">30,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>professional-trader/quantitative-trading-strategies-using-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/professional-trader/algorithmic-trading.webp" alt="Certificate image" width="384" height="160">
                                        <small>Professional Trader</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Algorithmic Trading & Strategies using Python</h2>
                                        <p>Develop and execute automated trading strategies using Python, with advanced modeling and risk management.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Build automated trading systems for equities, FX & crypto</li>
                                            <li>Implement execution algorithms to minimize market impact</li>
                                            <li>Design technical analysis-based algorithmic strategies</li>
                                            <li>Create price action-driven trading algorithms</li>
                                            <li>Apply statistical arbitrage & mean reversion techniques</li>
                                            <li>Backtest and optimize strategies in Python</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">45,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>professional-trader/algorithmic-trading-and-strategies-using-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/professional-trader/nlp-text-processing.webp" alt="Certificate image" width="384" height="160">
                                        <small>Professional Trader</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>NLP for Text Processing</h2>
                                        <p>Leverage NLP and deep learning to extract insights from text data and build AI-driven trading tools.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Fundamentals of NLP, text preprocessing, tokenization</li>
                                            <li>NER, POS tagging & language parsing</li>
                                            <li>Sentiment analysis & classification models</li>
                                            <li>Word embeddings: Word2Vec, GloVe, FastText</li>
                                            <li>Topic modeling with LDA and NMF</li>
                                            <li>Build chatbots & fine-tune NLP models</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">55,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>professional-trader/nlp-for-text-processing.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            </div>
                            <!-- certificate-cards -->

                            <!-- PROFESSIONAL TRADER -->

                            <!-- DATA SCIENTIST -->

                            <!-- certificate-cards -->
                            <div class="ins_crsse" data-role="Data Scientist">
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/essential-python.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Essential Python for Data Science</h2>
                                        <p>Master the core tools and libraries for data analysis, visualization, and machine learning in Python.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Python for data science applications</li>
                                            <li>Data wrangling with NumPy & Pandas</li>
                                            <li>Visualizations using Matplotlib & Seaborn</li>
                                            <li>ML basics with Scikit-Learn</li>
                                            <li>Jupyter Notebook for hands-on coding</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">20,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/essential-python-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/statistic-python.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Statistics for Data Science</h2>
                                        <p>Build a solid base in descriptive, inferential, and predictive statistics for real-world data insights.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Probability, regression & hypothesis testing</li>
                                            <li>Time series forecasting</li>
                                            <li>Bayesian & statistical modeling</li>
                                            <li>Tools: SciPy, Statsmodels</li>
                                            <li>Real-world data interpretation</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Excel, Solver, Power Query</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">20,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/statistics-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            <!-- certificate-cards -->

                            <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/machine-learning.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Machine Learning for Data Science</h2>
                                        <p>Dive into ML algorithms, model evaluation, and time series forecasting with real-world projects.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Supervised & unsupervised learning</li>
                                            <li>Classification, clustering, regression</li>
                                            <li>Ensemble models: XGBoost, Random Forest</li>
                                            <li>Time series: ARIMA, LSTM</li>
                                            <li>Real-world data interpretation</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">35,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/machine-learning-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            <!-- certificate-cards -->


                            <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/data-visualization.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Data Visualization & Business Intelligence using Power BI</h2>
                                        <p>Transform raw data into compelling visual stories and business insights with Power BI dashboards and analytics tools.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Build interactive dashboards and reports in Power BI</li>
                                            <li>Connect and integrate multiple data sources efficiently</li>
                                            <li>Use DAX functions for advanced data calculations</li>
                                            <li>Apply Power Query for data transformation and cleaning</li>
                                            <li>Create custom visuals and interactive charts</li>
                                            <li>Use AI-powered insights for advanced analytics</li>
                                            <li>Perform real-time data monitoring and reporting</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">27,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/data-visualization-and-business-intelligence-using-power-bi.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            <!-- certificate-cards -->

                            <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/cloud-computing.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Big Data & Cloud Computing</h2>
                                        <p>Learn how to process, manage, and analyze massive datasets using cutting-edge big data tools and cloud platforms like AWS, Azure, and Google Cloud.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Understand big data concepts and architecture principles</li>
                                            <li>Work with Hadoop, Spark, and distributed computing frameworks</li>
                                            <li>Use cloud-based storage for scalable data management</li>
                                            <li>Deploy data pipelines on AWS, Azure, and GCP</li>
                                            <li>Implement serverless computing with Lambda & Azure Functions</li>
                                            <li>Process streaming data using Kafka and Flink</li>
                                            <li>Optimize queries with cloud-based data warehouses</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">40,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/big-data-and-cloud-computing.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            <!-- certificate-cards -->

                            <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/ai-deep-learning.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>AI & Deep Learning</h2>
                                        <p>Master the core models of AI and deep learning, from neural networks to advanced generative models using TensorFlow and PyTorch.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Understand deep learning fundamentals and neural networks</li>
                                            <li>Build models using TensorFlow and PyTorch</li>
                                            <li>Train and optimize CNNs for image recognition</li>
                                            <li>Implement RNNs for sequence and time-series modeling</li>
                                            <li>Apply transformers for NLP and speech tasks</li>
                                            <li>Use GANs for generative AI applications</li>
                                            <li>Train models on cloud-based GPU environments</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">55,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/ai-and-deep-learning.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                            <!-- certificate-cards -->

                            <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/data-science/nlp-text-processing.webp" alt="Certificate image" width="384" height="160">
                                        <small>Data Scientist</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>NLP for Text Processing</h2>
                                        <p>Dive into the world of Natural Language Processing (NLP) to analyze and model human language using Python and deep learning frameworks.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Understand NLP fundamentals and text preprocessing</li>
                                            <li>Perform NER, POS tagging, and language parsing</li>
                                            <li>Implement sentiment analysis and classification models</li>
                                            <li>Use word embeddings like Word2Vec, GloVe, and FastText</li>
                                            <li>Apply topic modeling with LDA and NMF</li>
                                            <li>Build chatbots using NLP and deep learning</li>
                                            <li>Fine-tune pre-trained models with transfer learning</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">55,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>data-scientist/nlp-for-text-processing.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                            </div>
                            <!-- DATA SCIENTIST -->

                            <!-- CONSULTANT -->
                             <div class="ins_crsse" data-role="Consultant">
                        <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/essential-excel-modelling.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Essential Excel Modelling for Financial Analysis</h2>
                                        <p>Master Excel for financial modeling, covering valuations, forecasting, and scenario planning to drive informed business decisions.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>3-Statement modeling (Income, Balance Sheet, Cash Flow)</li>
                                            <li>Perform NER, POS tagging, and language parsing</li>
                                            <li>Implement sentiment analysis and classification models</li>
                                            <li>Use word embeddings like Word2Vec, GloVe, and FastText</li>
                                            <li>Apply topic modeling with LDA and NMF</li>
                                            <li>Build chatbots using NLP and deep learning</li>
                                            <li>Fine-tune pre-trained models with transfer learning</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">55,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/essential-excel-modelling-for-financial-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/financial-projection.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Financial Projections & Valuation</h2>
                                        <p>Learn to build precise financial forecasts and apply valuation methods like DCF, LBO, and multiples to assess business value.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Forecasting revenues, costs & cash flows</li>
                                            <li>Valuation models (DCF, LBO, multiples)</li>
                                            <li>Scenario & sensitivity risk analysis</li>
                                            <li>Excel-based structured financial models</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/financial-projections-and-valuation.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/m-a-transaction.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>M&A, Transaction Advisory & LBO Deal Structuring</h2>
                                        <p>Gain skills to analyze M&A deals, assess synergies, and structure leveraged buyouts (LBO) for value creation.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>M&A lifecycle and deal processes</li>
                                            <li>Synergy analysis & valuation of intangibles</li>
                                            <li>LBO modeling & structuring techniques</li>
                                            <li>Due diligence & risk assessments</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">35,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/m-and-a-transaction-advisory-and-lbo-deal-structuring.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/business-dashboard.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Business Dashboarding with Power BI</h2>
                                        <p>Build dynamic, data-driven dashboards to visualize KPIs, automate reports, and improve business intelligence.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Data modeling & integration in Power BI</li>
                                            <li>Interactive dashboards with real-time insights</li>
                                            <li>DAX functions for advanced calculations</li>
                                            <li>KPI tracking & performance reports</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">17,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/business-dashboarding-with-power-bi.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/essential-python.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Essential Python for Consulting</h2>
                                        <p>Leverage Python to analyze data, build models, and automate business insights for consulting use cases.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Python programming & data structures</li>
                                            <li>Pandas for data manipulation</li>
                                            <li>Statistical modeling & forecasting</li>
                                            <li>Visualization with Matplotlib & Seaborn</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">25,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/essential-python-for-consulting.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/global-financing.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Global Financial Markets & Asset Classes</h2>
                                        <p>Understand global markets, asset classes, and strategies across equities, bonds, derivatives, commodities, and FX.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Equities, fixed income & valuation</li>
                                            <li>Derivatives & alternative investments</li>
                                            <li>Portfolio risk & return analysis</li>
                                            <li>Macroeconomics & market trends</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">12,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/global-financial-markets-and-asset-classes.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/statistical-analysis.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Statistical Modelling and Analysis</h2>
                                        <p>Learn statistical techniques and predictive modeling for business decision-making using Python and advanced analytics.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Probability & statistical distributions</li>
                                            <li>Regression modeling & forecasting</li>
                                            <li>Time series analysis for business trends</li>
                                            <li>ML & AI-enhanced predictive analytics</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">17,500</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/statistical-modelling-and-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                 <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/impactfull-presentation.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Impactful Presentations for Clients</h2>
                                        <p>Master storytelling and structured presentation design to deliver client-ready, data-driven, and persuasive decks.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Storyboarding & logical structuring</li>
                                            <li>Data visualization for clarity</li>
                                            <li>Professional design & formatting</li>
                                            <li>Best practices for consulting presentations</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">30,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/impactful-presentations-for-clients.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->

                                <!-- certificate-cards -->
                                <div class="crsse">
                                    <div class="crse_img">
                                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/courses/consultant/report-writing.webp" alt="Certificate image" width="384" height="160">
                                        <small>Consultant</small>
                                    </div>
                                    <div class="crse-hd">
                                        <h2>Effective Report Writing</h2>
                                        <p>Develop structured writing and data presentation skills to craft polished consulting and business reports.</p>
                                    </div>
                                    <div class="crse-dtls">
                                        <p class="kyhgl">Key Highlights:</p>
                                        <ul class="crslist">
                                            <li>Structured writing for clarity</li>
                                            <li>Executive summaries and storytelling</li>
                                            <li>Data visualization for reports</li>
                                            <li>Formatting and professional presentation</li>
                                        </ul>
                                        <div class="tmtls">
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/duration.webp" alt="Duration">
                                                <p>Duration: <b>2 Weeks</b></p>
                                            </div>
                                            <div class="tmsd">
                                                <img src="<?php echo $base_url; ?>assets/imgs/certificate/tools.webp" alt="Tools">
                                                <p>Tools: <b>Scikit-Learn, TensorFlow</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crse-prc">
                                        <p>From:</p>
                                        <h5>INR <span class="fntbg">30,000</span> + GST</h5>
                                    </div>
                                    <a class="primary_btn" href="<?php echo $base_url;?>consultant/effective-report-writing.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></a>
                                </div>
                                <!-- certificate-cards -->
                             </div>
                            <!-- CONSULTANT -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include 'components/footer.php'; ?>
    <!-- footer -->

    <!-- js -->
    <?php include 'style_js.php'; ?>
    <!-- js -->

    <script>
        const checkboxes = document.querySelectorAll('.filter-checkbox');
        const clearBtn = document.getElementById('clearBtn');
        const courseItem = document.querySelectorAll('.ins_crsse');

        function filterJobs(){
            const selectedRoles = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

            courseItem.forEach(item => {
                const role = item.getAttribute('data-role');
                if(selectedRoles.length === 0 || selectedRoles.includes(role)){
                    item.classList.remove('hidden');
                }else{
                    item.classList.add('hidden');
                }
            });
        }

        checkboxes.forEach(cb => cb.addEventListener('change', filterJobs));

        clearBtn.addEventListener('click', () => {
            // cb is each checkbox in the list
            checkboxes.forEach(cb => cb.checked = false);
            filterJobs();
        });

        // Initialize filter on page load
        filterJobs();
    </script>
</body>

</html>