<?php


namespace App\Classes;

class Auth extends Config
{
    public function register($name , $email , $password){

        $result = $this->conn->query("Insert Into `users` (`name` , `email` , `password`) VALUES ('$name' , '$email' , '$password')");
        return $result ? true: false;
    }

    public function user_exist($email){
        $result = $this->conn->query("Select `email` from `users` where `email` = '$email'");
        return $result->num_rows;
    }

    public function login($email){

        return $this->conn->query("Select * from `users` where `email` = '$email'");

    }

}