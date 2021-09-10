<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $my_dtv = "demo_sql";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $my_dtv);
    
    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
?>