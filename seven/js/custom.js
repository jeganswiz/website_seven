$(document).ready(function(){
  var baseUrl = 'http://18.225.6.121/api/v1/';
  var token = '';
  var phone = '';
  var session='';
  


  // Get token whenever the page is loaded

 
    $.get(baseUrl+'getToken', function(data, status){
      
        token = data._token;
        console.log('Server token is ', token);
    });

    // this is the common file, you will have all the jquery code here
    console.log('checking if it is loaded'); // cool, loaded now lets have register function
    // Register functionality

    
$('#registerForm').submit(function(e){
    e.preventDefault();
    var first_name = $('#registername').val();
    var email = $('#registerEmail').val();
    var phone = $('#registerPhone').val();
    var password = $('#registerPassword').val();
    var check1=$("input[type='checkbox']:checked");
    var RC = $('#registerRC').val(); // This is option &
    var error = '';
    $(".error").remove();

    if(check1.length < 1)
    {
      $('#demo').html("<span class='error'>Accept the terms and conditions..</span>")
      error= 'check1';
    }
 
    if (first_name.length < 1) {
      $('#registername').after('<span class="error">Please enter your Name</span>');
      error = 'first_name';
    }
    if (email.length < 1) {
      $('#registerEmail').after('<span class="error">Please enter your Email</span>');
      error = 'email';
    }else {
        var regEx = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          error = 'email';
          $('#registerEmail').after('<span class="error">Enter a valid email</span>');
        }
      }
    if (phone.length < 1) {
      error = 'Phone'; // It doesn't matter, what i am trying to do is to stop the form action if there is some error
      $('#registerPhone').after('<span class="error">Please enter your phone</span>');
    } 
    if (password.length < 8) {
      error = 'password';
      $('#registerPassword').after('<span class="error">Password must be at least 8 characters long</span>');
    }
    // if(RC.length < 1)
    // {
    //   error = 'password';
    //     $('#registerRC').after('<span class="err">Enter referal code if you have?</span>')
    // }
    if(error==''){
      // Do Api call
      // Good , we reached this place, now trigger the api
      console.log('Trigger api');
    $.post(baseUrl+"registerUser",
    {
      _token : token,
      phone: phone,
      password: password
    },
    function(data,status){
      if(data.success==0){
        console.log(data.error);
        $('#network_err').css("color","red");
        $('#network_err').html(data.error.phone[0]);// this is not network error
        // u should catch the error and display it to user
      }
      else {
        // Registration success, now opoen the popup model here ok nnna
        $('#network_err').css("color","green");
        $('#network_err').html(data.message);
        $('#myModal').modal('show');
        
      }
      
        console.log(data)
      // alert("Data: " + data + "\nStatus: " + status);
    });

      // After registration only otp will be send , so trigger model once registration is done
    }
    else {
      return false;
    } 
    
  });
  //otp integration starts here
  $("#submitOTP").click(function(){
  // OTP Process
    var url1='profille.php'
    var phone = $('#registerPhone').val();
    var otp = $("#registerOTP").val();
    console.log('OTP typed is ',otp);
    $('.error').remove();
    // i told to have post function 

    // get method is to get some data, post method is to send some data, follow that way, u won't forget

    $.post(baseUrl+"verifyUser",
    {
      _token:token,
      phone: phone,
      otp: otp
    },
    function(data,status){
      if(data.success==2){
        // print a message that the otp is wrong
        $('#otperr').css("color","red");
        $('#otperr').html(data.message);
        
      } else if (data.success==1){
        console.log('User verified');
        $(location).attr('href',url1);
        $('#otperr').css("color","green");
        $('#otperr').html(data.message);
        // Now you should say the user that the account is verified succesfully and take him to next steps. 
      }
        console.log(data)
    });
    // $.get(baseUrl+'getToken', function(data, status){
      
    //     token = data._token;
    //     console.log('Server token is ', token);
    // });
    // if(token.otp==otp)
    // {
    //   alert('you were a member');
    // }
    // else{
    //   alert('wrong');
    // }
});


  

  //login validation starts here

  $('#loginForm').submit(function(e) {
    e.preventDefault();
    
    var phone1 = $('#loginphone1').val(); 
    var password1 = $('#loginPassword').val();
    var error1 = '';
    var url='profille.php';
    $(".error").remove();
 
    
    if (phone1.length < 1) {
      $('#loginphone1').after('<span class="error">Please enter your Email</span>');
      error1='phone1';
      }
      
     
    if (password1.length < 8) {
      $('#loginPassword').after('<span class="error">Please enter your password</span>');
      error1='password1';
    }

    if(error1==''){
      // Do Api call
      // Good , we reached this place, now trigger the api
      console.log('Trigger api');
    $.post(baseUrl+"loginUser",
    {
      _token:token,
      phone : phone1,
      password: password1
    },
    function(data,status){
      if(data.success==2){
        console.log(data.error);
        $('#login_err').css("color","red");
        $('#login_err').html(data.message);
       }
      else {
        session = data.data.token;
        console.log('session token is ' + session);
        $('#login_err').css("color","green");
        $('#login_err').html('Welcome ' + data.data.first_name);
        alert('Welcome ' + data.data.first_name);
        
        $(location).attr('href',url);
      }
        console.log(data)
      // alert("Data: " + data + "\nStatus: " + status);
    });

      // After registration only otp will be send , so trigger model once registration is done
    }
    else {
      return false;
    }
      
    
  });

  
  //my profile integration starts here..

  // $('#profileForm').submit(function(e){
  //   e.preventDefault();
  $("#profileBtn").click(function(){
    console.log('clicked');
    var session='';
    var fname =$('#fName').val();
    var lname =$('#lName').val();
    var add =$('#address').val();
    var err2 = '';
    $('.error').remove(); 
    if (fname.length < 1) {
      $('#fName').after('<span class="error">Please enter your Name.</span>');
      err2 = 'fname';
    }
    if (add.length < 1){
      $('#address').after('<span class="error">Please enter your address.</span>');
      err2 = 'add';
    }
    if(err2 == '')
    {
    console.log('Trigger api');
    $.post(baseUrl+"updateProfile",
    {
      first_name: fname,
      last_name: lname,
      address: add,
      token : session
    },
    function(data,status){
      if(data.success==0){
        console.log(data.error);
        $('#pro_err').css("color","red");
        $('#pro_err').html(data.error);// this is not network error
        // u should catch the error and display it to user
      }
      else {
        // Registration success, now opoen the popup model here ok nnna
        console.log(data.message);
        $('#pro_err').css("color","green");
        $('#pro_err').html(data.message);
      }
        console.log(data)
      // alert("Data: " + data + "\nStatus: " + status);
    });

      // After registration only otp will be send , so trigger model once registration is done
    }
    else {
      return false;
    } 

  });

  //aadhar page API integration starts here..

  $('#aadharbtn').click(function(){
    console.log('aadhar process start')
    var aadhar =$('#aadhar').val();
    var check =$('input[type="checkbox"]:checked');
    err4='';
    $('.error').remove();
    if(check.length<1)
    {
      $('#demo').html("<span class='error'>Accept the terms and condition..</span>");
      err4='check';
    }
    if(aadhar<1)
    {
      $('#aadhar').after("<p style='margin-left:400px;' class='error'>Please enter your aadhar number..</p>");
      err4='aadhar';
    }
    if(err4 == '')
    {
      console.log('Api Triggered');  
      $.post(baseUrl + 'updateAadhar',
        {
          aadhar : aadhar,
          token: session
        },
        function(status,data)
        {
          if(data.success==0)
          {
            console.log(data.error.aadhar[0]);
            $('#adhar_err').html(data.error.aadhar[0]);
          }
          else{
            console.log(data.message);
            $('#adhar_err').html(data.error);
          }
          console.log(data);
        });
    }
    else
    {
      return false;
    }

  });

  //contact us integration starts here..

  $('#contactForm').submit(function(e){
    e.preventDefault();

    var cname =$('#name').val();
    var cemail =$('#email').val();
    var cmess =$('#message').val();
    var err3 = '';
    $('.error').remove(); 

    if (cname.length < 1) {
      $('#name').after('<span class="error">Please enter your Name.</span>');
      err3 = 'cname';
    }
    if (cemail.length < 1) {
      err3 = 'cemail'; 
      $('#email').after('<span class="error">Please enter your phone.</span>');
    }
    if (cmess.length < 1){
      $('#message').after('<span class="error">Please leave your address.</span>')
      err3 = 'cmess';
    }
    if(err3 = '')
    {
    console.log('Trigger api');
    $.post(baseUrl+"updateContact",
    {
      token : session,
      name : cname,
      email :  cemail,
      message : cmess
    },
    function(data,status){
      if(data.success==0){
        console.log(data.error);
        $('#con_err').html(data.error);// this is not network error
        // u should catch the error and display it to user
      }
      else {
        // Registration success, now opoen the popup model here ok nnna
        $('#con_err').html(data.message);
      }
        console.log(data)
      // alert("Data: " + data + "\nStatus: " + status);
    });

      // After registration only otp will be send , so trigger model once registration is done
    }
    else {
      return false;
    } 

  });

// password show hide in registration form...
$('#showhide').click(function(){
  console.log('aadhar process start')
  if($(this).prop('checked'))
  {
    $('#registerPassword').attr('type','text');
  }
  else{
    $('#registerPassword').attr('type','password');
  }


});


    
});
