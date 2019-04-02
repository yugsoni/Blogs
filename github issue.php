<?php

 include('git.php');
 if (isset($_POST['submit'])) {

  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $password = $_POST['password'];
  $d_o_b = $_POST['date'];
  $gender = $_POST['gender'];
  $contact_no = $_POST['contact_no'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];

  $insert = mysqli_query($conn,"INSERT INTO github(f_name, l_name, password, d_o_b, gender, contact_no, address, city, state, pincode) VALUES('$fname','$lname','$password','$d_o_b','$gender','$contact_no','$address','$city','$state','$pincode')");

 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Material Text Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>/* Material Design Text Box */
/* Created By Hamza Asmat */
/* Contact -> hamzaasmat486@gmail.com */

$(function(){
    $('.form_control').on('focusout', function(){
        if($(this).val().length > 0){
            $(this).addClass('has_class');
        }else{
            $(this).removeClass('has_class');
        }
    })
})</script>
<body>
  <style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Open+Sans");

body {
  margin: 0;
  padding: 0;
  font-size: 14px;
  font-family: Open Sans;
  background-color: grey;
  color: white;
}

  .container {
    width: 1200px;
    margin: 0px auto;
    color: white;
  }

/* Material Text Box */

.input_group {
  position: relative;
  margin: 40px auto;
  color: white;
}

.form_control {
  width: 100%;
  height: 35px;
  font-size: 16px;
  border: none;
  border-bottom: 2px solid #aaa;
  background-color: transparent;
  color: blue;
  position: relative;
  z-index: 1;
}
.form_control + label {
  position: absolute;
  top: 5px;
  left: 0;
  font-size: 16px;
  color: #aaa;
  transition: all 0.2s ease-in-out;
  font-weight: 800;
}
.form_control:focus {
  outline: none;
  border-color: #4285f4;
  transition: all 0.1s ease-in-out;
}
.form_control:focus + label,
.form_control.has_class + label {
  top: -15px;
  color: #4285f4;
  font-size: 12px;
}
.form_controll {
  width: 100%;
  height: 35px;
  font-size: 16px;
  border: none;
  border-bottom: 2px solid #aaa;
  background-color: transparent;
  color: blue;
  position: relative;
  z-index: 1;
}
.form_controll + label {
  position: absolute;
  top: 5px;
  left: 0;
  font-size: 16px;
  transition: all 0.2s ease-in-out;
  font-weight: 800;
}
.form_controll:focus {
  outline: none;
  border-color: #4285f4;
  transition: all 0.1s ease-in-out;
}
.form_controll:focus + label,
.form_controll.has_class + label {
  top: -15px;
  color: #4285f4;
  font-size: 12px;
}

.mainForm {
  width: 400px;
  box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.1);
  margin: 0 auto;
  padding: 15px;
  background-color: white;
  margin-left: -50px;
  margin-top: 30px;
  margin-bottom: 30px;
}
h1{
  color:  grey;
}
.btn{
  background-color: grey;
  width: 100%;
}
.bu button{
  background-color: grey;
  width: 100px;
}
.bu a{
  text-decoration: none;
  color: white;
}
  </style>
  <!-- Container -->
  <div class="container">
    <!-- Form -->
    <div class="row">
    <div class="col-md-6">
    <form method="POST" class="mainForm">
      <!-- Material Text Box -->
      <h1>Registration</h1>
      <div class="input_group">
        <input type="text" class="form_control" name="first_name" required>
        <label>First Name</label>
      </div>
      <div class="input_group">
        <input type="text" class="form_control" name="last_name" required>
        <label>Last Name</label>
      </div>
      <div class="input_group">
        <input type="text" class="form_control" name="password" required>
        <label>Password</label>
      </div>
      <div class="input_group">
        <input type="date" class="form_controll" name="date" required>
        <label>Date of Birth</label>
      </div>
      <div class="input_group">
        <select name="gender" class="custom-select" name="gender"required>
    <option selected>Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Femle</option>
    <option value="Others">Others</option>
    <option value="Rather not say">Rather not say</option>
      </div>
  </select>
  <div class="input_group">
        <input type="text" class="form_control" name="contact_no" required>
        <label>Contact no.</label>
      </div>
      <div class="input_group">
        <input type="text" class="form_control" name="address" required>
        <label>Address</label>
      </div>
      <div class="input_group">
    <select name="city" class="custom-select" name="city"required>
    <option selected>City</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Surat">Surat</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Rajkot">Rajkot</option>
      </select>
          </div>
          <div class="input_group">
        <input type="text" class="form_control" name="state" required>
        <label>State</label>
      </div>
          <div class="input_group">
        <input type="number" class="form_control" name="pincode" required>
        <label>Pincode</label>
      </div>
     <div class="input_group">
        <input type="submit" name="submit" class="btn" value="register">
      </div>
      <div class="input_group">
        <div class="bu">
        <button type="button" class="btn"><a href="blogs.php">Blogs</a></button>
        </div>
      </div>
      <div class="input_group">
         
         <a href="login form.php">Already a member of PHP</a>
      </div>
    </form>
    </div>
    </div>

  </div>


</body>

</html>