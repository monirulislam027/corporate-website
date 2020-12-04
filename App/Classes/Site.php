<?php


namespace App\Classes;


class Site extends Config
{
    public function sliders()
    {
        $date = date('d-m-Y', time());
        return $this->conn->query("SELECT * FROM `sliders` WHERE `status` = 1 AND `start_date` <= '$date' AND `end_date` >= '$date' ORDER BY `id` DESC ");
    }
}