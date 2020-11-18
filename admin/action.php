<?php

require_once '../vendor/autoload.php';
session_start();
use App\Classes\Auth;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$auth = new Auth();
$mail = new PHPMailer(true);



if (isset($_POST['action']) && $_POST['action'] == 'register'){

    $message = $auth->showMessage('warning' , 'Something went wrong!');

    if (isset($_POST['name']) &&  isset($_POST['email'])  && isset($_POST['r_password']) && isset($_POST['c_password']) ){

        if ( $_POST['name'] != '' && $_POST['email'] != '' && $_POST['r_password'] != ''  && $_POST['c_password'] != '' ){

            if ($_POST['r_password'] === $_POST['c_password'] ){

                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = password_hash($_POST['r_password'] , PASSWORD_DEFAULT);
                $message = $auth->showMessage('danger' , 'User already exists in our system!');
                if (! $auth->user_exist($email) > 0){
                    if ($auth->register($name ,$email , $password)){
                        $message = 'ok';
                        $_SESSION['user_email'] = base64_encode($email);
                    }else{
                        $message = $auth->showMessage('danger' , 'Something Went Wrong ! Try again!');
                    }
                }
            }
            else{
                $message = $auth->showMessage('danger' , "Password didn't matched!");
            }

        }else{
            if ($_POST['name'] == ''){
                $message = $auth->showMessage('danger' , 'Enter your name');
            }elseif ($_POST['email'] == ''){
                $message = $auth->showMessage('danger' , 'Enter your email address');
            }elseif ($_POST['r_password'] == ''){
                $message = $auth->showMessage('danger' , 'Enter your password');
            }elseif ($_POST['c_password'] == ''){
                $message = $auth->showMessage('danger' , 'Confirm your password');
            }else{
                $message = $auth->showMessage('warning' , 'Something went wrong!');
            }
        }
    }

    echo $message;

}

if (isset($_POST['action']) && $_POST['action'] == 'login'){
    if (isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['password']) && $_POST['password'] != ''){
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
                    $_SESSION['user_email'] = base64_encode($row['email']);
                    $_SESSION['user_name'] = ($row['name']);
                    $_SESSION['user_id'] = base64_encode($row['id']);
                }else{
                    echo $auth->showMessage('warning' , 'Your account is inactive!');
                }

            }else{
                echo $auth->showMessage('danger' , 'These credential are not match in our system!');
            }

        }else{
            echo $auth->showMessage('danger' , 'These credential are not match in our system!');
        }
    }else{
        if (isset($_POST['email']) && $_POST['email'] == '' ){
            echo $auth->showMessage('warning' , 'Enter your  email');
        }elseif(isset($_POST['password']) && $_POST['password'] == '' ){
            echo $auth->showMessage('warning' , 'Enter your password');
        }else{
            echo $auth->showMessage('info' , 'Something went wrong!');
        }
    }

}


if (isset($_POST['action']) && $_POST['action'] == 'reset-password'){

    $email = $_POST['reset_email'];
    $result = $auth->get_user($email);
    if ($result->num_rows > 0){
        $token = uniqid();
        if ($auth->token_update($email , $token)){
            try {
                //Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = '05dd8a15f515fa';                     // SMTP username
                $mail->Password   = '8c3244248b843b';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('mdmonir027@gmail.com', 'Md Monir');
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Reset Your Password';
                $mail->Body    = '`<div style="margin: auto;width: 50%; text-align:center;">
                                    <p>Reset your password</p>
                                    <a href="http://dcw.test/admin/reset-password.php?email='. $email .'&token='. $token .'" style="background:#00c4cc;color: #fff; text-decoration:none;padding: 10px">Click Here</a>
                                </div>`';

                $mail->send();
                echo $auth->showMessage('success' , "We have sent you a mail. Please check you mail inbox. By clicking that link, you can change you password! ");
            } catch (Exception $e) {
               echo $auth->showMessage('danger' , "Something went wrong! Try again!".$mail->ErrorInfo);
           }
        }else{
            echo $auth->showMessage('danger' , "Something went wrong! Try again!");
        }


    }else{
        echo $auth->showMessage('warning' , "This email doesn't exist in our system!");
    }


}



if (isset($_POST['action']) && $_POST['action'] == 'update-password'){
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $hasPass = password_hash($new_password , PASSWORD_DEFAULT);

    $update = $auth->password_update($email , $hasPass);

    if ($update){
        $auth->token_null($email);
        $_SESSION['user_email'] = base64_encode($email);
        echo 'ok';
    }else{
        echo $auth->showMessage('danger' , 'Something went wrong! Try again!');
    }

}