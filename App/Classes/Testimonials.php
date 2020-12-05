<?php


namespace App\Classes;


class Testimonials extends Config
{
    public function add_testimonial($name, $role, $review, $status, $imageNameToStore)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("INSERT INTO `testimonials` (`name` , `role` , `review` , `status` , `image` , `create_by`) VALUES('$name' , '$role' , '$review' , '$status' , '$imageNameToStore' , '$user_id')");
    }

    public function testimonials()
    {
        return $this->conn->query("SELECT * FROM `testimonials` ORDER BY `id` DESC ");
    }

    public function testimonials_status_update($id, $status)
    {
        return $this->conn->query("UPDATE `testimonials` SET `status` = '$status' WHERE `id` = '$id'");
    }

    public function testimonial_find($id)
    {
        return $this->conn->query("SELECT * FROM `testimonials` WHERE `id` = '$id'");
    }

    public function testimonial_delete($id)
    {
        return $this->conn->query("Delete From `testimonials` WHERE `id` = '$id'");
    }

    public function edit_testimonial($name, $role, $review, $status, $imageNameToStore, $id)
    {
        $user_id  = $this->auth_user_id();
        return $this->conn->query("UPDATE `testimonials` SET `name` = '$name' , `role` = '$role' , `review` = '$review' , `status` = '$status' , `image` = '$imageNameToStore' , `create_by` = '$user_id' WHERE `id` = '$id'");
    }

}