<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="author" content="<?php echo $autor ?>" />
    <title>
        <?php echo $title; ?>
    </title>
    <!-- Font Awesome icons (free version)-->
    <script src="<?php echo base_url('assets/template/js/fontawesome.js'); ?>" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/css/styles.css'); ?>">
    <link rel="icon" href="<?php echo base_url('assets/template/assets/img/logo-icon.png'); ?>">

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
                            <a class="navbar-brand" href="#page-top"><img src="<?php echo base_url('assets/template/assets/img/vaika-logo.svg'); ?>"
                                    alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#inserer_vaika">Hampiditra Fiara</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Lisitry ny Fiara</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Vcontroller/gestion_voyage'); ?>">Hanao Kajy</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Vcontroller/index'); ?>">Accueil</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Fikirakiràna Fiara</div>
            <a class="btn btn-primary btn-xl text-uppercase"
                href="#inserer_vaika">Hampiditra fiara</a>
        </div>
    </header>