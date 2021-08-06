<?php
 include 'component/db.php';
 session_start();
 if(!$_SESSION['portfolio']){
   header('location:login.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/template.css" />
  <title>Document</title>
</head>
<body>
    <section class="heros">
      <div class="hero container">
        <nav class="nav">
          <!-- <a class="heading" href="/">Portfolio</a> -->
          <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="template.php">Templates</a></li>
            
          <?php
              if($_SESSION['portfolio']){?>
               <li><a href="logout.php">Logout</a></li>
           <?php   }else{?>
                <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>

           <?php } ?>
            
          </ul>
        </nav>
        
<a href="logout.php">Logout</a>
      </section>

  


</body>
</html>

