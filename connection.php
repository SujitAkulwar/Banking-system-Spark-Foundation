<?php
    $servername = "localhost";
    $username = "id20270164_root";
    $password = "@fWI30a]]7ICx[@7";
    $dbname = "id20270164_spark";

    $con = new mysqli($servername,$username,$password,$dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>