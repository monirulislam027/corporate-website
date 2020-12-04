<?php

require_once './vendor/autoload.php';

use App\Classes\SiteExtras;

$siteExtras = new SiteExtras();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Not Found | Ban Coders</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/public/img/favicon.png" rel="icon">
    <link href="assets/public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/public/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/public/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/public/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/public/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/public/css/style.css" rel="stylesheet">
    <!--    custom css  -->
    <link href="assets/public/css/custom.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Sailor - v2.2.0
    * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top <?= $siteExtras->inner_page_header() ?>">
    <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="index.html">Sailor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img   src="assets/public/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class="<?= $siteExtras->active_menu('home') ?>"><a href="/">Home</a></li>
                <li class="<?= $siteExtras->active_menu('about-us') ?>"><a href="index.php?page=about-us">About Us</a></li>
                <li class="<?= $siteExtras->active_menu('team') ?>"><a href="index.php?page=team">Team</a></li>
                <li class="<?= $siteExtras->active_menu('testimonial') ?>"><a href="index.php?page=testimonial">Testimonials</a></li>
                <li class="<?= $siteExtras->active_menu('services') ?>"><a href="index.php?page=services">Services</a></li>
                <li class="<?= $siteExtras->active_menu('portfolio') ?>"><a href="index.php?page=portfolio">Portfolio</a></li>
                <li class="<?= $siteExtras->active_menu('home') ?>"><a href="blog.html">Blog</a></li>
                <li class="<?= $siteExtras->active_menu('contact') ?>"><a href="index.php?page=contact">Contact</a></li>

            </ul>

        </nav><!-- .nav-menu -->

        <a href="/" class="get-started-btn ml-auto">Get Started</a>

    </div>
</header><!-- End Header -->


<div id="main">
    <!-- Error Page -->
    <div class="error">
        <div class="container-floud">
            <div class="col-xs-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip">
                        <div class="shadow"><span class="digit thirdDigit"></span></div>
                    </div>
                    <div class="clip">
                        <div class="shadow"><span class="digit secondDigit"></span></div>
                    </div>
                    <div class="clip">
                        <div class="shadow"><span class="digit firstDigit"></span></div>
                    </div>
                    <div class="msg">OH!<span class="triangle"></span></div>
                </div>
                <h2 class="h1">Sorry! Page not found</h2>
            </div>
        </div>
    </div>
    <!-- Error Page -->
</div>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Sailor</h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/public/vendor/jquery/jquery.min.js"></script>
<script src="assets/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/public/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/public/vendor/php-email-form/validate.js"></script>
<script src="assets/public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/public/vendor/venobox/venobox.min.js"></script>
<script src="assets/public/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/public/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/public/js/main.js"></script>
<!-- custom js -->
<script src="assets/public/js/custom.js"></script>

</body>

</html>