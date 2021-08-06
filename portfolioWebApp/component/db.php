<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "iportfolio";
// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);
if (!$con)
 {
    die("connection to this database failed due to".mysqli_connect_error());
    echo "error";
}

?>