<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT</title>
    <?php include '../style_css.php'; ?>
</head>

<body>
    <!-- Header -->
    <?php include '../components/satprep_header.php'; ?>
    <!-- Header -->

    <!-- banner -->
    <div class="satbanner">
        <div class="prp-banner">
            <picture>
                <source media="(min-width: 769px)" srcset="<?php echo $base_url; ?>assets/imgs/satprep/banner.jpg">
                <source media="(max-width: 768px)" srcset="<?php echo $base_url; ?>assets/imgs/satprep/satmb.jpg">
                <img src="<?php echo $base_url; ?>assets/imgs/satprep/banner.jpg" alt="Banner" class="bannerimg" width="1440" height="768">
            </picture>
            <div class="baner_botom">
                <p>Powered by Proven Kaplan Pedagogy</p>
                <p>Mentorship by Ivy-League Experts</p>
            </div>
        </div>
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
                        <a class="active">SAT</a>
                    </li>
                </ul>
            </div>
            <!-- breadcrumb -->
            <div class="satflx">
                <div class="bannerlft">
                    <div class="baner-dtls">
                        <h1>Ace the SAT with expert-led prep</h1>
                        <p>Ivy-league mentor. Proven strategies. Real practice. Guaranteed results.</p>
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
                        <?php include '../components/forms/satprep_form.php'; ?>
                        <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->

    <section>
        <div class="container">
            <div class="edlsit">
                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/mode-of-delivery.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Modes of<br> Delivery</h3>
                    <ul>
                        <li>Self-paced</li>
                        <li>Live Online/Offline batch</li>
                        <li>1:1 Private Tutoring</li>
                    </ul>
                </div>
                <div class="edlst_elem">
                    <div class="kplndv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Icon" width="177" height="60">
                    </div>
                    <h3>Education<br> Partner</h3>
                    <ul>
                        <li>Kaplan Learning Videos</li>
                        <li>Kaplan Chapter-wise Notes</li>
                        <li>Kaplan Prep Books</li>
                    </ul>
                </div>

                <div class="edlst_elem">
                    <div class="elemdv">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/best-tutor.svg" alt="Icon" width="40" height="40">
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
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/pljourney.svg" alt="Icon" width="40" height="40">
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
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/mocks.svg" alt="Icon" width="40" height="40">
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
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/study-material.svg" alt="Icon" width="40" height="40">
                    </div>
                    <h3>Comprehensive<br> Study Material</h3>
                    <ul>
                        <li>Detailed Guide</li>
                        <li>Smart Strategies Playbook</li>
                        <li>Flashcards & Cheatsheets</li>
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
                        <h3>A World-Class Edge with</h3>
                        <div class="kplmg">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="Kaplan" width="119" height="40">
                        </div>
                    </div>
                    <p>Our partnership with Kaplan brings students access to one of the world’s most trusted names in test preparation. With decades of expertise, Kaplan provides high-quality study materials, practice tests, and proven strategies for PSAT, SAT, ACT, and AP exams. Students benefit from structured learning paths, expert guidance, and resources aligned with global testing standards.</p>
                    <p>Plus, get the confidence of a prep system used by millions worldwide — designed to help you succeed, no matter where you start.</p>
                </div>
            </div>
            <!--  -->
            <div class="prtnership_pnts">
                <div class="pntsins">
                    <h3>Higher Score Guaranteed</h3>
                    <p>Boost your score or get a refund—simple and reliable. Or, extend your online access at no extra cost.</p>
                </div>

                <div class="pntsins">
                    <h3>The Most Realistic Practice. Period.</h3>
                    <p>Train with test simulations that mirror the real SAT experience. No surprises. Just confidence.</p>
                </div>

                <div class="pntsins">
                    <h3>Personalized For Your Best Score</h3>
                    <p>Study smarter with plans that target the topics you need to improve most.</p>
                </div>
                <div class="pntsins">
                    <h3>More Passion. More Support.</h3>
                    <p>Learn from expert instructors and 99th-percentile scorers — with multiple mentors per batch.</p>
                </div>
            </div>
            <!--  -->
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Success Begins with Great Mentors</h2>
            <div class="mntrship rflx">
                <div class="mntrdtl">
                    <p>At EduEdge, we believe that every student has the potential to achieve top scores with the right guidance. Our mentorship-driven approach combines expert strategies, personalized learning, and constant support to help you excel. We don’t just prepare you for tests — we prepare you for success.</p>
                    <div class="mntnm">
                        <h3>Professor. Harjeet A Singh</h3>
                        <p>Founder & CEO |<br>
                            CFA, FRM, CAIA, PRM, CMT |<br>
                            Stanford University Alumnus |<br>
                            Visiting Faculty - IIM</p>
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
            <h2 class="blue_mnhdng text-center">Prep Your Way to Top SAT Scores</h2>
            <div class="prep_plans slick-slider">
                <!-- Plans -->
                <div class="item plan">
                    <small class="plantag">Self-paced</small>
                    <h3>SAT Prep<br> On Demand</h3>
                    <p>SAT Prep On Demand<br>Raise your SAT score by at least <span class="grnclr">100 points!</span> — on your schedule.</p>
                    <div class="crd-points">
                        <ul>
                            <li>Kaplan “On Demand” SAT Prep Course</li>
                            <li>180+ hours of online instruction & practice</li>
                            <li>Access to Kaplan Live SAT Channel</li>
                            <li>3 full-length SAT mock tests</li>
                            <li>Essential test-taking strategies</li>
                        </ul>
                    </div>
                    <p class="satprice">From:<strong> INR 50,000</strong> plus GST</p>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Plans -->
                <!-- Plans -->
                <div class="item plan">
                    <small class="plantag">Online</small>
                    <h3>SAT Prep<br> Live Online</h3>
                    <p>Boost your SAT score by at least <span class="grnclr">150 points!</span> — with expert-led live sessions.</p>
                    <div class="crd-points">
                        <ul>
                            <li>Kaplan “Live Online” SAT Prep Course</li>
                            <li>500+ hours of Self-paced learning</li>
                            <li>AI-driven adaptive learning experience</li>
                            <li>3500+ practice questions</li>
                            <li>250+ micro lessons</li>
                            <li>7 full-length SAT mock tests</li>
                            <li>400 Ask-a-Tutor questions</li>
                            <li>Mentoring by Ivy League experts</li>
                        </ul>
                    </div>
                    <p class="satprice">From:<strong> INR 85,000</strong> plus GST</p>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Plans -->
                <!-- Plans -->
                <div class="item plan">
                    <small class="plantag">Classroom / Live Online</small>
                    <h3>SAT Prep Comprehensive<br> with On Demand Integrated</h3>
                    <p>Achieve <span class="grnclr">200+ points</span> improvement with the most complete SAT prep experience.</p>
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
                    <p class="satprice">From:<strong> INR 85,000</strong> plus GST</p>
                    <a href="#" class="secondary-btn">
                        <span>Learn More</span>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Plans -->
                <!-- Plans -->
                <div class="item plan">
                    <small class="plantag">1:1 Private Tutoring</small>
                    <h3>SAT Prep<br>
                        1:1 Private Tutoring</h3>
                    <p>Raise your SAT score by at least <span class="grnclr">250 points</span> with 1:1 expert coaching.</p>
                    <div class="crd-points">
                        <ul>
                            <li>60+ hours of live private tutoring</li>
                            <li>Kaplan “On Demand” SAT Prep Course</li>
                            <li>180+ hours of online SAT content</li>
                            <li>5+ hours of personalized doubt-solving sessions</li>
                            <li>10 full-length SAT mock tests</li>
                            <li>Kaplan Live SAT Channel access</li>
                            <li>Mentoring by Ivy League experts</li>
                        </ul>
                    </div>
                    <p class="satprice">From:<strong> INR 60,000</strong> plus GST</p>
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
                                <li>Reading Comprehension: Learn how to understand passages, find key ideas, and tackle inference questions</li>
                                <li>Grammar & Language Skills: Master sentence structure, punctuation, and key grammar rules</li>
                                <li>Rhetorical Analysis: Analyze tone, purpose, and the strength of arguments</li>
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
                                <li>Algebra: Linear equations, inequalities, and basic functions</li>
                                <li>Problem-Solving & Data Analysis: Work with ratios, percentages, and data interpretation</li>
                                <li>Advanced Math: Quadratics, exponential functions, and key geometry concepts</li>
                                <li>Calculator & No-Calculator Practice: Optimized strategies for both sections</li>
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

    <!-- Online Session Details -->
    <section>
        <div class="container">
            <h2 class="text-center blue_mnhdng">Digital SAT Live Online Class Breakdown</h2>

            <div class="online_session">
                <div class="accordion" data-accordion>
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Session 1</h4>
                            <h4>Session 1</h4>
                        </div>
                        <div class="accordion-content">
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>The Digital SAT and You</li>
                                    <li>How To Do SAT Math</li>
                                    <li>Backsolving</li>
                                    <li>Picking Numbers</li>
                                    <li>Resource Walkthrough</li>
                                    <li>How To Do SAT Reading and Writing</li>
                                    <li>Reading and Writing Strategy</li>
                                    <li>Words in Context Questions</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>Put all those Kaplan strategies that you've learned in class so far to the test by taking a full length practice test. You'll want to bring your scratch paper, pencils, and a graphing or scientific calculator to this live proctoring to make sure you get the most realistic experience possible.</p>
                                <p>After taking your practice test, you'll receive a detailed score breakdown that will help you identify your strengths and the areas in which you have an opportunity for growth.</p>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Growth Mindset</li>
                                    <li>Main Idea Questions</li>
                                    <li>Detail Questions</li>
                                    <li>Test Strategy</li>
                                    <li>Solving Equations</li>
                                    <li>Word Problems</li>
                                    <li>Linear Graphs</li>
                                    <li>Substitution</li>
                                    <li>Combination</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Using the Digital Test Tools</li>
                                    <li>Number of Possible Solutions</li>
                                    <li>Inequalities and Systems of Inequalities</li>
                                    <li>Graphs of Inequalities</li>
                                    <li>Modeling Real-Life Situations with Inequalities</li>
                                    <li>Function Notation and Interpretation</li>
                                    <li>Quantitative Command of Evidence Questions (Using Graphics in Reading and Writing)</li>
                                    <li>Textual Command of Evidence Questions (Claims and Evidence)</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Using the Digital Test Tools</li>
                                    <li>Number of Possible Solutions</li>
                                    <li>Inequalities and Systems of Inequalities</li>
                                    <li>Graphs of Inequalities</li>
                                    <li>Modeling Real-Life Situations with Inequalities</li>
                                    <li>Function Notation and Interpretation</li>
                                    <li>Quantitative Command of Evidence Questions (Using Graphics in Reading and Writing)</li>
                                    <li>Textual Command of Evidence Questions (Claims and Evidence)</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Topic Distribution</li>
                                    <li>Probability</li>
                                    <li>Line of Best Fit</li>
                                    <li>Scatterplot Modeling</li>
                                    <li>Absolute Value</li>
                                    <li>Nonlinear Functions</li>
                                    <li>Text Structure and Purpose Questions</li>
                                    <li>The Basics of Sentence Structure</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Taking Notes and Using Analog Tools</li>
                                    <li>Connections Questions (Two-Text Questions)</li>
                                    <li>Punctuation</li>
                                    <li>Exponents and Radicals</li>
                                    <li>Polynomials</li>
                                    <li>Graphs of Nonlinear Functions</li>
                                    <li>Modeling Growth and Decay</li>
                                    <li>Rational Expressions and Equations</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Test Anxiety</li>
                                    <li>FOIL, Factoring, and Classic Quadratics</li>
                                    <li>Completing the Square and the Quadratic Formula</li>
                                    <li>Graphing Quadratics</li>
                                    <li>Seeking Scholarships</li>
                                    <li>Transitions Questions</li>
                                    <li>Verbs</li>
                                </ul>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Taking and Reviewing Practice Tests</li>
                                    <li>Pronouns</li>
                                    <li>Modifiers</li>
                                    <li>Lines and Angles</li>
                                    <li>Area, Perimeter, and Scale</li>
                                    <li>Similar Triangles</li>
                                    <li>Circles</li>
                                    <li>Math Timing and Section Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4>Practice Test 2</h4>
                            <h4>Practice Test 2</h4>
                        </div>
                        <div class="accordion-content">
                            <div class="ins-content">
                                <p>It's time to take another full length practice test. This time you'll be taking your practice test on your own time between sessions. You'll still want to have your scratch paper, pencils, and a graphing or scientific calculator handy to make sure you get the most realistic experience possible.</p>
                                <p>After taking your practice test, you'll receive a detailed score breakdown that will help you identify your strengths and the areas in which you have an opportunity for growth.</p>
                            </div>
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
                            <div class="ins-content">
                                <p>This class session will cover:</p>
                                <ul>
                                    <li>Countdown to Test Day</li>
                                    <li>Surveys and Data Samples</li>
                                    <li>Right Triangles</li>
                                    <li>Trigonometry</li>
                                    <li>Three-Dimensional Figures</li>
                                    <li>Reading & Writing Timing and Section Management</li>
                                </ul>
                            </div>
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
                                    <h3>What is the SAT and who conducts it?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                      <p>The SAT is a standardized college entrance test administered by the College Board, widely used by U.S. and global universities.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What is the SAT Examination structure?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>The SAT (Scholastic Assessment Test) is a standardized exam used for college admissions in the U.S. It consists of two main sections: Reading & Writing and Math, with a total duration of 2 hours and 14 minutes. The Reading & Writing section assesses comprehension, grammar, and analytical skills, while the Math section evaluates algebra, problem-solving, and data analysis. The test is now digital, adaptive in nature, and scored on a scale of 400–1600. There is no penalty for wrong answers, and students receive their scores within days of completion.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>How are the two sections of the SAT structured?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <div class="acrd_sec">
