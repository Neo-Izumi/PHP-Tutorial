<?php 
    include "config.php";

    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];

        //$query = "DELETE FROM `users` WHERE `id` = '$user_id'";
        //$sql = $connect->query($query)

        $sql = $connect->execute_query("DELETE FROM `users` WHERE `id` = ?", [$user_id]);

        if ($sql == true) {
            echo "Record Deleted Successfully !!!";
        } else {
            echo "Failed to Delete Record !!! <br>";
            echo "Error: " . $connect->error; 
        }
    }