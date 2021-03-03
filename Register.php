<?php
include "inc/config.php";
include "inc/Database.php";
$db = new Database();

 if ($_SERVER['REQUEST_METHOD']=='POST') {

     $fname =    $_POST['fname'];
     $lname =    $_POST['lname'];
     $Username =  $_POST['Username'];
     $email =    $_POST['email'];
     $password = $_POST['password'];

$sql = "INSERT INTO user_table (fname,lname,username,emileaddress,password)
VALUES ('$fname','$lname ','$Username','$email','$password')";

$rasult = $db->insert($sql);
      if ($rasult==true) {
          setcookie("login","1",time()+86400*7);
          header("location:index.php");
      }else{
        echo "Problems!!!!!!";
      }
 }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
      <h2 class="mt-1 mb-1">Register Page</h2>
    </div>
    <!-- Login Form -->
  <form action="" method="POST" id="Registerform"> 

      <input type="text" id="login" class="fadeIn second" name="fname" placeholder="Frist Name" required="1" minlength="5">

      <input type="text" id="login" class="fadeIn second" name="lname" placeholder="Last Name" required="1" minlength="5">

      <input type="text" id="login" class="fadeIn second" name="Username" placeholder="User Name" required="1" minlength="7">

      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Emile Address" required="1" >

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required="1" minlength="6">

      <input type="submit" class="fadeIn fourth" value="Register">
    </form>
<!-- Login Page -->
    <div id="formFooter">
      <a class="underlineHover" href="login.php">Login </a>
    </div>

  </div>
</div>

<!-- This is a Script Tage  -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>

<script type="text/javascript">
$("#Registerform").validate();
</script>
</body>
</html>