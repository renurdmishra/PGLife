
<?php
// Database configuration
$host = "127.0.0.1"; // Replace with your host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "pglife"; // Replace with your database name

// Attempt to establish connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if  ( mysqli_connect_error()){;
 
    echo "Connection failed:" ;
    exit();
   
}
   echo "Connected successfull connected";

// Close connection (optional, as PHP will automatically close it at the end of the script execution)
// mysqli_close($conn);
?>
