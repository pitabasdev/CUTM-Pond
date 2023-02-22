<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="nav.css">
    <script src="https://kit.fontawesome.com/fc33bdc8f2.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.3.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>

<body>

    <!-- <div class="container">
   <div class="content">
      <h3>Welcome!</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime necessitatibus itaque sit adipisci odit debitis temporibus aliquid nisi totam.</p>
      <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>
      <a href="logout.php" class="logout">logout</a>
   </div>
</div> -->
    <!-- <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
      <img src="img/cutm.png" style="height: 50px ; width: 45px" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <img style="height: 60px; float:right; " src="img/user.png" >
      
    </a>
  </div>
  
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <div class="nav">
        <div class="cont-nav">
            <img class="logo" src="img/cutm.png" alt="Logo">
            <img class="user" style="height: 60px; float:right; " src="img/user.png">
            <div class="user-detat">
                <p class="text">Email : <span><?php echo $_SESSION['usermail']; ?></span></p>
                <a href="logout.php" class="logout">logout</a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="column">
            <a href="pond/pond1.php">
                <div class="card">
                    <h3>Pond 1</h3>
                    <img src="img//pond.png">

                </div>
            </a>
        </div>

        <div class="column">
            <a href="pond/pond2.php">
                <div class="card">
                    <h3>Pond 2</h3>
                    <img src="img//pond.png">

                </div>
            </a>
        </div>

        <div class="column">
            <a href="pond/pond3.php">
                <div class="card">
                    <h3>Pond 3</h3>
                    <img src="img//pond.png">
                </div>
            </a>
        </div>

        <div class="column">
            <a href="pond/pond4.php">
                <div class="card">
                    <h3>Pond 4</h3>
                    <img src="img//pond.png">
                </div>
            </a>
        </div>
        <div class="column">
            <a href="pond/pond5.php">
                <div class="card">
                    <h3>Pond 5</h3>
                    <img src="img//pond.png">
                </div>
            </a>
        </div>

        <div class="column">
            <a href="pond/pond6.php">
                <div class="card">
                    <h3>Pond 6</h3>
                    <img src="img//pond.png">
                </div>
            </a>
        </div>

        <div class="column">
            <a href="pond/pond7.php">
                <div class="card">
                    <h3>Pond 7</h3>
                    <img src="img//pond.png">
                </div>
            </a>
        </div>

        <div class="column">
            <a href="pond/pond8.php">
                <div class="card">
                    <h3>Pond 8</h3>
                    <img src="img//pond.png">
                </div>
            </a>
        </div>
    </div>
    <footer>
        <div>
            <div class="hm-fot">
                
            </div>
        </div>

    </footer>


    <script>
    $(".user-detat").hide();
    $(document).ready(function() {
        $(".user").click(function() {
            $(".user-detat").toggle();
        });

    });
    </script>

</body>


</html>