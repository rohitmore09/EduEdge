<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate | Eduedge Pro</title>
    <!-- css -->
    <?php include '../style_css.php'; ?>
    <!-- css -->
     <style>
        .corp_active{color: #700001;font-weight: bold;}
     </style>
</head>

<body class="enterprise_color">
    <!-- header -->
    <?php include '../components/enterprise-header.php'; ?>
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
                        <a href="<?php echo $base_url; ?>enterprise-pro.php">Enterprise Pro</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a class="active">Corporate</a>
                    </li>
                </ul>
            </div>
            <!-- breadcrumb -->
            <div class="satflx">
                <div class="bannerlft">
                    <div class="baner-dtls">
                        <h1>Executive Education for<br> Corporate Success</h1>
                        <p>Customized training solutions for functional, technical and leadership growth.</p>
                        <a class="white-btn" href="#programs">
                            <span>Know More</span>
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
                        <?php include '../components/forms/enterprisepro_form.php'; ?>
                        <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->

    <section class="whypro">
        <div class="container">
            <div class="hdng text-center" data-aos="fade-up">
                <h2 class="blue_mnhdng">Beyond Conventional Training</h2>
                <p> Enterprise Pro programs equip professionals with functional expertise, technical fluency, and leadership readiness to thrive in competitive global markets.</p>
            </div>
            <div class="lgcrds" data-aos="fade-up">
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en1.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Applied Learning</h3>
                    <p>Emphasis on projects, modeling, and problem-solving beyond theoretical knowledge.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en2.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Tailored Solutions</h3>
                    <p>Programs aligned with organizational needs across BFSI, fintech, analytics & technology.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en3.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Faculty Excellence</h3>
                    <p>Instructors include global practitioners, investment bankers, and consulting specialists.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en4.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Ongoing Assessment</h3>
                    <p>Continuous evaluation helps track skill development and business impact over time.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/enterprise/en5.webp" alt="Icon" width="64" height="64">
                    </div>
                    <h3>Flexible Modes</h3>
                    <p>Choose instructor-led classroom, hybrid, or fully online delivery for your teams.</p>
                </div>
            </div>
            <div class="pro_counter">
                <!-- counter -->
                <div class="counter09">
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="25">0</span>K+</h2>
                        <p>Students Trained</p>
                    </div>
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="5">0</span>K+</h2>
                        <p>Students Mentored</p>
                    </div>
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="20">0</span>+</h2>
                        <p>University Partnerships</p>
                    </div>
                    <div class="ins_cntr">
                        <h2><span class="count" data-count="12">0</span>+</h2>
                        <p>Countries Served</p>
                    </div>
                </div>
                <!-- counter -->
            </div>
        </div>
    </section>

    <section class="course-sec cfa_course" id="programs">
        <div class="container">
            <div class="hdng text-center">
                <h2 class="blue_mnhdng" data-aos="fade-up">Our Featured Courses</h2>
                <p>Strengthen functional, technical, and leadership expertise with programs designed for modern corporate challenges.</p>
            </div>
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
                                <a class="primary_btn" href="<?php echo $base_url; ?>risk-manager/statistical-finance.php"><span>Learn More</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    </svg></a>
                            </div>

                        </div>
                    </div>
                    <div class="tbs" id="tab2">
                        <!-- courses -->
                        <?php include '../enterprise-pro/courses/inv.php'; ?>
                        <!-- courses -->
                    </div>
                    <div class="tbs" id="tab3">
                        <!-- courses -->
                        <?php include '../enterprise-pro/courses/fin.php'; ?>
                        <!-- courses -->
                    </div>
                    <div class="tbs" id="tab4">
                        <!-- courses -->
                        <?php include '../enterprise-pro/courses/risk.php'; ?>
                        <!-- courses -->
                    </div>
                    <div class="tbs" id="tab5">
                        <!-- courses -->
                        <?php include '../enterprise-pro/courses/prof_trade.php'; ?>
                        <!-- courses -->
                    </div>
                    <div class="tbs" id="tab6">
                        <!-- courses -->
                        <?php include '../enterprise-pro/courses/ds.php'; ?>
                        <!-- courses -->
                    </div>
                    <div class="tbs" id="tab7">
                        <!-- courses -->
                        <?php include '../enterprise-pro/courses/cons.php'; ?>
                        <!-- courses -->
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


    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Training Across Critical Platforms</h2>
            <div class="skls_imgs">
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/excel.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/powerbi.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/python.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/tableau.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/spark.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/hadoop.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/sas.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/knime.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/r-lan.webp" alt="Skills Image" width="193" height="80"></div>
                <div class="simg"><img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/sql.webp" alt="Skills Image" width="193" height="80"></div>
            </div>
        </div>
    </section>


    <section>
        <h2 class="text-center blue_mnhdng">Chosen By Market Leaders</h2>
        <div class="marquee-track">
            <div class="marquee-container">
                <div class="marquee">
                    <span>J.P. Morgan</span>
                    <span>Deloitte</span>
                    <span>Motilal Oswal</span>
                    <span>Morningstar</span>
                    <span>EY</span>
                    <span>Capgemini</span>
                    <span>Morgan Stanley</span>
                    <span>JP Morgan Chase</span>
                    <span>SEBI</span>
                    <span>MCX Training & Development</span>
                    <span>Prudential</span>
                    <span>Invesco</span>
                    <span>J.P.Morgan Asset Management</span>
                    <span>TMF Group</span>
                    <span>Moody’s Analytics</span>
                    <span>Northern Trust</span>
                    <span>State Street</span>
                    <span>Bravura Solutions</span>
                </div>
            </div>
            <div class="marquee-container">
                <div class="marquee reverse">
                    <span>J.P. Morgan</span>
                    <span>Deloitte</span>
                    <span>Motilal Oswal</span>
                    <span>Morningstar</span>
                    <span>EY</span>
                    <span>Capgemini</span>
                    <span>Morgan Stanley</span>
                    <span>JP Morgan Chase</span>
                    <span>SEBI</span>
                    <span>MCX Training & Development</span>
                    <span>Prudential</span>
                    <span>Invesco</span>
                    <span>J.P.Morgan Asset Management</span>
                    <span>TMF Group</span>
                    <span>Moody’s Analytics</span>
                    <span>Northern Trust</span>
                    <span>State Street</span>
                    <span>Bravura Solutions</span>
                </div>
            </div>
        </div>
    </section>



    <section class="certificate">
        <div class="container">
            <div class="certflx">
                <div class="cert_txt">
                    <h2> Get Certified</h2>
                    <p>Demonstrate measurable expertise through certifications aligned with global standards.</p>
                    <div class="crtbtn">
                        <a class="white-btn" href="#banfrm">
                            <span>Get In Touch</span>
                            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="cert_img">
                    <img src="<?php echo $base_url; ?>assets/imgs/enterprise/corporate/certificate.webp" alt="Certificate" width="560" height="400">
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials -->
    <section class="corgry">
        <div class="container">
            <h2 class="text-center blue_mnhdng">Stories of Grit, Growth & Global Success</h2>
            <div class="testimonial-slider slick-slider">
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Vice President,<br>Moody's Analytics.</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Credit Analysis</p>
                                <h4>"With Eduedgepro, we are able to find talented pool in a matter of weeks instead of months. The quality of talent they supply is extremely high as the students are able to immediately onboard and ramp incredibly fast."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Consultant,<br> Model Validation, Deloitte</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Counterparty Credit Risk</p>
                                <h4>"The training was well structured and Understandable, was able to learn many things as it was taught from the very base.”</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Senior Manager,<br> SIDBI VENTURE CAPITAL LTD.</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Applied Financial Modelling using Excel-VBA</p>
                                <h4>"I found the training useful with respect to VBA programming and learning advanced Excel techniques. Shri Harjeet Singh Ji has been an excellent tutor with strong knowledge on the subject and good presentation skills. I look forward to more sessions like this.”</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Senior Consultant,<br> Risk Consulting, E&Y</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Market Risk Management with Python</p>
                                <h4>"Hands on practice sessions and assignment to practice the learnings helped in retaining the learnings”</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Manager,<br> ISARC </h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Valuation Modelling</p>
                                <h4>"The course content was relevant and useful. Schedule was appropriate to give sufficient time for hands-on training/practice. Faculty is excellent, and the course was conducted in an interesting manner. The course has improved our analytical skills and would be useful for day-to-day working.“</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Senior Manager,<br> MCX</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Comprehensive Commodity Option Program</p>
                                <h4>"Easy and fluent presentation knowledge of Professor Harjeet and Dr. Amarjeet Singh. I appreciate the overall packaging of course material and topics. My overall experience of this workshop was Excellent!"</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Manager,<br> MCX</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Algorithmic Trading and Strategies</p>
                                <h4>"I appreciate the content of the course, delivery of presentation, and user-friendliness of the presenter the most. I would rate the overall experience of this workshop as Excellent!!!"</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Senior Manager,<br> IFCI</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Valuation Modelling using Excel</p>
                                <h4>"The vast expertise of the instructor and his ability to present the same to the participants, I appreciate the most and enjoyed a lot. I would recommend this course to all my colleagues. Instead of only on weekends, this program could have been organized as a continuous 2-3 days' workshop."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Grade A Officer,<br> SIDBI VENTURE CAPITAL LTD.</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Applied Financial Modelling using Excel-VBA</p>
                                <h4>"Thank you sir for organizing a training like this, where we could improve our Excel skills. It was a pleasure to invest our time to learn such useful functions and make it implement in our daily office routine work. P.S.: We shall bother you via mails and calls in case of any queries and suggestions."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Director<br> MCX</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Comprehensive Commodity Option Program.</p>
                                <h4>"The content were well demonstrated and most of the topic was simplified and understood. Well done by the instructor, I would recommend for continuing to conduct and demonstrate more such knowledge and presentation."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Consultant,<br> Risk, Deloitte</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: SAS for Risk</p>
                                <h4>"Practice exercises and in class exercises helped in learning the practical application of the same"</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Consultant,<br> Model Risk, Deloitte</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Model Risk Management</p>
                                <h4>"Very useful! Having done CFA L2 and FRM2, I couldn't be happier to have this hands on experience to implement all the models”</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Deputy Director,<br>NACIN, Mumbai.</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Data Analytics in GST</p>
                                <h4>"On behalf of NACIN, Mumbai, I thank you for sharing your valuable time for the sessions taken by you in the above training. Your sessions on 17.2.2020 were well appreciated, which is reflected in the overall feedback grading of 9.39 on a scale of 1 to 10 from the participant officers. NACIN, Mumbai looks forward to your continued engagement in such programs in future."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Assistant Director,<br>NACIN, Mumbai.</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Financial Markets and Securities</p>
                                <h4>"At the outset on behalf of NACIN, Mumbai we wish to thank you for taking four sessions during the captioned course conducted at NACIN, Mumbai January 23–24, 2022. Based on the feedback collected from the participants this is to inform you that your lecture has been highly appreciated with an average rating of 9.23 on the scale of 1 to 10. We look forward to your continued Association with NACIN, Mumbai for skills sets of officers through training."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg text-center">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/user.webp" alt="Testimonial" width="184" height="166">
                                <h5>Associate Consultant,<br> Model Validation, Deloitte</h5>
                            </div>
                            <div class="tstdtls">
                                <p class="tstrd">Program: Market Risk Management</p>
                                <h4>"The training was well structured and Understandable, was able to learn many things as it was taught from the very base. It gave me deeper insights into risk management. Excel work helped a lot in building the concepts”</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->

    <section>
        <div class="container">
            <h2 class="text-center blue_mnhdng" data-aos="fade-up">FAQs</h2>
            <div class="faqsection" data-aos="fade-up">
                <div class="accordion" data-accordion>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>What types of training programs do you provide for corporates?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>We provide functional, technical, business, and leadership-focused training programs tailored to the needs of corporates across BFSI, FinTech, Analytics, Data Science, and Technology domains.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Are the training programs customizable for different organizations?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, all programs are customized to align with the business requirements, skill gaps, and goals of corporate teams, ensuring relevance and measurable outcomes.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>What is the mode of delivery for training programs?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Programs are delivered through instructor-led in-person sessions, live online classes, or hybrid models, depending on corporate preferences.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Who conducts the training sessions?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Sessions are delivered by experienced faculty including investment bankers, consultants, data scientists, and technology leads, ensuring an industry-oriented pedagogy.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Do you provide technical training on specific tools and platforms?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes. Technical training covers platforms such as Excel, Power BI, Python, SQL, R, Tableau, Bloomberg, SAS, Hadoop, Spark, and Knime.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>What kind of outcomes can corporates expect from these programs?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Corporates can expect enhanced leadership capabilities, stronger functional and technical expertise, and improved business and reporting skills tailored to their industry needs.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Do you also offer training on report writing and presentation skills?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, our Report Writing programs cover report conceptualization, storyboarding, grammar, visualization, coherence, summarization, and presentation techniques for professional impact.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Have you worked with global corporates before?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, we have partnered with leading consulting firms, global investment banks, regulators, asset management firms, and BFSI companies worldwide.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Do you provide progress tracking or assessments during training?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, participants are evaluated through practical exercises, case studies, and assignments, with progress reports shared for organizational review.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>How many students and professionals have you trained so far?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Enterprise Pro has trained over 25,000 students and mentored 5,000+ professionals across 12+ countries in partnership with leading universities and corporates.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <!-- <div class="seeall">
                <a class="secondary-btn">
                    <span>View All</span>
                    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                    </svg>
                </a>
            </div> -->
        </div>
    </section>


    <section class="ptrdsec">
        <div class="container">
            <div class="dflex" data-aos="fade-up">
                <div class="infraimg">
                    <img src="<?php echo $base_url; ?>assets/imgs/enterprise/elimg.webp" alt="Infra" width="400" height="480">
                </div>
                <div class="infrast">
                    <h2 class="blue_mnhdng admplnhd">Transform employee potential into measurable business impact with our executive programs.</h2>
                    <a class="secondary-btn" href="#banfrm">
                        <span>Upskill With Us</span>
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
    <?php include '../components/footer.php'; ?>
    <!-- footer -->

    <!-- js -->
    <?php include '../style_js.php'; ?>
    <!-- js -->

    <script>
        // Accordion

        document.querySelectorAll('[data-accordion]').forEach(accordion => {
            const items = accordion.querySelectorAll('.accordion-item');

            items.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');

                header.addEventListener('click', () => {
                    const isOpen = item.classList.contains('active');

                    // Close all items
                    items.forEach(i => {
                        i.classList.remove('active');
                        const c = i.querySelector('.accordion-content');
                        c.style.maxHeight = null;
                    });

                    // Toggle current item
                    if (!isOpen) {
                        item.classList.add('active');
                        content.style.maxHeight = content.scrollHeight + 'px';

                        // Ensure clicked header stays in view after expanding
                        setTimeout(() => {
                            header.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }, 300); // Match transition time
                    }
                });
            });
        });


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

        $('.testimonial-slider').slick({
            arrows: true,
            dots: false,
            infinite: false,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true
                }
            }]
        })
    </script>
</body>

</html>