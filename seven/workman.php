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
                                <h2 class="title" style="margin-top: 0px;">My Account</h2>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="spacer-5"><hr class="spacer-20 no-border">
                        <div class="row" >
                            <div class="col-sm-3 text-left" >
                                <ul style="list-style-type: none;padding-left: 0px;">
                                    <li><a href="">Profile</a></li>
                                    <li><a href="">Upgrade Account</a></li>
                                    <li><a href="">Update Document</a></li>
                                    <li><a href="">Post Products/Services</a></li>
                                    <li><a href=""><strong>Workman/Equipment Details</strong></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-9 text-left" style="border-left: 1px solid rgba(0, 0, 0, 0.1);" >
                                <h5 class="title">Post Workman / Equipment Details</h5>
                                <br>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#workTab" aria-controls="workTab" role="workTab" data-toggle="tab">Workman Details</a></li>
                                    <li role="presentation"><a href="#equipmentTab" aria-controls="equipment" role="equipment" data-toggle="tab">Equipment Details</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="workTab">
                                    <!-- start of Workman -->
                                    <div class="table-responsive">    
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label ="firstname">Workman name</label>
                                                        <input id="workman_name" type="text" placeholder="Full Name" name="firstname" class="form-control input-sm required">
                                                    </div>
                                                </td>

                                                <td>
                                                    <figure class="user-avatar medium">
                                                    <img class='weImg' alt="avatar" src='img/avatar.png' style='height:65px;width:65px' >
                                                    <br>
                                                    <span id='we_pic' class="button mid-short dark-light" >Upload Photo</span>
                                                    <input type='hidden' id='weImgTxt'>
                                                 </figure>
                                                </td>

                                                <td>
                                                    <figure class="user-avatar medium">
                                                    <img class='weImg_1' alt="avatar" src='img/avatar.png' style='height:65px;width:65px' >
                                                    <br>
                                                    <span id='we_pic_1'  class="button mid-short dark-light" >Upload Aadhar</span>
                                                    <input type='hidden' id='weImg_1_Txt'>
                                                    
                                                    </figure>
                                                </td>

                                                <td>
                                                    <figure class="user-avatar medium">
                                                    <img class='weImg_2' alt="avatar" src='img/avatar.png' style='height:65px;width:65px' >
                                                    <br>
                                                    <span id='we_pic_2'  class="button mid-short dark-light" >Upload Address Proof</span>
                                                    <input type='hidden' id='weImg_2_Txt'>
                                                    
                                                    </figure>
                                                </td>
                                                <td>
                                                    <a id='addWorkMan'  class="btn btn-default round btn-sm"><i class="fa fa-plus mr-5"></i> Add Workman</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!-- end table -->

                                    <!-- start of workman list -->
                                    <hr>
                                        <div class=''>
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Workman image</th>
                                                    <th>Workman Name</th>
                                                    <th>Aadhar</th>
                                                    <th>License</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><img src='img/avatar.png' alt="" style='height:65px;width:65px'></td>
                                                    <td>XXXXXXX</td>
                                                    <td><img src='img/avatar.png' alt="" style='height:65px;width:65px'></td>
                                                    <td><img src='img/avatar.png' alt="" style='height:65px;width:65px'></td>
                                                    <td>
                                                    <input type='hidden' id='#' value='#'>
                                                    <input type='hidden' id='#' value='#'>
                                                    <input type='hidden' id='#' value='#'>
                                                    <a href="javascript:void(0);" class="btn btn-warning round btn-xs edit_workman" id='{{$dat->id}}' data-toggle="modal" data-target="#myModal">Edit</a>
                                                    <a href="deleteWorkMan/{{$dat->id}}" class="btn btn-danger round btn-xs">Delete</a>
                                                    </td>
                                                </tr>
                <!-- @endforeach -->
                                                </tbody>
                                            </table>
                                        </div>
                                    <!-- end of workman list -->

                                        </div>
                                    <!-- end of workman -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="equipmentTab">
                                            <div class="table-responsive">    
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label ="firstname">Equipment name</label>
                                                                <input id="equipment_name" type="text" placeholder="Equipment Name" name="name" class="form-control input-sm required">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <figure class="user-avatar medium">
                                                            <img class='weImg' alt="avatar" src='img/avatar.png' style='height:65px;width:65px' >
                                                            <br>
                                                            <span id='we_pic' class="button mid-short dark-light" >Upload Image</span>
                                                            <input type='hidden' id='weImgTxt'>
                                                            </figure>
                                                        </td>

                                                        <td>
                                                            <figure class="user-avatar medium">
                                                            <img class='weImg_1' alt="avatar" src='img/avatar.png' style='height:65px;width:65px' >
                                                            <br>
                                                            <span id='we_pic_1' class="button mid-short dark-light" >Upload Permit</span>
                                                            <input type='hidden' id='weImg_1_Txt'>
                                                            
                                                            </figure>
                                                        </td>
                                                        <td>
                                                            <figure class="user-avatar medium">
                                                            <img class='weImg_2' alt="avatar" src='img/avatar.png' style='height:65px;width:65px' >
                                                            <br>
                                                            <span id='we_pic_2' class="button mid-short dark-light" >Upload RC Book</span>
                                                            <input type='hidden' id='weImg_2_Txt'>
                                                            
                                                            </figure>
                                                        </td>
                                                        <td>
                                                            <a id='addEquipment' href="javascript:void(0)" class="btn btn-default round btn-sm"><i class="fa fa-plus mr-5"></i> Add Equipment</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table><!-- end table -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>         

<?php

include 'footer.php';

?>