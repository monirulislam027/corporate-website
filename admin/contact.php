<?php require_once 'inc/header.php' ?>


<div class="row justify-content-between">

    <div><h3>Contact Us</h3></div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body wraper-all-outline-none">

                <div class="card">
                    <div class="card-header text-center card-title h5">Contact Information</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $contact_location['id'] ?>"
                                       value="<?= $contact_location['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $contact_email['id'] ?>"
                                       value="<?= $contact_email['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_no" class="col-sm-2 col-form-label">Phone No</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $contact_call['id'] ?>"
                                       value="<?= $contact_call['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card mt-4">
                    <div class="card-header text-center card-title h5">Social Links</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">Twitter</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $twitter['id'] ?>"
                                        value="<?= $twitter['value'] ?>"
                                        class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">LinkedIn</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $linkedIn['id'] ?>"
                                       value="<?= $linkedIn['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $facebook['id'] ?>"
                                       value="<?= $facebook['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $instagram['id'] ?>"
                                       value="<?= $instagram['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">Skype</label>
                            <div class="col-sm-10">
                                <input type="text" data-url="option_text_update" data-id="<?= $skypee['id'] ?>"
                                       value="<?= $skypee['value'] ?>"
                                       class="form-control-plaintext border-bottom text-center option-input-text">
                            </div>
                        </div>

                    </div>


                </div>


            </div>
        </div>


    </div>
</div>


<?php require_once 'inc/footer.php' ?>

