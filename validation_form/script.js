$(document).ready(function(){
  $('#usercheck').hide();
  $('#lastnamecheck').hide();
  $('#addresscheck').hide();
  $('#emailcheck').hide();
  $('#passcheck').hide();
  $('#conpasscheck').hide();
  $('#phonecheck').hide();
  $('#zipcodecheck').hide();

  var user_err = true;
  var lastname_err = true;
  var address_err = true;
  var email_err = true;
  var pass_err = true;
  var conpass_err = true;
  var phone_err = true;
  var zipcode_err = true;

//User validation

  $('#username').keyup(function(){
    username_check();

  });

  function username_check(){
    var user_val = $('#username').val();
    
    if(user_val.length == ''){
      $('#usercheck').show();
      $('#usercheck').html("**Please Fill the Firstname");
      $('#usercheck').focus();
      $('#usercheck').css("color","red");
      user_err = false;
      return false;

    }else{
      $('#usercheck').hide();
    }

    if((user_val.length < 3 ) || (user_val.length > 10 )){
      $('#usercheck').show();
      $('#usercheck').html("**Username length must be between 3 to 10");
      $('#usercheck').focus();
      $('#usercheck').css("color","red");
      user_err = false;
      return false;

    }else{
      $('#usercheck').hide();
    }

  }

//lastname validation
$('#lastname').keyup(function(){
    lastname_check();

  });

  function lastname_check(){
    var lastname_val = $('#lastname').val();
    
    if(lastname_val.length == ''){
      $('#lastnamecheck').show();
      $('#lastnamecheck').html("**Please Fill the Lastname");
      $('#lastnamecheck').focus();
      $('#lastnamecheck').css("color","red");
      lastname_err = false;
      return false;

    }else{
      $('#lastnamecheck').hide();
    }
  }  


//address validati0n
$('#address').keyup(function(){
    address_check();

  });

  function address_check(){
    var address_val = $('#address').val();
    
    if(address_val.length == ''){
      $('#addresscheck').show();
      $('#addresscheck').html("**Please Fill the Address");
      $('#addresscheck').focus();
      $('#addresscheck').css("color","red");
      address_err = false;
      return false;

    }else{
      $('#addresscheck').hide();
    }
  } 

// email validation
  $('#email').keyup(function(){
     email_check();
  });

  function email_check(){
    var email_val = $('#email').val();
    

    if(email_val.length == ''){
      $('#emailcheck').show();
      $('#emailcheck').html("**Please Fill the email");
      $('#emailcheck').focus();
      $('#emailcheck').css("color","red");
      email_err = false;
      return false;

    }else{
      $('#emailcheck').hide();
    }

    if(email_val.indexOf("@") < 0 || email_val.indexOf(".") < 0){
      $('#emailcheck').show();
      $('#emailcheck').html("**Email are not valid");
      $('#emailcheck').focus();
      $('#emailcheck').css("color","red");
      email_err = false;
      return false;

    }else{
      $('#emailcheck').hide();

    }
 }

//password validation

  $('#password').keyup(function(){
    password_check();
  });

  function password_check() {

    var passwrdstr = $('#password').val();

    if (passwrdstr.length == ''){
      $('#passcheck').show();
      $('#passcheck').html("**Please Fill the Password");
      $('#passcheck').focus();
      $('#passcheck').css("color","red");
      pass_err = false;
      return false;

    }else{
      $('#passcheck').hide();
    }
    if((passwrdstr.length < 6 ) || (passwrdstr.length > 12 )){
      $('#passcheck').show();
      $('#passcheck').html("**password length must be between 6 to 12");
      $('#passcheck').focus();
      $('#passcheck').css("color","red");
      pass_err = false;
      return false;

    }else{
      $('#passcheck').hide();
    }
  }
    
  //conf password validation

  $('#conpassword').keyup(function(){
    con_passwrd();

  });
  function con_passwrd(){

    var conpass = $('#conpassword').val();
    var passwrdstr = $('#password').val();

    if(passwrdstr != conpass){
      $('#conpasscheck').show();
      $('#conpasscheck').html("**Password & Confirm Password are not Match");
      $('#conpasscheck').focus();
      $('#conpasscheck').css("color","red");
      conpass_err = false;
      return false;

    }else{
      $('#conpasscheck').hide();
    }  
  } 
   
  
  //Phone number validation
  $('#phone').keyup(function(){
    phone_check();
  });

  function phone_check(){
    var phone_val = $('#phone').val();
    if (phone_val.length == ''){
      $('#phonecheck').show();
      $('#phonecheck').html("**Please Fill the Phone Number");
      $('#phonecheck').focus();
      $('#phonecheck').css("color","red");
      phone_err = false;
      return false;

    }else{
      $('#phonecheck').hide();
    }
    //if ((phone_val.length == 11) || (phone_val.length < 10)){
      if((phone_val.length < 9 ) || (phone_val.length > 10 )){
      $('#phonecheck').show();
      $('#phonecheck').html("**Phone number must be 10 Digit");
      $('#phonecheck').focus();
      $('#phonecheck').css("color","red");
      phone_err = false;
      return false;

    }else{
      $('#phonecheck').hide();
    }
    if (isNaN(phone_val)){
      $('#phonecheck').show();
      $('#phonecheck').html("**Phone number only contain numbers");
      $('#phonecheck').focus();
      $('#phonecheck').css("color","red");
      phone_err = false;
      return false;

    }else{
      $('#phonecheck').hide();
    }
  }

  //zipcode  validation
  $('#zipcode').keyup(function(){
    zipcode_check();
  });

  function zipcode_check(){
    var zipcode_val = $('#zipcode').val();
    if((zipcode_val.length < 5 ) || (zipcode_val.length > 6 )){
    //if ((zipcode_val.length < 6) || (zipcode.length > 7)) {
      $('#zipcodecheck').show();
      $('#zipcodecheck').html("**Zipcode must be 6 Digit");
      $('#zipcodecheck').focus();
      $('#zipcodecheck').css("color","red");
      zipcode_err = false;
      return false;

    }else{
      $('#zipcodecheck').hide();
    }
    if (isNaN(zipcode_val)){
      $('#zipcodecheck').show();
      $('#zipcodecheck').html("**Zipcode only contain numbers");
      $('#zipcodecheck').focus();
      $('#zipcodecheck').css("color","red");
      zipcode_err = false;
      return false;

    }else{
      $('#zipcodecheck').hide();
    }
  }  

    $('#submtbtn').click(function(){
      user_err = true;
      lastname_err = true;
      address_err = true
      email_err = true;
      pass_err = true;
      conpass_err = true;
      phone_err = true;
      zipcode_err = true;

      username_check();
      lastname_check();
      address_check();
      password_check();
      con_passwrd();
      email_check();
      phone_check();
      zipcode_check();

      if((user_err == true) && (lastname_err = true) && (address_err == true) && (pass_err == true) && (conpass_err == true) && (email_err == true) && (phone_err == true)
       && (zipcode_err == true)){
        return true;
      }else{
        return false;
      }
    });
  
     });
