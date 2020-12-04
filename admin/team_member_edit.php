<?php require_once 'inc/header.php';

use App\Classes\Team;

$team = new Team();

if (!isset($_GET['action']) && $_GET['action'] != 'edit-team-member' or !isset($_GET['data'])) {
    sleep(1);
    header("location:javascript://history.go(-1)");
}

$id = (int)base64_decode($_GET['data']);

$member = $team->team_member_find($id);
if (!$member->num_rows > 0) {
    sleep(1);
    header("location:javascript://history.go(-1)");
}

$member = $member->fetch_assoc();


?>

<div class="row justify-content-between">

    <div><h3>Add New Member</h3></div>
    <div>
        <a href="team_members.php" class="btn btn-primary ">Manage Team</a>
    </div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card">
            <div class="card-body">
                <form id="image-form" data-url='update-team-member' enctype="multipart/form-data">

                    <input type="hidden" name="data_id" value="<?= $_GET['data'] ?>">

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="<?= $member['name'] ?>" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="role" value="<?= $member['role'] ?>" id="role" placeholder="Role">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_desc" class="col-sm-2 col-form-label">Short Desc</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="short_desc" value="<?= $member['short_desc'] ?>" id="short_desc"
                                   placeholder="Short Desc">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="facebook" value="<?= $member['facebook'] ?>" id="facebook" placeholder="Facebook">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="twitter" value="<?= $member['twitter'] ?>" id="twitter" placeholder="Twitter">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="instagram" value="<?= $member['instagram'] ?>" id="instagram"
                                   placeholder="Instagram">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="linkedIn" class="col-sm-2 col-form-label">LinkedIn</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="linkedIn" value="<?= $member['linkedIn'] ?>" id="linkedIn" placeholder="LinkedIn">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10 d-flex justify-content-between">
                            <div class="">
                                <input type="file" class="form-control-file " style="outline: none"
                                       onchange="imagePreview(this , '.image-preview')" name="image" id="image">
                            </div>

                            <img src="/uploads/team/<?= $member['image'] ?>" alt="image" class="image-preview">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $member['status'] == 1 ? 'checked':'' ?> name="status" id="active"
                                       value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" <?= $member['status'] == 0 ? 'checked':'' ?> name="status" id="inactive" value="0">
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

