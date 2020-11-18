<?php


namespace App\Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Auth extends Config
{
    public function register($name , $email , $password)
    {
        $result = $this->conn->query("Insert Into `users` (`name` , `email` , `password`) VALUES ('$name' , '$email' , '$password')");
        return $result ? true: false;
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

    public function token_update($email , $token)
    {
        return $this->conn->query(" Update `users` Set `token` = '$token' where `email` = '$email'");
    }

    public function token_validate($email , $token)
    {
        return $this->conn->query("Select * from `users` where `email` = '$email' AND `token` = '$token'");
    }

    public function password_update($email , $password)
    {
        return $this->conn->query("UPDATE `users` SET `token` = '' , `password` = '$password' WHERE `email` = '$email' ");

    }

    public function token_null($email)
    {
        return $this->conn->query("Update `users` Set `token` = null where `email` = '$email'");
    }


}