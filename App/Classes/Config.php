<?php


namespace App\Classes;

use mysqli;

class Config
{
    public $conn;

    protected $host = 'localhost'; // database host
    protected $username = 'root'; // database user name
    protected $password = ''; // database password
    protected $database = 'dcw'; // database name

    public $base_url = 'http://dcw.test/';

    public function __construct()
    {
//        session_start();
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die($this->conn->connect_error);
        }
    }

    public function showMessage($type, $message)
    {
        $output = '';
        $output .= '<div class="alert alert-' . $type . ' alert-dismissible fade show m-0" role="alert">';
        $output .= $message;
        $output .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        $output .= '<span aria-hidden="true">&times;</span>';
        $output .= '</button>';
        $output .= '</div>';
        return $output;
    }

    public function isLogedIn()
    {
        session_start();
        return isset($_SESSION['user_email']);
    }


    public function titleGenerate()
    {
        $page_name = basename($_SERVER['PHP_SELF'], '.php');
        $title = str_replace('-', ' ', $page_name);
        $title = str_replace('_', ' ', $title);

        return ucwords($title);
    }

    public function slug($text = '')
    {

        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $text)));

    }

    public function error_message($field_name)
    {
        return "Please enter a " . $field_name;
    }


    public function auth_user_id()
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        $user_id = base64_decode($user_id);
        $user_id = (int)$user_id;
        return $user_id;
    }


    public function options_name($name)
    {

        $title = str_replace('-', ' ', $name);
        $title = str_replace('_', ' ', $title);

        return ucwords($title);
    }


}