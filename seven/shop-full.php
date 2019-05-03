 <?php
 include 'header.php';
 ?>
        <div class="section white-backgorund">
            <div class="container-fluid padding">
                <div class="row">
                    <!-- start sidebar -->
                    <div class="col-sm-3">
                        
                        <div class="widget">
                            <h6 class="subtitle">Categories</h6>
                            
                            <ul class="list list-unstyled">
                                <li>
                                    <div class="checkbox-input checkbox-default">
                                        <input id="mens-category" class="styled" type="checkbox" checked>
                                        <label for="mens-category">
                                            Mens  <span class="text-dark">(11)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default">
                                        <input id="womens-category" class="styled" type="checkbox" checked>
                                        <label for="womens-category">
                                            Womens <span class="text-dark">(21)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="kids-category" class="styled" type="checkbox" checked>
                                        <label for="kids-category">
                                            Kids <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="fashion-category" class="styled" type="checkbox" checked>
                                        <label for="fashion-category">
                                            Fashion <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="sportwear-category" class="styled" type="checkbox" checked>
                                        <label for="sportwear-category">
                                            Sportwear <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="bags-category" class="styled" type="checkbox" checked>
                                        <label for="bags-category">
                                            Bags <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="shoes-category" class="styled" type="checkbox" checked>
                                        <label for="shoes-category">
                                            Shoes <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="hoseholds-category" class="styled" type="checkbox" checked>
                                        <label for="hoseholds-category">
                                            HoseHolds <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input checkbox-default0">
                                        <input id="technology-category" class="styled" type="checkbox" checked>
                                        <label for="technology-category">
                                            Technology <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        <div class="widget">
                            <h6 class="subtitle">Prices</h6>
                            
                            <form method="post" class="price-range" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                                <div class="ui-range-values">
                                    <div class="ui-range-value-min">
                                        $<span></span>
                                        <input type="hidden">
                                    </div> -
                                    <div class="ui-range-value-max">
                                        $<span></span>
                                        <input type="hidden">
                                    </div>
                                </div>
                                <div class="ui-range-slider"></div>
                                <button type="submit" class="btn btn-default btn-block btn-md">Filter</button>
                            </form>
                        </div><!-- end widget -->
                        <div class="widget">
                            
                            <h6 class="subtitle">Brands</h6>
                            
                            <ul class="list list-unstyled">
                                <li>
                                    <div class="checkbox-input">
                                        <input id="armani-brand" class="styled" type="checkbox" checked>
                                        <label for="armani-brand">
                                            Armani  <span class="text-dark">(11)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input">
                                        <input id="gucci-brand" class="styled" type="checkbox" checked>
                                        <label for="gucci-brand">
                                            Gucci <span class="text-dark">(21)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input">
                                        <input id="chanel-brand" class="styled" type="checkbox">
                                        <label for="chanel-brand">
                                            Chanel <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input">
                                        <input id="luis-vuitton-brand" class="styled" type="checkbox">
                                        <label for="luis-vuitton-brand">
                                            Luis Vuitton <span class="text-dark">(12)</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        <div class="widget">
                            <h6 class="subtitle">Colors</h6>
                            
                            <ul class="list list-unstyled">
                                <li>
                                    <div class="checkbox-input">
                                        <input id="red-color" class="styled" type="checkbox" checked>
                                        <label for="red-color">
                                            <span class="color" style="background-color: red;"></span> 
                                            Red  
                                            <span class="text-dark">(121)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input">
                                        <input id="green-color" class="styled" type="checkbox">
                                        <label for="green-color">
                                            <span class="color" style="background-color: green;"></span>
                                            Green 
                                            <span class="text-dark">(211)</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox-input">
                                        <input id="blue-color" class="styled" type="checkbox">
                                        <label for="blue-color">
                                            <span class="color" style="background-color: blue;"></span>
                                            Blue 
                                            <span class="text-dark">(120)</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                        <div class="widget">
                            <h6 class="subtitle">My Cart</h6>
                            
                            <p>There are 2 items in your cart.</p>
                            <hr class="spacer-10">
                            <ul class="items">
                                <li> 
                                    <a href="javascript:void(0);" class="product-image">
                                        <img src="img/products/men_06.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <div class="close-icon"> 
                                            <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                        </div>
                                        <p class="product-name"> 
                                            <a href="javascript:void(0);">Lorem ipsum dolor sit amet Consectetur</a> 
                                        </p>
                                        <strong class="text-dark">1</strong> x <span class="price text-primary">$19.99</span>
                                    </div>
                                </li><!-- end item -->
                                <li> 
                                    <a href="javascript:void(0);" class="product-image">
                                        <img src="img/products/shoes_01.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <div class="close-icon"> 
                                            <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                        </div>
                                        <p class="product-name"> 
                                            <a href="javascript:void(0);">Lorem ipsum dolor sit amet Consectetur</a> 
                                        </p>
                                        <strong class="text-dark">1</strong> x <span class="price text-primary">$19.99</span>
                                    </div>
                                </li><!-- end item -->
                            </ul>

                            <hr class="spacer-10">
                            <strong class="text-dark">Cart Subtotal:<span class="pull-right text-primary">$19.99</span></strong>
                            <hr class="spacer-10">
                            <a href="checkout.html" class="btn btn-default semi-circle btn-block btn-md"><i class="fa fa-shopping-basket mr-10"></i>Checkout</a>
                        </div><!-- end widget -->
                        
                    </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <h2 class="title">Shop Full Width Sidebar Left</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        <hr class="spacer-5"><hr class="spacer-20 no-border">
                        
                        <div class="row column-3">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <div class="badges">
                                            <span class="product-badge top left primary-background text-white semi-circle">Sale</span>
                                            <span class="product-badge top right text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img class="front" src="img/products/men_01.jpg" alt="">
                                                <img class="back" src="img/products/men_02.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <div class="badges">
                                            <span class="product-badge top right danger-background text-white semi-circle">-20%</span>
                                        </div>
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/women_01.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <div class="badges">
                                            <span class="product-badge bottom left warning-background text-white semi-circle">Out of Stock</span>
                                        </div>
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/bags_01.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <div class="badges">
                                            <span class="product-badge bottom right info-background text-white semi-circle">New</span>
                                        </div>
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/fashion_01.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/hoseholds_05.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/kids_01.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/shoes_01.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/technology_02.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/men_04.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/women_02.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/bags_05.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                            
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail store style2">
                                    <div class="header">
                                        <figure class="layer">
                                            <a href="javascript:void(0);">
                                                <img src="img/products/hoseholds_04.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="icons">
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        <hr class="spacer-10 no-border">
                        
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <nav>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="active"><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->   
                </div><!-- end row -->
                
                <!-- Modal Product Quick View -->
                <div class="modal fade productQuickView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5>Lorem ipsum dolar sit amet</h5>
                            </div><!-- end modal-header -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class='carousel slide product-slider' data-ride='carousel' data-interval="false">
                                            <div class='carousel-inner'>
                                                <div class='item active'>
                                                    <figure>
                                                        <img src='img/products/men_01.jpg' alt='' />
                                                    </figure>
                                                </div><!-- end item -->
                                                <div class='item'>
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NrmMk1Myrxc"></iframe>
                                                    </div>
                                                </div><!-- end item -->
                                                <div class='item'>
                                                    <figure>
                                                        <img src='img/products/men_03.jpg' alt='' />
                                                    </figure>
                                                </div><!-- end item -->
                                                <div class='item'>
                                                    <figure>
                                                        <img src='img/products/men_04.jpg' alt='' />
                                                    </figure>
                                                </div><!-- end item -->
                                                <div class='item'>
                                                    <figure>
                                                        <img src='img/products/men_05.jpg' alt=''/>
                                                    </figure>
                                                </div><!-- end item -->

                                                <!-- Arrows -->
                                                <a class='left carousel-control' href='.html' data-slide='prev'>
                                                    <span class='fa fa-angle-left'></span>
                                                </a>
                                                <a class='right carousel-control' href='.html' data-slide='next'>
                                                    <span class='fa fa-angle-right'></span>
                                                </a>
                                            </div><!-- end carousel-inner -->

                                            <!-- thumbs -->
                                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                                <li data-target='.product-slider' data-slide-to='0' class='active'><img src='img/products/men_01.jpg' alt='' /></li>
                                                <li data-target='.product-slider' data-slide-to='1'><img src='img/products/men_02.jpg' alt='' /></li>
                                                <li data-target='.product-slider' data-slide-to='2'><img src='img/products/men_03.jpg' alt='' /></li>
                                                <li data-target='.product-slider' data-slide-to='3'><img src='img/products/men_04.jpg' alt='' /></li>
                                                <li data-target='.product-slider' data-slide-to='4'><img src='img/products/men_05.jpg' alt='' /></li>
                                                <li data-target='.product-slider' data-slide-to='5'><img src='img/products/men_06.jpg' alt='' /></li>
                                            </ol><!-- end carousel-indicators -->
                                        </div><!-- end carousel -->
                                    </div><!-- end col -->
                                    <div class="col-sm-7">
                                        <p class="text-gray alt-font">Product code: 1032446</p>

                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star-half-o text-warning"></i>
                                        <span>(12 reviews)</span>
                                        <h4 class="text-primary">$79.00</h4>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <hr class="spacer-10">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <select class="form-control" name="select">
                                                    <option value="" selected>Color</option>
                                                    <option value="red">Red</option>
                                                    <option value="green">Green</option>
                                                    <option value="blue">Blue</option>
                                                </select>
                                            </div><!-- end col -->
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <select class="form-control" name="select">
                                                    <option value="">Size</option>
                                                    <option value="">S</option>
                                                    <option value="">M</option>
                                                    <option value="">L</option>
                                                    <option value="">XL</option>
                                                    <option value="">XXL</option>
                                                </select>
                                            </div><!-- end col -->
                                            <div class="col-md-4 col-sm-12">
                                                <select class="form-control" name="select">
                                                    <option value="" selected>QTY</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                    <option value="">7</option>
                                                </select>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <hr class="spacer-10">
                                        <ul class="list list-inline">
                                            <li><button type="button" class="btn btn-default btn-md round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
                                            <li><button type="button" class="btn btn-gray btn-md round"><i class="fa fa-heart mr-5"></i>Add to Wishlist</button></li>
                                        </ul>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end modal-body -->
                        </div><!-- end modal-content -->
                    </div><!-- end modal-dialog -->
                </div><!-- end productRewiew -->
                
            </div><!-- end container -->
        </div>
        <!-- end section -->
<?php
 include 'footer.php';
?>