<?php

    //database credentials
    $host = "localhost";
    $db = "scp";
    $user = "root";
    $pwd = "";

    $dsn = "mysql:host=$host; dbname=$db;";

    //connect to the databse using PDO
    try
    {
        //PDO object parameters DSN, username and passord
        $conn = new PDO($dsn, $user, $pwd);
    }
    catch (PDOException $error)
    {
        echo "<h3>Database connection error</h3>" . $error->getMessage();
    }
?>