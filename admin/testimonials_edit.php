<?php require_once 'inc/header.php';

use App\Classes\Testimonials;

$testimonial_obj = new Testimonials();

if (!isset($_GET['action']) && $_GET['action'] != 'edit-testimonial' or !isset($_GET['data'])) {
    sleep(1);
    header("location:javascript://history.go(-1)");
}

$id = (int)base64_decode($_GET['data']);

$testimonial = $testimonial_obj->testimonial_find($id);
if (!$testimonial->num_rows > 0) {
    sleep(1);
    header("location:javascript://history.go(-1)");
}

$testimonial = $testimonial->fetch_assoc();


?>


<div class="row justify-content-between">

    <div> <h3>Add New Testimonial</h3> </div>
    <div>
        <a href="testimonials.php" class="btn btn-primary ">Manage Testimonials</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="image-form" data-url = 'edit-testimonial' enctype="multipart/form-data">

                    <input type="hidden" name="data_id" value="<?= $_GET['data'] ?>">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="<?= $testimonial['name'] ?>" id="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="role" value="<?= $testimonial['role'] ?>" id="role" placeholder="Role">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="review" class="col-sm-2 col-form-label">Review</label>
                        <div class="col-sm-10">
                            <textarea name="review" id="review" placeholder="Review" cols="30" rows="6" class="form-control"><?= $testimonial['review'] ?></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10 d-flex justify-content-between">
                            <div class="">
                                <input type="file" class="form-control-file " style="outline: none" onchange="imagePreview(this , '.image-preview')" name="image" id="image">
                            </div>

                            <img src="../uploads/testimonials/<?= $testimonial['image'] ?>" alt="<?= $testimonial['name'] ?>" class="image-preview">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" checked name="status" id="active" value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
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

