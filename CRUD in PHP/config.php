<?php 
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blood donation camp";

    $connect = new mysqli($server_name, $username, $password, $dbname);
    if ($connect->connect_error) {
        die("Connection Failed" . $connect->connect_error);
    }
?>