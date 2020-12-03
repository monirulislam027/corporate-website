<?php require_once 'inc/header.php';

use App\Classes\Works;
$works = new Works();

if (isset($_GET['action']) && $_GET['action'] == 'edit-work-item' && isset($_GET['data'])) {

    $id = (int)base64_decode($_GET['data']);

    $item = $works->work_item_find($id);
    $item = $item->fetch_assoc();
    $works_menus = $works->works_menu();

} else {
    sleep(1);
    header("location:javascript://history.go(-1)");
}


?>

<div class="row justify-content-between">

    <div><h3>Edit Work Item</h3></div>
    <div>
        <a href="works-items.php" class="btn btn-primary ">Manage Work Items</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="image-form" data-url='edit-work-item' enctype="multipart/form-data">

                    <input type="hidden" value="<?= $_GET['data'] ?>" name="data_id">

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" value="<?= $item['title'] ?>" id="title"
                                   placeholder="Work item title">
                            <div class="invalid-feedback">Please enter a title</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="menu_id" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name="menu_id" id="menu_id" class='form-control'>

                                <option value="">Select</option>

                                <?php
                                while ($row3 = $works_menus->fetch_assoc()) { ?>

                                    <option value="<?= $row3['id'] ?>" <?= $row3['id'] == $item['menu_id'] ? 'Selected':''   ?>><?= $row3['name'] ?></option>

                                <?php  } ?>


                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10 d-flex justify-content-between">
                            <div class="">
                                <input type="file" class="form-control-file " style="outline: none"
                                       onchange="imagePreview(this , '.image-preview')" name="image" id="image">
                            </div>

                            <img src="<?= $works->base_url.'uploads/works/'. $item['image'] ?>"" alt="image" class="image-preview" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $item['status'] == 1? 'checked':'' ?> name="status" id="active"
                                       value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $item['status'] == 0 ? 'checked':'' ?> name="status" id="inactive" value="0">
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

