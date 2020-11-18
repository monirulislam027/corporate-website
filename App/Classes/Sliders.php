<?php


namespace App\Classes;


class Sliders extends Config
{

    public function index()
    {
       return $this->conn->query("SELECT * FROM `sliders` ORDER BY `id` DESC ");
    }

    public function save_slider($title , $sub_title , $start_date , $end_date , $url , $status , $imageNameToStore)
    {
        /** @var  $id */
        session_start();
        $id = $_SESSION['user_id'];
        $id = base64_decode($id);
        $id = (int)$id;

        /** @var  $id */
        $sql = "INSERT INTO `sliders` (`title` , `sub_title` , `start_date` , `end_date` , `url` , `status` , `image` , `create_by`) VALUES ( '$title' , '$sub_title' , '$start_date' , '$end_date' , '$url' , '$status' , '$imageNameToStore' , '$id')";

        return $this->conn->query($sql);
    }

    public function slider_error_message($field_name)
    {
        return "Please enter a " .$field_name;
    }


    public function slider_active($id){
        return $this->conn->query("UPDATE `sliders` SET `status` = 1 WHERE `id` = '$id'");
    }

    public function slider_inactive($id){
        return $this->conn->query("UPDATE `sliders` SET `status` = 0 WHERE `id` = '$id'");
    }
}