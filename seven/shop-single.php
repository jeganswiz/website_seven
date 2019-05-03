<?php
include 'header.php';
?>      
        <!-- start section -->
        <div style="padding: 20px 0px;" class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <!-- start sidebar -->
                    <div class="col-sm-4">
                        <div class='carousel slide product-slider' id="myCarousel" data-ride='carousel' data-interval="false">
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
                                <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                                    <span class='fa fa-angle-left'></span>
                                </a>
                                <a class='right carousel-control' href='#myCarousel' data-slide='next'>
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
                            </ol><!-- end carousel-indicators -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                    <!-- end sidebar -->
                    <div class="col-sm-8" >
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 class="title">Lorem ipsum dolor sit amet</h2>
                                    <ul class="list list-inline text-gray alt-font">
                                        <li>Product ID: 1032446</li>
                                        <li> <select class="form-control" style="margin-left: 110px;" name="select">
                                        <option value="" selected>QTY</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                    </select></li>     </ul>
                                    <ul class="list list-inline" style="font-size: 12px;">
                                        <li><h6 class="text-danger text-xs">$179.99</h6></li>
                                        <li><h5 class="text-primary">$79.99</h5></li>
                                        <li>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li><a href="javascript:void(0);">(4 reviews)</a></li>
                                        
                                    </ul>
                                    <input class="btn btn-gray btn-sm round fa fa-heart mr-5" value="Add to Wishlist">
                            </div><!-- end col -->
                            <div class="col-sm-4">
                                    <!-- <hr  class="spacer-5"><hr class="spacer-10 no-border"> -->
                                   
                               <p><button type="button" style="margin-bottom:10px;margin-top: 70px;width:75%;" class="btn btn-default btn-md round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></p>
                               <p><button type="button" style="Margin-top:10px;width:75%;" class="btn btn-primary btn-sm round"><i class="fa fa-bolt mr-5" ></i>Proceed to Checkout</button></p>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
