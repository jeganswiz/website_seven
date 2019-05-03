$(document).ready(function(){
  var baseUrl = 'http://18.225.6.121/api/v1/';
  var token = '';
  var phone = '';
  


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
    var RC = $('#registerRC').val(); // This is option &
    var error = '';
    $(".error").remove();
 
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
        $('#network_err').html(data.error.phone[0]);// this is not network error
        // u should catch the error and display it to user
      }
      else {
        // Registration success, now opoen the popup model here ok nnna
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
  $("#submitOTP").click(function(){
  // OTP Process
    var url1='login_register.php';
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
        $('#registerOTP').after("<span class='error'>Wrong OTP..</span>");
        
      } else if (data.success==1){
        console.log('User verified');
        $(location).attr('href',url1);
        alert('Now you were a Member of SEVEN ATARA...')
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
    var url='index.php';
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
        $('#login_err').html('Invalid User ID');

        
      }
      else {
        // Registration success, now opoen the popup model here ok nnna

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
    var fname =$('#fName').val();
    var lname =$('#lName').val();
    var add =$('#address').val();
    var mob =$('#phone').val();
    var err2 = '';
    $('.error').remove(); 
    if (fname.length < 1) {
      $('#fName').after('<span class="error">Please enter your Name.</span>');
      err2 = 'fname';
    }
    if (mob.length < 1) {
      err2 = 'mob'; 
      $('#phone').after('<span class="error">Please enter your phone.</span>');
    }
    if (add.length < 1){
      $('#address').after('<span class="error">Please enter your address.</span>')
      err2 = 'add';
    }
    if(err2 == '')
    {
    console.log('Trigger api');
    $.post(baseUrl+"updateProfile",
    {
      first_name: fname,
      last_name: lname,
      address: address,
      token : token
    },
    function(data,status){
      if(data.success==0){
        console.log(data.error);
        $('#pro_err').html(data.error);// this is not network error
        // u should catch the error and display it to user
      }
      else {
        // Registration success, now opoen the popup model here ok nnna
        alert('success');
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
    err4='';
    $('.error').remove();

    if(aadhar<1)
    {
      $('#aadhar').after("<span class='error'>Please enter your aadhar number..</span>");
      err4='aadhar';
    }
    if(err4 == '')
    {
      console.log('Api Triggered');
      $.post(baseUrl + 'updateAadhar',
        {
          aadhar : aadhar,
          token:token
        },
        function(status,data)
        {
          if(data.success==0)
          {
            console.log(data.error);
            $('#adhar_err').html(data.error);
          }
          else{
            alert('thankyou');
          }
          console.log(data);
        });
    }
    else
    {
      return false;
    }

  });
  
    
});

