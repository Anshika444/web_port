<?php
session_start();


  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'component/db.php';
    //collect post variables
    $name=$_POST['name'];
    $password=$_POST['password'];

        //query
        $query="SELECT name,password FROM userlogin WHERE name='$name' and password='$password'";
        $result=mysqli_query($con, $query);
        if(mysqli_num_rows($result)==1){
              session_start();
              $_SESSION['iportfolio']='true';
              $_SESSION['name'] = $name;
              header('location:home.php');
        }else{
          echo "<script>alert('wrong username ');</script>";
        }
      }
  
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/login.css" />
    <title>Login</title>
  </head>
  <body>
    
    <div class="hero">
      <nav class="nav">
        <!-- <a class="heading" href="/">Portfolio</a> -->
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="home.php#about">About</a></li>
          <li><a href="home.php#contact">Contact</a></li>
          <li><a href="index.php">Create</a></li>
          <li><a class="active" href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav>
      <div class="container">
        <h1>Login</h1>
        <form action="" method="POST" autocomplete="off">
          <div class="form">
            <label for="username">Username</label>
            <input type="text" name="name"id="username" />
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
            <button class="btn" type="submit">Login</button>
          </div>
        </form>
      </div>

      <!-- <footer class="footer">
        <div class="copy">&copy Portfolio Maker 2021</div>
      </footer> -->
    </div>
  </body>
</html>
