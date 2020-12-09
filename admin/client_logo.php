<?php require_once 'inc/header.php' ?>
<?php

use App\Classes\Client;
$client = new Client();

$logos = $client->all_logo();


?>

<div class="row justify-content-between">

    <div><h3>Manage Logos</h3></div>
    <div>
        <a href="add_client_logo.php" class="btn btn-primary ">Add New</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered slider-table" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Logo</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $sr = 1;
        while ($logo = $logos->fetch_assoc()) {

            ?>
            <tr id="remove-row-<?= ($logo['id']) ?>">
                <td><?= $sr ?></td>
                <td><img class=" image-preview" src="<?= $client->base_url . 'uploads/clients/' . $logo['image'] ?>"
                         alt="<?= $logo['title'] ?>"></td>
                <td><input type="checkbox" class="toggle-button" data-id="<?= $logo['id'] ?>"
                           data-action="client-logo-status-change"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $logo['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">
                    <button data-url-id="<?= ($logo['id']) ?>" type="button" data-action="client-logo-delete"
                            class="btn btn-danger btn-sm remove_item"><i class="fa fa-trash-alt"></i></button>

                </td>
            </tr>
            <?php
            $sr++;
        }
        ?>

        </tbody>
    </table>
</div>


<?php require_once 'inc/footer.php' ?>

