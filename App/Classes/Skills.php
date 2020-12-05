<?php


namespace App\Classes;


class Skills extends Config
{
    public function all_skills()
    {
        return $this->conn->query("SELECT * FROM `skills` ORDER  BY `id` DESC");
    }

    public function add_skill($name, $percentage, $status)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("INSERT INTO `skills` (`name` , `percentage` , `status` , `create_by`) VALUES('$name' , '$percentage' , '$status' , '$user_id')");
    }

    public function skill_find($id)
    {
        return $this->conn->query("SELECT * FROM `skills` WHERE `id` = '$id'");
    }

    public function update_skill($name, $percentage, $status, $id)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("UPDATE `skills` SET `name` = '$name' , `percentage` = '$percentage' , `status` = '$status' , `create_by` = '$user_id' WHERE `id` = '$id'");
    }

    public function skill_status_change($id, $status)
    {
        return $this->conn->query("UPDATE `skills` SET `status` = '$status' WHERE `id` = '$id'");
    }


    public function skill_delete($id)
    {
        return $this->conn->query("Delete From `skills` WHERE `id` = '$id'");
    }


}