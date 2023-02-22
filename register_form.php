<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO user_form(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="form-container">

   <form action="" method="post">
      <img style="height: 200px;" src="img/register.png">
      <h3 class="title">Register now</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="email" name="usermail" placeholder="Enter your email" class="box" required>
      <input type="password" name="password" placeholder="Enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm your password" class="box" required>
      <input type="submit" value="Register now" class="form-btn" name="submit">
      <p style="font-size:medium;">Already have an account? <a href="login.php">login now!</a></p>
   </form>

</div>

</body>
</html>