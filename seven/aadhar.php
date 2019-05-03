<?php

include 'header.php';

?>


        <!-- start section -->
        <div class="section white-backgorund">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <h2 class="title">Market & Earn</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="spacer-5"><hr class="spacer-10 no-border">
                        <div class="row">
                        	
                        <h5 class="subtitle">Update Personal Details to Market</h5>
                                <form id="aadharForm" method="post" action="#">
                                    
                                    <div class="form-group" style="width: 60%;">
                                        <label for="aadhar" class="adhar_head">Your_Aadhar_Number<span class="required">*</span></label>
                                        <input type="text" class="form-control input-md enternum" id="aadhar" name="aadhar" placeholder="12 digit Aadhar number">
                                    </div><!-- end form-group -->
                                    <div class='form-group scanned_aadhar'>
                                        <figure class="user-avatar medium">
                                            <img class="u_p_p_i_4" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                            <span  data-url="javascript:;" class="u_p_p_4 button cat_pic_4 mid-short dark-light ">Upload Scanned Aadhar ID</span>
                                            <input type="hidden" id="u_p_p_im_4">
                                        </figure>
                                    </div>
                                    <div class="form-group adhar_terms" style="width: 50%;">
                                        
                                        <input type="checkbox" id="aadharCB" name="aadharCB" required>
                                        <label for="tand">I accept the <a href="#"><i>Terms and Conditions</i></a>.</label>
                                        <p id=demo>-</p>
                                    </div><!-- end form-group -->
                                    <div class="form-group sub_align">
                                        <!-- <a href="javascript:void(0);" class="btn btn-default round btn-md"><i class="fa fa-lock mr-5"></i> Login</a> -->
                                        <input type="button" value="Submit" class="btn btn-default bt_edit" id="aadharbtn">
                                        <span id="adhar_err">-</span>
                                    </div><!-- end form-group -->
                                </form><!-- end form -->
                            
                        </div>    
                    </div>
                </div><!-- end row -->                
            </div><!-- end container -->
        </div>
        <!-- end section -->


<?php

include 'footer.php';

?>