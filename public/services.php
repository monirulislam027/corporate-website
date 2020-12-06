<?php

require_once './public/header.php';

use App\Classes\Site;
$site = new Site();
$all_services = $site->all_services();


?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Services</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Service</h2>
                <p>The Services We Offer</p>
            </div>

            <div class="row">

                <?php while ($service = $all_services->fetch_assoc()) { ?>
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="<?= $service['icon'] ?>"></i>
                            <h4><a href="#"><?= $service['title'] ?></a></h4>
                            <p><?= $service['sub_title'] ?></p>
                        </div>
                    </div>

                <?php } ?>


            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->


<?php require_once './public/footer.php'; ?>
