<?php
require_once 'inc/header.php';

use App\Classes\Service;
$service_obj = new Service();

$services = $service_obj->all_service()


?>


<div class="row justify-content-between">

    <div><h3>Manage Service</h3></div>
    <div>
        <a href="service_add.php" class="btn btn-primary ">Add New </a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered slider-table" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Icon</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $sr = 1;
        while ($row5 = $services->fetch_assoc()){?>

            <tr id="remove-row-<?= ($row5['id']) ?>">
                <td><?= $sr ?></td>
                <td><?= $row5['title'] ?></td>
                <td><?= $row5['sub_title'] ?></td>
                <td><?= $row5['icon'] ?></td>
                <td><input type="checkbox" class="toggle-button" data-id="<?= $row5['id'] ?>"
                           data-action="service-status-change"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $row5['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">

                    <a href="service_edit.php?action=edit-service&data=<?= base64_encode($row5['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($row5['id']) ?>" type="button" data-action="service-delete"
                            class="btn btn-danger btn-sm remove_item"><i class="fa fa-trash-alt"></i></button>

                </td>
            </tr>

        <?php $sr++; }  ?>

        </tbody>
    </table>
</div>


<?php require_once 'inc/footer.php' ?>

