<?php

use App\Classes\Option;

$all_options = new Option();
$site_name = $all_options->site_name();
$contact_location = $all_options->contact_location();
$contact_email = $all_options->contact_email();
$contact_call = $all_options->contact_call();
$twitter = $all_options->twitter();
$linkedIn = $all_options->linkedIn();
$facebook = $all_options->facebook();
$instagram = $all_options->instagram();
$skypee = $all_options->skypee();


?>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3><?= $site_name['value'] ?></h3>
                        <p>
                            <?= $contact_location['value'] ?>
                            <br>
                            <strong>Phone:</strong> <?= $contact_email['value'] ?><br>
                            <strong>Email:</strong> <?= $contact_call['value'] ?><br>
                        </p>
                        <div class="social-links mt-3">
                            <?= $twitter['value'] != '' ? '<a href="' . $twitter['value'] . '"><i class="bx bxl-twitter"></i></a>' : '' ?>
                            <?= $facebook['value'] != '' ? '<a href="' . $facebook['value'] . '"><i class="bx bxl-facebook"></i></a>' : '' ?>
                            <?= $instagram['value'] != '' ? '<a href="' . $instagram['value'] . '"><i class="bx bxl-instagram"></i></a>' : '' ?>
                            <?= $skypee['value'] != '' ? '<a href="' . $skypee['value'] . '"><i class="bx bxl-skype"></i></a>' : '' ?>
                            <?= $linkedIn['value'] != '' ? '<a href="' . $linkedIn['value'] . '"><i class="bx bxl-linkedin"></i></a>' : '' ?>
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
                        <input type="email" name="email" class="outline-none"><input type="submit" value="Subscribe">
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
<script src="assets/public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/public/vendor/venobox/venobox.min.js"></script>
<script src="assets/public/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/public/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/sweetalert/sweetalert2.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/public/js/main.js"></script>

</body>

</html>