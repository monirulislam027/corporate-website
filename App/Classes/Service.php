<?php


namespace App\Classes;


class Service extends Config
{
    public function add_service($title, $sub_title, $icon, $status)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("INSERT INTO `services` ( `title` , `sub_title` , `icon` , `status` , `create_by` ) VALUES ('$title' , '$sub_title' , '$icon' , '$status' , '$user_id')");
    }

    public function all_service()
    {
        return $this->conn->query("SELECT `id`, `title` , `sub_title` , `icon` , `status`  FROM `services` ORDER BY `id`");
    }

    public function service_status_update($id, $status)
    {
        return $this->conn->query("UPDATE `services` SET `status` = '$status' WHERE `id` = '$id'");
    }

    public function service_find($id){
        return $this->conn->query("SELECT *  FROM `services` WHERE `id` = '$id'");
    }

    public function service_delete($id){
        return $this->conn->query("Delete From `services` WHERE `id` = '$id'");
    }

    public function update_service($title, $sub_title, $icon, $status , $id){
        return $this->conn->query("UPDATE `services` SET `title` = '$title' , `sub_title` ='$sub_title', `icon` = '$icon', `status` = '$status'  WHERE `id` = '$id'");
    }

}