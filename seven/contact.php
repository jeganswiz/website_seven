<?php

include 'header.php';

?>

        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-wrap" style="padding: 0px;">
                            <h2 class="title lines">Contact Us</h2>
                        </div>
                    </div><!-- end col -->    
                </div><!-- end row -->
                
                <div class="row">
                    <div class="col-md-8">
                        <form id="contactForm" method="post" action="#" name="contactForm">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" style="border: 1px solid grey;" id="name" class="form-control input-lg" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" style="border: 1px solid grey;" id="email" class="form-control input-lg" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Message</label>
                                <textarea id="message" style="border: 1px solid grey;" rows="6" class="form-control input-lg" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default round btn-lg" value="Submit">
                                <span id="con_err">-</span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4" >
                        <div class="col-md-12">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-phone text-info"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">Quick question?</h6>
                                <h5 class="text-info">Call - 123 456 789!</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->   
                    <div class="col-md-12">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-envelope-o text-success"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="thin">or send us e-mail</h6>
                                <h5 class="text-success">Info@domain.net</h5>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col --> 
                    </div>
                    
                </div><!-- end row -->
                
                <hr class="spacer-20 no-border">
                
                
                
            </div><!-- end container -->
        </section>
        <!-- end section -->

             
<?php

include 'footer.php';

?>