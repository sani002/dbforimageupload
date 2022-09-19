<?php

    $hostname = "localhost";
    $username = "root";
    $password = "Sani007@";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=first_test", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>
