<?php
require_once 'inc/header.php';

use App\Classes\Option;

$all_options = new Option();

$site_name = $all_options->site_name();
$registration = $all_options->registration();
$forgot_password = $all_options->forgot_password();
$google_map = $all_options->google_map();
$contact_form = $all_options->contact_form();
$contact_location = $all_options->contact_location();
$contact_email = $all_options->contact_email();
$contact_call = $all_options->contact_call();
$google_map_url = $all_options->google_map_url();


?>


<div class="row justify-content-between">

    <div><h3>Customize</h3></div>


</div>

<hr>
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="table-responsive">
            <table class="table table-bordered border-bottom text-center" id="option-table">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>Site Name</td>
                    <td><input type="text" data-url="option_text_update" data-id="<?= $site_name['id'] ?>"
                               value="<?= $site_name['value'] ?>"
                               class="form-control-plaintext border-bottom text-center option-input-text">
                    </td>
                </tr>

                <tr>
                    <td>Registration</td>
                    <td><input type="checkbox"
                               class="toggle-button"
                               data-id="<?= $registration['id'] ?>"
                               data-action="option_data_status"
                               data-onstyle="primary" data-offstyle="danger" data-toggle="toggle"
                               data-on="Active"
                               data-off="Inactive" <?= $registration['value'] == '1' ? 'checked' : '' ?> >

                    </td>
                </tr>

                <tr>
                    <td>Forgot Password</td>
                    <td><input type="checkbox"
                               class="toggle-button"
                               data-id="<?= $forgot_password['id'] ?>"
                               data-action="option_data_status"
                               data-onstyle="primary" data-offstyle="danger" data-toggle="toggle"
                               data-on="Active"
                               data-off="Inactive" <?= $forgot_password['value'] == '1' ? 'checked' : '' ?> >

                    </td>
                </tr>

                <tr>
                    <td>Google Map</td>
                    <td><input type="checkbox"
                               class="toggle-button"
                               data-id="<?= $google_map['id'] ?>"
                               data-action="option_data_status"
                               data-onstyle="primary" data-offstyle="danger" data-toggle="toggle"
                               data-on="Active"
                               data-off="Inactive" <?= $google_map['value'] == '1' ? 'checked' : '' ?> >

                    </td>
                </tr>

                <tr>
                    <td>Google Map URL</td>
                    <td> <input type="text" data-url="option_text_update" data-id="<?= $google_map_url['id'] ?>"
                                value="<?= $google_map_url['value'] ?>"
                                class="form-control-plaintext border-bottom text-center option-input-text">

                    </td>
                </tr>
                <tr>
                    <td>Contact Form</td>
                    <td><input type="checkbox"
                               class="toggle-button"
                               data-id="<?= $contact_form['id'] ?>"
                               data-action="option_data_status"
                               data-onstyle="primary" data-offstyle="danger" data-toggle="toggle"
                               data-on="Active"
                               data-off="Inactive" <?= $contact_form['value'] == '1' ? 'checked' : '' ?> >

                    </td>
                </tr>

                </tbody>

            </table>
        </div>
    </div>

</div>


<?php require_once 'inc/footer.php' ?>

