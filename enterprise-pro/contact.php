<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Enterprise</title>
    <!-- CSS -->
    <?php include '../style_css.php'; ?>
    <!-- CSS -->
</head>

<body class="enterprise_color">
    <!-- Header -->
    <?php include '../components/enterprise-header.php'; ?>
    <!-- Header -->

    <section class="contact_sec">
        <div class="container">
            <h1 class="blue_mnhdng text-center">Get In Touch</h1>
            <div class="contact_flex">
                <ul>
                    <li>
                        <img src="<?php echo $base_url;?>assets/imgs/enterprise/call.webp" alt="Call" width="80" height="80">
                        <a href="tel:+919123456789" target="_blank">+91 91234 56789</a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url;?>assets/imgs/enterprise/mail.webp" alt="Mail" width="80" height="80">
                        <a href="mailto:info@eduedgepro.com" target="_blank">info@eduedgepro.com</a>
                    </li>
                    <li>
                        <img src="<?php echo $base_url;?>assets/imgs/enterprise/marker.webp" alt="Address" width="80" height="80">
                        <div class="adr">
                            <p>401/402/403, Dheeraj Plaza, Above Colors Showroom, Opp. Bandra Police Station, Hill Road, Bandra (W), Mumbai 400050, India.</p>
                            <a href="https://maps.app.goo.gl/xhP5WfU1WDo47dDC8" target="_blank">
                                <span>View in Google Maps</span>
                                <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- form -->
                 <div class="rgt_cfrm">
                    <?php include '../components/forms/enterprise_contact_form.php';?>
                 </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include '../components/footer.php'; ?>
    <!-- footer -->

    <!-- JS -->
    <?php include '../style_js.php'; ?>
    <!-- JS -->
</body>

</html>