<!--                         <hr  class="spacer-5"><hr class="spacer-10 no-border">
 -->                        
                        <div class="row">
                            <div class="col-sm-12">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                <ul class="list alt-list">
                                    <li><i class="fa fa-check"></i> Lorem Ipsum dolor sit amet</li>
                                    <li><i class="fa fa-check"></i> Cras aliquet venenatis sapien fringilla.</li>
                                    <li><i class="fa fa-check"></i> Duis luctus erat vel pharetra aliquet.</li>
                                </ul>
                                
                                <hr class="spacer-15">
                                
                                <ul class="list list-inline">
                                    <li>Share this product: </li>
                                    <li>
                                        <ul class="social-icons style1">
                                            <li class="facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                                            <li style="color: rgb(37, 211,102)"><a href="javascript:void(0);"><i class="fa fa-whatsapp" style="color: rgb(37, 211,102)" aria-hidden="true"></i>
                                            </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <hr class="spacer-20">
                
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs style2 tabs-left">
                            
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (4)</a></li>
                            <h5>Add a review</h5>
                                <p>How do you rate this product?</p>
                                        
                                <hr class="spacer-5 no-border">

                                <form>
                                    <input type="text" class="rating rating-loading" value="5" data-size="sm" title="">
                                </form>

                                <hr class="spacer-10 no-border">

                                <div class="form-group">
                                    <label for="reviewName">Name</label>
                                    <input type="text" id="reviewName" class="form-control input-md" placeholder="Your Name">
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label for="reviewEmail">E-mail</label>
                                    <input type="text" id="reviewEmail" class="form-control input-md" placeholder="Your E-mail">
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label for="reviewMessage">Review</label>
                                    <textarea id="reviewMessage" rows="5" class="form-control" placeholder="Your review"></textarea>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default round btn-md" value="Submit Review">
                                </div>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-xs-12 col-sm-9">
                        <!-- Tab panes -->
                        
                            <div class="tab-pane active" id="reviews">
                                <h5>4 Review for "Lorem ipsum dolor sit amet"</h5>
                                
                                <hr class="spacer-10 no-border">
                                
                                <div class="comments">
                                    <div class="comment-image">
                                        <figure>
                                            <img src="img/team/team_01.jpg" alt="" />
                                        </figure>
                                    </div><!-- end comments-image -->
                                    <div class="comment-content">
                                        <div class="comment-content-head">
                                            <h6 class="comment-title">Lorem ipsum dolor sit</h6>
                                            <ul class="list list-inline comment-meta">
                                                <li>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div><!-- end comment-content-head -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio. Possimus similique eligendi explicabo, dolore, beatae sequi.</p>
                                        <cite>Joe Doe</cite>
                                    </div><!-- end comment-content -->
                                </div><!-- end comments -->
                                
                                <div class="comments">
                                    <div class="comment-image">
                                        <figure>
                                            <img src="img/team/team_02.jpg" alt="" />
                                        </figure>
                                    </div><!-- end comments-image -->
                                    <div class="comment-content">
                                        <div class="comment-content-head">
                                            <h6 class="comment-title">Lorem ipsum dolor sit</h6>
                                            <ul class="list list-inline comment-meta">
                                                <li>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                            </ul>
                                        </div><!-- end comment-content-head -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio.</p>
                                        <cite>Joe Doe</cite>
                                    </div><!-- end comment-content -->
                                </div><!-- end comments -->
                                
                                <div class="comments">
                                    <div class="comment-image">
                                        <figure>
                                            <img src="img/team/team_03.jpg" alt="" />
                                        </figure>
                                    </div><!-- end comments-image -->
                                    <div class="comment-content">
                                        <div class="comment-content-head">
                                            <h6 class="comment-title">Lorem ipsum dolor sit</h6>
                                            <ul class="list list-inline comment-meta">
                                                <li>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </li>
                                            </ul>
                                        </div><!-- end comment-content-head -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio.</p>
                                        <cite>Jane Doe</cite>
                                    </div><!-- end comment-content -->
                                </div><!-- end comments -->
                                
                                <div class="comments">
                                    <div class="comment-image">
                                        <figure>
                                            <img src="img/team/team_04.jpg" alt="" />
                                        </figure>
                                    </div><!-- end comments-image -->
                                    <div class="comment-content">
                                        <div class="comment-content-head">
                                            <h6 class="comment-title">Lorem ipsum dolor sit</h6>
                                            <ul class="list list-inline comment-meta">
                                                <li>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-empty text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </li>
                                            </ul>
                                        </div><!-- end comment-content-head -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos! Sapiente laboriosam molestiae praesentium ducimus culpa. Magnam, odit, optio.</p>
                                        <cite>John Doe</cite>
                                    </div><!-- end comment-content -->
                                </div><!-- end comments -->
                                
                                
                                
                                                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <hr class="spacer-60">
                
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="mb-20">You May Also Like</h4>
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div id="owl-demo" class="owl-carousel column-4 owl-theme">
                            <div class="item">
                                <div class="thumbnail store style1">
                                    <div class="header">
                                        <figure>
                                            <a href="shop-single-product-v1.html">
                                                <img src="img/products/bags_03.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Printed Summer Dress</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <span class="product-badge bottom left text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="thumbnail store style1">
                                    <div class="header">
                                        <figure>
                                            <a href="shop-single-product-v1.html">
                                                <img src="img/products/bags_06.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Printed Summer Dress</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <span class="product-badge bottom left text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="thumbnail store style1">
                                    <div class="header">
                                        <figure>
                                            <a href="shop-single-product-v1.html">
                                                <img src="img/products/hoseholds_01.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Printed Summer Dress</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <span class="product-badge bottom left text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end item -->
                            
                            <div class="item">
                                <div class="thumbnail store style1">
                                    <div class="header">
                                        <figure>
                                            <a href="shop-single-product-v1.html">
                                                <img src="img/products/fashion_02.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Printed Summer Dress</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <span class="product-badge bottom left text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end item -->
                            <div class="item">
                                <div class="thumbnail store style1">
                                    <div class="header">
                                        <figure>
                                            <a href="shop-single-product-v1.html">
                                                <img src="img/products/hoseholds_03.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="caption">
                                        <h6 class="regular"><a href="shop-single-product-v1.html">Printed Summer Dress</a></h6>
                                        <div class="price">
                                            <small class="amount off">$68.99</small>
                                            <span class="amount text-primary">$59.99</span>
                                        </div>
                                        <span class="product-badge bottom left text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div><!-- end caption -->
                                </div><!-- end thumbnail -->
                            </div><!-- end item -->
                        </div><!-- end owl carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
        
        </div>
        <!-- end section -->
<?php
include 'footer.php';
?>

