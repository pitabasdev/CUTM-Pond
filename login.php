<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $_SESSION['usermail'] = $email;
      header('location:home.php');
   } else {
      $error[] = 'incorrect password or email.';
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

         <img style="height: 200px;" class="logo-cutm" src="img/login-logo.png">
         <h3 class="title">login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
         }
         ?>
         <input type="email" name="usermail" placeholder="Enter your email" class="box" required>
         <input type="password" name="password" placeholder="Enter your password" class="box" required>
         <input type="submit" value="Login" class="form-btn" name="submit">
         <p style="font-size: medium;">Don't have an account? <a href="register_form.php">Register now!</a></p>
      </form>

   </div>

</body>

</html>