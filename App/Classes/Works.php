<?php


namespace App\Classes;


class Works extends Config
{
    /**
     * @return bool|\mysqli_result
     */
    public function works_menu()
    {
        return $this->conn->query("SELECT * FROM `works_menu` ORDER BY `id` DESC ");
    }

    /**
     * @param $name
     * @param $status
     * @return bool|\mysqli_result
     */
    public function save_menu($name, $status)
    {
        $id = $this->auth_user_id();

        $slug = $this->slug($name);
        return $this->conn->query("INSERT INTO `works_menu` (`name` , `slug`, `status` , `create_by`) VALUES ( '$name' , '$slug' , '$status' , '$id')");
    }

    /**
     * @param $id
     * @param $status
     * @return bool|\mysqli_result
     */
    public function works_status_update($id, $status)
    {
        return $this->conn->query("UPDATE `works_menu` SET `status` = '$status' WHERE `id` = '$id'");
    }

    /**
     * @param $id
     * @return array|null
     */
    public function work_menu_find($id)
    {
        $slider = $this->conn->query("SELECT * FROM `works_menu` WHERE `id` = '$id'");

        return $slider->fetch_assoc();
    }

    /**
     * @param $name
     * @param $status
     * @param $id
     * @return bool|\mysqli_result
     */
    public function work_menu_update($name, $status, $id)
    {
        $user_id = $this->auth_user_id();

        $slug = $this->slug($name);
        return $this->conn->query("UPDATE `works_menu` SET `name` = '$name' , `slug` = '$slug' , `status` = '$status' , `create_by` = '$user_id'  WHERE `id` = '$id'");
    }

    /**
     * @param $id
     * @return bool|\mysqli_result
     */
    public function works_menu_delete($id)
    {
        return $this->conn->query("Delete From `works_menu` WHERE `id` = '$id'");
    }

    /**
     * @param $title
     * @param $menu_id
     * @param $status
     * @param $image
     * @return bool|\mysqli_result
     */
    public function save_work_item($title, $menu_id, $status, $image)
    {
        $user_id = $this->auth_user_id();
        return $this->conn->query("INSERT INTO `works_items` (`title` , `menu_id`, `status` , `image` , `create_by`) VALUES ( '$title' , '$menu_id' , '$status' , '$image' , '$user_id')");
    }


    public function work_items()
    {
        return $this->conn->query("SELECT `works_items`.`id` , `title` , `image` ,`works_items`.`status` AS `status` , `name` FROM `works_items` INNER JOIN `works_menu`  ON `works_items`.`menu_id` = `works_menu`.`id`");
    }

    public function works_item_status_update($id, $status)
    {
        return $this->conn->query("UPDATE `works_items` SET `status` = '$status' WHERE `id` = '$id'");
    }

    public function work_item_find($id){
        return  $this->conn->query("SELECT * FROM `works_items` WHERE `id` = '$id'");
    }

    public function works_item_delete($id){
        return $this->conn->query("Delete From `works_items` WHERE `id` = '$id'");
    }

    public function update_work_item($title, $menu_id, $status, $imageNameToStore , $id){

        return $this->conn->query("UPDATE `works_items` SET `title` = '$title' , `menu_id` = '$menu_id' , `status` = '$status' , `image` = '$imageNameToStore'  WHERE `id` = '$id'");

    }

}