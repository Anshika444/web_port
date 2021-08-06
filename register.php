<?php
session_start();

  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'component/db.php';
    //collect post variables
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword){
     
      //query
      $sql="INSERT INTO userlogin (name,email,contact,password) VALUES ('$name','$email','$contact','$password');";
      $result=mysqli_query($con, $sql);
      session_start();
      $_SESSION['iportfolio']='true';
      $_SESSION['name'] = $name;
      header('location:home.php');

    }else{
     echo "<script>alert('passwords doesnot match');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/login.css" />
    <title>Register</title>
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
          <li><a href="login.php">Login</a></li>
          <li><a class="active" href="register.php">Register</a></li>
        </ul>
      </nav>
      <div class="container">
        <h1>Register</h1>

        <form method="POST" autocomplete="off">
          <div class="form">
            <label for="name">Username</label>
            <input type="text" id="name" name="name"/>
            <label for="email">Email</label>
            <input type="email" id="email" name="email"/>
            <label for="contact">Phone Number</label>
            <input type="tel" id="contact" name="contact" />
            <label for="password">Password</label>
            <input type="password" id="password" name="password"/>
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword"/>
            <button class="btn" type="submit">Register</button>
          </div>
    </form>
      </div>

      
    </div>
  </body>
</html>
