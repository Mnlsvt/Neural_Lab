<?php

// Create database
$sql = "CREATE DATABASE myDBbb1";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} 
else {
    echo "Error creating database: " . $conn->error;
}


?>