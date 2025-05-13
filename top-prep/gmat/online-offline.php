<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMAT Online/Offline</title>
    <!-- css -->
    <?php include '../../style_css.php'; ?>
    <!-- css -->
</head>

<body>
    <!-- Header -->
    <?php include '../../components/satprep_header.php'; ?>
    <!-- Header -->

    <!-- banner -->

    <div class="satbanner">
        <picture>
            <source media="(min-width: 769px)" srcset="<?php echo $base_url; ?>assets/imgs/satprep/satonline-banner.jpg">
            <source media="(max-width: 768px)" srcset="<?php echo $base_url; ?>assets/imgs/satprep/satonlinemb.jpg">
            <img src="<?php echo $base_url; ?>assets/imgs/satprep/satonline-banner.jpg" alt="Banner" class="bannerimg">
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
                        <a>Top Prep</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a>GMAT</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a class="active">GMAT Online/Offline</a>
                    </li>
                </ul>
        </div>
        <!-- breadcrumb -->
            <div class="satflx">
                <div class="bannerlft">
                    <div class="baner-dtls">
                        <h1>Boost your Application<br> with a great SAT score!</h1>
                        <p>We will help you raise your SAT score by atleast 150 points!</p>
                        <a class="white-btn">
                            <span>View Our Courses</span>
                            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/truspilot.svg" alt="Trust Pilot" width="281" height="40">
                        <small>Based on <span class="underline">5,931 reviews</span></small>
                    </div>
                </div>
                <div class="bannergt">
                    <div class="stprepform">
                        <!-- form -->
                        <?php include '../../components/forms/satprep_form.php'; ?>
                        <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->

    <section class="greysec">
        <div class="container">
            <div class="kplna-card">
                <div class="crd_kpln">
                <div class="klpn_imgLogo">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Kaplan">
                    </div>
                    <div class="crd_tl">
                        <h2>kaplan Live<br> Online SAT</h2>
                        <p>Course Features</p>
                    </div>
                    <div class="crd-points">
                        <ul>
                            <li>18 hours of immersive live instruction</li>
                            <li>Learn from 99th-percentile-scoring SAT teachers</li>
                            <li>2+ teachers per class</li>
                            <li>4 realistic SAT practice tests</li>
                            <li>Comprehensive QBank of 500+ SAT questions</li>
                            <li>Includes a digital performance dashboard</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Buy Now</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!--  -->
                <div class="crd_kpln">
                <div class="klpn_imgLogo">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Kaplan">
                    </div>
                    <div class="crd_tl">
                        <h2>Comprehensive Prep<br> with Kaplan Integrated</h2>
                        <p>Course Features</p>
                    </div>
                    <div class="crd-points">
                        <ul>
                            <li>Live Offline/Online 60+ hours of Group training</li>
                            <li>6 Adaptive Digital SAT Practice Tests</li>
                            <li>Structured, step-by-step approach, hand-holding</li>
                            <li>A comprehensive QBank that contains over 500 realistic SAT questions</li>
                            <li>Led by 99th-percentile scorers</li>
                            <li>Access to Kaplan on demand online self-paced course modules</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Buy Now</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Our Excellence. Your Commitment.<br> Guaranteed Exam Success</h2>


            <div class="edlsit">
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Learn from the<br> Best Tutors</h3>
                    <ul>
                        <li>99+ percentile Tutors</li>
                        <li>Ivy League Trainers</li>
                        <li>Domain Experts</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="kplndv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Icon" width="177" height="60">
                    </div>
                    <h3>Education<br> Partner</h3>
                    <ul>
                        <li>Kaplan videos</li>
                        <li>Kaplan chapter-wise notes</li>
                        <li>Kaplan books</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Personalized<br> Planning & Journey</h3>
                    <ul>
                        <li>Personalized study planner</li>
                        <li>Score improvement trackers</li>
                        <li>Progress analytics reports</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Comprehensive<br> Study Material</h3>
                    <ul>
                        <li>Detailed Guide</li>
                        <li>Smart Strategies Playbook</li>
                        <li>Flashcards & Cheatsheets</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Real Practice &<br> Mocks</h3>
                    <ul>
                        <li>QBank 1000+ practice questions</li>
                        <li>Chapter-wise practice sets</li>
                        <li>Real-time Full-length Mocks</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">All Live Online Prep Includes</h2>

            <div class="online_prep rflx">
                <div class="online_img">
                    <div class="imgsin">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/online-prep.svg" alt="Online Perp" width="528" height="472">
                    </div>
                </div>
                <div class="online_points">
                    <ul class="opntrs">
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>18 hours of live instruction</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>2+ teachers per class</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>Led by 99th-percentile scorers</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>Digital performance dashboard</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>4 Adaptive Digital SAT Practice Tests</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>A comprehensive QBank that contains over 500 realistic SAT questions</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>Access to on-demand lessons</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Price table -->
    <section>
        <div class="container">
            <div class="hdng text-center">
                <h2 class="blue_mnhdng">SAT Programs at EduEdge Pro</h2>
                <p>At EduEdge Pro, we specialize in helping students ace the Each plan includes strategic test-taking techniques, real-time performance tracking, and tailored study schedules, ensuring you get the right level of support to achieve your target score.</p>
            </div>
            <div class="price_tabel">
                <div class="rflx">
                    <div class="left_hd">
                        <ul>
                            <li>Overview</li>
                            <li>Target Score Range</li>
                            <li>Tutoring Method</li>
                            <li>Test Prep App</li>
                            <li>Full length Mock Tests</li>
                            <li>Unlimited Doubt Clearing</li>
                            <li>Personalized Study Plan</li>
                            <li>Exhaustive Study Material</li>
                        </ul>
                    </div>
                    <div class="right_txt">
                        <div class="mnprc">
                            <div class="prcdtl">
                                <h3 class="prchd">Standard SAT Prep</h3>
                                <p>Foundational guidance and 
                                    access to key resources</p>
                                <p>1300+</p>
                                <p>40+ hours of Group training</p>
                                <p>Basic</p>
                                <p>3</p>
                                <p></p>
                                <p></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <div class="actprl">
                                    <p>INR<span class="fntbg">50,000</span> + GST</p>
                                    <button class="prcbtn"><span>Buy Now</span><svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></button>
                                </div>
                            </div>
                            <div class="prcdtl">
                                <h3 class="prchd">Premium SAT Prep</h3>
                                <p>Structured, step-by-step approach, hand-holding</p>
                                <p>1450+</p>
                                <p>60+ hours of Group training</p>
                                <p>Premium</p>
                                <p>6</p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <div class="actprl">
                                    <p>INR<span class="fntbg">80,000</span> + GST</p>
                                    <button class="prcbtn"><span>Buy Now</span><svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></button>
                                </div>
                            </div>
                            <div class="prcdtl">
                                <h3 class="prchd">1:1 Tutored SAT Prep</h3>
                                <p>Personalized, 1:1 Mentorship 
                                    with tailored strategy</p>
                                <p>1400 - 1550+</p>
                                <p>80+ hours of 
                                    1:1 Private tutoring</p>
                                <p>Premium, Full version</p>
                                <p>10</p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <div class="actprl">
                                    <p>INR<span class="fntbg">1,45,000</span> + GST</p>
                                    <button class="prcbtn"><span>Buy Now</span><svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price table -->

    <!-- Accordion -->
    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Our SAT Training Approach for<br> Comprehensive Preparation</h2>

            <div class="program-faq">
                <div class="accordion" data-accordion>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Diagnostic Test &<br> Customized Study Plan</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Digital SAT Strategies &<br> Adaptive Testing</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Reading & Writing Module</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Math Module</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Practice Tests &<br> Performance Analysis</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Essay Writing (Optional,<br> for Schools Requiring It)</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Accordion -->

    <!-- testimonials -->
    <section class="greysec">
        <div class="container">
            <h2 class="text-center blue_mnhdng">Real stories. Real results.</h2>
            <div class="testimonial-slider slick-slider">
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg">
                                <img src="<?php echo $base_url; ?>assets/imgs/homepage/testimonial.jpg" alt="Testimonial" width="184" height="166">
                                <p>Aindre, Mumbai</p>
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/satimg.svg" alt="Logo" width="95" height="40">
                            </div>
                            <div class="tstdtls">
                                <h4>Personalized 1:1 Tutoring Made All the Difference!</h4>
                                <p class="tstrd">Why did I need Training from EduEdge?</p>
                                <p>I was struggling with core concepts in various areas in my SAT preparation and needed personalized help and doubt solving.</p>
                                <p class="tstrd">How the Training helped me</p>
                                <p>1:1 Personalized training and mentoring by Professor Harjeet helped me clear my concepts and approach complex problems with easy frameworks. He customized my study plan based on my weaknesses, and it paid off!</p>
                                <p class="tstrd">How was the Training</p>
                                <p>I went from a 1280 to a 1520 with just 2 months of private tutoring.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="vdtst">
                            <div class="vdtstimg">
                                <img src="<?php echo $base_url; ?>assets/imgs/homepage/testimonial2.jpg" alt="Testimonial" width="480" height="310">
                            </div>
                            <div class="vdtstflx">
                                <p>Abhishek, Mumbai</p>
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/gmat.svg" alt="Logo" width="95" height="40">
                            </div>
                            <div class="vdtstdtl">
                                <p>Achieved 750 on my resit with a highly effective crash crash at EduEdge</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="tstflx">
                            <div class="tstimg">
                                <img src="<?php echo $base_url; ?>assets/imgs/homepage/testimonial.jpg" alt="Testimonial" width="184" height="166">
                                <p>Aindre, Mumbai</p>
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/satimg.svg" alt="Logo" width="95" height="40">
                            </div>
                            <div class="tstdtls">
                                <h4>Personalized 1:1 Tutoring Made All the Difference!</h4>
                                <p class="tstrd">Why did I need Training from EduEdge?</p>
                                <p>I was struggling with core concepts in various areas in my SAT preparation and needed personalized help and doubt solving.</p>
                                <p class="tstrd">How the Training helped me</p>
                                <p>1:1 Personalized training and mentoring by Professor Harjeet helped me clear my concepts and approach complex problems with easy frameworks. He customized my study plan based on my weaknesses, and it paid off!</p>
                                <p class="tstrd">How was the Training</p>
                                <p>I went from a 1280 to a 1520 with just 2 months of private tutoring.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonialcard">
                        <div class="vdtst">
                            <div class="vdtstimg">
                                <img src="<?php echo $base_url; ?>assets/imgs/homepage/testimonial2.jpg" alt="Testimonial" width="480" height="310">
                            </div>
                            <div class="vdtstflx">
                                <p>Abhishek, Mumbai</p>
                                <img src="<?php echo $base_url; ?>assets/imgs/logo/gmat.svg" alt="Logo" width="95" height="40">
                            </div>
                            <div class="vdtstdtl">
                                <p>Achieved 750 on my resit with a highly effective crash crash at EduEdge</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seeall text-center">
                <a href="#" class="secondary-btn">
                    <span>View All</span>
                    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- testimonials -->

    <!-- Tabs with accordion -->
    <section>
        <div class="container">
            <h2 class="text-center blue_mnhdng">FAQs</h2>
            <div class="faqsection">
                <div class="accordion" data-accordion>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>What SAT prep courses do you offer?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <h4>We offer multiple SAT prep options:</h4>
                                <p><strong>Self-Paced Course – </strong>Flexible, on-demand video lessons and practice questions.</p>
                                <p><strong>Live Online Course – </strong>Interactive, instructor-led classes with structured study plans.</p>
                                <p><strong>One-on-One Tutoring – </strong>Personalized coaching for targeted improvement.</p>
                                <p><strong>Crash Course – </strong>Intensive, short-term prep for last-minute test-takers.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>How long do the SAT prep courses last?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Are full-length SAT practice tests included?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Do you provide official SAT study materials?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Can I switch between packages after enrolling?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>What if I miss a live session?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Is there a free trial or demo?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>How do I enroll?</h3>
                        </div>
                        <div class="accordion-content"></div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="seeall">
                <a class="secondary-btn">
                    <span>View All</span>
                    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Tabs with accordion -->

    <!-- Sticky footer -->
    <?php include '../../components/sticky-footer.php'; ?>
    <!-- Sticky footer -->

    <!-- Footer -->
    <?php include '../../components/footer.php'; ?>
    <!-- Footer -->
    <!-- JS -->
    <?php include '../../style_js.php'; ?>
    <script>
        // Handle all accordion groups dynamically
        document.querySelectorAll('[data-accordion]').forEach(accordion => {
            const headers = accordion.querySelectorAll('.accordion-header');

            headers.forEach(header => {
                header.addEventListener('click', () => {
                    const item = header.parentElement;

                    // Close all other items in the same accordion
                    accordion.querySelectorAll('.accordion-item').forEach(i => {
                        if (i !== item) i.classList.remove('active');
                    });

                    // Toggle current item
                    item.classList.toggle('active');
                });
            });
        });

        // testimonial slider
        $('.testimonial-slider').slick({
            arrows: true,
            dots: false,
            infinite: false,
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
    <!-- JS -->
</body>

</html>