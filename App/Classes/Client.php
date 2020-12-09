<?php


namespace App\Classes;


class Client extends Config
{
    public function all_logo()
    {
        return $this->conn->query("Select * From `client_logo` Order By `id` DESC");
    }

    public function add_client_logo($imageNameToStore, $status)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("INSERT INTO `client_logo` ( `image` , `status` , `create_by`) VALUES ('$imageNameToStore' , '$status' , '$user_id')");
    }

    public function client_logo_status($status, $id)
    {
        return $this->conn->query("UPDATE `client_logo` SET `status` = '$status' WHERE `id` = '$id'");
    }

    public function logo_delete($id)
    {
        return $this->conn->query("Delete From `client_logo` WHERE `id` = '$id'");
    }

}