<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Pro | Eduedge Pro</title>
    <!-- css -->
    <?php include 'style_css.php'; ?>
    <!-- css -->
</head>

<body class="enterprise_color">
    <!-- header -->
    <?php include 'components/enterprise-header.php'; ?>
    <!-- header -->

   <!-- banner -->
    <div class="satbanner" id="banfrm">
        <picture>
            <source media="(min-width: 769px)" srcset="<?php echo $base_url; ?>assets/imgs/enterprise/banner.webp">
            <source media="(max-width: 768px)" srcset="<?php echo $base_url; ?>assets/imgs/enterprise/mobile-banner.webp">
            <img src="<?php echo $base_url; ?>assets/imgs/enterprise/banner.webp" alt="Banner" class="bannerimg">
        </picture>
        <div class="container">
            <!-- breadcrumb -->
            <div class="breadcrumb">
                <ul class="breadcrumb-item">
                    <li>
                        <a href="<?php echo $base_url; ?>">Home</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a class="active">Enterprise Pro</a>
                    </li>
                </ul>
            </div>
            <!-- breadcrumb -->
            <div class="satflx">
                <div class="bannerlft">
                    <div class="baner-dtls">
                        <h1>Your Learning Partner for Life</h1>
                        <p>From classroom to boardroom, get certified, skilled and recruited with EduEdge’s proven approach.</p>
                        <ul>
                            <li>Programs across BFSI, Tech, and FinTech</li>
                            <li>Delivered by domain leaders</li>
                            <li>Trusted by corporates and universities</li>
                        </ul>
                        <a class="white-btn" href="#programs">
                            <span>Start Learning Today</span>
                            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <!-- <img src="<?php echo $base_url; ?>assets/imgs/satprep/truspilot.svg" alt="Trust Pilot" width="281" height="40">
                        <a class="revlnk" href="https://www.trustpilot.com/review/kaptest.com?utm_medium=trustbox&utm_source=Carousel" target="_blank">Based on <span class="underline">5,931 reviews</span></a> -->
                    </div>
                </div>
                <div class="bannergt">
                    <div class="stprepform">
                        <!-- form -->
                        <?php include 'components/forms/enterprisepro_form.php'; ?>
                        <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->

    <section>
        <div class="container">
            <div class="hdng text-center">
                <h2 class="blue_mnhdng">Empowering Careers Through Learning</h2>
                <p>Your one-stop platform for certified upskilling, hands-on training, and industry-relevant career support.</p>
            </div>
            <div class="crers">
                <div class="cr_bx">
                    <h4 class="crbtxt">75+ certified programs across BFSI, FinTech, Analytics, Consulting & Tech</h4>
                </div>
                <div class="cr_bx">
                    <h4 class="crbtxt">25,000+ students and professionals trained</h4>
                </div>
                <div class="cr_bx">
                    <h4 class="crbtxt">50+ corporate clients and 20+ academic partnerships</h4>
                </div>
            </div>
        </div>
    </section>


    <section class="whypro">
        <div class="container">
            <div class="tp_univer text-center" data-aos="fade-up">
                <h2 class="blue_mnhdng">Why Learners Choose EduEdge</h2>
            </div>
            <div class="lgcrds" data-aos="fade-up">
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en1.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Certified, Industry-Backed Training</h3>
                    <p>Programs built in consultation with seasoned professionals and domain experts.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en2.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Hands-On, Practical Learning</h3>
                    <p>Focused on real-world applications, case studies, modeling, and implementation.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en3.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Tailored to Your Goals</h3>
                    <p>Customized curriculum aligned with business needs and individual aspirations.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en4.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Expert-Led Delivery</h3>
                    <p>Learn from Investment Bankers, Data Scientists, Risk Managers, and Consultants.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en5.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>End-to-End Career Support</h3>
                    <p>From learning to recruitment, get access to mentoring, assessment, and placement.</p>
                </div>
            </div>
            <div class="pro_counter">
                <!-- counter -->
                <div class="counter09">
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="25">0</span>K+</h2>
                        <p>Students Trained Across Domains</p>
                    </div>
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="5">0</span>K+</h2>
                        <p>Students Counselled Through 1:1 Mentoring</p>
                    </div>
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="10">0</span>K+</h2>
                        <p>Corporate Professionals Upskilled</p>
                    </div>
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="75">0</span>+</h2>
                        <p>Certified Training Programs Offered</p>
                    </div>
                </div>
                <!-- counter -->
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">For Career Seekers and<br> Corporate Leaders</h2>

            <div class="dsgnd">
                <div class="prodng">
                    <h2>For Working Professionals:</h2>
                    <ul>
                        <li>For Finance, Tech & Analytics careers</li>
                        <li>Mid-level professionals seeking specialization or transition</li>
                        <li>MBA, CFA & FRM aspirants needing practical edge</li>
                        <li>Learn industry tools, gain certification, fast-track growth</li>
                    </ul>
                </div>
                <div class="prodng">
                    <h2>For Organizations:</h2>
                    <ul>
                        <li>Ideal for HR, L&D & Business Units</li>
                        <li>BFSI, Consulting, KPO, Tech, and EdTech sectors</li>
                        <li>Upskill, retain & future-proof your workforce</li>
                        <li>Induction, domain training, recruitment & certifications</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-center blue_mnhdng">Trusted by Industry Leaders</h2>
        <div class="marquee-track">
            <div class="marquee-container">
                <div class="marquee">
                    <span>Harvard University</span>
                    <span>Stanford University</span>
                    <span>Flame University</span>
                    <span>Yale University</span>
                    <span>Harvard University</span>
                    <span>Stanford University</span>
                    <span>Flame University</span>
                    <span>Yale University</span>
                </div>
            </div>
            <div class="marquee-container">
                <div class="marquee reverse">
                    <span>Harvard University</span>
                    <span>Stanford University</span>
                    <span>Flame University</span>
                    <span>Yale University</span>
                    <span>Harvard University</span>
                    <span>Stanford University</span>
                    <span>Flame University</span>
                    <span>Yale University</span>
                </div>
            </div>
        </div>
    </section>

    <section class="course-sec cfa_course" id="programs">
        <div class="container">
            <h2 class="text-center blue_mnhdng" data-aos="fade-up">Featured Courses</h2>
            <div class="test-prep">
                <div class="tab-section" data-tab-section>
                    <ul class="tab-buttons">
                        <li class="tb-cntnt trndflx" data-tab="tab1">
                            <svg width="25" height="25" viewBox="0 0 512 512" xmlns="https://www.w3.org/2000/svg">
                                <polyline points="352 144 464 144 464 256"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" />
                                <path d="M48,368 L169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            <p>Trending</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab2">
                            <p>Investment Banker</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab3">
                            <p>Financial Analyst</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab4">
                            <p>Risk Manager</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab5">
                            <p>Professional Trader</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab6">
                            <p>Data Scientist</p>
                        </li>
                       <li class="tb-cntnt" data-tab="tab7">
                            <p>Consultant</p>
                        </li>
                        <!--  <li class="tb-cntnt" data-tab="tab8">
                            <p>IELTS</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab9">
                            <p>TOEFL</p>
                        </li> -->
                    </ul>
                    <!-- tabs content -->
                    <div class="tbs active" id="tab1">
                        <div class="coursesec slick-slider">
                            <!-- item -->
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>data-scientist/machine-learning-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a>
                </div>
                            <!-- item -->
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>financial-analyst/essential-excel-modelling-for-investment-banking.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a>
                </div>
                            <!-- item -->
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

                        </div>
                    </div>
                    <div class="tbs" id="tab2">
                        <div class="coursesec slick-slider">
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
                        </div>
                    </div>
                    <div class="tbs" id="tab3">
                        <div class="coursesec slick-slider">
                            <!-- item -->
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>financial-analyst/essential-excel-modelling-for-investment-banking.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>financial-analyst/financial-projections-and-valuation.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>financial-analyst/statistical-finance.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a>
                </div>
                <!-- certificate-cards -->
                            <!-- item -->
                        </div>
                    </div>
                    <div class="tbs" id="tab4">
                        <div class="coursesec slick-slider">
                            <!-- item -->
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
                            <!-- item -->
                        </div>
                    </div>
                    <div class="tbs" id="tab5">
                        <div class="coursesec slick-slider">
                            <!-- item -->
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>professional-trader/essential-technical-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>professional-trader/advanced-technical-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>professional-trader/quantitative-trading-strategies-using-python.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a>
                </div>
                            <!-- item -->
                        </div>
                    </div>
                    <div class="tbs" id="tab6">
                        <div class="coursesec slick-slider">
                            <!-- item -->
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>data-scientist/essential-python-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>data-scientist/statistics-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                    <a class="primary_btn" href="<?php echo $base_url; ?>data-scientist/machine-learning-for-data-science.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a>
                </div>
                            <!-- item -->
                        </div>
                    </div>
                     <div class="tbs" id="tab7">
                        <div class="coursesec slick-slider">
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
            <a class="primary_btn" href="<?php echo $base_url; ?>consultant/essential-excel-modelling-for-financial-analysis.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
            <a class="primary_btn" href="<?php echo $base_url; ?>consultant/financial-projections-and-valuation.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
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
            <a class="primary_btn" href="<?php echo $base_url; ?>consultant/m-and-a-transaction-advisory-and-lbo-deal-structuring.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                    <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                </svg></a>
        </div>
                        </div>
                     </div>
                   <!--<div class="tbs" id="tab8"></div>
                    <div class="tbs" id="tab9"></div> -->
                    <!-- tabs content -->
                </div>
                <!-- see all -->
                <!-- <div class="seeall">
                    <a href="#" class="secondary-btn">
                        <span>View All Programs</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div> -->
                <!-- see all -->
            </div>
        </div>
    </section>

    <!-- <section class="blog_sec">
        <div class="container">
            <h2 class="blue_mnhdng text-center">Insights That Matter</h2>
            <div class="all_blogs">
                <div class="blogs">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/blog.jpg" class="blog_img" alt="Blog" width="384" height="280">
                    <div class="blg_flx">
                        <p class="blgsts">Blog</p>
                        <p>15/04/2025</p>
                    </div>
                    <h3>2-Month Study Schedule for the GMAT</h3>
                    <a href="#" class="secondary-btn">
                        <span>Read more</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="blogs">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/blog1.jpg" class="blog_img" alt="Blog" width="384" height="280">
                    <div class="blg_flx">
                        <p class="blgsts">Blog</p>
                        <p>15/04/2025</p>
                    </div>
                    <h3>Mastering Time Management Tactics</h3>
                    <a href="#" class="secondary-btn">
                        <span>Read more</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="blogs">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/blog2.jpg" class="blog_img" alt="Blog" width="384" height="280">
                    <div class="blg_flx">
                        <p class="blgsts">Blog</p>
                        <p>15/04/2025</p>
                    </div>
                    <h3>EduEdge Pro Becomes Official Kaplan Partner in India</h3>
                    <a href="#" class="secondary-btn">
                        <span>Read more</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="seeall">
                <a href="#" class="secondary-btn">
                    <span>Explore All</span>
                    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                </a>
            </div>
        </div>
    </section> -->


    <section class="ptrdsec">
        <div class="container">
            <div class="dflex" data-aos="fade-up">
                <div class="infraimg">
                    <img src="<?php echo $base_url; ?>assets/imgs/enterprise/elimg.webp" alt="Infra" width="400" height="480">
                </div>
                <div class="infrast">
                    <h2 class="blue_mnhdng admplnhd">Get Certified. Get Skilled. Get Recruited.</h2>
                    <a class="secondary-btn" href="#banfrm">
                        <span> Browse Courses Now</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

  

    <!-- ftr-links -->
    <!-- <div class="pge_cta">
        <ul>
            <li class="bluecta"><a><span>Enterprise Pro</span></a></li>
            <li><a href="<?php echo $base_url; ?>">
                    <span>Home</span>
                    <img src="https://www.eduedgepro.com/assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a>
            </li>
            <li><a href="<?php echo $base_url; ?>about-us.php">
                    <span>About Us</span>
                    <img src="https://www.eduedgepro.com/assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a></li>
            <li><a href="<?php echo $base_url; ?>study-abroad/overview.php">
                    <span>Study Abroad</span>
                    <img src="https://www.eduedgepro.com/assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a></li>
        </ul>
    </div> -->
    <!-- ftr-links -->

    <!-- footer -->
    <?php include 'components/footer.php'; ?>
    <!-- footer -->

      <!-- js -->
    <?php include 'style_js.php'; ?>
    <!-- js -->

    <script>

        // slick js(course)
        $('.coursesec').slick({
            arrows: false,
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false
                }
            }]
        })
    </script>
</body>

</html>