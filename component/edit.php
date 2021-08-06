<?php

include "db.php"; // Using database connection file here

$email = $_GET['email']; // get id through query string

$qry = mysqli_query($con,"select * from portfolio where email='$email'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $ptitle=$_POST['ptitle'];
    $pdesc=$_POST['pdesc'];
    $prof=$_POST['prof'];
    $twitter=$_POST['twitter'];
    $linkedin=$_POST['linkedin'];
    $aboutme=$_POST['aboutme'];
	
    $edit = mysqli_query($con,"UPDATE portfolio SET name='$name', aboutme='$aboutme', ptitle='$ptitle', pdesc='$pdesc', prof='$prof', contact='$contact',twitter='$twitter', linkedin='$linkedin' WHERE email='$email'");
	
    if($edit)
    {
        mysqli_close($con); // Close connection
        header("location:update.php"); // redirects to all records page
        exit;
    } 	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="$name" Required><br>
  <input type="text" name="aboutme" value="<?php echo $data['aboutme'] ?>" placeholder="$aboutme" Required><br>
  <input type="text" name="ptitle" value="<?php echo $data['ptitle'] ?>" placeholder="" Required><br>
  <input type="text" name="pdesc" value="<?php echo $data['pdesc'] ?>" placeholder="" Required><br>
  <input type="text" name="prof" value="<?php echo $data['prof'] ?>" placeholder="" Required><br>
  <input type="text" name="contact" value="<?php echo $data['contact'] ?>" placeholder="" Required><br>
  <input type="text" name="twitter" value="<?php echo $data['twitter'] ?>" placeholder="" Required><br>
  <input type="text" name="linkedin" value="<?php echo $data['linkedin'] ?>" placeholder="" Required><br>

  <input type="submit" name="update" value="Update">
</form>