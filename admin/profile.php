<?php require_once 'inc/header.php' ?>

<?php

$email = base64_decode($_SESSION['user_email']);

$user = $auth->get_user($email);
$user = $user->fetch_assoc();


?>

<div class="row justify-content-between">

    <div><h3>Profile</h3></div>

</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8 ">

        <div class="card card-group">

            <div class="card">
                <div class="card-body">
                    <form action="inc/action.php" id="profile-image-form" method="post" enctype="multipart/form-data">
                        <div class="position-relative">
                            <input type="hidden" name="action" value="<?= base64_encode('update-profile-image') ?>">
                            <input type="hidden" name="user_email" value="<?= $_SESSION['user_email'] ?>">
                            <img src="<?= $auth->base_url ?>uploads/users/<?= $user['photo'] ? $user['photo'] : 'avatar.png' ?>" class="w-100 profile-image"   alt="">
                            <label title="Update profile image"  for="profile_image" class="upload-image-btn">Update Image</label>

                            <input type="file"  class="d-none" name="profile_image" id="profile_image">

                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs d-flex justify-content-between  pb-2" id="myTab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link btn-primary btn-sm rounded active" id="info-tab" data-toggle="tab"
                               href="#info" role="tab" aria-controls="home" aria-selected="true">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger btn-sm " id="password-tab" data-toggle="tab"
                               href="#password" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">

                            <form id="text-form" class="pt-3" data-url ='profile-info'>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-12 col-form-label">Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control-plaintext border-bottom outline-none"
                                               name="name" value="<?= $_SESSION['user_name']?>" id="name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-12 col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control-plaintext border-bottom outline-none"
                                               name="email" id="email" value="<?= base64_decode($_SESSION['user_email'])?>" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-sm ">Save</button>
                                </div>

                            </form>

                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">

                            <form id="image-form" class="pt-3" data-url='password-change'>

                                <div class="form-group ">
                                    <input type="password" class="form-control-plaintext border-bottom outline-none"
                                           name="current_password"  id="current_password" placeholder="Current Password" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control-plaintext border-bottom outline-none"
                                           name="new_password" id="new_password"  minlength="6" maxlength="32" placeholder="New Password" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control-plaintext border-bottom outline-none"
                                           name="confirm_password" minlength="6" maxlength="32" id="confirm_password" placeholder="Confirm Password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-sm ">Change</button>
                                </div>

                            </form>


                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>


<?php require_once 'inc/footer.php' ?>

