<?php
require_once 'inc/header.php';

use App\Classes\Skills;
$skill_obj = new Skills();

if (!isset($_GET['action']) && $_GET['action'] != 'edit-skill' or !isset($_GET['data']) or !$_GET['data']) {
    sleep(1);
    header("location:dashboard.php");
}

$id = (int)base64_decode($_GET['data']);

$skill = $skill_obj->skill_find($id);
if (!$skill->num_rows > 0) {
    sleep(1);
    header("location:dashboard.php");
}

$skill = $skill->fetch_assoc();




?>
<div class="row justify-content-between">

    <div> <h3>Update Skills</h3> </div>
    <div>
        <a href="skills.php" class="btn btn-primary ">Manage Skills</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="text-form" data-url = 'update-skill'>

                    <input type="hidden" name="data_id" value="<?= $_GET['data']?>">

                    <div class="form-group row">
                        <label for="work-menu-name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name"  value="<?= $skill['name'] ?>" id="work-menu-name" placeholder="Menu item name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="percentage" class="col-sm-2 col-form-label">Percentage</label>
                        <div class="col-sm-10">
                            <input type="number" min="1" max="100" class="form-control" name="percentage" value="<?= $skill['percentage'] ?>" id="percentage" placeholder="Percentage">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $skill['status'] == 1 ? 'checked': '' ?> name="status" id="active" value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $skill['status'] == 0 ? 'checked': '' ?> name="status" id="inactive" value="0">
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>

                        </div>



                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>



<?php require_once 'inc/footer.php' ?>

