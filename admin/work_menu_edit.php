<?php
require_once 'inc/header.php';

;
use App\Classes\Works;

$works_obj = new Works();


if (isset($_GET['action']) && $_GET['action'] == 'edit-work-menu' && isset($_GET['data'])){

    $id = (int)base64_decode($_GET['data']);

    $work_menu = $works_obj->work_menu_find($id);

}else{
    sleep(1);
    header("location:javascript://history.go(-1)");
}





?>
<div class="row justify-content-between">

    <div> <h3>Update Menu</h3> </div>
    <div>
        <a href="works-menu.php" class="btn btn-primary ">Manage Work Menu</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="works-menu-form" data-url = 'update-work-menu'>

                    <input type="hidden" name="menu_id" value="<?= $_GET['data'] ?>">

                    <div class="form-group row">
                        <label for="work-menu-name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="work-menu-name" value="<?= $work_menu['name'] ?>" placeholder="Menu item name">
                            <div class="invalid-feedback">Please enter a name</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $work_menu['status'] == 1 ? 'checked':'' ?> name="status" id="active" value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" <?= $work_menu['status'] == 0 ? 'checked':'' ?> id="inactive" value="0">
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>

                        </div>



                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Update Slider</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>



<?php require_once 'inc/footer.php' ?>