<p>Section 1 – Reading & Writing (Scale: 200–800)</p>
                                        <ul class="faqulsec">
                                            <li>Information & Ideas</li>
                                            <li>Craft & Structure</li>
                                            <li>Expression of Ideas</li>
                                            <li>Standard English Conventions</li>
                                            <li>54 questions | 64 minutes | 2 modules</li>
                                        </ul>
                                        </div>
                                        <div class="acrd_sec">
<p>Section 2 – Mathematics (Scale: 200–800)</p>
                                        <ul class="faqulsec">
                                            <li>Algebra</li>
                                            <li>Advanced Math</li>
                                            <li>Problem Solving & Data Analysis</li>
                                            <li>Geometry & Trigonometry</li>
                                            <li>44 questions | 70 minutes | 2 modules</li>
                                            <li>Total Score Range: 400–1600</li>
                                            <li>No negative marking</li>
                                            <li>Scores typically released in a few days</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>When should I take the SAT?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Most students take the SAT in Grade 11 or early Grade 12, allowing time for retakes and university applications.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Who Can Take the SAT?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>While the SAT is primarily designed for high school students applying to undergraduate programs, it is open to a wider audience:</p>
                                        <ul>
                                            <li><strong>High School Students (Grades 9–12):</strong> Most take it in 11th or 12th grade for admissions.</li>
                                            <li><strong>International Students:</strong> Accepted worldwide for college admissions.</li>
                                            <li><strong>Younger Students:</strong> Some students in 9th or 10th grade take it early to assess readiness.</li>
                                            <li><strong>Students Applying for Scholarships:</strong> Many scholarship programs require SAT scores.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>How often is the SAT conducted?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>The SAT is conducted seven times a year internationally. You can register via the official College Board website.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Can I take the SAT multiple times?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
