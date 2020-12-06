<?php

require_once './public/header.php';

$sliders = $site->sliders();
$services = $site->home_page_services();


?>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->

                <?php
                $sr = 1;
                while ($row4 = $sliders->fetch_assoc()) {

                    ?>
                    <div class="carousel-item <?= $sr == 1 ? 'active' : '' ?>"
                         style="background-image: url(uploads/sliders/<?= $row4['image'] ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><?= $row4['title'] ?></span></h2>
                                <p class="animate__animated animate__fadeInUp"><?= $row4['sub_title'] ?></p>
                                <a href="<?= $row4['url'] ?>"
                                   class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sr++;
                } ?>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <?php require_once './public/component/about_us.php' ?>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/public/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/public/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/public/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/public/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/public/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/public/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Service</h2>
                    <p>The Services We Offer</p>
                </div>

                <div class="row">

                    <?php while ($service = $services->fetch_assoc()) { ?>
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



        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Recent Works</p>
                </div>


                <?php require_once './public/component/portfolio.php'?>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

<?php require_once './public/footer.php' ?>