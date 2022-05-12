<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password);

// Checking the  connection
if (!$connection) {
  die("Failed ". mysqli_connect_error());
}
echo "Connection established successfully";
?>



<!-- To create the database -->
$query = "CREATE DATABASE mycompany";


<!-- To check if the database is created -->
mysqli_query($connection, $query)


<!-- To create the connection -->
$connection = mysqli_connect($server_name, $user_name, $password);

<!-- To close the connection -->
mysqli_close($connection);