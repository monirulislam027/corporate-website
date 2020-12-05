<?php require_once 'inc/header.php' ?>
<?php

use App\Classes\Testimonials;

$testimonials_obj = new  Testimonials();

$testimonials = $testimonials_obj->testimonials();

?>

<div class="row justify-content-between">

    <div><h3>Manage Testimonials</h3></div>
    <div>
        <a href="testimonials_add.php" class="btn btn-primary ">Add New</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered slider-table" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Title</th>
            <th>Review</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $sr = 1;
        while ($row1 = $testimonials->fetch_assoc()) {

            ?>
            <tr id="remove-row-<?= ($row1['id']) ?>">
                <td><?= $sr ?></td>
                <td><?= $row1['name'] ?></td>
                <td><?= $row1['role'] ?></td>
                <td><?= $row1['review'] ?></td>
                <td><img class=" image-preview"
                         src="<?= $testimonials_obj->base_url . 'uploads/testimonials/' . $row1['image'] ?>"
                         alt="<?= $row1['title'] ?>"></td>
                <td><input type="checkbox" class="toggle-button" data-id="<?= $row1['id'] ?>"
                           data-action="testimonials-status-change"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $row1['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">

                    <a href="testimonials_edit.php?action=edit-testimonial&data=<?= base64_encode($row1['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($row1['id']) ?>" type="button" data-action="testimonial-delete"
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

