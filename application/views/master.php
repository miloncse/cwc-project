<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | page</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
<!--        <link href="<?php echo base_url(); ?>css/price-range.css" rel="stylesheet">-->
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
        <script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <!--                                    write something here-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="<?php echo base_url(); ?>images/home/logo.jpg" alt="" /></a>
                            </div>
<!--                            <div class="btn-group pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        USA
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Canada</a></li>
                                        <li><a href="#">UK</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        DOLLAR
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Canadian Dollar</a></li>
                                        <li><a href="#">Pound</a></li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-sm-8">
                            <div class="mainmenu pull-right">
                                 
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    
                                    <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <?php
                                     $user_id=$this->session->userdata('user_id');
                                     if ($user_id){?>
                                           <li class="dropdown"><a href="#"><i class="fa fa-user"></i> My Account</a>
                                                    <ul role="menu" class="sub-menu">
                                                        <li><a href="<?php echo base_url() . "action/view_profile/" . $user_id; ?>">View Profile</a></li>
                                                        <li><a href="<?php echo base_url() . "action/edit_profile/" . $user_id; ?>">Edit Profile</a></li> 
                                                        <li><a href="<?php echo base_url(); ?>action/logout">logout</a></li> 
                                                    </ul>
                                            </li>
                                      <?php } else {?>
                                     <li><a href="<?php echo base_url(); ?>login.html"><i class="fa fa-lock"></i> Login</a></li>
                                            
                                       <?php } ?>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="#">Sell a Product</a></li>
                                            <li><a href="#">Checkout</a></li> 
                                            <li><a href="#">Cart</a></li> 
                                            <li><a href="<?php echo base_url(); ?>login.html">Login</a></li> 
                                        </ul>
                                    </li> 
                                    <li><a href="#">404</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
        <?php if (isset($slider)) { ?>
            <section id="slider"><!--slider-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-carousel" data-slide-to="1"></li>
                                    <li data-target="#slider-carousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-sm-6">
                                            <h1><span>Product</span>Title</h1>
                                            <h2>Short description</h2>
                                            <p>Details about the product </p>
                                            <button type="button" class="btn btn-default get">Get it now</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="<?php echo base_url(); ?>images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                            <img src="<?php echo base_url(); ?>images/home/pricing.png"  class="pricing" alt="" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <h1><span>Product</span>Title</h1>
                                            <h2>Short description</h2>
                                            <p>Details about the product </p>
                                            <button type="button" class="btn btn-default get">Get it now</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="<?php echo base_url(); ?>images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                            <img src="<?php echo base_url(); ?>images/home/pricing.png"  class="pricing" alt="" />
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="col-sm-6">
                                            <h1><span>Product</span>Title</h1>
                                            <h2>Short description</h2>
                                            <p>Details about the product </p>
                                            <button type="button" class="btn btn-default get">Get it now</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="<?php echo base_url(); ?>images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                            <img src="<?php echo base_url(); ?>images/home/pricing.png" class="pricing" alt="" />
                                        </div>
                                    </div>

                                </div>

                                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section><!--/slider-->
        <?php } ?>

        <!--/Dynamic content section starts-->
        <?php echo $content; ?>
        <!--/Dyamic content section ends -->


        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>Site</span>Title</h2>
                                <p>My awesome website</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="address">
                                <img src="<?php echo base_url(); ?>images/home/map.png" alt="" />
                                <p>Company address</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Service</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Online Help</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Order Status</a></li>
                                    <li><a href="">Change Location</a></li>
                                    <li><a href="">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Terms of Use</a></li>
                                    <li><a href="">Privecy Policy</a></li>
                                    <li><a href="">Refund Policy</a></li>
                                    <li><a href="">Billing System</a></li>
                                    <li><a href="">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Company Information</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">Copyright</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
<!--                                another widget here-->
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <form action="#" class="searchform">
                                    <input type="text" placeholder="Your email address" />
                                    <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                    <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                </form>
                            </div>
                        </div>
                        </div>
                </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        Footer text here
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->



        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.scrollUp.min.js"></script>
<!--        <script src="<?php echo base_url(); ?>js/price-range.js"></script>-->
        <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>js/main.js"></script>
    </body>
</html>