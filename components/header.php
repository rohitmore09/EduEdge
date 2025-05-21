<header>
    <!-- top header -->
    <div class="top_header">
        <ul class="top_nav">
            <li><a href="#">News & Events</a></li>
            <li><a href="#">For Upskilling</a></li>
            <li><a href="#">Shop</a></li>
            <li class="con_btn"><a href="#">Contact</a></li>
        </ul>
    </div>
    <!-- top header -->
    <!-- main header -->
    <div class="container">
        <div class="main_header">
            <div class="logo">
                <a href="<?php echo $base_url; ?>">
                    <img src="<?php echo $base_url; ?>assets/imgs/logo/logo.svg" alt="Logo" width="150" height="62">
                </a>
            </div>
            <ul class="main_nav">
                <li class="has-submenu"><a href="#">Top Prep</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo $base_url; ?>top-prep/ap.php">AP<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>top-prep/gmat.php">GMAT<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>top-prep/gre.php">GRE<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>top-prep/psat.php">PSAT<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="<?php echo $base_url; ?>top-prep/sat-prep.php">Sat Prep<i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </li>
                <!-- <li><a href="#">Study Abroad</a></li>
                <li><a href="#">Profile Building</a></li>
                <li><a href="#">Success Stories</a></li> -->
                <li><a href="<?php echo $base_url; ?>about-us.php">About Us</a></li>
                <!-- <li><a href="#">Resources</a></li> -->

                <li class="dn"><a href="#">News & Events</a></li>
                <li class="dn"><a href="#">For Upskilling</a></li>
                <li class="dn"><a href="#">Shop</a></li>
                <li class="dn consultation_btn"><a href="<?php echo $base_url; ?>contact.php" class="primary__btn"><span>Book a Consultation</span> <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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