
<?php
require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();

if (isset($_GET['email']) && isset($_GET['token'])){

    $email = $_GET['email'];
    $token = $_GET['token'];
    $token_update = $auth->token_validate($email , $token);
    if ($token_update->num_rows !== 1){
        header('location:login.php');
    }

}else{
     header('location:index.php');
}

$auth->isLogedIn() ? header('location:index.php'):false;

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login To Dashboard</title>

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../assets/admin/css/login.css">

</head>

<body>

<div class="container">

    <!--       admin forgotten password form -->
    <div class="row justify-content-center min-vh-100" id="new-password-box">
        <div class="col-lg-10 my-auto">
            <div class="card-group ">
                <div class="card p-4">

                    <h2 class="text-primary text-center">Reset Your Password</h2>
                    <hr  class="my-2">

                    <div class="login-form-box px-3">
                        <form action="#" method="post" id="new-password-form">
                            <div id="resetPasswordResponse"></div>

                            <input type="hidden" name="email" value="<?= base64_encode($email) ?>">

                            <div class="input-group my-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                </div>
                                <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New password"  >
                                <div class="invalid-feedback">This password filed is required!</div>
                            </div>


                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                                </div>
                                <input type="password" name="confirm_password" class="form-control" id="new_confirm_password" placeholder="Confirm password"  >
                                <div class="invalid-feedback">This password filed is required!</div>
                            </div>

                            <div id="password_error" class="text-danger my-2 d-none">Password did not matched.</div>

                            <button type="submit" id="setNewPasswordBtn" class="btn btn-block btn-primary mt-3 ">Reset Password</button>

                        </form>
                    </div>

                </div>
                <!--login card -->
                <div class="card p-4 justify-content-center bg-dark">
                    <h2 class="text-light text-center ">Welcome Back</h2>
                    <hr  class="my-2 bg-light">
                    <p class="text-center lead text-light">Don't share your password to other. Keep it private and use a strong password.</p>

                </div>
                <!--extrass card -->

            </div>

        </div>
    </div  >


</div>









<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/admin/js/login.js"></script>
</body>
</html>
