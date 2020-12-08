<?php


namespace App\Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Classes\Option;

class Auth extends Config
{
    public function register($name, $email, $password)
    {
        $result = $this->conn->query("Insert Into `users` (`name` , `email` , `password`) VALUES ('$name' , '$email' , '$password')");
        return $result ? true : false;
    }

    public function user_exist($email)
    {
        $result = $this->conn->query("Select `email` from `users` where `email` = '$email'");
        return $result->num_rows;
    }

    public function login($email)
    {
        return $this->conn->query("Select * from `users` where `email` = '$email'");
    }

    public function get_user($email)
    {
        return $this->conn->query("Select * from `users` where `email` = '$email'");
    }

    public function token_update($email, $token)
    {
        return $this->conn->query(" Update `users` Set `token` = '$token' where `email` = '$email'");
    }

    public function token_validate($email, $token)
    {
        return $this->conn->query("Select * from `users` where `email` = '$email' AND `token` = '$token'");
    }

    public function password_update($email, $password)
    {
        return $this->conn->query("UPDATE `users` SET `token` = '' , `password` = '$password' WHERE `email` = '$email' ");

    }

    public function token_null($email)
    {
        return $this->conn->query("Update `users` Set `token` = null where `email` = '$email'");
    }

    public function update_profile_info($name, $email)
    {
        $id = $this->auth_user_id();
        return $this->conn->query("Update `users` Set `name` = '$name' ,`email` = '$email'  where `id` = '$id'");
    }

    public function update_password($password)
    {
        $id = $this->auth_user_id();
        return $this->conn->query("Update `users` Set `password` = '$password'  where `id` = '$id'");
    }

    public function get_auth_user()
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        $user_id = base64_decode($user_id);
        $user_id = (int)$user_id;
        session_abort();
        $user = $this->conn->query("Select * from `users` where `id` = '$user_id'");
        return $user->fetch_assoc();
    }

    public function user_photo_update($imageName , $id)
    {
        return $this->conn->query("Update `users` Set `photo` = '$imageName'  where `id` = '$id'");
    }


}