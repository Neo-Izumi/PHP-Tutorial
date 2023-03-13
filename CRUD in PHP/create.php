<?php 
    include "config.php";

    if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];

        // $query = "INSERT INTO `users` (`name`, `email`, `phone`, `bgroup`) VALUES ('$name', '$email', '$phone', '$bgroup')";
        // $sql = $connect->query($query);

        $sql = $connect->prepare("INSERT INTO `users` (`name`, `email`, `phone`, `bgroup`) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $name, $email, $phone, $bgroup);
        $sql->execute();
    
        if ($sql == true) {
            echo "Successfully Inserted !!!";
        } else {
            echo "Failed to Insert !!!";
        }
    
        $connect->close();
    }

?>

<!DOCTYPE html>
<html>
    <body bgcolor="89AEFF">

        <h2> Signup Form </h2>

        <form action = "" method = "POST">
            <fieldset>
                <legend> Personal Information </legend>
                <label for = "name"> Name: </label>
                <input type = "text" name = "name">
                <br> <br>

                <label for = "email"> Email: </label>
                <input type = "email" name = "email">
                <br> <br>

                <label for = " phone"> Phone: </label>
                <input type = "text" name = "phone">
                <br> <br>

                <label for = "bgroup"> Blood Group: </label>
                <input type = "text" name = "bgroup">
                <br> <br>

                <input type = "submit" name = "submit" value = "Submit">
            </fieldset>
        </form>
    </body>
</html>