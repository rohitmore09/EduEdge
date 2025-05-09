<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Prep</title>
    <?php include '../style_css.php'; ?>
</head>

<body>
    <!-- Header -->
    <?php include '../components/satprep_header.php'; ?>
    <!-- Header -->

    <!-- banner -->
    <div class="satbanner">
        <picture>
            <source media="(min-width: 769px)" srcset="<?php echo $base_url; ?>assets/imgs/satprep/banner.jpg">
            <source media="(max-width: 768px)" srcset="<?php echo $base_url; ?>assets/imgs/satprep/satmb.jpg">
            <img src="<?php echo $base_url; ?>assets/imgs/satprep/banner.jpg" alt="Banner" class="bannerimg" width="1440" height="768">
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
                        <a class="active">SAT Prep</a>
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
                        <?php include '../components/forms/satprep_form.php'; ?>
                        <!-- form -->
                    </div>
                </div>
            </div>
            <div class="baner_botom">
                <p>Powered by Proven Kaplan Pedagogy</p>
                <p>Mentorship by Ivy-League Experts</p>
            </div>
        </div>
    </div>
    <!-- banner -->

    <section>
        <div class="container">
            <div class="edlsit">
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Modes of<br> Delivery</h3>
                    <ul>
                        <li>Self-paced</li>
                        <li>Live Online/Offline batch</li>
                        <li>1:1 Private Tutoring</li>
                    </ul>
                </div>
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
            </div>
        </div>
    </section>

    <section class="greysec">
        <div class="container">
            <h2 class="blue_mnhdng text-center">Personalized Prep. Global Results.</h2>
            <div class="partnership tflx">
                <div class="prtnerimg">
                    <img src="<?php echo $base_url; ?>assets/imgs/satprep/partnership.svg" alt="Partnership" width="640" height="280">
                </div>
                <div class="prtner_dtl">
                    <div class="hdmg rflx">
                        <h3>Our Partnership with</h3>
                        <div class="kplmg">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Kaplan" width="119" height="40">
                        </div>
                    </div>
                    <p>Through our collaboration with Kaplan, students gain access to trusted test prep resources for PSAT, SAT, ACT, and AP exams. Kaplan’s decades of expertise ensure high-quality materials, expert guidance, and globally aligned study strategies.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
            </div>
            <!--  -->
            <div class="prtnership_pnts">
                <div class="pntsins">Boost your score or get a refund—simple and reliable. Or, extend your online access at no extra cost.</div>
                <div class="pntsins">Get exam-day ready with SAT practice tests that closely mirror the real thing—no surprises, just confidence.</div>
                <div class="pntsins">Follow a tailored study plan that targets your high-impact areas—know exactly what to study and when.</div>
                <div class="pntsins">Only Kaplan offers classes led by a 99th-percentile instructor with support from multiple expert teachers.</div>
            </div>
            <!--  -->
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Top Mentorship for Top Scores</h2>
            <div class="mntrship rflx">
                <div class="mntrdtl">
                    <p>At EduEdge, we believe that every student has the potential to achieve top scores with the right guidance. Our mentorship-driven approach combines expert strategies, personalized learning, and constant support to help you excel. We don’t just prepare you for tests — we prepare you for success.</p>
                    <div class="mntnm">
                        <h3>Prof. Harjeet Singh</h3>
                        <p>CFA, FRM, CAIA, PRM |<br>
                            Stanford Alumnus | Visiting Faculty - IIM</p>
                        <a class="secondary-btn">
                            <span>Meet Your Mentor</span>
                            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mntrrgt">
                    <div class="mentormg">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/mentor.svg" alt="Mentor" width="416" height="485">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="greysec">
        <div class="container">
            <h2 class="blue_mnhdng text-center">Our Prep Plans to help you ace SAT</h2>
            <div class="prep_plans">
                <!-- Plans -->
                <div class="plan">
                    <small class="plantag">Self-paced</small>
                    <h3>SAT Prep<br> On Demand</h3>
                    <p>We will help you raise your SAT score by at least<span class="grnclr">100 points!</span></p>
                    <div class="crd-points">
                        <ul>
                            <li>Includes Kaplan “On Demand” SAT Prep Course</li>
                            <li>180+ hours of online instruction & practice</li>
                            <li>Access to Kaplan live SAT channel</li>
                            <li>3 full-length SAT mock tests</li>
                            <li>Essential test-taking strategies</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Plans -->
                <!-- Plans -->
                <div class="plan">
                    <small class="plantag">Online</small>
                    <h3>SAT Prep<br> Live Online</h3>
                    <p>We will help you raise your GMAT score by at least<span class="grnclr">50 points!</span></p>
                    <div class="crd-points">
                        <ul>
                            <li>Includes Kaplan “Live Online” SAT Prep Course</li>
                            <li>500+ hours of Self-paced Learning</li>
                            <li>Adaptive AI-based Learning</li>
                            <li>3500+ Practice questions</li>
                            <li>250+ Micro lessons</li>
                            <li>7 full-length GMAT mock tests</li>
                            <li>400 Ask-a-Tutor questions</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Plans -->
                <!-- Plans -->
                <div class="plan">
                    <small class="plantag">Online</small>
                    <h3>SAT Prep Comprehensive<br> with On Demand integrated</h3>
                    <p>We will help you raise your SAT score by at least <span class="grnclr">200 points!</span></p>
                    <div class="crd-points">
                        <ul>
                            <li>Includes Kaplan “Live Online” SAT Prep Course</li>
                            <li>500+ hours of Self-paced Learning</li>
                            <li>Adaptive AI-based Learning</li>
                            <li>3500+ Practice questions</li>
                            <li>250+ Micro lessons</li>
                            <li>7 full-length GMAT mock tests</li>
                            <li>400 Ask-a-Tutor questions</li>
                            <li>Mentoring by Ivy League expert</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Plans -->
                <!-- Plans -->
                <div class="plan">
                    <small class="plantag">Online</small>
                    <h3>SAT Prep<br>
                        1:1 Private Tutoring</h3>
                    <p>We will help you raise your SAT score by at least<span class="grnclr"> 200 points!</span></p>
                    <div class="crd-points">
                        <ul>
                            <li>Includes Kaplan “On Demand” SAT Prep Course</li>
                            <li>180+ hours of online instruction & practice</li>
                            <li>60+ hours of live instructor-led classes</li>
                            <li>7 full-length SAT mock tests</li>
                            <li>400 Ask-a-Tutor questions</li>
                            <li>Ultimate test-taking strategies</li>
                            <li>Mentoring by Ivy League expert</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Plans -->
            <div class="seeall">
                <a href="#" class="secondary-btn">
                    <span>View All</span>
                    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

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

    <!-- Online Session Details -->
    <section>
        <div class="container">
            <h2 class="text-center blue_mnhdng">Digital SAT Live Online Session Details</h2>

            <div class="online_session">
                <div class="accordion" data-accordion>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 1</h4>
                            <h4>Session 1</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Practice Test 1</h4>
                            <h4>Practice Test 1</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 2</h4>
                            <h4>Session 2</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 3</h4>
                            <h4>Session 3</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 4</h4>
                            <h4>Session 4</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 5</h4>
                            <h4>Session 5</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 6</h4>
                            <h4>Session 6</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 7</h4>
                            <h4>Session 7</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 8</h4>
                            <h4>Session 8</h4>
                        </div>
                        <div class="accordion-content">
                            <p>Content for section 1.1</p>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Online Session Details -->

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
            <div class="tbs-acrd">
                <div class="tabs-area" data-tab-section>
                    <ul class="tab-buttons">
                        <li class="tb-cntnt" data-tab="tab1">
                            <p>SAT Exam Overview</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab2">
                            <p>Why Take the SAT</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab3">
                            <p>Courses & Learning Modes</p>
                        </li>
                        <li class="tb-cntnt" data-tab="tab4">
                            <p>Tests & Study Material</p>
                        </li>
                    </ul>
                    <div class="tbs active" id="tab1">
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
                    <div class="tbs" id="tab2"></div>
                    <div class="tbs" id="tab3"></div>
                    <div class="tbs" id="tab4"></div>
                </div>
            </div>
            <!-- End -->
            <div class="prsnlz">
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global">
                    </div>

                    <h3>Highest<br>
                        Personalization.</h3>
                    <p>Be Your Best Version.</p>
                </div>
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global">
                    </div>
                    <h3>Academic<br>
                        Excellence.</h3>
                    <p>Achieve subject mastery beyond curriculum.</p>
                </div>
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global">
                    </div>
                    <h3>Trained by<br>
                        the Best.</h3>
                    <p>Bring out your Best.</p>
                </div>
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global">
                    </div>

                    <h3>Holistic<br>
                        Development.</h3>
                    <p>Empowering You for a strong application.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Tabs with accordion -->
    <!-- Sticky footer -->
    <?php include '../components/sticky-footer.php'; ?>
    <!-- Sticky footer -->

    <!-- Footer -->
    <?php include '../components/footer.php'; ?>
    <!-- Footer -->
    <!-- JS -->
    <?php include '../style_js.php'; ?>
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