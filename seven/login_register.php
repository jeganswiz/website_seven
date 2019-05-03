<?php

include 'header.php';

?>

        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <h2 class="title">Authentication</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        <hr class="spacer-5">
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <h5 class="subtitle">Create an account</h5>
                                <form id="registerForm" method="post" action="#" name="registerForm">
                                    <div class="form-group">
                                        <label for="registeusername">Username <span class="required">*</span></label>
                                        <input type="text" class="form-control input-md" id="registername" placeholder="Enter Your Name" name="registername" recquired/>
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label for="registerEmail">Email address <span class="required">*</span></label>
                                        <input type="email" class="form-control input-md" id="registerEmail" placeholder="Enter Your Email Address" name="registerEmail" recquired/>
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label for="registerPhone">Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control input-md" id="registerPhone" placeholder="Enter Your Mobile Number" name="registerPhone" recquired/>
                                    </div><!-- end form-group -->
                                     <div class="form-group">
                                        <label for="registerPassword">Password <span class="required">*</span></label>
                                        <input type="password" class="form-control input-md" id="registerPassword" placeholder="Enter Password" name="registerPassword" recquired/>
                                        <input type="checkbox" class="pass_show" id="showhide"> Show Password
                                    </div><!-- end form-group -->
                                    
                                    <div class="form-group"> 
                                        <label for="registerRC">Referal code</label>
                                        <input type="password" class="form-control input-md" id="registerRC" placeholder="Enter Referal Code (Optional)" name="registerRC" > 
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        
                                        <input type="checkbox" id="tandc" name="tandc">
                                        <label for="tandc">I accept the <a href=""><i>Terms and Conditions</i></a>.</label>
                                        <p id="demo"></p>
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <!-- <a href="javascript:void(0);" class="btn btn-default round btn-md"><i class="fa fa-user mr-5"></i> Register</a> -->
                                        <!-- Trigger the modal with a button -->
                                        <input type="submit"  id="register" value="Register" class="btn btn-default round btn-md" >
                                            <P id='network_err'>-</p>
                                        <!-- data-toggle="modal" data-target="#myModal" -->
                                                       
                                    </div><!-- end form-group -->
                                </form><!-- end form -->

                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title modal-hea">OTP Verification</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="registerOTP" class="modal-labe">Enter OTP  Which you Received<span class="required">*</span></label>
                                                                <input type="text" class="form-control input-md" id="registerOTP" placeholder="Enter OTP" name="registerOTP">
                                                                <p id="otperr">-</p>
                                                                <button type="button" id="submitOTP" class="btn btn-default modal-but">Submit</button>
                                                                <button type="button" class="btn btn-default modal-butt">Resend OTP</button>
                                                            </div><!-- end form-group -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        </div>
                                                        <!--modal end here-->

                            </div><!-- end col -->
                            <div class="col-sm-6">
                                <h5 class="subtitle">Login</h5>
                                <form id="loginForm" method="post" action="">
                                    <div class="form-group">
                                        <label for="loginEmail">Phone Number <span class="required">*</span></label>
                                        <input type="text" class="form-control input-md" id="loginphone1" name="loginphone1" placeholder="Enter your phone number">
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label for="loginPassword">Password <span class="required">*</span></label>
                                        <input type="password" class="form-control input-md" id="loginPassword"  name="loginPassword" placeholder="Password">
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <div class="checkbox-input mb-10">
                                            <input id="remember" class="styled" type="checkbox">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div><!-- end checkbox-input -->
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <label><a href="forget-password.php">Forgot Password</a></label>
                                    </div><!-- end form-group -->
                                    <div class="form-group">
                                        <!-- <a href="javascript:void(0);" class="btn btn-default round btn-md"><i class="fa fa-lock mr-5"></i> Login</a> -->
                                        <input type="submit" value="Login" class="btn btn-default round btn-md" id="login">
                                        <span id="login_err">-</span>
                                    </div><!-- end form-group -->
                                </form><!-- end form -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->                
            </div><!-- end container -->
        </section>
        <!-- end section -->

<!--Post Registration form information through jquery starts here-->


<?php

include 'footer.php';

?>