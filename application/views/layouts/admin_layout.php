<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">

    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
    <!--=================== Header area ===================-->
    <div class="header-area">
        <div class="hearder-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-tx">Welcome to Online Book Shop !</div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icon">
                            <span>Follow : </span>
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Github"><i class="fab fa-github"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <div class="lname"><a href="<?= base_url() ?>home"><span>Bookshop</span> & E-learning</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <!--<a href="" class="btn-login"><i class="fas fa-user-lock"></i> Login</a>
                                <a href="" class="btn-login"><i class="fas fa-user-cog"></i> Register</a>-->
                            </div>
                            <div class="col-md-4">
                                <div class="ic-cart"><a href=""><i class="fas fa-shopping-cart"></i> Cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== Menu Area ===================-->
        <!-- Admin doesn't have any menu -->
    </div>
        <!-- ================== single header =================-->
    <div class="single-header-a">
        <div class="container">
            <span><a href="<?= base_url() ?>home"><i class="fas fa-home"></i> Home</a> / 
            <a href="<?= base_url()?>admin">Admin Dashboard</a></span>
        </div>
    </div>
    <!--================= Content-area ===============-->
    <div class="admin-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-4 admin-nav">
                    <?php $this->load->view('admin/admin_nav'); ?>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-8">
                    <?php $this->load->view($admin_view); ?>
                </div>
            </div>
        </div>
    </div>


    <!--================== Footer Area ==================-->
    <div>
        <?php $this->load->view('temp/footer'); ?>
    </div>
