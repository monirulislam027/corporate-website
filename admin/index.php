<?php
require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();
$auth->isLogedIn() ? header('location:dashboard.php'):header('location:login.php');

?>



