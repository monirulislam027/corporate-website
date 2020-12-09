<?php require_once 'inc/header.php' ?>

<div class="row justify-content-between">

    <div><h3>Add New Logo</h3></div>
    <div>
        <a href="client_logo.php" class="btn btn-primary ">Manage Client</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="image-form" data-url='client-logo-add'>


                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10 d-flex justify-content-between">
                            <div class="">
                                <input type="file" class="form-control-file " style="outline: none"
                                       onchange="imagePreview(this , '.image-preview')" name="image" id="image">
                            </div>

                            <img src="https://via.placeholder.com/100" alt="image" class="image-preview">
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
                        <button type="submit" class="btn btn-primary">Add Logo</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>


<?php require_once 'inc/footer.php' ?>

