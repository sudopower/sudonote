<?php
    $servername = "localhost";
    $username = "root";
    $password = "kiraN@222860";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=kiran222860_sudonote", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>