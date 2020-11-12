<?php


namespace App\Classes;
use mysqli;

class Config
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost' , 'root' , '' , 'dcw');
        if ($this->conn->connect_error){
            die($this->conn->connect_error);
        }
    }
}