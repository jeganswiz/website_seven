$(document).ready(function(){

    //sticky nav
    $(".navbar").sticky({topSpacing:0});

    // yamm menu
    $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation();
    })

    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
    });

    //tootltip
    $('[data-toggle="tooltip"]').tooltip();

    //Popover
    $('[data-toggle="popover"]').popover();

    //owl carousel 5 Columns
    $(".owl-carousel.column-5").owlCarousel({
        nav : true, // Show next and prev buttons
        navText: false,
        dots: false,
        items: 5,
        margin: 15,
        responsiveClass: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //owl carousel 4 Columns
    $(".owl-carousel.column-4").owlCarousel({
        nav : true, // Show next and prev buttons
        navText: false,
        dots: false,
        items: 4,
        margin: 15,
        responsiveClass: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    //owl carousel 3 Columns
    $(".owl-carousel.column-3").owlCarousel({
        nav : true, // Show next and prev buttons
        navText: false,
        dots: false,
        items: 3,
        margin: 15,
        responsiveClass: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    //owl slider
    $('.slider').owlCarousel({
        animateOut: 'zoomOut',
        nav : true, // Show next and prev buttons
        navText: false,
        dots: true,
        items: 1,
        margin: 0,
        smartSpeed: 450
    });

    //owl product-showcase
    $('.product-showcase').owlCarousel({
        animateOut: 'lightSpeedOut',
        nav : true, // Show next and prev buttons
        navText: false,
        dots: true,
        items: 1,
        margin: 0,
        smartSpeed: 450
    });

    //owl next prev icons
    $(".owl-carousel .owl-next").addClass("fa fa-angle-right");
    $(".owl-carousel .owl-prev").addClass("fa fa-angle-left");

    //CountDown
    $('.countdown').downCount({
        date: '10/21/2017 12:00:00',
        offset: +1
    }, function () {
        //alert('WOOT WOOT, done!');
    });

    //CountDown
    $('.countdown-product').downCount({
        date: '10/21/2017 12:00:00',
        offset: +1
    }, function () {
        //alert('WOOT WOOT, done!');
    });

    // Range Slider
    var rangeSlider  = document.querySelector('.ui-range-slider');
    if(typeof rangeSlider !== 'undefined' && rangeSlider !== null) {
        var dataStartMin = parseInt(rangeSlider.parentNode.getAttribute( 'data-start-min' ), 10),
            dataStartMax = parseInt(rangeSlider.parentNode.getAttribute( 'data-start-max' ), 10),
            dataMin = parseInt(rangeSlider.parentNode.getAttribute( 'data-min' ), 10),
            dataMax = parseInt(rangeSlider.parentNode.getAttribute( 'data-max' ), 10),
            dataStep = parseInt(rangeSlider.parentNode.getAttribute( 'data-step' ), 10);
        var valueMin = document.querySelector('.ui-range-value-min span'),
            valueMax = document.querySelector('.ui-range-value-max span'),
            valueMinInput = document.querySelector('.ui-range-value-min input'),
            valueMaxInput = document.querySelector('.ui-range-value-max input');
        noUiSlider.create(rangeSlider, {
            start: [ dataStartMin, dataStartMax ],
            connect: true,
            step: dataStep,
            range: {
                'min': dataMin,
                'max': dataMax
            }
        });
        rangeSlider.noUiSlider.on('update', function(values, handle) {
            var value = values[handle];
            if ( handle ) {
                valueMax.innerHTML  = Math.round(value);
                valueMaxInput.value = Math.round(value);
            } else {
                valueMin.innerHTML  = Math.round(value);
                valueMinInput.value = Math.round(value);
            }
        });
    }

    //back to top
    $('body').append('<a href="javascript:void(0);" id="back-to-top"><i class="fa fa-angle-up"></i></a>');

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 200) {
            $('#back-to-top').fadeIn(200);
        } else {
            $('#back-to-top').fadeOut(200);
        }
    });
    $('#back-to-top').click(function() {
        $('body,html').animate({
            scrollTop : 0
        }, 500);
    });

    //wow for animate.css
    new WOW().init();


    //toggle theme settings


});
$(".goods").on("click", function(){
    // $(".under-goods").addClass("active");
    // $(".under-services").addClass("inactive");
    $("#u-goods").css("display", "block");
    $("#u-services").css("display", "none");
    // $(".services").css("border","none");
    // $(".goods").css("border","1px solid #1000ea");
    $(".goods").css("background-color","white");
    $(".goods").css("color","#0841b7");
    $(".services").css("background-color","#0841b7");
    $(".services").css("color","white");
});
$(".services").on("click", function(){

    // $(".under-goods").addClass("inactive");
    // $(".under-services").addClass("active");
    $("#u-goods").css("display", "none");
    $("#u-services").css("display", "block");
    // $(".goods").css("border","none");
    // $(".services").css("border","1px solid #1000ea");
    $(".services").css("background-color","white");
    $(".services").css("color","#0841b7");
    $(".goods").css("background-color","#0841b7");
    $(".goods").css("color","white");
});
function hide() {
    $(".container-fluid").css("display", "none");
}
function closeNext() {
    $(".nextButton.nB").css("display","none");
}
function openNext() {
    $(".nextButton.nB").css("display","block");
}
function hideButton() {
    $(".nextButton.nB").css("display","none");
    $("#bi").addClass("active");
    $("#sc").removeClass("active");
    $( "#billing-info:target" );

}
function hideButton1() {
    $("#pay").addClass("active");
    $("#bi").removeClass("active");
    $( "#payment:target" );
}
// Validation
$.validator.setDefaults({
        submitHandler: function() {
            alert("submitted!");
        }
    });

$().ready(function() {
    $("#postServiceForm").validate({
        rules: {
            s_name: {
                required: true
            },
            s_desc: {
                required: true
            },
            s_cat_type: {
                required: true
            },
            s_sb_type:{
                required: true   
            }
        },
        messages: {
            s_name: {
                required: "This field should not be empty"
            },
            s_desc: {
                required: "This field should not be empty"
            },
            s_cat_type: {
                required: "This field should not be empty"
            },
            s_sb_type:{
                required: "This field should not be empty"
            }
        }
    });
    $("#postProductForm").validate({
        rules: {
            p_cat_type: {
                required: true
            },
            p_sb_type: {
                required: true
            },
            p_p_name: {
                required: true
            },
            p_p_length: {
                required: true
            },
            p_p_breadth: {
                required: true
            },
            p_p_height: {
                required: true
            },
            p_p_weight: {
                required: true
            },
            p_p_price: {
                required: true
            },
            p_p_unit_type: {
                required: true
            },
            p_p_gst: {
                required: true
            },
            p_p_stock_available: {
                required: true
            },
            p_p_description: {
                required: true
            }
        },
        messages: {
            p_cat_type: {
                required: "This field should not be empty"
            },
            p_sub_type: {
                required: "This field should not be empty"
            },
            p_p_name: {
                required: "This field should not be empty"
            },
            p_p_length: {
                required: "This field should not be empty"
            },
            p_p_breadth: {
                required: "This field should not be empty"
            },
            p_p_height: {
                required: "This field should not be empty"
            },
            p_p_weight: {
                required: "This field should not be empty"
            },
            p_p_price: {
                required: "This field should not be empty"
            },
            p_p_unit_type: {
                required: "This field should not be empty"
            },
            p_p_gst: {
                required: "This field should not be empty"
            },
            p_p_stock_available: {
                required: "This field should not be empty"
            },
            p_p_description: {
                required: "This field should not be empty"
            }
        }
    });
    $("#individualForm").validate({
        rules: {
            i_type: {
                required: true
            },
            i_stype: {
                required: true
            },
            i_name: {
                required: true
            },
            i_address: {
                required: true,
            },
            i_service_city: {
                required: true,
            }
        },
        messages: {
            i_type: {
                required: "This field should not be empty"
            },
            i_stype: {
                required: "This field should not be empty"
            },
            i_name: {
                required: "This field should not be empty"
            },
            i_address: {
                required: "This field should not be empty"
            },
            i_service_city: {
                required: "This field should not be empty"
            }
        }
    });
    $("#companyForm").validate({
        rules: {
            c_type: {
                required: true
            },
            c_name: {
                required: true
            },
            c_gstin: {
                required: true,
                minlength: 15,
                maxlength:15
            },
            c_country: {
                required: true
            },
            c_state: {
                required: true
            },
            c_city: {
                required: true
            },
            c_serviceregion: {
                required: true
            },
            c_baddress: {
                required: true
            },
            c_pan: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            c_tan: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            c_aadhar: {
                required: true,
                minlength: 12,
                maxlength:12
            }
        },
        messages: {
            c_type: {
                required:"This field should not be empty"
            },
            c_name: {
                required:"This field should not be empty"
            },
            c_gstin: {
                required:"This field should not be empty",
                minlength: "please enter a valid GSTIN Number",
                maxlength:"please enter a valid GSTIN Number"
            },
            c_country: {
                required:"This field should not be empty"
            },
            c_state: {
                required:"This field should not be empty"
            },
            c_city: {
                required:"This field should not be empty"
            },
            c_serviceregion: {
                required:"This field should not be empty"
            },
            c_baddress: {
                required:"This field should not be empty"
            },
            c_pan: {
                required:"This field should not be empty",
                minlength: "please enter a valid PAN Number",
                maxlength:"please enter a valid PAN Number"
            },
            c_tan: {
                required:"This field should not be empty",
                minlength: "please enter a valid TAN Number",
                maxlength:"please enter a valid TAN Number"
            },
            c_aadhar: {
                required:"This field should not be empty",
                minlength: "please enter a valid Aadhar Number",
                maxlength: "please enter a valid Aadhar Number"
            }
        }
    });
    $("#businessForm").validate({
        rules: {
            b_company: {
                required: true
            },
            
            b_gstin: {
                required: true,
                minlength: 15,
                maxlength:15
            },
            b_pan_no: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            b_tan_no: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            b_address: {
                required: true
            },
            b_aadhar: {
                required: true,
                minlength: 12,
                maxlength:12
            }
        },
        messages: {
            b_company: {
                required: "please provide your company name"
            },
            
            b_gstin: {
                required: "please provide your GSTIN Number",
                minlength: "please enter a valid GSTIN Number",
                maxlength: "please enter a valid GSTIN Number"
            },
            b_pan_no: {
                required: "please provide your PAN Number",
                minlength: "please enter a valid PAN Number",
                maxlength: "please enter a valid PAN Number"
            },
            b_tan_no: {
                required: "please provide your TAN Number",
                minlength: "please enter a valid TAN Number",
                maxlength: "please enter a valid TAN Number"
            },
            b_address: {
                required: "please provide your address"
            },
            b_aadhar: {
                required: "please provide your aadhar Number",
                minlength: "please enter a valid aadhar Number",
                maxlength: "please enter a valid aadhar Number"
            }
        }
    });
    $("#bankForm").validate({
        rules: {
            ac_name: {
                required: true
            },
            ac_no: {
                required: true
            },
            ac_no2: {
                required: true,
                equalTo: "#ac_no"
            },
            ac_b_name: {
                required: true
            },
            ac_ifsc: {
                required: true
            },
            ac_p_pan: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            ac_address: {
                required: true
            }
        },
        messages: {
            ac_name: {
                required: "please provide your bank account name"
            },
            ac_no: {
                required: "please provide your bank account number"
            },
            ac_no2: {
                required: "please provide your bank account number again",
                equalTo: "the number you provided does not match"
            },
            ac_b_name: {
                required: "please provide your bank name"
            },
            ac_ifsc: {
                required: "please provide your bank's ifsc"
            },
            ac_p_pan: {
                required: "please provide your PAN",
                minlength: "please provide a valid PAN",
                maxlength: "please provide a valid PAN"
            },
            ac_address: {
                required: "please provide your address"
            }
        }
    });
    $("#aadharForm").validate({
        rules: {
            aadhar: {
                required: true,
                minlength: 12,
                maxlength: 12,
                digits: true
            }
        },
        messages: {
            aadhar: {
                required: "please enter aadhar number to continue",
                minlength: "please enter a valid aadhar number",
                maxlength: "please enter a valid aadhar number",
                digits: "please enter a valid aadhar number"
            }
        }
    });
    $("#profileForm").validate({
        rules: {
            email: {
                required: true   
            },
            phone: {
                digits: true,
                minlength: 10,
                maxlength: 10
            }
        },
        messages: {
            email: {
                required: "please provide an e-mail address"
            },
            phone: {
                
                minlength: "please enter a valid mobile number",
                maxlength: "please enter a valid mobile number",
                digits: "please enter a valid mobile number"
            }
        }
    });
    $("#loginForm").validate({
        rules: {
            loginEmail: {
                required: true,
                email: true
            },
            loginPassword: {
                required: true
            }
        },
        messages: {
            loginEmail: {
                required: "Please enter a email",
                email: "please enter a valid email address"
            },
            loginPassword: {
                required: "Please enter the password"
            }
        }
    });
    // validate signup form on keyup and submit
    $("#registerForm").validate({
        rules: {
            registerEmail: {
                required: true,
                email: true
            },
            registerPhone: {
                required: true,
                minlength: 10,
                digits: true
            },
            registerPassword: {
                required: true,
                minlength: 6
            },
            registerRC: {
                minlength: 6
            }
        },
        messages: {
            registerEmail: {
                required : "Please enter an email address",
                email : "Please enter a valid email address"
            },
            registerPassword: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            registerPhone: {
                required: "Please provide a Mobile Number",
                minlength: "Please enter a valid Mobile Number",
                digits: "Please enter a valid Mobile Number"
            },
            registerRC: "Please enter a valid Referal Code"
            
        }
    });
});

$(function(){
  $('input[type="radio"]').click(function(){
    if ($(this).is(':checked'))
    {
      if ($(this).val() == 2 ){
        $("#bussinessTab").removeClass("hidden");
        $("#individualTab").addClass("hidden");
      }
      if ($(this).val() == 1){
        $("#bussinessTab").addClass("hidden");
        $("#individualTab").removeClass("hidden");
      }
    }
  });
});
// POST pAge Units near Stock Available
$('#p_p_unit_type').on('change', function() {
    var value = $("#p_p_unit_type option:selected").text();
    value = value + 's';
    $('#unitsSA').text(value);
    $('#unitsSA').css("text-transform","uppercase");
});



      
