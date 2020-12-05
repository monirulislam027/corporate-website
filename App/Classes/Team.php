<?php


namespace App\Classes;


class Team extends Config
{
    public function add_member($name, $role, $short_desc, $status, $facebook, $twitter, $instagram, $linkedIn, $imageNameToStore)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("INSERT INTO `team` (`name` , `role`  ,`short_desc`,`status` ,`facebook`  ,`twitter` , `instagram` , `linkedIn` ,`create_by` ,  `image` ) VALUES( '$name' , '$role' , '$short_desc', $status , '$facebook' , '$twitter' , '$instagram' , '$linkedIn' , $user_id , '$imageNameToStore')");
    }

    public function team_members()
    {
        return $this->conn->query("SELECT * FROM `team` ORDER BY `id` DESC");
    }

    public function team_status_update($id, $status)
    {
        return $this->conn->query("UPDATE `team` SET `status` = '$status' WHERE `id` = '$id'");
    }

    public function team_member_find($id)
    {
        return $this->conn->query("SELECT * FROM `team` WHERE `id` = '$id'");
    }

    public function member_delete($id)
    {
        return $this->conn->query("Delete From `team` WHERE `id` = '$id'");
    }

    public function update_member($name, $role, $short_desc, $status, $facebook, $twitter, $instagram, $linkedIn, $imageNameToStore, $id)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("UPDATE `team` SET  `name`= '$name' , `role` = '$role' , `short_desc`= '$short_desc' , `status`= '$status' , `facebook`= '$facebook' , `twitter`= '$twitter' , `instagram`= '$instagram' , `linkedIn`= '$linkedIn' , `image`= '$imageNameToStore' , `create_by`= '$user_id' WHERE `id` = '$id'");
    }

}



