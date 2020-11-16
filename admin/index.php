<?php
require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();
$auth->isLogedIn() ? false:header('location:login.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Ban Coders</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi , Monir
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


