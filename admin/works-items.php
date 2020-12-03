<?php
require_once 'inc/header.php';

use App\Classes\Works;
$works = new Works();

$works_item = $works->work_items();

?>


<div class="row justify-content-between">

    <div><h3>Manage Works Items</h3></div>
    <div>
        <a href="works_item_add.php" class="btn btn-primary ">Add New Work</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>


        <?php
        $sr = 1;
        while ($row1 = $works_item->fetch_assoc()) {

            ?>
            <tr id="remove-row-<?= ($row1['id']) ?>">
                <td><?= $sr ?></td>
                <td><?= $row1['title'] ?></td>
                <td><?= $row1['name'] ?></td>
                <td><img class=" image-preview" src="<?= $works->base_url . 'uploads/works/' . $row1['image'] ?>"
                         alt="<?= $row1['title'] ?>"></td>

                <td><input type="checkbox" class="toggle-button" data-id="<?= $row1['id'] ?>"
                           data-action="works-item-status-change"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $row1['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">

                    <a href="works_item_edit.php?action=edit-work-item&data=<?= base64_encode($row1['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($row1['id']) ?>" type="button" data-action="works-item-remove"
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

