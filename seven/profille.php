<?php
include 'header.php';
?>
<div class="section white-backgorund">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <h2 class="title" style="margin-top: 0px;">My Account</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="spacer-5"><hr class="spacer-20 no-border">
                        <div class="row" >
                            <div class="col-sm-2 text-left" >
                                <ul style="list-style-type: none;padding-left: 0px;">
                                    <li><a href=""><strong>Profile</strong></a></li>
                                    <li><a href="">Upgrade Account</a></li>
                                    <li><a href="">Update Document</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 text-left" style="border-left: 1px solid rgba(0, 0, 0, 0.1);" >
                                <h4 style="margin-top: 10px;">Profile</h4>
                                <form id="profileForm" method="post" action="#">
                                    <div class="col-sm-12 form-group">
                                        <img src="img/profile.png" alt="avathar"  width="80px" height="80px">
                                        <input type="file" name="profilePhoto" style="margin-top: 5px;">
                                    </div>
                                    
                                    <div class="col-sm-6 form-group">
                                        <label for="fName">First Name</label>
                                        <input type="text" class="form-control input-md" id="fName" placeholder="First Name" name="fName">
                                    </div><!-- end form-group -->
                                    <div class="col-sm-6 form-group">
                                        <label for="lName">Last Name</label>
                                        <input type="text" class="form-control input-md" id="lName" placeholder="Last Name" name="lName">
                                    </div><!-- end form-group -->
                                    <div class="col-sm-6 form-group">
                                        <label for="email">E-Mail <span class="required">*</span></label>
                                        <input type="email" class="form-control input-md" id="email" placeholder="E-Mail Address" name="email">
                                    </div><!-- end form-group -->
                                    <div class="col-sm-6 form-group">
                                        <label for="phone">Mobile</label>
                                        <input type="text" class="form-control input-md" id="phone" placeholder="Mobile Number" name="phone">
                                    </div><!-- end form-group -->
                                    <div class="col-sm-6" >
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control input-md" id="address" placeholder="Address" name="address">
                                        </div>
                                    </div><!-- end form-group -->
                                    <div class="col-sm-6" >
                                        
                                    </div><!-- end form-group -->
                                    <div class="col-sm-12 form-group" >
                                        
                                        <input type="checkbox" id="newsLetter" name="newsLetter" checked>
                                        <label for="newsLetter">Sign up for our Latest News Letters</label>
                                    </div><!-- end form-group -->
                                     <div class="col-sm-12 form-group">
                                       <input type="button" id="profileBtn" class="btn btn-default round btn-md" value="Save">
                                       <span id="pro_err">-</span>
                                    </div><!-- end form-group -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
<?php
include 'footer.php';
?>