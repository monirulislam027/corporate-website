<?php
require_once './public/header.php';


$skills = $site->skills();

?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <?php require_once './public/component/about_us.php' ?>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <p>Our Hardworking Team</p>
            </div>
            <?php require_once './public/component/team.php' ?>


        </div>
    </section><!-- End Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container">

            <div class="section-title">
                <h2>Our Skills</h2>
                <p>Check our Our Skills</p>
            </div>

            <div class="row skills-content">

                <?php

                if ($skills->num_rows > 0) {
                    while ($skill = $skills->fetch_assoc()) {
                        ?>

                        <div class="col-lg-6">

                            <div class="progress">
                                <span class="skill"><?= $skill['name'] ?> <i class="val"><?= $skill['percentage'] ?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['percentage'] ?>" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    <?php }
                } ?>

            </div>

        </div>
    </section><!-- End Our Skills Section -->

</main><!-- End #main -->


<?php require_once './public/footer.php'; ?>
