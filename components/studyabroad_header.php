<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4BDK3SJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17472433312">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17472433312');
</script> -->
<!-- End Google Tag Manager -->

<!-- Google analytics tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-K4L5HVBF69"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K4L5HVBF69');
</script> -->
<!-- End Google analytics tag -->

<header class="study_abroad">
    <!-- top header -->
    <div class="top_header">
        <div class="container">
            <ul class="top_nav">
                <li><i class="fas fa-home"></i><a href="<?php echo $base_url; ?>">Home</a></li>
                <li><a href="<?php echo $base_url; ?>contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- top header -->
    <!-- main header -->
    <div class="container">
        <div class="main_header">
            <div class="logo">
                <a href="<?php echo $base_url; ?>">
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/logo.svg" alt="Logo" width="150" height="62">
                </a>
                <h2 class="crsname">STUDY ABROAD</h2>
            </div>
            <!-- <div class="crsname"><a href="#" class="mnactive">GRE</a></div> -->
            <ul class="main_nav">
                <li class="dn"><i class="fas fa-home"></i><a href="<?php echo $base_url; ?>">Home</a></li>
                <li><a href="<?php echo $base_url; ?>study-abroad/overview.php" class="oo_active">Overview</a></li>
                <li class="has-submenu"><a href="<?php echo $base_url; ?>study-abroad/admissions-consulting-and-profile-building.php" class="ov_active hdrop">Admissions Consulting<br> and Profile Building <i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo $base_url; ?>study-abroad/admissions-consulting-and-profile-building/essentials-plan.php">Essentails Plan<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>study-abroad/admissions-consulting-and-profile-building/comprehensive-plan.php">Comprehensive Plan<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>study-abroad/admissions-consulting-and-profile-building/premium-plan.php">Premium Plan<i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="<?php echo $base_url; ?>study-abroad/early-profile-building-and-mentoring.php" class="pt_active hdrop">Early Profile Building<br> and Mentoring <i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo $base_url; ?>study-abroad/early-profile-building-and-mentoring/comprehensive-plan-with-training.php">Comprehensive Plan with Training<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>study-abroad/early-profile-building-and-mentoring/mentoring-and-profile-building-plan.php">Mentoring and Profile Building Plan<i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $base_url; ?>study-abroad/application-writing-and-review.php" class="cls_active">Application Writing<br> and Review</a></li>
                <!-- <li><a href="#">SAT Prep Resources</a></li> -->
                <!-- <li class="srchicon"><a href="#"><img src="<?php echo $base_url; ?>assets/imgs/logo/search.svg" alt="search-icon" width="24" height="24"></a></li> -->
                <li class="dn"><a href="<?php echo $base_url; ?>contact.php">Contact</a></li>
                <li class="consultation_btn"><a href="#banfrm" class="primary__btn"><span>Book a Consultation</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a></li>
            </ul>
            <!-- hamburger -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- hamburger -->
        </div>
    </div>
    <!-- main header -->

</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.has-submenu').forEach(item => {
            item.addEventListener('click', function(e) {
                // Prevent the submenu from closing when clicking inside it
                if (e.target.closest('.sub-menu')) return;

                const subMenu = this.querySelector('.sub-menu');
                if (subMenu) {
                    subMenu.classList.toggle('expand');
                }
            });
        });
    });
</script>