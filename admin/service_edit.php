<?php require_once 'inc/header.php';

use App\Classes\Service;
$service_obj = new Service();

if (!isset($_GET['action']) && $_GET['action'] != 'edit-service' or !isset($_GET['data'])) {
    sleep(1);
    header("location:dashboard.php");
}

$id = (int)base64_decode($_GET['data']);

$service = $service_obj->service_find($id);
if (!$service->num_rows > 0) {
    sleep(1);
    header("location:dashboard.php");
}

$service = $service->fetch_assoc();


?>

<div class="row justify-content-between">

    <div><h3>Update Service</h3></div>
    <div>
        <a href="service.php" class="btn btn-primary ">Manage Services</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="text-form" data-url='edit-service' enctype="multipart/form-data">

                    <input type="hidden" name="data_id" value="<?= $_GET['data'] ?>">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  value="<?= $service['title']?>" name="title" id="title"
                                   placeholder="Service title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-2 col-form-label">Sub Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $service['sub_title']?>" name="sub_title" id="sub_title"
                                   placeholder="Service sub title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $service['icon']?>" name="icon" id="icon"
                                   placeholder="Service icon">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $service['status'] == 1 ? 'checked': '' ?> name="status" id="active"
                                       value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $service['status'] == 0 ? 'checked': '' ?> name="status" id="inactive" value="0">
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

