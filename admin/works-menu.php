<?php
require_once 'inc/header.php';

use App\Classes\Works;

$works = new Works();

$works_menus = $works->works_menu();

?>


<div class="row justify-content-between">

    <div><h3>Manage Works Menu</h3></div>
    <div>
        <a href="works_menu_add.php" class="btn btn-primary ">Add New Menu</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php
        $sr = 1;
        while ($row2 = $works_menus->fetch_assoc()) {
            ?>

            <tr class="remove-row-<?= $row2['id'] ?>">
                <td><?= $sr ?></td>
                <td><?= $row2['name'] ?></td>
                <td><?= $row2['slug'] ?></td>

                <td class="action-bars">

                    <a href="work_menu_edit.php?action=edit-work-menu&data=<?= base64_encode($row2['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($row2['id']) ?>" type="button" data-action="works-menu-delete"
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

