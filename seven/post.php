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
                                    <li><a href=""><strong>Post Products/Services</strong></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-9 text-left" style="border-left: 1px solid rgba(0, 0, 0, 0.1);" >
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#productTab" aria-controls="productTab" role="productTab" data-toggle="tab">Products</a></li>
                                    <li role="presentation"><a href="#serviceTab" aria-controls="serviceTab" role="serviceTab" data-toggle="tab">Services</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="productTab">
                                        <form id="postProductForm" method="get" action="">
                                            <div class='form-group hidden'>
                                                <label for="exampleInputEmail1">Product Type</label>
                                                <ul>
                                                    <li style="list-style:none;">
                                                        <input type="radio" name="p_p_type" value="1" class='form-check-input' checked id='type' /> Perishable
                                                        <input type="radio" name="p_p_type" class='form-check-input' value="2" id="type" /> Non Perishable
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_cat_type">Category Type</label>
                                                <select class='form-control' id='p_cat_type' name="p_cat_type">
                                                    <option selected disabled value="">Choose Category</option>
                                                    <option value='1'>#<!-- {{$dat['name']}} --></option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="p_sb_type">Sub Category Type</label>
                                                <select class='form-control' id='p_sb_type' name="p_sb_type">
                                                <option selected disabled value=""> Choose Sub Category</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="p_p_name">Product Name :</label>
                                                <input type="text" class="form-control" id="p_p_name" placeholder="Product Name" name="p_p_name">
                                            </div>

                                            <div class="form-group">
                                                <div class='row'>
                                                  <div class='col-md-3'>
                                                    <label for="p_p_length">Product Length :</label>
                                                    <input type="text" class="form-control" id="p_p_length" placeholder="Product Length" name="p_p_length">
                                                  </div>
                                                  <div class='col-md-3'>
                                                    <label for="p_p_breadth">Product Breadth :</label>
                                                    <input type="text" class="form-control" id="p_p_breadth" placeholder="Product Breadth" name="p_p_breadth">
                                                  </div>
                                                  <div class='col-md-3'>
                                                    <label for="p_p_height">Product Height :</label>
                                                    <input type="text" class="form-control" id="p_p_height" placeholder="Product Height" name="p_p_height">
                                                  </div>
                                                  <div class='col-md-3'>
                                                    <label for="p_p_weight">Product Weight :</label>
                                                    <input type="text" class="form-control" id="p_p_weight" placeholder="Product Weight" name="p_p_weight">
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class='row'>
                                                    <div class='col-md-3'>
                                                        <label for="p_p_price">Price per unit :</label>
                                                        <input type="email" class="form-control" id="p_p_price" placeholder="Price per unit" name="p_p_price">
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <label for="p_p_unit_type">Unit Type :</label>
                                                        <select class='form-control' id='p_p_unit_type' name="
                                                        p_p_unit_type">
                                                        <option value='0'>kilogram</option><option value='1'>numbers</option><option value='2'>rolls</option><option value='3'>pieces</option><option value='4'>tons</option><option value='5'>units</option><option value='6'>20’ container</option><option value='7'>40’ container</option><option value='8'>bag</option><option value='9'>barrel</option><option value='10'>bottle</option><option value='11'>bushel</option><option value='12'>carton</option><option value='13'>dozen</option><option value='14'>foot</option><option value='15'>gallon</option><option value='16'>gram</option><option value='17'>hectare</option><option value='18'>kilometer</option><option value='19'>meter</option><option value='20'>kilowatt</option><option value='21'>litre</option><option value='22'>metric tons</option><option value='23'>long ton</option><option value='24'>ounce</option><option value='25'>packets</option><option value='26'>packs</option><option value='27'>pair</option><option value='28'>ream</option><option value='29'>pound</option><option value='30'>set</option><option value='31'>sheet</option><option value='32'>short ton</option><option value='33'>sq. ft.</option><option value='34'>sq. metre</option><option value='35'>watt</option><option value='36'>Others</option>
                                                        </select>
                                                    </div>
                                                    <div class='col-md-3' id='othersTab'>
                                                        <label for="email">Unit ( Others ) :</label>
                                                        <input type="email" class="form-control" id="p_p_others" placeholder="Others" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <label for="email">Select GST Applicable :</label>
                                                        <select class='form-control' id='p_p_gst'>
                                                        <option value='1'>5 % </option>
                                                        <option value='2'>12 % </option>
                                                        <option value='3'>18 % </option>
                                                        <option value='4'>28 % </option>
                                                        </select>
                                                        <a href ="https://www.indiafilings.com/find-gst-rate" target="_blank" style='color:blue'>Find GST of your product here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <div class="col-md-6">
                                                            <label for="p_p_stock_available">Stock Available :</label>
                                                            <input type="text" class="form-control" id="p_p_stock_available" placeholder="Stock Available" name="p_p_stock_available">
                                                        </div>
                                                        <div class="col-md-6" style="margin-top:32px;">
                                                            <label id="unitsSA"></label>
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <label for="assorted" class='pull-left'>Add Color :</label>
                                                    </div>
                                                    <div class="checkbox col-md-6">
                                                        <label><input type="checkbox" id='assorted' class='checkbox-inline un_col' name="color[]" value="0">Assorted Color</label>
                                                    </div>
                                                    <div class="checkbox col-md-6">
                                                        <label><input type="checkbox"  class='checkbox-inline oth_col' name="color[]" value=""></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label for="p_p_variety">Add Variety :</label>
                                                    <input type="text" class="form-control" id="p_p_variety" placeholder="Add Variety" name="p_p_variety">
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label for="p_p_material_type">Material Type :</label>
                                                    <input type="text" class="form-control" id="p_p_material_type" placeholder="Material Type" name="p_p_material_type">
                                                </div>
                                            </div>
                                            <div class='form-group'>
                                                <label for="p_p_description">Description :</label>
                                                <textarea rows="#" cols="#" class='form-control' placeholder='Description' id='p_p_description' name="p_p_description"></textarea>
                                            </div>
                                            <div class="form-group hidden">
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <label for="p_p_moq">Minimum Order Quantity (MOQ) : - <span class='unitChosen'></span></label>
                                                        <input type="text" class="form-control" id="p_p_moq" placeholder="Minimum Order Quantity (MOQ)" name="p_p_moq">
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <label for="p_p_returns">Returning Quantity : - <span class='unitChosen'></span></label>
                                                        <input type="text" class="form-control" id="p_p_returns" placeholder="Returning Quantity" name="p_p_returns">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class='form-group'>
                                                <label for="warranty_data">Warranty ? :</label>
                                                <input type="radio" name="warranty_data" checked id="warranty_yes" value="0" class="radio-input radio-primary warranty_data">Yes
                                                <input type="radio" name="warranty_data" id="warranty_no" value="1" class="radio-input radio-primary warranty_data">No
                                                <figure class="user-avatar medium war_pic">
                                                                <img class="warantee" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                                  <span id="warantee_pic" data-url="javascript:;" class="button mid-short dark-light ">Upload Image</span>
                                                                  <span id="warantee_status"></span>
                                                                  <input type="hidden" id="warantee">
                                                            </figure>
                                            </div>
                                            <div class='form-group'>
                                                <label for="guarantee_data">Guarantee ? :</label>
                                                <input type="radio" name="guarantee_data" checked id="guarantee_yes" value="0" class="radio-input radio-primary guarantee_data">Yes
                                                <input type="radio" name="guarantee_data" id="guarantee_no" value="1" class="radio-input radio-primary guarantee_data">No
                                                
                                                <figure class="user-avatar medium gua_pic">
                                                    <img class="gurantee" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                    <span id="gurantee_pic" class="button mid-short dark-light ">Upload Image</span>
                                                    <span id="gurantee_status"></span>
                                                    <input type="hidden" id="gurantee">
                                                </figure>
                                            
                                            </div>
                                            <hr>
                                            <div class='form-group' id='uploadForms'>
                                                <label for="email">Product Image:</label>
                                                <figure class="user-avatar medium">
                                                    <img class="u_p_p_i" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                    <span  data-url="javascript:;" class="u_p_p button cat_pic mid-short dark-light ">Upload Product Image 1</span>
                                                    <input type="hidden" id="u_p_p_im">
                                                </figure>
                                            </div>
                                            <div class='form-group' id='uploadForms'>
                                                <figure class="user-avatar medium">
                                                    <img class="u_p_p_i_1" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                    <span  data-url="javascript:;" class="u_p_p_1 button cat_pic_1 mid-short dark-light ">Upload Product Image 2</span>
                                                    <input type="hidden" id="u_p_p_im_1">
                                                </figure>
                                            </div>
                                            <div class='form-group' id='uploadForms'>
                                                <figure class="user-avatar medium">
                                                    <img class="u_p_p_i_2" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                    <span  data-url="javascript:;" class="u_p_p_2 button cat_pic_2 mid-short dark-light ">Upload Product Image 3</span>
                                                    <input type="hidden" id="u_p_p_im_2">
                                                </figure>
                                            </div>
                                            <div class='form-group' id='uploadForms'>
                                                <figure class="user-avatar medium">
                                                    <img class="u_p_p_i_3" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                    <span  data-url="javascript:;" class="u_p_p_3 button cat_pic_3 mid-short dark-light ">Upload Product Image 4</span>
                                                    <input type="hidden" id="u_p_p_im_3">
                                                </figure>
                                            </div>
                                            <div class='form-group' id='uploadForms'>
                                                <figure class="user-avatar medium">
                                                    <img class="u_p_p_i_4" alt="avatar" src="img/avatar.png" style="height:65px;width:65px">
                                                    <span  data-url="javascript:;" class="u_p_p_4 button cat_pic_4 mid-short dark-light ">Upload Product Image 5</span>
                                                    <input type="hidden" id="u_p_p_im_4">
                                                </figure>
                                            </div>
                                            <hr>
                                            <div class='form-group'>
                                                <div class="checkbox-input checkbox-primary">
                                                    <input id="checkbox2" class="styled" type="checkbox" checked="">
                                                    <label for="checkbox2">
                                                        I there by agree to the <a href=""><i>TERMS & CONDITIONS</i></a> of 7ATARA
                                                        </label>
                                                </div>
                                            </div>
                                            
                                                <input type="submit" class="btn btn-default btn-lg pos_pro" value="Post Product">
                                            
                                        </form>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="serviceTab">
                                        <div class='formService'>
                                            <form id="postServiceForm" method="get" action="#">

                                            <div class="form-group">
                                                <label for="s_cat_type">Category Type</label>
                                                <select class='form-control' id='s_cat_type' name="s_cat_type">
                                                    <option selected disabled value="">Choose Category</option>
                                                    <option value='1'><!-- {{$dat['name']}} --></option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="s_sb_type">Sub Category Type</label>
                                                <select class='form-control' id='s_sb_type' name="s_sb_type">
                                                <option selected disabled value=""> Choose Sub Category</option>
                                                </select>
                                            </div>
                                                <div class="form-group">
                                                    <label for="s_name">Name :</label>
                                                    <input type="text" class="form-control" id="s_name" placeholder="Name" name="s_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="s_desc">Description :</label>
                                                    <textarea rows="5" class="form-control" cols="10" id='s_desc' placeholder='Description' name="s_desc"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Region of Service:</label>
                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <label for="s_country">Country :</label>
                                                            <select class="form-control" id="c_country" name="c_country">
                                                            <option value="1">India</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="s_state">State :</label>
                                                            <select class="form-control" id="c_state" name="c_state">
                                                            <option value="1">Tamil Nadu</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="s_city">City :</label>
                                                            <select class="form-control" id="c_city" name="c_city">
                                                            <option value="1">Chennai</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class='row'>
                                                        <div class='col-md-4'>
                                                            <label for="email">Price per Hour :</label>
                                                            <input type="email" class="form-control" id="s_hour" placeholder="/hour" name="email">
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for="email">Price per Day:</label>
                                                            <input type="email" class="form-control" id="s_day" placeholder="/day" name="email">
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for="email">Price per Week:</label>
                                                            <input type="email" class="form-control" id="s_week" placeholder="/week" name="email">
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for="email">Price per Month:</label>
                                                            <input type="email" class="form-control" id="s_month" placeholder="/month" name="email">
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <label for="email">Price per Year:</label>
                                                            <input type="email" class="form-control" id="s_year" placeholder="/year" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='form-group'>
                                                    <div class="checkbox-input checkbox-primary">
                                                        <input id="checkbox2" class="styled" type="checkbox" checked="">
                                                        <label for="checkbox2">
                                                        I there by agree to the <a href=""><i>TERMS & CONDITIONS</i></a> of 7ATARA
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                    <input type="submit" class="btn btn-default btn-lg pos_pro" value="Post Service Detail">
                                                
                                            </form>
                                            </div>
                                        </div>
                                     <!-- end of service -->
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