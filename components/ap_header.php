<header class="apheader">
    <!-- top header -->
    <div class="top_header">
        <div class="container">
            <ul class="top_nav">
                <li><i class="fas fa-home"></i><a href="<?php echo $base_url; ?>">Home</a></li>
                <li><a href="#">News & Events</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">For Upskilling</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </div>
    </div>
    <!-- top header -->
    <!-- main header -->
    <div class="container">
        <div class="main_header">
            <div class="logo">
                <div class="hdr_logo">
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/logo.svg" alt="Logo" width="150" height="62">
                </div>
                <h2 class="crsname">AP PREP</h2>
            </div>
            <ul class="main_nav">

            <li class="dn"><i class="fas fa-home"></i><a href="<?php echo $base_url; ?>">Home</a></li>
                <li class="dn"><a href="#">News & Events</a></li>
                <li class="dn"><a href="#">Contact</a></li>
                <li class="dn"><a href="#">For Upskilling</a></li>
                <li class="dn"><a href="#">Shop</a></li>

                <li><a href="#" class="">Overview</a></li>
                <li class="has-submenu"><a>AP Exam</a>
                        <ul class="sub-menu">
                            <li><a href="#">AP Biology</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">AP Chemistry</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">AP Physics 1-2 | C1-C2</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">AP Calculus AB-BC</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">AP Computer Science</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">AP Statistics</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">AP Microeconomics & Macroeconomics</a><i class="fas fa-chevron-right"></i></li>
                        </ul>
                    </li>
                <li><a href="#">AP Prep Resources</a></li>

                <li class="consultation_btn dn"><a href="#" class="primary__btn"><span>Book a Consultation</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                        </svg></a></li>

            </ul>
            <ul class="scnd_hdr_mn">
                <li class="srchicon"><a href="#"><img src="<?php echo $base_url; ?>assets/imgs/logo/search.svg" alt="search-icon" width="24" height="24"></a></li>
                <li class="consultation_btn"><a href="#" class="primary__btn"><span>Book a Consultation</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.has-submenu').forEach(item => {
        item.addEventListener('click', function (e) {
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