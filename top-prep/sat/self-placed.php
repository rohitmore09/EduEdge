<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Self Paced</title>
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
                        <a>SAT</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a class="active">SAT Self Paced</a>
                    </li>
                </ul>
        </div>
        <!-- breadcrumb -->
            <div class="satflx">
                <div class="bannerlft">
                    <div class="baner-dtls">
                        <h1>Study at Your Pace,<br> Ace the SAT</h1>
                        <p>180+ hours of expert content, anytime you want</p>
                        <a class="white-btn">
                            <span>Explore Our Programs</span>
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
                        <h2>Kaplan on-demand SAT</h2>
                        <p>Course Features</p>
                    </div>
                    <div class="crd-points">
                        <ul>
                            <li>Kaplan “On Demand” SAT Prep Course</li>
                            <li>180+ hours of online instruction & practice</li>
                            <li>Access to Kaplan Live SAT Channel</li>
                            <li>3 full-length SAT mock tests</li>
                            <li>Essential test-taking strategies </li>
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
                <!-- <div class="crd_kpln">
                <div class="klpn_imgLogo">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Kaplan">
                    </div>
                    <div class="crd_tl">
                        <h2>SAT Comprehensive Prep<br> with Kaplan Integrated</h2>
                        <p>Course Features</p>
                    </div>
                    <div class="crd-points">
                        <ul>
                            <li>Kaplan “On Demand” + Live Online Classes</li>
                            <li>60+ hours of live instructor-led classes</li>
                            <li>180+ hours of SAT content</li>
                            <li>7 full-length SAT mock tests</li>
                            <li>400 Ask-a-Tutor questions</li>
                            <li>Ultimate test-taking strategies</li>
                            <li>Ivy League mentoring included</li>
                        </ul>
                    </div>
                    <a href="#" class="secondary-btn">
                        <span>Buy Now</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">What You Get with Us</h2>


            <div class="edlsit">
                <div class="edlst_elem">
                    <div class="kplndv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Icon" width="177" height="60">
                    </div>
                    <h3>Education<br> Partner</h3>
                    <ul>
                        <li>Kaplan Learning Videos</li>
                        <li>Kaplan Chapter-wise notes</li>
                        <li>Kaplan Prep Books</li>
                    </ul>
                </div>

                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Learn from the<br> Best Tutors</h3>
                    <ul>
                        <li>99+ Percentile Scorers</li>
                        <li>Ivy League Alumni Trainers</li>
                        <li>Expert Faculty Across Domains</li>
                    </ul>
                </div>
                
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Personalized<br> Planning & Journey</h3>
                    <ul>
                        <li>Customized Study Planner</li>
                        <li>Targeted Score Improvement Trackers</li>
                        <li>Detailed Progress Reports & Analytics</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Real Practice &<br> Mocks</h3>
                    <ul>
                        <li>QBank 1000+ Practice Questions</li>
                        <li>Chapter-wise Practice Sets</li>
                        <li>Full-Length Timed Mocks</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/setprepicon.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Comprehensive<br> Study Material</h3>
                    <ul>
                        <li>Complete SAT Guide</li>
                        <li>Smart Strategy Playbook</li>
                        <li>Flashcards & Cheat Sheets</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Everything You Get with Live Online Prep</h2>

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
                            <h4>2+ expert teachers per class</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>Led by 99th-percentile SAT scorers</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>4 full-length adaptive digital SAT practice tests</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>500+ practice questions in a comprehensive QBank</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>Access to on-demand video lessons</h4>
                        </li>
                        <li>
                            <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick icon">
                            <h4>Personalized digital performance dashboard</h4>
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
                <h2 class="blue_mnhdng">Find the Right SAT Plan for You</h2>
                <p>At EduEdge Pro, we specialize in helping students ace the Each plan includes strategic test-taking techniques, real-time performance tracking, and tailored study schedules, ensuring you get the right level of support to achieve your target score.</p>
            </div>
            <div class="price_tabel">
                <div class="rflx">
                    <div class="left_hd">
                        <ul>
                            <li>Overview</li>
                            <li>Target Score Range</li>
                            <li>Tutoring Method</li>
                            <li>Kaplan Access included</li>
                            <li>Full length Mock Tests</li>
                            <li>Unlimited Doubt Clearing</li>
                            <li>Personalized Study Plan</li>
                            <li>Exhaustive Study Material</li>
                        </ul>
                    </div>
                    <div class="right_txt">
                        <div class="mnprc">
                            <div class="prcdtl">
                                <h3 class="prchd">Kaplan Standard SAT Prep</h3>
                                <p>Foundational guidance and 
                                    access to key resources</p>
                                <p>1300+</p>
                                <p>Self-paced with Kaplan on-demand SAT Prep</p>
                                <p>Kaplan Live Online</p>
                                <p>3</p>
                                <p>No. Once a week 1 hour slot</p>
                                <p></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <div class="actprl">
                                    <p>INR<span class="fntbg">65,000</span> + GST</p>
                                    <button class="prcbtn"><span>Buy Now</span><svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></button>
                                </div>
                            </div>
                            <div class="prcdtl">
                                <h3 class="prchd">Comprehensive Live with Kaplan</h3>
                                <p>Structured, step-by-step approach, hand-holding</p>
                                <p>1450+</p>
                                <p>Live Offline/ Online 60+ hours of Group training</p>
                                <p>Kaplan On Demand</p>
                                <p>6</p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <div class="actprl">
                                    <p>INR<span class="fntbg">110,000</span> + GST</p>
                                    <button class="prcbtn"><span>Buy Now</span><svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                        </svg></button>
                                </div>
                            </div>
                            <div class="prcdtl">
                                <h3 class="prchd">1:1 Tutored SAT Prep</h3>
                                <p>Personalized, 1:1 Mentorship with tailored strategy</p>
                                <p>1400 - 1550+</p>
                                <p>Live Offline/Online 80+ hours of 
                                    1:1 Private tutoring</p>
                                <p>Kaplan on Demad</p>
                                <p>10</p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <p><img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/tick.svg" alt="Tick"></p>
                                <div class="actprl">
                                    <p>INR<span class="fntbg">2,25,000</span> + GST</p>
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
            <h2 class="blue_mnhdng text-center">Our Method. Your Edge.</h2>

            <div class="program-faq">
                <div class="accordion" data-accordion>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/study-paln.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Diagnostic Test &<br> Customized Study Plan</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="ins-content">
                            <ul>
                                <li>Initial assessment to identify your strengths and gaps</li>
                                <li>Personalized study plan tailored to your goals and baseline</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/digital-strategy.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Digital SAT Strategies &<br> Adaptive Testing</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="ins-content">
                            <ul>
                                <li>Mastering the new digital format and adaptive question model</li>
                                <li>Time-saving techniques to boost accuracy and confidence</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/writing-material.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Reading & Writing Module</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                           <div class="ins-content">
                            <ul>
                                <li><strong>Reading Comprehension:</strong> Learn how to understand passages, find key ideas, and tackle inference questions</li>
                                <li><strong>Grammar & Language Skills:</strong> Master sentence structure, punctuation, and key grammar rules</li>
                                <li><strong>Rhetorical Analysis:</strong> Analyze tone, purpose, and the strength of arguments</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/math-module.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Math Module</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="ins-content">
                            <ul>
                                <li><strong>Algebra:</strong> Linear equations, inequalities, and basic functions</li>
                                <li><strong>Problem-Solving & Data Analysis: </strong>Work with ratios, percentages, and data interpretation</li>
                                <li><strong>Advanced Math:</strong> Quadratics, exponential functions, and key geometry concepts</li>
                                <li><strong>Calculator & No-Calculator Practice:</strong> Optimized strategies for both sections</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/performace-analytics.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Practice Tests &<br> Performance Analysis</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="ins-content">
                            <ul>
                                <li>Realistic, full-length digital SAT practice exams</li>
                                <li>Detailed score reports and performance reviews with targeted insights</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="acrd-img">
                                <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/eassy-writing.svg" alt="Accordion Icon">
                            </div>
                            <div class="acrdhd">
                                <h4>Essay Writing (Optional)</h4>
                            </div>
                        </div>
                        <div class="accordion-content">
                           <div class="ins-content">
                            <ul>
                                <li>Structure and approach for schools that require the SAT essay</li>
                                <li>Practice sessions with expert feedback on argument analysis and writing style</li>
                            </ul>
                            </div>
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
                            <h3>What does the Self-Paced SAT Prep Plan include?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>The self-paced plan includes Kaplan’s “On Demand” SAT Prep Course with 180+ hours of online instruction and practice, 3 full-length SAT mock tests, access to the Kaplan Live SAT Channel, and expert-developed test-taking strategies.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Who is the Self-Paced plan best suited for?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>This plan is ideal for self-motivated students who prefer flexible study schedules and want access to high-quality learning materials without live class commitments.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>How long will I have access to the course?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>You get access to all course materials for up to 6 to 12 months, depending on your enrollment option.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Are full-length SAT practice tests included?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, the self-paced plan includes 3 full-length SAT mock tests designed to simulate the digital exam experience.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Can I access the content on mobile devices?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, all course materials and practice content can be accessed on your desktop, tablet, or mobile device, making it easy to study anytime, anywhere.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Is the Kaplan Live SAT Channel included in this plan?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes! With this plan, you also get access to Kaplan’s Live SAT Channel, where you can join expert-led live sessions on key topics.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Can I upgrade to a live or tutoring plan later?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Absolutely. You can switch to the Live Online or Private Tutoring plans anytime by paying the price difference.</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h3>Is there a free trial or preview available?</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="acrd-ans">
                                <p>Yes, we offer free sample lessons and practice content so you can explore the platform before enrolling.</p>
                            </div>
                        </div>
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