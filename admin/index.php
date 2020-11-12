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
<div class="bg-primary">
    <div class="container">
        <a href="logout.php" class="text-white text-decoration-none">Logout</a>
    </div>
</div>


<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


