<?php

require_once './vendor/autoload.php';

use App\Classes\Site;
use App\Classes\SiteExtras;
use App\Classes\Option;

$siteExtras = new SiteExtras();
$site = new Site();
$option = new Option();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $siteExtras->page_title() ?> | <?= $option->site_name()['value']?> </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/public/img/favicon.png" rel="icon">
    <link href="assets/public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/public/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/public/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/public/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/public/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <!-- Template Main CSS File -->
    <link href="assets/public/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Sailor - v2.2.0
    * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top <?= $siteExtras->inner_page_header() ?>">
    <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="index.html"><?= $option->site_name()['value']?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img   src="assets/public/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class="<?= $siteExtras->active_menu('home') ?>"><a href="/">Home</a></li>
                <li class="<?= $siteExtras->active_menu('about-us') ?>"><a href="index.php?page=about-us">About Us</a>
                </li>
                <li class="<?= $siteExtras->active_menu('team') ?>"><a href="index.php?page=team">Team</a></li>
                <li class="<?= $siteExtras->active_menu('testimonial') ?>"><a href="index.php?page=testimonial">Testimonials</a>
                </li>
                <li class="<?= $siteExtras->active_menu('services') ?>"><a href="index.php?page=services">Services</a>
                </li>
                <li class="<?= $siteExtras->active_menu('portfolio') ?>"><a
                            href="index.php?page=portfolio">Portfolio</a></li>
                <li class="<?= $siteExtras->active_menu('home') ?>"><a href="blog.html">Blog</a></li>
                <li class="<?= $siteExtras->active_menu('contact') ?>"><a href="index.php?page=contact">Contact</a></li>

            </ul>

        </nav><!-- .nav-menu -->

        <a href="/" class="get-started-btn ml-auto">Get Started</a>

    </div>
</header><!-- End Header -->

