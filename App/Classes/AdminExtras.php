<?php


namespace App\Classes;


class AdminExtras extends Config
{
    public function about_us()
    {
        $about_us = $this->conn->query("SELECT `title` , `sub_title` , `description` FROM `about_us` WHERE `id` = 1");
        return $about_us->fetch_assoc();
    }

    public function about_us_save($title, $sub_title, $description)
    {

        $user_id = $this->auth_user_id();

        return $this->conn->query("UPDATE `about_us` SET `title` = '$title' , `sub_title` = '$sub_title' , `description` = '$description' , `create_by` = '$user_id'  WHERE `id` = 1 ");

    }



}


















