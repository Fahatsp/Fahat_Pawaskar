<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jquery validation</title>
  
 Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- </head>
<body>
  
  <div class="container"><br><br>
    <h1 class="text-center text-warning">JQUERY FORM VALIDATION</h1>
  </div>
  <div class="col-lg-8 m-auto d-block">
    <form>
      <div class="form-group">
        <label for="user">Firstname:</label>
        <input type="text" name="fname" id="username" class="form-control" required>
        <h5 id="usercheck"> </h5>
      </div>
      <div class="form-group">
        <label for="lastname">lastname:</label>
        <input type="text" name="lname" id="lastname" class="form-control" required>
        <h5 id="lastnamecheck"> </h5>
      </div>   
      <div>
      <label for="address">Address :</label>
        <textarea id="address" class="address" required class="form-control" required></textarea>
        <h5 id="addresscheck"> </h5>
      </div>
  
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="femail" id="email" class="form-control" required>
        <h5 id="emailcheck"> </h5>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" name="fpass" id="password" class="form-control" required>
        <h5 id="passcheck"> </h5>
      </div> 
      <div class="form-group">
        <label for="conpassword">Confirm Password:</label>
        <input type="text" name="fconpass" id="conpassword" class="form-control" required>
        <h5 id="conpasscheck"> </h5>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" name="fphone" id="phone" class="form-control" required>
        <h5 id="phonecheck"> </h5>
      </div>
      <div class="form-group">
        <label for="zipcode">Zipcode:</label>
        <input type="text" name="fzipcode" id="zipcode" class="form-control" required>
        <h5 id="zipcodecheck"> </h5>
      </div> 
      <div>
        <label for="gender">Gender :</label>
        <select id="gender" name="fgender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="dob">
                <label for="dob"> Date of Birth</label>
                <input class="form-control form-control-lg " onchange="fnCalculateAge();" max="2023-05-05" type="date"
                    id="demo" required>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="age">
                <label for="Age"> Age :</label>
                <span class="form-control form-control-lg" id="show" > </span>
            </div>
        </div>
    </div>
      

      <input type="submit" id="submitbtn" value="Submit" class="btn btn-primary">
    </form>
  </div> -->


  <!-- <script type="text/javascript">
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
          $('#conpasscheck').html("**Password & Con Password are not Match");
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
          email_err = true;
          pass_err = true;
          conpass_err = true;
          phone_err = true;
          zipcode_err = true;

          username_check();
          password_check();
          con_passwrd();
          email_check();
          phone_check();
          zipcode_check();

          if((user_err == true) && (pass_err == true) && (conpass_err == true) && (email_err == true) && (phone_err == true)
           && (zipcode_err == true)){
            return true;
          }else{
            
          }



        });
      
         //var mobileNumberPattern = /^[0-10]{11}$/ ;

        // if(mobileNumberPattern.test(phone_val) || (phone_val.length > 0)){//
    });
//     function fnCalculateAge(event) {

// var userdate = document.getElementById('demo').value;
// var indate = new Date(userdate);
// var today = new Date();

// let age = today.getFullYear() - indate.getFullYear();
// document.getElementById('show').innerHTML = age;
//  event.preventDefault();
    
// }
// function fnCalculateAge(event) {

// var userdate = document.getElementById('demo').value;
// var indate = new Date(userdate);
// var today = new Date();

// let age = today.getFullYear() - indate.getFullYear();
// document.getElementById('show').innerHTML = age;
// event.preventDefault();
// }
  </script>
</body>
</html>--> -->
   <!-- <div class="row">
         <div class="col-md-6 mb-4">
             <div class="dob">
                 <label for="dob"> Date of Birth</label>
                 <input class="form-control form-control-lg " onchange="fnCalculateAge();" max="2023-05-05" type="date"
                     id="demo">
             </div>
         </div>
 
         <div class="col-md-6 mb-4">
             <div class="age">
                 <label for="Age"> Age :</label>
                 <span class="form-control form-control-lg" id="show" > </span>
             </div>
         </div>
     </div> -->
     if(isset($_POST['submit'])){
            $search=$_POST['search'];
        
            $sql="select * from `registration` where id='$search'";
            $result=mysqli_query($con,$sql);
            if($result){
            if(mysqli_num_rows($result)>0){
             echo '<'
            }   
            }
        }
        // $search = isset($_GET['search']) ? $_GET['search'] : '';
        // $searchQuery = "WHERE fname LIKE 'fahat' OR lname LIKE 'pawaskar' OR femail LIKE 'fs@gmail.com' OR ID LIKE '1'";
        
        // $sql = "SELECT ID, fname, lname, femail, fphone, fzipcode, fgender, dob FROM registration $orderBy $searchQuery LIMIT $startingLimit, $numberPages";
        // $result = mysqli_query($con, $sql);