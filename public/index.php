<?php

require_once './public/header.php';

use App\Classes\Site;

$site = new Site();
$sliders = $site->sliders();

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
                    <div class="carousel-item <?= $sr == 1 ? 'active':'' ?>" style="background-image: url(uploads/sliders/<?= $row4['image'] ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><?= $row4['title'] ?></span></h2>
                                <p class="animate__animated animate__fadeInUp"><?= $row4['sub_title'] ?></p>
                                <a href="<?= $row4['url'] ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
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


        <?php require_once  './public/component/about_us.php' ?>

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
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="icofont-computer"></i>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="icofont-chart-bar-graph"></i>
                            <h4><a href="#">Dolor Sitema</a></h4>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="icofont-image"></i>
                            <h4><a href="#">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="icofont-settings"></i>
                            <h4><a href="#">Nemo Enim</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="icofont-earth"></i>
                            <h4><a href="#">Magni Dolore</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="icofont-tasks-alt"></i>
                            <h4><a href="#">Eiusmod Tempor</a></h4>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                nobis est eligendi</p>
                        </div>
                    </div>
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

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/public/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery"
                                       class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                       data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

<?php require_once './public/footer.php' ?>