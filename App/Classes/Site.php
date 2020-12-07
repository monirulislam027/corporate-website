<?php


namespace App\Classes;


class Site extends Config
{
    public function sliders()
    {
        $date = date('d-m-Y', time());
        return $this->conn->query("SELECT * FROM `sliders` WHERE `status` = 1 AND `start_date` <= '$date' AND `end_date` >= '$date' ORDER BY `id` DESC ");
    }

    public function home_page_services($limit = 0)
    {
        return $this->conn->query("SELECT * FROM `services` WHERE `status` = 1 LIMIT 6 ");
    }

    public function work_menus()
    {
        return $this->conn->query("SELECT * FROM `works_menu` WHERE `status` = 1");
    }

    public function work_items()
    {
        return $this->conn->query("SELECT `works_items`.`id` , `title` , `image` , `slug` ,`works_items`.`status` AS `status` , `name` FROM `works_items` INNER JOIN `works_menu`  ON `works_items`.`menu_id` = `works_menu`.`id` WHERE `works_items`.`status` = 1 ");
    }

    public function team_members()
    {
        return $this->conn->query("SELECT * FROM `team` WHERE `status` = 1");
    }

    public function skills()
    {
        return $this->conn->query("SELECT * FROM `skills` WHERE `status` = 1");
    }

    public function testimonials()
    {
        return $this->conn->query("SELECT * FROM `testimonials` WHERE `status` = 1");
    }

    public function all_services()
    {
        return $this->conn->query("SELECT * FROM `services` WHERE `status` = 1 ");
    }

    public function save_message($name, $email, $subject, $message)
    {
        return $this->conn->query("INSERT INTO `contact` (`name` , `email` , `subject` , `message`) VALUES ('$name' , '$email' , '$subject' , '$message')");

    }

}