<!DOCTYPE html>
<html lang="en">

<head>
    <title>7Atara</title>
    <meta charset="utf-8">
    <meta name="description" content="7ATARA E-Commerce">
    <meta name="author" content="Mello" />
    <meta name="keywords" content="plus, html5, css3, template, ecommerce, e-commerce, bootstrap, responsive, creative" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!--jquery cdn link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- css files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/swiper.css" />

    <!-- this is default skin you can replace that with: dark.css, yellow.css, red.css ect -->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/override.css">
    <!-- Google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700i" rel="stylesheet"> -->

</head>
    <body onscroll="hide()">

        <!-- start section -->
        <div class="primary-background hidden-xs">
            <div class="container-fluid">
                <div class="row grid-space-0">
                    <div class="col-sm-12">
                        <figure>
                            <a href="category.html">
                                <img src="img/banners/top_banner.jpg" alt=""/>
                            </a>
                        </figure>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
        <!-- end section -->

        <!-- start topBar -->





        <div class="middleBar">
            <div class="container">
                <div class="row display-table">
                    <div class="col-sm-2 vertical-align text-left hidden-md hidden-xs">
                        <a href="javascript:void(0);">
                            <img width="160px" height="80px" src="img/logo.png" alt="" />
                        </a>
                    </div><!-- end col -->
                    <div class="col-sm-8 vertical-align text-center">
                        <form>
                            <div class="row grid-space-1 oneline-form">
                              <div class="col-sm-3">
                                  <select class="form-control input-lg category-box" name="category" >
                                      <option value="all">Categories</option>
                                      <optgroup label="Mens">
                                          <option value="shirts">Shirts</option>
                                          <option value="coats-jackets">Coats & Jackets</option>
                                          <option value="underwear">Underwear</option>
                                          <option value="sunglasses">Sunglasses</option>
                                          <option value="socks">Socks</option>
                                          <option value="belts">Belts</option>
                                      </optgroup>
                                      <optgroup label="Womens">
                                          <option value="bresses">Bresses</option>
                                          <option value="t-shirts">T-shirts</option>
                                          <option value="skirts">Skirts</option>
                                          <option value="jeans">Jeans</option>
                                          <option value="pullover">Pullover</option>
                                      </optgroup>
                                      <option value="kids">Kids</option>
                                      <option value="fashion">Fashion</option>
                                      <optgroup label="Sportwear">
                                          <option value="shoes">Shoes</option>
                                          <option value="bags">Bags</option>
                                          <option value="pants">Pants</option>
                                          <option value="swimwear">Swimwear</option>
                                          <option value="bicycles">Bicycles</option>
                                      </optgroup>
                                      <option value="bags">Bags</option>
                                      <option value="shoes">Shoes</option>
                                      <option value="hoseholds">HoseHolds</option>
                                      <optgroup label="Technology">
                                          <option value="tv">TV</option>
                                          <option value="camera">Camera</option>
                                          <option value="speakers">Speakers</option>
                                          <option value="mobile">Mobile</option>
                                          <option value="pc">PC</option>
                                      </optgroup>
                                  </select>
                              </div>
                                <div class="col-sm-6">
                                    <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                                </div><!-- end col -->
                                <!-- end col -->
                                <div class="col-sm-3">
                                    <input type="submit"  class="btn btn-default btn-block btn-lg" value="Search">
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end col -->
                    <div class="topBar">
                      <ul class="topBarNav pull-right">
                        <li class="linkdown">
                            <a href="javascript:void(0);">
                                <i class="fa fa-user fa-2 mr-5"></i>
                                <span class="hidden-xs">

                                    <i class="fa fa-angle-down fa-2 ml-5"></i>
                                </span>
                            </a>
                            <ul class="w-150">
                                <li><a href="login_register.php">Login</a></li>
                                <li><a href="login_register.php">Create Account</a></li>
                                <li><a href="profille.php">My Profile</a></li>
                                <li><a href="#" id='logout'name='logout'>Logout</a></li>
                                <li class="divider"></li>
                                <li><a href="wishlist.php">Wishlist (5)</a></li>
                                <li><a href="cart.php">My Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="linkdown pull-right">
                            <a href="javascript:void(0);">
                                <i class="fa fa-shopping-basket fa-2 mr-5"></i>
                                <sup class="text-primary2">(3)</sup>
                                <span class="hidden-xs">
                                    <i class="fa fa-angle-down fa-2 ml-5"></i>
                                </span>
                            </a>
                            <ul class="cart w-250">
                                <li>
                                    <div class="cart-items">
                                        <ol class="items">
                                            <li>
                                                <a href="shop-single-product-v1.html" class="product-image">
                                                    <img src="img/products/men_06.jpg" alt="Sample Product ">
                                                </a>
                                                <div class="product-details">
                                                    <div class="close-icon">
                                                        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                                    </div>
                                                    <p class="product-name">
                                                        <a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a>
                                                    </p>
                                                    <strong>1</strong> x <span class="price text-primary">$59.99</span>
                                                </div><!-- end product-details -->
                                            </li><!-- end item -->
                                            <li>
                                                <a href="shop-single-product-v1.html" class="product-image">
                                                    <img src="img/products/shoes_01.jpg" alt="Sample Product ">
                                                </a>
                                                <div class="product-details">
                                                    <div class="close-icon">
                                                        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                                    </div>
                                                    <p class="product-name">
                                                        <a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a>
                                                    </p>
                                                    <strong>1</strong> x <span class="price text-primary">$39.99</span>
                                                </div><!-- end product-details -->
                                            </li><!-- end item -->
                                            <li>
                                                <a href="shop-single-product-v1.html" class="product-image">
                                                    <img src="img/products/bags_07.jpg" alt="Sample Product ">
                                                </a>
                                                <div class="product-details">
                                                    <div class="close-icon">
                                                        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                                    </div>
                                                    <p class="product-name">
                                                        <a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a>
                                                    </p>
                                                    <strong>1</strong> x <span class="price text-primary">$29.99</span>
                                                </div><!-- end product-details -->
                                            </li><!-- end item -->
                                        </ol>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-footer">
                                        <a href="cart.html" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View Cart</a>
                                        <a href="checkout.html" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a>
                                    </div>
                                </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div><!-- end col -->
                </div><!-- end  row -->
            </div><!-- end container --><!-- end middleBar -->

        <!-- start navbar -->
        <div class="navbar yamm navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="javascript:void(0);" class="navbar-brand visible-xs">
                        <img width = "120px" src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="navbar-collapse-3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown active"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-heading">Best Deals<i class="fa fa-angle-down ml-5"></i></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="home-v1.html">Home - Version 1</a></li>
                                <li><a href="home-v2.html">Home - Version 2</a></li>
                                <li><a href="home-v3.html">Home - Version 3</a></li>
                                <li><a href="home-v4.html">Home - Version 4 <span class="label primary-background">1.1</span></a></li>
                                <li class="active"><a href="home-v5.html">Home - Version 5 <span class="label primary-background">1.1</span></a></li>
                                <li><a href="home-v6.html">Home - Version 6 <span class="label primary-background">1.2</span></a></li>
                                <li><a href="home-v7.html">Home - Version 7 <span class="label primary-background">1.3</span></a></li>
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                        <!-- Features -->
                        <li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">New Deals<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="headers.html">Headers</a></li>
                                <li><a href="footers.html">Footers</a></li>
                                <li><a href="sliders.html">Sliders</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown Level 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Dropdown Level</a></li>
                                        <li class="dropdown-submenu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown Level 2</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Dropdown Level</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                        <!-- Pages -->

                        <!-- elements -->

                        <!-- Collections -->
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Made in India<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <a href="javascript:void(0);">
                                                    <figure class="zoom-out">
                                                        <img alt="" src="img/banners/collection_01.jpg">
                                                    </figure>
                                                </a>
                                            </div><!-- end col -->
                                            <div class="col-xs-12 col-sm-3">
                                                <a href="javascript:void(0);">
                                                    <figure class="zoom-in">
                                                        <img alt="" src="img/banners/collection_02.jpg">
                                                    </figure>
                                                </a>
                                            </div><!-- end col -->
                                            <div class="col-xs-12 col-sm-3">
                                                <a href="javascript:void(0);">
                                                    <figure class="zoom-out">
                                                        <img alt="" src="img/banners/collection_03.JPG">
                                                    </figure>
                                                </a>
                                            </div><!-- end col -->
                                            <div class="col-xs-12 col-sm-3">
                                                <a href="javascript:void(0);">
                                                    <figure class="zoom-in">
                                                        <img alt="" src="img/banners/collection_04.JPG">
                                                    </figure>
                                                </a>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <hr class="spacer-20 no-border">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <h6>Pellentes que nec diam lectus</h6>
                                                <p>Proin pulvinar libero quis auctor pharet ra. Aenean fermentum met us orci, sedf eugiat augue pulvina r vitae. Nulla dolor nisl, molestie nec aliquam vitae, gravida sodals dolor...</p>
                                                <button type="button" class="btn btn-default round btn-md">Read more</button>
                                            </div><!-- end col -->
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="thumbnail store style1">
                                                    <div class="header">
                                                        <div class="badges">
                                                            <span class="product-badge top left white-backgorund text-primary semi-circle">Sale</span>
                                                            <span class="product-badge top right text-primary">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </span>
                                                        </div>
                                                        <figure class="layer">
                                                            <img src="img/products/men_01.jpg" alt="">
                                                        </figure>
                                                        <div class="icons">
                                                            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                                            <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <h6 class="thin"><a href="javascript:void(0);">Lorem Ipsum dolor sit</a></h6>
                                                        <div class="price">
                                                            <small class="amount off">$68.99</small>
                                                            <span class="amount text-primary">$59.99</span>
                                                        </div>
                                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                                    </div><!-- end caption -->
                                                </div><!-- end thumbnail -->
                                            </div><!-- end col -->
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="thumbnail store style1">
                                                    <div class="header">
                                                        <div class="badges">
                                                            <span class="product-badge top left white-backgorund text-primary semi-circle">Sale</span>
                                                            <span class="product-badge top right text-primary">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </span>
                                                        </div>
                                                        <figure class="layer">
                                                            <img src="img/products/women_01.jpg" alt="">
                                                        </figure>
                                                        <div class="icons">
                                                            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                                            <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <h6 class="thin"><a href="javascript:void(0);">Lorem Ipsum dolor sit</a></h6>
                                                        <div class="price">
                                                            <small class="amount off">$68.99</small>
                                                            <span class="amount text-primary">$59.99</span>
                                                        </div>
                                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                                    </div><!-- end caption -->
                                                </div><!-- end thumbnail -->
                                            </div><!-- end col -->
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="thumbnail store style1">
                                                    <div class="header">
                                                        <div class="badges">
                                                            <span class="product-badge top left white-backgorund text-primary semi-circle">Sale</span>
                                                            <span class="product-badge top right text-primary">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </span>
                                                        </div>
                                                        <figure class="layer">
                                                            <img src="img/products/kids_01.jpg" alt="">
                                                        </figure>
                                                        <div class="icons">
                                                            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                                            <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <h6 class="thin"><a href="javascript:void(0);">Lorem Ipsum dolor sit</a></h6>
                                                        <div class="price">
                                                            <small class="amount off">$68.99</small>
                                                            <span class="amount text-primary">$59.99</span>
                                                        </div>
                                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                                    </div><!-- end caption -->
                                                </div><!-- end thumbnail -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li><!-- end li -->
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end dropdown -->
                        <li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Near You<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="headers.html">Headers</a></li>
                                <li><a href="footers.html">Footers</a></li>
                                <li><a href="sliders.html">Sliders</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown Level 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Dropdown Level</a></li>
                                        <li class="dropdown-submenu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown Level 2</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Dropdown Level</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                        <li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Popular categories<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="headers.html">Headers</a></li>
                                <li><a href="footers.html">Footers</a></li>
                                <li><a href="sliders.html">Sliders</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown Level 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Dropdown Level</a></li>
                                        <li class="dropdown-submenu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Dropdown Level 2</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Dropdown Level</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->

                    </ul><!-- end navbar-nav -->
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown right "><a href="javascript:void(0);" id="unique">Market & Earn</a></li>
                      <li class="dropdown right "><a href="javascript:void(0);" id="unique">Sell Products</a></li>
                      <li class="dropdown right "><a href="javascript:void(0);" id="unique">Post Services</a></li>
                    </ul>
                  <!-- end navbar-right -->
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </div><!-- end navbar -->
