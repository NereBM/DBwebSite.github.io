<?php
    $servername = "mysql.cs.nott.ac.uk";
    $username = "psxnb3";
    $password = "W0lfgang3";
    $dbasename = "psxnb3";
    $conn = new mysqli($servername, $username, $password, $dbasename);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }
