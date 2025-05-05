<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduEdge</title>
    <!-- css -->
    <?php include 'style_css.php'; ?>
    <!-- css -->
</head>

<body>
    <!-- header -->
    <?php include 'components/header.php'; ?>
    <!-- header -->

    <div class="sldier_section">
        <!-- slider -->
        <div class="top-slider">
            <div class="main_slider" id="slides">
                <div class="slides">
                    <picture>
                        <source media="(min-width: 769px)" srcset="assets/imgs/homepage/img1.jpg">
                        <source media="(max-width: 768px)" srcset="assets/imgs/homepage/bannermb.jpg">
                        <img src="<?php echo $base_url; ?>assets/imgs/homepage/img1.jpg" class="banner_img" alt="Banner" width="1440" height="768">
                    </picture>

                    <div class="container">
                        <div class="slides-content">
                            <h1>Your journey to top global<br> universities start here</h1>
                            <ul>
                                <li>SAT, GMAT, IELTS prep</li>
                                <li>Application support for UG & PG</li>
                                <li>1:1 mentoring with industry experts</li>
                            </ul>
                            <div class="slider_btn">
                                <a href="#" class="white-btn"><span>Explore Test Prep</span><img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon" width="8" height="16"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slides">
                    <picture>
                        <source media="(min-width: 769px)" srcset="assets/imgs/homepage/img1.jpg">
                        <source media="(max-width: 768px)" srcset="assets/imgs/homepage/bannermb.jpg">
                        <img src="<?php echo $base_url; ?>assets/imgs/homepage/img1.jpg" class="banner_img" alt="Banner" width="1440" height="768">
                    </picture>

                    <div class="container">
                        <div class="slides-content">
                            <h1>Your journey to top global<br> universities start here</h1>
                            <ul>
                                <li>SAT, GMAT, IELTS prep</li>
                                <li>Application support for UG & PG</li>
                                <li>1:1 mentoring with industry experts</li>
                            </ul>
                            <div class="slider_btn">
                                <a href="#" class="white-btn"><span>Explore Test Prep</span><img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon" width="8" height="16"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slides">
                    <picture>
                        <source media="(min-width: 769px)" srcset="assets/imgs/homepage/img1.jpg">
                        <source media="(max-width: 768px)" srcset="assets/imgs/homepage/bannermb.jpg">
                        <img src="<?php echo $base_url; ?>assets/imgs/homepage/img1.jpg" class="banner_img" alt="Banner" width="1440" height="768">
                    </picture>

                    <div class="container">
                        <div class="slides-content">
                            <h1>Your journey to top global<br> universities start here</h1>
                            <ul>
                                <li>SAT, GMAT, IELTS prep</li>
                                <li>Application support for UG & PG</li>
                                <li>1:1 mentoring with industry experts</li>
                            </ul>
                            <div class="slider_btn">
                                <a href="#" class="white-btn"><span>Explore Test Prep</span><img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon" width="8" height="16"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dots -->
            <div class="main-dots" id="maindots">
                <div class="dt active">
                    <span>Prep for Ivy Leagues</span>
                    <div class="fill"></div>
                </div>
                <div class="dt">
                    <span>Study in Top Global Universities</span>
                    <div class="fill"></div>
                </div>
                <div class="dt">
                    <span>Upskill for Career Growth</span>
                    <div class="fill"></div>
                </div>
                <!-- dots -->
            </div>
        </div>
        <!-- slider -->
    </div>

    <section class="btns_sec">
        <div class="container">
            <div class="infbtns">
                <div class="infhd">
                    <h2 class="white_mnhdng">Let's Get<br> Started</h2>
                </div>
                <div class="six_btn">
                    <a href="#">
                        <h4>Test Prep</h4>
                        <p>SAT, GRE, GMAT, IELTS & more</p>
                    </a>
                    <a href="#">
                        <h4>Mentoring & Councelling</h4>
                        <p>Applications, SOPs, interviews, profile building</p>
                    </a>
                    <a href="#">
                        <h4>Meet Our Instructors</h4>
                        <p>Learn from global experts & top scorers</p>
                    </a>
                    <a href="#">
                        <h4>Study Abroad</h4>
                        <p>UG & PG admissions to top global universities</p>
                    </a>
                    <a href="#">
                        <h4>Certifications</h4>
                        <p>Upskilling for careers in finance, data, tech & more</p>
                    </a>
                    <a href="#">
                        <h4>About EduEdge Pro</h4>
                        <p>Our story, mission, and impact</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mentor_sec">
        <div class="container">
            <h2 class="blue_mnhdng text-center">Personalized Prep. Global Results.</h2>
            <h5 class="text-center">Founded by a Stanford Alumnus. Focused on Your Future.</h5>
            <div class="mntr-flex">
                <div class="mntr-img">
                    <div class="imgbtn">
                        <img src="<?php echo $base_url; ?>assets/imgs/people/mentor.jpg" class="mntrimg" alt="Mentor Image" width="500" height="485">
                        <a href="#" class="secondary-btn">
                            <span>Meet Your Mentor</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon" width="8" height="16">
                        </a>
                    </div>
                </div>
                <div class="deg_dtls">
                    <p class="mntrspn">EduEdgePro is a personalized mentoring and test prep platform led by <span class="grnclr">Prof. Harjeet Singh</span>, a <span class="grnclr">Stanford University alumnus</span> with global credentials - <span class="grnclr">CFA, FRM, CAIA, PRM.</span> With experience as a <span class="grnclr">visiting faculty at IIM & JBIMS</span> and a former consultant to the <span class="grnclr">Ministry of Finance,</span> Prof. Harjeet brings unmatched academic and industry expertise to guide your journey.</p>
                    <div class="deg_logo">
                        <h4>Education Partners</h4>
                        <ul>
                            <li><img src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="kaplan" width="184" height="64"></li>
                            <li><img src="<?php echo $base_url; ?>assets/imgs/logo/bloomberg.svg" alt="Bloomberg" width="184" height="64"></li>
                        </ul>
                    </div>
                    <div class="deg_counter">
                        <!-- counter -->
                        <div class="counter09">
                            <div>
                                <h2><span class="count" data-count="25">0</span>K+</h2>
                                <p>Students Trained</p>
                            </div>
                            <div>
                                <h2><span class="count" data-count="5">0</span>K+</h2>
                                <p>Students Mentored</p>
                            </div>
                            <div>
                                <h2><span class="count" data-count="20">0</span>+</h2>
                                <p>University Partnerships</p>
                            </div>
                        </div>
                        <!-- counter -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-sec">
        <div class="container">
            <h2 class="text-center blue_mnhdng">Powerd by <img class="hdimg" src="<?php echo $base_url; ?>assets/imgs/logo/kaplan.svg" alt="logo" width="188" height="64">. Trusted Worldwide.</h2>
            <div class="wrldgrd">
                <div class="wrldv">
                    <div class="wrldimg">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global icon" width="32" height="32">
                    </div>
                    <div class="wrld_cnt">
                        <h5>Global Test Prep Leader</h5>
                        <p>Trusted in over 30 countries for SAT, GRE, GMAT</p>
                    </div>
                </div>
                <div class="wrldv">
                    <div class="wrldimg">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global icon" width="32" height="32">
                    </div>
                    <div class="wrld_cnt">
                        <h5>Proven Score Improvement</h5>
                        <p>Backed by data, driven by results</p>
                    </div>
                </div>
                <div class="wrldv">
                    <div class="wrldimg">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global icon" width="32" height="32">
                    </div>
                    <div class="wrld_cnt">
                        <h5>Official Practice Material</h5>
                        <p>Real exam questions, mock tests & adaptive learning</p>
                    </div>
                </div>
                <div class="wrldv">
                    <div class="wrldimg">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/global.svg" alt="Global icon" width="32" height="32">
                    </div>
                    <div class="wrld_cnt">
                        <h5>EduEdge x Kaplan Advantage</h5>
                        <p>Personalized mentoring meets global-standard prep</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-sec">
        <div class="container">
            <h2 class="text-center blue_mnhdng">Test Prep That Delivers</h2>
            <div class="test-prep">
                <div class="tab-section" data-tab-section>
                    <ul class="tab-buttons">
                        <li class="tb-cntnt trndflx" data-tab="tab1">
                            <svg width="25" height="25" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="352 144 464 144 464 256"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" />
                                <path d="M48,368 L169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            <span>Trending</span>
                        </li>
                        <li class="tb-cntnt" data-tab="tab2"><span>SAT</span></li>
                        <li class="tb-cntnt" data-tab="tab3"><span>GRE</span></li>
                        <li class="tb-cntnt" data-tab="tab4"><span>GMAT</span></li>
                        <li class="tb-cntnt" data-tab="tab5"><span>PSAT</span></li>
                        <li class="tb-cntnt" data-tab="tab6"><span>AP</span></li>
                        <li class="tb-cntnt" data-tab="tab7"><span>ACT</span></li>
                        <li class="tb-cntnt" data-tab="tab8"><span>IELTS</span></li>
                        <li class="tb-cntnt" data-tab="tab9"><span>TOEFL</span></li>
                    </ul>
                    <!-- tabs content -->
                    <div class="tbs active" id="tab1">
                        <div class="coursesec slick-slider">
                            <!-- item -->
                            <div class="item crscrd">
                                <div class="crdimg">
                                    <img src="<?php echo $base_url; ?>assets/imgs/course/course.jpg" alt="Course" width="384" height="200">
                                </div>
                                <div class="crd-ttl">
                                    <h4>GRE Online Comprehensive Prep</h4>
                                    <p>We will help you raise your GRE score by at least <span class="grnclr">25 points!</span></p>
                                </div>
                                <div class="crd-points">
                                    <ul>
                                        <li>Includes Kaplan “On Demand” Prep Course</li>
                                        <li>40+ hours of live online instructor-led classes</li>
                                        <li>180+ hours of online instruction & practice</li>
                                        <li>Access to Kaplan live GRE channel</li>
                                        <li>10 full-length GRE mock tests</li>
                                        <li>Essential test-taking strategies</li>
                                        <li>Mentoring by Ivy League expert</li>
                                    </ul>
                                </div>
                                <div class="crdbtn">
                                    <a href="#" class="secondary-btn"><span>Learn More</span><img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon"></a>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="item crscrd">
                                <div class="crdimg">
                                    <img src="<?php echo $base_url; ?>assets/imgs/course/course.jpg" alt="Course" width="384" height="200">
                                </div>
                                <div class="crd-ttl">
                                    <h4>GRE Online Comprehensive Prep</h4>
                                    <p>We will help you raise your GRE score by at least <span class="grnclr">25 points!</span></p>
                                </div>
                                <div class="crd-points">
                                    <ul>
                                        <li>Includes Kaplan “On Demand” Prep Course</li>
                                        <li>40+ hours of live online instructor-led classes</li>
                                        <li>180+ hours of online instruction & practice</li>
                                        <li>Access to Kaplan live GRE channel</li>
                                        <li>10 full-length GRE mock tests</li>
                                        <li>Essential test-taking strategies</li>
                                        <li>Mentoring by Ivy League expert</li>
                                    </ul>
                                </div>
                                <div class="crdbtn">
                                    <a href="#" class="secondary-btn"><span>Learn More</span><img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon"></a>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="item crscrd">
                                <div class="crdimg">
                                    <img src="<?php echo $base_url; ?>assets/imgs/course/course.jpg" alt="Course" width="384" height="200">
                                </div>
                                <div class="crd-ttl">
                                    <h4>GRE Online Comprehensive Prep</h4>
                                    <p>We will help you raise your GRE score by at least <span class="grnclr">25 points!</span></p>
                                </div>
                                <div class="crd-points">
                                    <ul>
                                        <li>Includes Kaplan “On Demand” Prep Course</li>
                                        <li>40+ hours of live online instructor-led classes</li>
                                        <li>180+ hours of online instruction & practice</li>
                                        <li>Access to Kaplan live GRE channel</li>
                                        <li>10 full-length GRE mock tests</li>
                                        <li>Essential test-taking strategies</li>
                                        <li>Mentoring by Ivy League expert</li>
                                    </ul>
                                </div>
                                <div class="crdbtn">
                                    <a href="#" class="secondary-btn"><span>Learn More</span><img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tbs" id="tab2">1</div>
                    <div class="tbs" id="tab3">2</div>
                    <div class="tbs" id="tab4">3</div>
                    <div class="tbs" id="tab5">4</div>
                    <div class="tbs" id="tab6">5</div>
                    <div class="tbs" id="tab7">6</div>
                    <div class="tbs" id="tab8">7</div>
                    <div class="tbs" id="tab9">8</div>
                    <!-- tabs content -->
                </div>
                <!-- see all -->
                <div class="seeall">
                    <a href="#" class="secondary-btn">
                        <span>See All</span>
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                    </a>
                </div>
                <!-- see all -->
            </div>
        </div>
    </section>

    <section class="journey-sec">
        <div class="container">
            <h2 class="blue_mnhdng text-center">Your Global Education<br>Journey, Simplified</h2>
            <div class="edjourney-cards">
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/counseling.svg" alt="Counselling" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Counselling</h3>
                        </div>
                        <p>Get expert guidance to choose the right country, course, and university for your goals.</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/application.svg" alt="Counselling" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Developing<br>Application</h3>
                        </div>
                        <p>Craft a standout application that highlights your unique strengths and story.</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/review.svg" alt="Application" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Review<br>Application</h3>
                        </div>
                        <p>Polish your submissions with expert feedback to ensure maximum impact.</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/profile.svg" alt="Profile" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Profile<br>Building</h3>
                        </div>
                        <p>Strengthen your academic and extracurricular profile to meet top university standards.</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/Interview.svg" alt="Interview" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Interview<br>Prep</h3>
                        </div>
                        <p>Ace your admissions interviews through personalized coaching and realistic mock sessions.</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/support.svg" alt="Support" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Post Application<br>Support</h3>
                        </div>
                        <p>Navigate waitlists, visa processes, and pre-departure arrangements with confidence.</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <!-- card -->
                <div class="edjcrd">
                    <div class="edj-inside">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/pre-uni.svg" alt="Pre-University" width="48" height="48">
                        <div class="lndv">
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/redline.svg" alt="Line">
                            <h3 class="rgtln">Pre-University<br>Training</h3>
                        </div>
                        <p>Develop essential skills and a winning mindset before embarking on your academic journey abroad</p>
                        <a href="#" class="secondary-btn">
                            <span>Explore</span>
                            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                        </a>
                    </div>
                </div>
            </div>
            <div class="seeall">
                <a href="#" class="secondary-btn">
                    <span>Explore All Services</span>
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a>
            </div>
        </div>
    </section>

    <section class="profile-sec">
        <div class="container">
            <div class="sec-hds">
                <h2 class="blue_mnhdng text-center">Build a Profile That<br>Gets You Noticed</h2>
                <p class="text-center">From academics to internships, we help you craft a profile<br> that stands out for top universities and recruiters.</p>
            </div>
            <div class="profilecards">
                <div class="prfcr">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/profile1.jpg" alt="Profile" width="304" height="146">
                    <div class="prfdt">
                        <h4>Academic & Extra-curricular Mapping</h4>
                        <p>Identify and align your strengths with global expectations.</p>
                    </div>
                </div>
                <div class="prfcr">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/profile2.jpg" alt="Profile" width="304" height="146">
                    <div class="prfdt">
                        <h4>Internships, Research & <br>Certifications</h4>
                        <p>Discover real-world projects that add weight to your resume.</p>
                    </div>
                </div>
                <div class="prfcr">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/profile3.jpg" alt="Profile" width="304" height="146">
                    <div class="prfdt">
                        <h4>SOP, LOR & <br>Resume Drafting</h4>
                        <p>Build compelling narratives that reflect your goals and uniqueness.</p>
                    </div>
                </div>
                <div class="prfcr">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/profile4.jpg" alt="Profile" width="304" height="146">
                    <div class="prfdt">
                        <h4>Mentorship & Strategy<br> Planning</h4>
                        <p>1:1 guidance to shape your academic and career journey.</p>
                    </div>
                </div>
            </div>
            <div class="seeall">
                <a href="#" class="secondary-btn">
                    <span>Know More</span>
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="text-center blue_mnhdng">Real Stories. Real results</h2>
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
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a>
            </div>
        </div>
    </section>
    <!-- Testimonial -->

    <section class="globaluni greysec">
        <div class="container">
            <div class="tp_univer text-center">
                <h2 class="blue_mnhdng">Your personalized path to<br>
                    Ivy League & top global universities.</h2>
                <p>From profile building to test prep, we support every step of your journey<br> with expert-led guidance and global tools.</p>
            </div>
            <div class="lgcrds">
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/unilogo.svg" alt="Icon" width="32" height="32">
                    </div>
                    <h3>Customized Profile Building</h3>
                    <p>Personalized, grade-wise planning aligned with your academic and career goals—from Class 8 to undergrad applications.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/unilogo.svg" alt="Icon" width="32" height="32">
                    </div>
                    <h3>1:1 Ivy League Mentoring</h3>
                    <p>Year-round guidance by mentors from top global universities to shape your SOPs, projects, and extracurriculars.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/unilogo.svg" alt="Icon" width="32" height="32">
                    </div>
                    <h3>Integrated Test Prep Solutions</h3>
                    <p>Premium SAT, GRE, GMAT, ACT, and IELTS prep—powered by Kaplan and BloombergPrep.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/unilogo.svg" alt="Icon" width="32" height="32">
                    </div>
                    <h3>Academic & Subject Mastery</h3>
                    <p>Support for APs, Olympiads, certified courses, and advanced subject-specific excellence.</p>
                </div>
                <div class="crd-lgs">
                    <div class="unidv">
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/unilogo.svg" alt="Icon" width="32" height="32">
                    </div>
                    <h3>Real-Time Progress Tracking</h3>
                    <p>Transparent performance reviews, parent updates, and milestone tracking for continuous improvement.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hflsec">
        <div class="container">
            <div class="dflex">
                <div class="infrast">
                    <h2 class="blue_mnhdng">State-of-the-Art Infrastructure</h2>
                    <p>Our learning spaces are purpose-built to enhance performance — blending modern design, technology, and a student-first approach.</p>
                    <a href="#" class="primary__btn">
                        <span>Schedule a free consultation</span>
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon.svg" alt="Icon">
                    </a>
                </div>
                <div class="infraimg">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/stateofart.jpg" alt="Infra" width="400" height="480">
                </div>
            </div>
        </div>
    </section>

    <section class="blog_sec">
        <div class="container">
            <h2 class="blue_mnhdng text-center">What's New</h2>
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
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
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
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
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
                        <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                    </a>
                </div>
            </div>
            <div class="seeall">
                <a href="#" class="secondary-btn">
                    <span>Read More</span>
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
                </a>
            </div>
        </div>
    </section>

    <section class="ptrdsec">
        <div class="container">
            <div class="dflex">
                <div class="infraimg">
                    <img src="<?php echo $base_url; ?>assets/imgs/homepage/potential.jpg" alt="Infra" width="400" height="480">
                </div>
                <div class="infrast">
                    <h2 class="blue_mnhdng">Let’s unlock your potential together</h2>
                    <a href="#" class="secondary-btn">
                        <span>Schedule a free consultation</span>
                        <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- footerstrip -->
    <div class="footer_strip">
        <div class="strip active">
            <span>Keep Exploring</span>
        </div>
        <div class="strip">
            <span>Test Prep</span>
            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
        </div>
        <div class="strip">
            <span>Study Abroad</span>
            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
        </div>
        <div class="strip">
            <span>Sucess Story</span>
            <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon">
        </div>
    </div>
    <!-- footerstrip -->
    <!-- Sticky footer -->
    <?php include 'components/sticky-footer.php'; ?>
    <!-- Sticky footer -->
    <!-- footer -->
    <?php include 'components/footer.php'; ?>
    <!-- footer -->
    <!-- js -->
    <?php include 'style_js.php'; ?>
    <!-- js -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentIndex = 0;
            const slides = document.getElementById('slides');
            const dots = document.querySelectorAll('.dt');
            const totalSlides = dots.length;
            const intervalTime = 3000;
            let interval;

            function showSlide(index) {
                currentIndex = index;
                slides.style.transform = `translateX(-${index * 100}%)`;

                dots.forEach((dot, i) => {
                    dot.classList.remove('active');
                    const fill = dot.querySelector('.fill');
                    fill.style.animation = 'none'; // reset animation
                    fill.offsetHeight; // trigger reflow
                    fill.style.animation = null; // re-enable animation
                });

                dots[index].classList.add('active');
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                showSlide(currentIndex);
            }

            function resetInterval() {
                clearInterval(interval);
                interval = setInterval(nextSlide, intervalTime);
            }

            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    showSlide(i);
                    resetInterval();
                });
            });

            interval = setInterval(nextSlide, intervalTime);
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
</body>

</html>