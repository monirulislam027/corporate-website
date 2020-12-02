<?php require_once 'inc/header.php' ?>
<?php

use App\Classes\Sliders;

$slider = new Sliders();
$result = $slider->index();

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
            <th>Title</th>
            <th>Sub Title</th>
            <th>Image</th>
            <th>Time Limit</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $sr = 1;
        while ($row1 = $result->fetch_assoc()) {

            ?>
            <tr class="remove-row-<?= ($row1['id']) ?>">
                <td><?= $sr ?></td>
                <td><?= $row1['title'] ?></td>
                <td><?= $row1['sub_title'] ?></td>
                <td><img class=" image-preview" src="<?= $slider->base_url . 'uploads/sliders/' . $row1['image'] ?>"
                         alt="<?= $row1['title'] ?>"></td>
                <td><?= $row1['start_date'] . ' - ' . $row1['end_date'] ?></td>
                <td><input type="checkbox" class="toggle-button" data-id="<?= $row1['id'] ?>"
                           data-action="slider-status-change"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $row1['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">

                    <a href="edit-slider.php?action=edit-slider&data=<?= base64_encode($row1['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($row1['id']) ?>" type="button" data-action="slider-delete"
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

