<?php

$about_us = $siteExtras->about_us();


?>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row content">
            <div class="col-lg-6">
                <h2><?= $about_us['title'] ?></h2>
                <h3><?= $about_us['sub_title'] ?></h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <?= $about_us['description'] ?>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
