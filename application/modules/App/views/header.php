<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    -<meta name="description" content="<?php echo title; ?>">
    <meta name="keywords" content="<?php echo title; ?>">
    <meta name="author" content=""> 

    <!--[if lt IE 9]>
    <![endif]-->
    <script src="<?php echo base_url('Resource/App/Assets2/');?>js/html5shiv.js"></script>

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/style.css" type="text/css">

    <!-- background -->
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/bg.css" type="text/css">
    
    <!-- color -->
    <link rel="stylesheet" href="<?php echo base_url('Resource/App/Assets2/');?>css/color.css" type="text/css">
	 <script src="https://kit.fontawesome.com/072f00ad1b.js" crossorigin="anonymous"></script>
	 <style>
	header {
    width: 100%;
    height: 80px;
    position: absolute;
    top: 0px !important;
    left: 0;
    z-index: 1000;
    background: #fff !important;
}
div#preloader {
    display: none !important;
}
#mainmenu a {
    color: #000 !important;
}
@media (max-width: 767px){
header.header-mobile {
    height: inherit !important;
}
h1.big {
    font-size: 40px;
}
.de_tab.tab_style_4 .de_nav li {
    width: 100%;
    max-width: 100%;
    border: none;
}
}

	 </style>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img class="logo" src="<?php echo base_url(logo);?>" style="width:175px;" alt="">
                                <img class="logo-2" src="<?php echo base_url(logo);?>" style="width:150px;" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a class="active" href="<?php echo base_url('');?>">Home</a></li>
                                <li><a href="#">Plan</a></li>
                                <li><a href="#">Download App</a></li>
                                <!-- <li><a href="#">Sponsors</a></li> -->
                                <li><a href="<?php echo base_url('Member/Management/login');?>">Login</a></li>
                                <li><a href="<?php echo base_url('Member/Management/register');?>">Register</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->