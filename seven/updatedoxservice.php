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
                                <h2 class="title" style="margin-top: 10px;">My Account</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="spacer-5"><hr class="spacer-20 no-border">
                        <div class="row" >
                            <div class="col-sm-2 text-left" >
                                <ul style="list-style-type: none;padding-left: 0px;">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="upgradeAccount.html">Upgrade Account</a></li>
                                    <li><a href=""><strong>Update Document</strong></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 text-left" style="border-left: 1px solid rgba(0, 0, 0, 0.1);" >
                                <h4 style="margin-top: 0px;">Update Document Services</h4>
                                <label>Post Service Details</label>
                                <ul>
                                <li style="list-style:none;">
                                    <input type="radio" name="p_s_type" class="form-check-input" value="1" id="p_s_typeIndiv">
                                    Indivdual
                                    <input type="radio" name="p_s_type" value="2" class="form-check-input" checked="" id="p_s_typeCompany">
                                    Company
                                    
                                </li>
                                </ul>
                                <div class="row" style="text-align: center;">
                                <div id="bussinessTab" class="col-sm-4" style="border: 1px solid rgba(0, 0, 0, 0.1);height: 200px;width:300px ;margin: 10px 5px;padding: 0px;" >
                                    <h5 style="background-color: rgba(0, 0, 0, 0.1); margin: 0px;padding: 10px;">Bussiness Details</h5>
                                    <p>You need to provide your GSTIN , TAN and other bussiness information</p>
                                    <a class="btn btn-default round btn-md" data-toggle="modal" data-target="#bussinessPopup">Add Details</a>
                                </div>
                                <div id="individualTab" class="col-sm-4 hidden" style="border: 1px solid rgba(0, 0, 0, 0.1);height: 200px;width:300px ;margin: 10px 5px;padding: 0px;" >
                                    <h5 style="background-color: rgba(0, 0, 0, 0.1); margin: 0px;padding: 10px;">Individual Details</h5>
                                    <p>You need to provide your details to post services.</p>
                                    <a class="btn btn-default round btn-md" data-toggle="modal" data-target="#indivPopup">Add Details</a>
                                </div>
                                <div class="col-sm-4" style="border: 1px solid rgba(0, 0, 0, 0.1);height: 200px;width:300px ;margin: 10px 5px;padding: 0px;">
                                    <h5 style="background-color: rgba(0, 0, 0, 0.1);margin: 0px; padding: 10px;">Bank Details</h5>
                                    <p>we need your bank account details and KYC documents to verify your bank account</p>
                                    <a class="btn btn-default round btn-md" data-toggle="modal" data-target="#bankPopup">Add Details</a>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

<?php 
include 'footer.php';
?>