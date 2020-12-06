<?php

require_once './public/header.php';

use App\Classes\Site;
$site = new Site();

$testimonials = $site->testimonials();

?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Testimonials</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Testimonials</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="row">

                <?php
                if ($testimonials->num_rows > 0) {
                    while ($testimonial = $testimonials->fetch_assoc()) {
                        ?>

                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <img src="uploads/testimonials/<?= $testimonial['image'] ?>" class="testimonial-img"
                                     alt="<?= $testimonial['name'] ?>">
                                <h3><?= $testimonial['name'] ?></h3>
                                <h4><?= $testimonial['role'] ?></h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?= $testimonial['review'] ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                    <?php }
                } ?>


            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->


<?php require_once './public/footer.php'; ?>
