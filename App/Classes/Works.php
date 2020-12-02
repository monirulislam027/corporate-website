<?php


namespace App\Classes;


class Works extends Config
{

    public function works_menu(){

        return $this->conn->query("SELECT * FROM `works_menu` ORDER BY `id` DESC ");

    }

    public function save_menu($name , $status){

        session_start();
        $id = $_SESSION['user_id'];
        $id = base64_decode($id);
        $id = (int)$id;

        $slug = $this->slug($name);
        return $this->conn->query("INSERT INTO `works_menu` (`name` , `slug`, `status` , `create_by`) VALUES ( '$name' , '$slug' , '$status' , '$id')");
    }
    public function works_status_update($id , $status){
        return $this->conn->query("UPDATE `works_menu` SET `status` = '$status' WHERE `id` = '$id'");
    }


    public function work_menu_find($id)
    {
        $slider = $this->conn->query("SELECT * FROM `works_menu` WHERE `id` = '$id'");

        return $slider->fetch_assoc();
    }

    public function work_menu_update($name , $status , $id){

        session_start();
        $user_id = $_SESSION['user_id'];
        $user_id = base64_decode($user_id);
        $user_id = (int)$user_id;

        $slug = $this->slug($name);
        return $this->conn->query("UPDATE `works_menu` SET `name` = '$name' , `slug` = '$slug' , `status` = '$status' , `create_by` = '$user_id'  WHERE `id` = '$id'");
    }

    public function works_menu_delete($id){
        return $this->conn->query("Delete From `works_menu` WHERE `id` = '$id'");
    }


}