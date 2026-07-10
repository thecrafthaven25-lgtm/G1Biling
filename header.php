

<?php include "db_con.php"; ?>

<?php 
session_start();

$user_login = $_SESSION['user_name'];

if ($user_login == true) {
} else {
    echo "<script> document.location.href='validation/login.php'; </script>";
}

?>   

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Dashboard | G1 Fashion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Darkone: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />

    <meta name="author" content="G1_fashion" />

    <meta name="keywords"
        content="Darkone, admin dashboard, responsive template, analytics, modern UI, management tools" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#ffffff">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/favicons.ico">

    <!-- Gridjs Plugin css -->
    <link href="assets/vendor/gridjs/theme/mermaid.min.css" rel="stylesheet" type="text/css" />

    <!-- Google Font Family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="assets/js/config.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>

    <!-- START Wrapper -->
    <div class="app-wrapper">

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center gap-2">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu topbar-button">
                                <iconify-icon icon="solar:hamburger-menu-outline" class="fs-24 align-middle">
                                </iconify-icon>
                            </button>
                        </div>

                        <!-- App Search-->
                        <!-- <form class="app-search d-none d-md-block me-auto">
                                 <div class="position-relative">
                                      <input type="search" class="form-control" placeholder="admin,widgets..."
                                           autocomplete="off" value="">
                                      <iconify-icon icon="solar:magnifer-outline" class="search-widget-icon"></iconify-icon>
                                 </div>
                            </form> -->
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!-- Theme Color (Light/Dark) -->
                        <div class="topbar-item">
                            <button type="button" class="topbar-button" id="light-dark-mode">
                                <iconify-icon icon="solar:moon-outline" class="fs-22 align-middle light-mode">
                                </iconify-icon>
                                <iconify-icon icon="solar:sun-2-outline" class="fs-22 align-middle dark-mode">
                                </iconify-icon>
                            </button>
                        </div>

                        <div class="topbar-item">
                            <a href="validation/logout.php">
                                <button type="button" class="topbar-button">
                                    <iconify-icon icon="mingcute:power-line" class="fs-24 align-middle"></iconify-icon>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- App Menu Start -->
        <div class="app-sidebar">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="index.php" class="logo-dark">
                    <img src="assets/img/logo-sm.png" class="logo-sm" alt="logo sm">
                    <img src="assets/img/logo-dark.png" class="logo-lg" alt="logo dark">
                </a>

                <a href="index.php" class="logo-light">
                    <img src="assets/img/logo-sm.png" class="logo-sm" alt="logo sm">
                    <img src="assets/img/logo-light.png" class="logo-lg" alt="logo light">
                </a>
            </div>

            <div class="scrollbar" data-simplebar>

                <ul class="navbar-nav" id="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:home-3-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="party.php">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:box-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Party Details </span>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="invoice.php">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:task-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Invoice </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="chalan.php">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:notebook-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Chalan </span>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="bill.php">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:bill-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> GST Bill (%) </span>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="owner.php">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:user-1-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Owner </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>