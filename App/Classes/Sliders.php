<?php


namespace App\Classes;


class Sliders extends Config
{
    public function save_slider($title , $sub_title , $start_date , $end_date , $url , $status , $imageNameToStore)
    {
        /** @var  $id */

        $id = $_SESSION['user_id'];
        $id = base64_decode($id);
        $id = (int)$id;

        /** @var  $id */
        $sql = "INSERT INTO `sliders` (`title` , `sub_title` , `start_date` , `end_date` , `url` , `status` , `image` , `create_by`) VALUES ( '$title' , '$sub_title' , '$start_date' , '$end_date' , '$url' , '$status' , '$imageNameToStore' , '$id')";

        return $this->conn->query($sql);
    }
}