<?php
require_once 'inc/header.php';

use App\Classes\Skills;

$skills_obj = new Skills();

$skills = $skills_obj->all_skills();

?>


<div class="row justify-content-between">

    <div><h3>Manage Skills</h3></div>
    <div>
        <a href="skill_add.php" class="btn btn-primary ">Add New Skills</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Percentage</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php
        $sr = 1;
        while ($row2 = $skills->fetch_assoc()) {
            ?>

            <tr id="remove-row-<?= $row2['id'] ?>">
                <td><?= $sr ?></td>
                <td><?= $row2['name'] ?></td>
                <td><?= $row2['percentage'] ?>%</td>
                <td><input type="checkbox" class="toggle-button" data-id="<?= $row2['id'] ?>"
                           data-action="skill-status"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $row2['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">

                    <a href="skill_edit.php?action=edit-skill&data=<?= base64_encode($row2['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($row2['id']) ?>" type="button" data-action="skill-delete"
                            class="btn btn-danger btn-sm remove_item"><i class="fa fa-trash-alt"></i></button>

                </td>
            </tr>

            <?php
            $sr++;
        }
        ?>


        <tbody>

        </tbody>
    </table>
</div>


<?php require_once 'inc/footer.php' ?>

