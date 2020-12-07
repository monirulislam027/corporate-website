<?php

header('content-type:application/json');

require_once '../../vendor/autoload.php';

use App\Classes\Site;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);
$site = new Site();


$data = ['error' => false];

if (isset($_POST['action']) && $_POST['action'] == 'contact-message') {

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $result = $site->save_message($name, $email, $subject, $message);
        if ($result) {
            try {
                //Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   // Enable SMTP authentication
                $mail->Username = '05dd8a15f515fa';                     // SMTP username
                $mail->Password = '8c3244248b843b';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($email , $name);
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body = $message;

                $mail->send();
                $data['message'] = 'We have receive your message! We will contact your soon! ';
            } catch (Exception $e) {
                echo $auth->showMessage('danger', "Something went wrong! Try again!" . $mail->ErrorInfo);
            }


        } else {
            $data['error'] = true;
            $data['message'] = 'Something Went Wrong! Try again!';
        }

    } else {

        $data['error'] = true;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if ($name == '') {
            $data['message'] = $sliders->slider_error_message('name');
        } elseif ($email == '') {
            $data['message'] = $sliders->slider_error_message('email');
        } elseif ($subject == '') {
            $data['message'] = $sliders->slider_error_message('subject');
        } elseif ($message == '') {
            $data['message'] = $sliders->slider_error_message('message');
        } else {
            $data['message'] = 'Something Went Wrong!';
        }
    }

    echo json_encode($data);


}