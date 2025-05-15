<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP Physics</title>
    <?php include '../../style_css.php'; ?>
</head>

<body>
    <!-- Header -->
    <?php include '../../components/ap_header.php'; ?>
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
                        <a>AP</a>
                        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <a class="active">AP Physics</a>
                    </li>
                </ul>
            </div>
            <!-- breadcrumb -->
            <div class="satflx">
                <div class="bannerlft">
                    <div class="baner-dtls">
                        <h1>Boost your Application<br> with a great AP score!</h1>
                        <p>We will help you raise your AP score by atleast 150 points!</p>
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
                <div class="kpln_dtlimg">
                    <img src="<?php echo $base_url; ?>assets/imgs/satprep/ap/ap-biology.jpg" class="covimg" alt="Biology">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Where AP Bio Makes a Difference</h2>
            <div class="bio-dfrnc">
                <div class="dfrnc_lft">
                    <img src="<?php echo $base_url; ?>assets/imgs/satprep/ap/biology/bio-lab.webp" alt="Bio Lab Images" width="528" height="544">
                </div>
                <div class="dfrnc_rgt">
                    <div class="lab_column">
                        <h5>Health, Medicine & Life Sciences</h5>
                        <p>From <strong>nursing</strong> and <strong>pharmacy</strong> to <strong>biomedical</strong> and <strong>biochemistry</strong> majors, AP Bio covers essential topics like <strong>genetics, cell biology, immunology,</strong> and <strong>biotech.</strong></p>
                    </div>
                    <div class="lab_column">
                        <h5>Environment & Behavior</h5>
                        <p>Explore <strong>ecosystems,</strong> biodiversity, and <strong>the biology of behavior</strong>—a great fit for <strong>ecology, conservation,</strong> and <strong>psychology</strong> pathways.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="blue_mnhdng text-center">Master these areas and topic</h2>
            <div class="top_faqs" data-accordion>
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Chemistry of Life</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Cell Structure and<br> Function</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Cellular<br> Energetics</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Cell Communication<br> and the Cell Cycle </h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Heredity</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Gene Expression<br> and Regulation</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Natural Selection</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Chemistry of Life</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h4>Chemistry of Life</h4>
                    </div>
                    <div class="accordion-content">
                        <p>Accordion content</p>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </section>

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
    <section>
        <div class="container">
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

    <!-- footerstrip -->
    <div class="footer_strip">
        <div class="strip active">
            <span>Keep Exploring</span>
        </div>
        <div class="strip">
            <span>Test Prep</span>
            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="strip">
            <span>Study Abroad</span>
            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="strip">
            <span>Sucess Story</span>
            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
    <!-- footerstrip -->


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