<?php


namespace App\Classes;


class Sliders extends Config
{

    public function index()
    {
        return $this->conn->query("SELECT * FROM `sliders` ORDER BY `id` DESC ");
    }

    public function save_slider($title, $sub_title, $start_date, $end_date, $url, $status, $imageNameToStore)
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
        return "Please enter a " . $field_name;
    }



    public function slider_delete($id)
    {
        return $this->conn->query("Delete From `sliders` WHERE `id` = '$id'");
    }

//    slider with id
    public function slider($id)
    {
        return $this->conn->query("SELECT * FROM `sliders` WHERE `id` = '$id'");
    }

//    slider update with id
    public function slider_update($title, $sub_title, $start_date, $end_date, $url, $status, $image_name , $id)
    {
        return $this->conn->query("UPDATE `sliders` SET `title` = '$title' , `sub_title` = '$start_date' , `end_date` = '$end_date' , `url` = '$url' , `status` = '$status' , `image` = '$image_name' WHERE `id` = '$id'");
    }

//    slider find
    public function slider_find($id)
    {
        $slider = $this->conn->query("SELECT * FROM `sliders` WHERE `id` = '$id'");

        return $slider->fetch_assoc();
    }

//    slider update
    public function slider_status_update($id ,$status)
    {
        return $this->conn->query("UPDATE `sliders` SET `status` = '$status' WHERE `id` = '$id'");
    }


}