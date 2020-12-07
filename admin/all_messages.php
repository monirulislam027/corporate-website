<?php require_once 'inc/header.php' ?>
<?php

use App\Classes\AdminExtras;

$adminExtras = new AdminExtras();
$all_messages = $adminExtras->all_messages();


?>

<div class="row justify-content-between">

    <div><h3>Manage Sliders</h3></div>
    <div>
        <a href="add-slider.php" class="btn btn-primary ">Add New Slider</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered slider-table" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $sr = 1;
        while ($messages = $all_messages->fetch_assoc()) {

            ?>
            <tr id="remove-row-<?= ($messages['id']) ?>">
                <td><?= $sr ?></td>
                <td><?= $messages['name'] ?></td>
                <td><?= $messages['email'] ?></td>
                <td><?= $messages['subject'] ?></td>
                <td><?= $messages['message'] ?></td>
                <td>
                    <button data-url-id="<?= ($messages['id']) ?>" type="button" data-action="contact-message-delete"
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

