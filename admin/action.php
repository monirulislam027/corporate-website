<?php
session_start();
require_once '../vendor/autoload.php';

use App\Classes\Auth;

$auth = new Auth();



if (isset($_POST['action']) && $_POST['action'] == 'register'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['r_password'] , PASSWORD_DEFAULT);

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

if (isset($_POST['action']) && $_POST['action'] == 'login'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);

    $result = $auth->login($email);

    if($result->num_rows === 1){
        $row = $result->fetch_assoc();
        if (password_verify($password , $row['password'])){
            if ($row['status'] == 1){
                if ($remember_me){
                    setcookie('user_email' , base64_encode($email) , time()+ (7 * 24 * 60 * 60));
                    setcookie('user_password' , base64_encode($password )  , time()+ (7 * 24 * 60 * 60));
                }else{
                    setcookie('user_email' , '' , -time()+ (7 * 24 * 60 * 60));
                    setcookie('user_password' , '' , -time()+ (7 * 24 * 60 * 60));
                }
                echo 'ok';
                $_SESSION['user_email'] = base64_encode($email);
            }else{
                echo $auth->showMessage('warning' , 'Your account is inactive!');
            }

        }else{
            echo $auth->showMessage('danger' , 'These credential are not match in our system!');
        }

    }else{
        echo $auth->showMessage('danger' , 'These credential are not match in our system!');
    }
}