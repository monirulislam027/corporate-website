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

    <title><?= $auth->titleGenerate() ?> | Ban Coders</title>

    <link rel="icon" href="../../assets/favicon.ico"  sizes="16x16">

    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/datatable/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="../../assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/datepicker/datepicker.css">
    <link rel="stylesheet" href="../../assets/vendor/toaster/toastr.min.css">
    <link rel="stylesheet" href="../../assets/vendor/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstraptoggle/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="../../assets/admin/css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Ban Coders</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item <?= (basename($_SERVER['PHP_SELF']) === 'dashboard.php') ? 'active':'' ?>">
                    <a class="nav-link" href="dashboard.php" ><i class="fa fa-home"></i> Dashboard</a>
                </li>

                <li class="nav-item <?= (basename($_SERVER['PHP_SELF']) === 'add-slider.php') || basename($_SERVER['PHP_SELF']) === 'sliders.php'  ? 'active':'' ?>">
                    <a class="nav-link" href="sliders.php" ><i class="fa fa-sliders-h "></i> Slider</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi , <?=  strstr($_SESSION['user_name']  , ' ' , true)?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="container main-section p-3">