<?php require_once 'inc/header.php'; ?>

<div class="row justify-content-between">

    <div><h3>Add New Service</h3></div>
    <div>
        <a href="service.php" class="btn btn-primary ">Manage Services</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="text-form" data-url='add-service' enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="title"
                                   placeholder="Service title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-2 col-form-label">Sub Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sub_title" id="sub_title"
                                   placeholder="Service sub title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="icon" id="icon"
                                   placeholder="Service icon">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" checked name="status" id="active"
                                       value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Add Slider</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>


<?php require_once 'inc/footer.php' ?>

