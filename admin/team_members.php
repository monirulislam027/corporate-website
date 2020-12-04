<?php
require_once 'inc/header.php';

use App\Classes\Works;
$works = new Works();

$works_item = $works->work_items();

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
            <th>Socials</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>




        </tbody>
    </table>
</div>


<?php require_once 'inc/footer.php' ?>

