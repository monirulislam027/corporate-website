<?php require_once 'inc/header.php' ?>

    <div class="row justify-content-between">

        <div> <h3>Add New Sliders</h3> </div>
        <div>
            <a href="sliders.php" class="btn btn-primary ">Manage Slider</a>
        </div>

    </div>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-body">
                    <form id="slider-form" data-url = 'save-slider'>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                <div class="invalid-feedback">Please enter a title</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sub_title" class="col-sm-2 col-form-label">Sub Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Sub Title">
                                <div class="invalid-feedback">Please enter a sub title</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start_date" class="col-sm-2 col-form-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control pl-2 datepicker" name="start_date" id="start_date" placeholder="Start Date">
                                <div class="invalid-feedback">Please enter start date</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end_date" class="col-sm-2 col-form-label">End Date</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control pl-2 datepicker" name="end_date" id="end_date" placeholder="End Date">
                                <div class="invalid-feedback">Please enter end date</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                                <input type="url" class="form-control" name="url" id="url" placeholder="Url">
                                <div class="invalid-feedback">Please enter url</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10 d-flex justify-content-between">
                               <div class="">
                                   <input type="file" class="form-control-file " style="outline: none" onchange="imagePreview(this , '.image-preview')" name="image" id="image">
                               </div>

                                <img src="https://via.placeholder.com/100" alt="image" class="image-preview">
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
                            <button type="submit" class="btn btn-primary">Add Slider</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>



<?php require_once 'inc/footer.php' ?>

