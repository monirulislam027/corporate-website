<?php
require_once 'inc/header.php';

use App\Classes\Team;

$team = new Team();
$team_members = $team->team_members();

?>


<div class="row justify-content-between">

    <div><h3>Team Member</h3></div>
    <div>
        <a href="team_member_add.php" class="btn btn-primary ">Add Member</a>
    </div>

</div>

<hr>

<div class="table-responsive">
    <table class="table table-bordered" id="datatable">

        <thead>
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Role</th>
            <th>Details</th>

            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $sr = 1;
        while ($member = $team_members->fetch_assoc()) { ?>

            <tr id="remove-row-<?= ($member['id']) ?>">
                <td><?= $sr ?></td>
                <td><?= $member['name'] ?></td>
                <td><?= $member['role'] ?></td>
                <td><?= $member['short_desc'] ?></td>
                <td><img class=" image-preview" src="<?= $team->base_url . 'uploads/team/' . $member['image'] ?>"
                         alt="<?= $member['name'] ?>"></td>
                <td><input type="checkbox" class="toggle-button" data-id="<?= $member['id'] ?>"
                           data-action="team-member-status-change"
                           data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                           data-off="Inactive" <?= $member['status'] == 1 ? 'checked' : '' ?> ></td>
                <td class="action-bars">

                    <a href="team_member_edit.php?action=edit-team-member&data=<?= base64_encode($member['id']) ?>"
                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <button data-url-id="<?= ($member['id']) ?>" type="button" data-action="team-member-delete"
                            class="btn btn-danger btn-sm remove_item"><i class="fa fa-trash-alt"></i></button>

                </td>

            </tr>

        <?php $sr++; } ?>


        </tbody>
    </table>
</div>


<?php require_once 'inc/footer.php' ?>

