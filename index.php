<?php
    include 'component/db.php';
   session_start();
   if(!$_SESSION['iportfolio']){
     header('location:login.php');
   }

  if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $ptitle=$_POST['ptitle'];
    $pdesc=$_POST['pdesc'];
    $prof=$_POST['prof'];
    $twitter=$_POST['twitter'];
    $linkedin=$_POST['linkedin'];
    $aboutme=$_POST['aboutme'];
        $del="DELETE from userdetails where name='$name';";
        $result1=mysqli_query($con, $del);

        $sql="INSERT INTO userdetails (name,email,ptitle,pdesc,aboutme,contact,twitter,linkedin) VALUES ('$name','$email','$ptitle','$pdesc','$aboutme','$contact','$twitter','$linkedin');";
        $result=mysqli_query($con, $sql);
        if(!$result){
            // mysql_error();
        header('location:home.php');

        }else{
        header('location:view.php');
       }
        // echo "<script>alert('$sno');</script>";
        
    }
 
?>

<!doctype html>
<html lang="en">

<head>
    <title></title>
    <link rel="stylesheet" href="css/index.css" />

</head>

<body >
<div class="hero">
      <nav class="nav">
        <!-- <a class="heading" href="/">Portfolio</a> -->
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="home.php#about">About</a></li>
          <li><a href="home.php#contact">Contact</a></li>
          <li><a class="active" href="index.php">Create</a></li>
          <li><a  href="view.php">View</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>

    <div class="container">
    
    
    
        <form action="" method="POST">
        <div class="form">
            <label for="name">Username</label>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email"><br>
            <label for="ptitle">Project Title</label>
            <input type="text" id="ptitle" name="ptitle"><br>
            <label for="pdesc">Project Description</label>
            <textarea type="text" id="pdesc" name="pdesc"></textarea><br>
            <label for="aboutme">About me</label>
            <textarea type="text" id="aboutme" name="aboutme"></textarea><br>
            <label for="contact">Contact</label>
            <input type="text" id="contact" name="contact"><br>
            <label for="twitter">Twitter</label>
            <input type="text" id="twitter" name="twitter"><br>
            <label for="linkedin">Linkedin</label>
            <input type="text" id="linkedin" name="linkedin"><br>
            <button type="submit" class="btn">Submit</button>
        </div>
        </form>
    </div>
</div>
  
</body>

</html>