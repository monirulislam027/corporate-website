<?php
require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();
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

        <!--       admin login form -->
        <div class="row justify-content-center min-vh-100" id="login-form-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group ">
                    <div class="card p-4">

                        <h2 class="text-primary text-center">Login to your account</h2>
                        <hr  class="my-2">

                        <div class="login-form-box px-3">
                            <form action="#" method="post" id="login-form">
                                <div id="login-response-message"></div>
                                <div class="input-group my-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Email" value="<?= isset($_COOKIE['user_email']) ? base64_decode($_COOKIE['user_email']) : '' ?>">
                                    <div class="invalid-feedback">Email is required!</div>
                                </div>

                                <div class="input-group my-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control"  id="loginPassword" name="password" placeholder="Password" value="<?= isset($_COOKIE['user_password']) ? base64_decode($_COOKIE['user_password']) : '' ?>">
                                    <div class="invalid-feedback">Password is required!</div>
                                </div>

                                <div class="form-group">
                                    <div class="float-left">
                                        <input type="checkbox" name="remember_me" id="rememberMe" class="custom-checkbox mr-1" <?= isset($_COOKIE['user_email']) ? 'checked': '' ?>
                                        <label for="rememberMe" class="custom-control-label ml-2">Remember Me</label>
                                    </div>
                                    <div class="float-right">
                                        <a href="javascript:" id="showForgotForm" class="text-decoration-none"> Forgot Password ?</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <button type="submit" id="signInBtn" class="btn btn-block btn-primary ">Sign In</button>

                            </form>
                        </div>

                    </div>
                    <!--login card -->
                    <div class="card p-4 justify-content-center bg-dark">
                        <h2 class="text-light text-center ">Welcome Back</h2>
                        <hr  class="my-2 bg-light">
                        <p class="text-center lead text-light">Please log in using your email and password. If you haven't registered yet, you can register for free.</p>
                        <button type="button" id="showSignUpForm" class="btn btn-outline-light align-self-center btn-lg">Sign Up</button>
                    </div>
                    <!--extrass card -->

                </div>

            </div>
        </div >

        <!--       admin register form -->
        <div class="row justify-content-center min-vh-100" id="register-form-box" style="display: none">
            <div class="col-lg-10 my-auto">
                <div class="card-group ">
                    <div class="card p-4">

                        <h2 class="text-primary text-center">Register a new account</h2>
                        <hr  class="my-2">


                        <div class="login-form-box px-3">
                            <div id="register-response-message"></div>
                            <form action="#" method="post" id="register-form">

                                <div class="input-group my-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required minlength="4">
                                    <div class="invalid-feedback">Name is required!</div>
                                </div>

                                <div class="input-group my-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="r_email" placeholder="Email" required minlength="8">
                                    <div class="invalid-feedback">Email is required!</div>
                                </div>

                                <div class="input-group my-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control" name="r_password" id="r_password" placeholder="password" required minlength="6" maxlength="32">
                                    <div class="invalid-feedback">Password is required!</div>
                                </div>

                                <div class="input-group mt-4 mb-0">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm password" required minlength="6" maxlength="32">
                                    <div class="invalid-feedback">Confirm your password</div>

                                </div>

                                <div class="text-danger  d-none mt-1" id="confirm_invalid">Password does not match!</div>


                                <button type="submit" class="btn btn-block btn-primary mt-4" id="registerUser" >Register</button>

                            </form>
                        </div>

                    </div>
                    <!--login card -->
                    <div class="card p-4 justify-content-center bg-dark">
                        <h2 class="text-light text-center ">Welcome Back</h2>
                        <hr  class="my-2 bg-light">
                        <p class="text-center lead text-light">Please log in using your email and password. If you haven't registered yet, you can register for free.</p>
                        <button type="button" class="btn btn-outline-light align-self-center btn-lg showLoginForm">Sign In</button>
                    </div>
                    <!--extrass card -->

                </div>

            </div>
        </div >

        <!--       admin forgotten password form -->
        <div class="row justify-content-center min-vh-100" id="forgotten-password-form-box" style="display: none">
            <div class="col-lg-10 my-auto">
                <div class="card-group ">
                    <div class="card p-4">

                        <h2 class="text-primary text-center">Forgotten Password ?</h2>
                        <hr  class="my-2">

                        <div class="login-form-box px-3">
                            <form action="#" method="post" id="forgotten-password-form">
                                <div id="resetPasswordResponse"></div>

                                <div class="input-group my-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="email" name="reset_email" class="form-control" id="resetEmail" placeholder="Email">
                                    <div class="invalid-feedback">This email filed is required!</div>
                                </div>

                                <button type="submit" id="resetPasswordBtn" class="btn btn-block btn-primary ">Reset Password</button>

                            </form>
                        </div>

                    </div>
                    <!--login card -->
                    <div class="card p-4 justify-content-center bg-dark">
                        <h2 class="text-light text-center ">Welcome Back</h2>
                        <hr  class="my-2 bg-light">
                        <p class="text-center lead text-light">Please log in using your email and password. If you haven't registered yet, you can register for free.</p>
                        <button type="button" class="btn btn-outline-light align-self-center btn-lg showLoginForm">Sign In</button>
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
