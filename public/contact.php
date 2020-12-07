<?php
require_once './public/header.php';

?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <?php if ($option->google_map()['value'] == '1') { ?>
                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                            src="<?= $option->google_map_url()['value'] ?>"
                            frameborder="0" allowfullscreen></iframe>
                </div>
            <?php } ?>
            <div class="row mt-5 justify-content-center">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p><?= $option->contact_location()['value'] ?></p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p><?= $option->contact_email()['value'] ?></p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p><?= $option->contact_call()['value'] ?></p>
                        </div>

                    </div>

                </div>

                <?php if ($option->contact_form()['value'] == '1') { ?>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form method="post" role="form" id="contact-form"
                              class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name"/>
                                    <div class="invalid-feedback">Enter a name</div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email"/>
                                    <div class="invalid-feedback">Enter a email address</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject"/>
                                <div class="invalid-feedback">Enter your message subject</div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
                                <div class="invalid-feedback">Describe your message</div>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="contact-form-submit">Send Message</button>
                            </div>
                        </form>

                    </div>
                <?php } ?>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


<?php require_once './public/footer.php'; ?>
