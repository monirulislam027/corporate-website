<?php

require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();


if (isset($_POST['action']) && $_POST['action'] == 'register'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['r_password'];

    $result = '';

}