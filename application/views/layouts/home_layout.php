
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">

    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Bookshop | E-learning</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
    <!--============= Header Area ===============-->
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
                            <div class="lname"><a href=""><span>Bookshop</span> & E-learning</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <a href="<?= base_url()?>users/login" class="btn-login"><i class="fas fa-user-lock"></i> Login</a>
                                <a href="<?= base_url()?>users/registration" class="btn-login"><i class="fas fa-user-cog"></i> Register</a>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-cart"><a href=""><i class="fas fa-shopping-cart"></i> Cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================== Menu Area ===================-->
        <div>
            <?php $this->load->view('temp/menu'); ?>
        </div>
    </div>
    <!--================== Slider Area ===================-->
    <div>
        <?php $this->load->view('temp/slider'); ?>
    </div>

    <div class="section-padding after-slider">
        <div class="container">
            <div class="section-title sl">
                <h3>Recent Books</h3>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-book">
                        <div class="book-img book-bg-1">
                            <div class="book-bg-inner">
                                <div class="addto-cart"><a href=""><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
                            </div>
                        </div>
                        <div class="book-name">Book name</div>
                        <div class="price">price: TK. 50</div>
                        <div class="book-details"><a href="">View Details</a></div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-book">
                        <div class="book-img book-bg-2">
                            <div class="book-bg-inner">
                                <div class="addto-cart"><a href=""><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
                            </div>
                        </div>
                        <div class="book-name">Book name</div>
                        <div class="price">price: TK. 50</div>
                        <div class="book-details"><a href="">View Details</a></div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-book">
                        <div class="book-img book-bg-3">
                            <div class="book-bg-inner">
                                <div class="addto-cart"><a href=""><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
                            </div>
                        </div>
                        <div class="book-name">Book name</div>
                        <div class="price">price: TK. 50</div>
                        <div class="book-details"><a href="">View Details</a></div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-book">
                        <div class="book-img book-bg-4">
                            <div class="book-bg-inner">
                                <div class="addto-cart"><a href=""><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
                            </div>
                        </div>
                        <div class="book-name">Book name</div>
                        <div class="price">price: TK. 50</div>
                        <div class="book-details"><a href="">View Details</a></div>


                    </div>
                </div>
            </div>
            <div class="view-btn"><a href="">View all <i class="fas fa-arrow-circle-right"></i></a></div>
        </div>
    </div>
    <!--====================== Footer Area =======================-->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="brand-name">
                            <div class="lname"><a href=""><span>Bookshop</span> & E-learning</a></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quia libero porro corporis maiores ut adipisci nulla veritatis ex magni.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Customer Services</h3>

                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Shiping & return</a></li>
                            <li><a href="">Shiping guide</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Stay connected</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos vitae, eaque cumque. Nulla, reprehenderit animi.</p>
                        <div id="social-icon">
                            <span><a href="" title="Facebook"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="" title="Github"><i class="fab fa-github"></i></a></span>
                            <span><a href="" title="Instagram"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <p><i class="fas fa-copyright"></i> Tahmid Nishat | 2019 <br>All right reserved</p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('tool/js/popper-1.12.9.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/all.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/main.js'); ?>"></script>
</body>

</html>
