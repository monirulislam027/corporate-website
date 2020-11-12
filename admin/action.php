<?php
session_start();
require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();



if (isset($_POST['action']) && $_POST['action'] == 'register'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['r_password'];

    if($auth->user_exist($email) > 0){
        echo $auth->showMessage('danger' , 'User already exists in our system!');
    }else{
        if ($auth->register($name ,$email , $password)){
            echo 'ok';
            $_SESSION['email'] = $email;
        }else{
            echo $auth->showMessage('danger' , 'Something Went Wrong');
        }


    }




}