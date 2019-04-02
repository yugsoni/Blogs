<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
a
{
  color: blue
}
  </style>
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
<center>
<div class="container">
    <!-- Form -->
    <div class="row">
    <div class="col-md-6">
    <form method="POST" class="mainForm">
      <!-- Material Text Box -->
      <h1>Login</h1>
      <div class="input_group">
        <input type="text" class="form_control" name="first_name">
        <label>Username</label>
      </div>
      <div class="input_group">
        <input type="text" class="form_control" name="password" >
        <label>Password</label>
      </div>
      <div class="input_group">
        <a href="github issue.php">New to PHP</a>
        <label>Password</label>
      </div>
    </form>
    </div>
    </div>

  </div>
</center>
</body>
</html>