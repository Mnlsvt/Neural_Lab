<?php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'createdb':
                database_creation();
                break;
            case 'createconnection':
                connection_creation();
        }
    }

    function connection_creation()
    {
        // 1. Get Server Name, Username, Password
        $servername = "localhost";
        $username = "root";
        $password = "";
        

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);


        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }

    function database_creation()
    {
        // Create database
        $sql = "CREATE DATABASE myDBbb1";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } 
        else {
            echo "Error creating database: " . $conn->error;
        }
    }
?>