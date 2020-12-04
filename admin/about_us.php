<?php require_once 'inc/header.php' ?>

<?php
use App\Classes\AdminExtras;

$adminExtras = new AdminExtras();

$about_us = $adminExtras->about_us();

?>

<div class="row justify-content-between">

    <div><h3>About Us</h3></div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="text-form" class="about-us-form" data-url='save-about-us'>

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext border-bottom pl-1"  value="<?= $about_us['title'] ?>" name="title" id="title" placeholder="Title">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-2 col-form-label">Sub Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext border-bottom pl-1" value="<?= $about_us['sub_title'] ?>"  name="sub_title" id="sub_title" placeholder="Title">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2  col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" class="form-control-plaintext border-bottom pl-1" placeholder="Description" cols="30" rows="7"><?= $about_us['description'] ?></textarea>
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

