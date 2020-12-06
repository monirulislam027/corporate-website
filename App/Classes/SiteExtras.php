<?php


namespace App\Classes;


class SiteExtras extends Config
{
    /**
     * @return string
     * dynamic site title
     */
    public function page_title()
    {
        if (isset($_GET['page']) && $_GET['page'] == 'index') {
            $page_name = 'Home';
        } elseif (isset($_GET['page'])) {
            $page_name = $_GET['page'];
        } elseif (!isset($_GET['page'])) {
            $page_name = 'Home';
        }

        $title = str_replace('-', ' ', $page_name);
        $title = str_replace('_', ' ', $title);

        return ucwords($title);


    }


    /**
     * @param $page
     * @return string
     */
    public function active_menu($page)
    {
        if (isset($_GET['page']) && $_GET['page'] == 'index') {
            $page_name = 'home';
        } else if (isset($_GET['page'])) {
            $page_name = $_GET['page'];
        } elseif (!isset($_GET['page'])) {
            $page_name = 'home';
        }

        $page = strtolower($page);

        return $page_name == $page ? 'active' : '';

    }

    /**
     * @return string
     */
    public function inner_page_header()
    {
        if (isset($_GET['page']) and $_GET['page'] != 'home') {
            $class_name = 'header-inner-pages';
        } else {
            $class_name = '';
        }

        return $class_name;

    }


    public function about_us()
    {
        $about_us = $this->conn->query("SELECT `title` , `sub_title` , `description` FROM `about_us` WHERE `id` = 1");
        return $about_us->fetch_assoc();

    }

    public function contact_us()
    {
        return $this->conn->query("SELECT * FROM `contact` WHERE `id` = 1");
    }

}