<p>Yes, you can take the SAT multiple times. Most colleges consider your highest score through superscoring or the best single attempt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                           
                        </div>
                    </div>
                    <div class="tbs" id="tab2">
                        <div class="accordion" data-accordion>
                             <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Why Take the SAT Exam?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <ul>
                                            <li><strong>College Admissions:</strong> Required or recommended by many universities in the U.S., Canada, and some other countries.</li>
                                            <li><strong>Scholarship Opportunities:</strong> High SAT scores can qualify you for merit-based scholarships.</li>
                                            <li><strong>Global Recognition: </strong>Accepted by thousands of institutions worldwide.</li>
                                            <li><strong>Test-Optional Flexibility:</strong> Even at test-optional schools, a strong SAT score can enhance your application.</li>
                                            <li><strong>Showcase Academic Strengths: </strong> Demonstrates your skills in Math, Reading, and Writing. Compensate for GPA: Helps balance a lower GPA with a strong test score.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Is the SAT mandatory for college admissions?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>While many universities are test-optional, a strong SAT score can enhance your application and scholarship chances.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Can the SAT help with scholarships?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Absolutely. Many universities and third-party organizations use SAT scores to determine eligibility for merit-based scholarships.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Do international universities accept SAT scores?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes, SAT scores are accepted by thousands of universities in the U.S., Canada, and over 85 countries worldwide.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What’s the benefit of preparing early for the SAT?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Early prep allows time to master concepts, reduce stress, and improve scores through practice and feedback.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What’s the benefit of preparing early for the SAT?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Early prep allows time to master concepts, reduce stress, and improve scores through practice and feedback.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <div class="tbs" id="tab3">
                        <div class="accordion" data-accordion>
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What SAT prep courses do you offer?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>We offer multiple SAT prep options:</p>
                                        <ul>
                                            <li>Self-Paced Course</li>
                                            <li>Live Online Course</li>
                                            <li>One-on-One Tutoring</li>
                                            <li>Crash Course</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                             <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>How long do the SAT prep courses last?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Here are the timelines: </p>
                                        <ul>
                                            <li>Self-Paced: 6–12 months</li>
                                            <li>Live Online: 12–24 weeks</li>
                                            <li>Tutoring: Fully flexible</li>
                                            <li>Crash Course: 2–4 weeks</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What learning format is right for me?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>It depends on your goals, schedule, and learning style. We offer a free consultation to help you choose the best fit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Can I switch between packages after enrolling?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes! You can upgrade by paying the difference in fees. Our team will guide you through the transition.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Are your instructors experienced SAT mentors?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes. Our faculty includes 99+ percentile scorers, Ivy League alumni, and domain experts in SAT test prep.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Do your courses include mentoring and planning?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes, all our programs include personalized study plans, performance tracking, and expert mentoring for top results.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                             <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What if I miss a live session?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>All live classes are recorded, so you can watch them later at your convenience.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Is there a free trial or demo?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes! We offer free sample lessons and practice materials so you can explore our courses before enrolling.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>How do I enroll?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>You can enroll directly through our website or contact our support team for guidance.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <div class="tbs" id="tab4">
                        <div class="accordion" data-accordion>
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Are full-length SAT practice tests included?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes! All courses include multiple full-length, adaptive SAT mock tests with real-time scoring and analytics.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Do you provide official SAT study materials?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes. Our courses include Kaplan books, chapter-wise notes, practice tests, flashcards, and strategy guides.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>What kind of practice questions are available?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Our QBank includes 1000+ practice questions, topic-wise sets, and real-exam style digital questions.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>How do I track my SAT progress?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>We provide score improvement trackers, performance analytics reports, and regular progress updates.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Is essay prep included in the course?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Yes, optional SAT essay modules are included for students applying to universities that still require it.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3>Do your materials follow the Digital SAT pattern?</h3>
                                </div>
                                <div class="accordion-content">
                                    <div class="acrd-ans">
                                        <p>Absolutely. Our resources are fully aligned with the new digital SAT structure and adaptive testing model.</p>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
            <div class="prsnlz">
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/high-personalize.svg" alt="Global">
                    </div>

                    <h3>Highest<br>
                        Personalization.</h3>
                    <p>Be Your Best Version.</p>
                </div>
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/academic-excellence.svg" alt="Global">
                    </div>
                    <h3>Academic<br>
                        Excellence.</h3>
                    <p>Achieve subject mastery beyond curriculum.</p>
                </div>
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/best-trainer.svg" alt="Global">
                    </div>
                    <h3>Trained by<br>
                        the Best.</h3>
                    <p>Bring out your Best.</p>
                </div>
                <div class="prsnlz_dv">
                    <div class="prsnlz_img">
                        <img src="<?php echo $base_url; ?>assets/imgs/satprep/icons/holistic.svg" alt="Global">
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

        //Prep plans
        $('.prep_plans').slick({
            arrows: true,
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
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