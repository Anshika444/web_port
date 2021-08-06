<?php
 include 'component/db.php';
 session_start();
 if(!$_SESSION['iportfolio']){
   header('location:login.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view.css" />
    <title>Document</title>
   
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
          <li><a class="active" href="view.php">View</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>

    <div class="container" >
    
        <?php 
        $username=$_SESSION['name'];
        
        $sql="SELECT * FROM userdetails where name='$username';";
        $result=mysqli_query($con, $sql);
        $row=mysqli_fetch_array($result);
       
        if($result) {?>
           
            <h1 class="name"><?php echo $username;?></h1>
            <div class="form">
          <div class="formContent">
            <label for="email">Email :</label>
                <input type="text"  class="input1"value="<?php echo $row['email'];?>" disabled><br>
                </div>
                <div class="formContent">
            <label for="contact">Contact :</label>
                <input type="text"  class="input2"value="<?php echo $row['contact'];?>" disabled><br>
        </div>
        <div class="formContent">
            <label for="ptitle">Project Title :</label>
                <input type="text"  class="input3"value="<?php echo $row['ptitle'];?>" disabled><br>
        </div>
        
        <div class="formContent">
            <label for="twitter">Twitter :</label>
                <input type="text" class="input4" value="<?php echo $row['twitter'];?>" disabled><br>
        </div>
        <div class="formContent">
            <label for="linkedin">Linkedin :</label>
                <input type="text" class="input5" value="<?php echo $row['linkedin'];?>" disabled><br>
        </div>
        <div class="formContent">
            <label for="pdesc">Project Description :</label>
               <span class="para"><?php echo $row['pdesc'];?></span><br>
        </div>
        <div class="formContent">
            <label for="aboutme">About me :</label>
            <span class="para "> <?php echo $row['aboutme'];?></span>
        </div>
            </div>
           
            <?php } ?>


    </div>
   
    </div>
</body>
</html>




        
        
           
         
          
           
         
          
            
          
            
        
          
          