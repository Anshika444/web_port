<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';
    //collect post variables
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $ptitle=$_POST['ptitle'];
    $pdesc=$_POST['pdesc'];
    $prof=$_POST['prof'];
    $twitter=$_POST['twitter'];
    $linkedin=$_POST['linkedin'];
    $aboutme=$_POST['aboutme'];
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: white;
        }
        input{
            width: 40%;
            height:5%;
            border:1px;
            border-radius: 5px;
            padding:8px 15px 8px 15 px;
            margin:10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px #d4e157;
        }
    </style>
</head>
<body>
    <h2>User Details</h2>
    <table class=table-port>
        <tr>
        <th>NAME</th>
            <th>ABOUT ME</th>
            <th>EMAIL</th>
            <th>PROJECT TITLE</th>
            <th>PROJECT DESCRIPTION</th>
            <th>PROFESSION</th>
            <th>CONTACT</th>
            <th>TWITTER HANDLE</th>
            <th>LINKEDIN HANDLE</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
            include 'db.php';
            $name=$_POST['name'];
            $records=mysqli_query($con,"SELECT * FROM userdetails WHERE name='$name' AND email='$email'");
            while($data=mysqli_fetch_array($records))
            {
                ?>
                <tr>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['aboutme'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['ptitle'];?></td>
                    <td><?php echo $data['pdesc'];?></td>
                    <td><?php echo $data['prof'];?></td>
                    <td><?php echo $data['contact'];?></td>
                    <td><?php echo $data['twitter'];?></td>
                    <td><?php echo $data['linkedin'];?></td>
                    <td><a href="edit.php?email=<?php echo $data['email'];?>">Edit</a></td>
                    <td><a href="delete.php?email=<?php echo $data['email'];?>">Delete</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
