<?php
    include "config.php";

    if (isset($_POST['update'])) {
        $user_id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];

        $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `bgroup` = '$bgroup' WHERE `id` = '$user_id'";
        
        $sql = $connect->query($query);

        if ($sql == true) {
            echo "Record Updated Successfully !!!";
        } else {
            echo "Failed to Update Record !!!<br>";
            echo "Error: " . $connect->error;
        }
    }

    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $query = "SELECT * FROM `users` WHERE `id` = '$user_id'";

        $sql = $connect->query($query);

        if ($sql->num_rows > 0) {
            while ($row = $sql->fetch_assoc()) {
                $user_id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $bgroup = $row['bgroup'];
            }
            ?>

            <!DOCTYPE html>
            <html>
                <body bgcolor = "FEE3E3">
                    <h2> User Update Form </h2>
                    <form action = "" method = "POST">
                        <fieldset>
                            <legend> Personal Information </legend>
                            <label for = "name"> Name: </label>
                            <input type = "text" name = "name" value = "<?php echo $name; ?>">
                            <input type = "hidden" name = "user_id" value = "<?php echo $user_id; ?>"> 
                            <br> <br>

                            <label for = "email"> Email: </label>
                            <input type = "email" name = "email" value = "<?php echo $email; ?>">
                            <br> <br>

                            <label for = "phone"> Phone: </label>
                            <input type = "text" name = "phone" value = "<?php echo $phone; ?>">
                            <br> <br>

                            <label for = "bgroup"> Blood Group: </label>
                            <input type = "text" name = "bgroup" value = "<?php echo $bgroup; ?>">
                            <br> <br>

                            <input type = "submit" name = "update" value = "Update"> 
                        </fieldset>
                    </form>
                </body>
            </html>
        <?php 
        } else {
            // if the 'id' value is not correct, then redirect the user to view.php page
            header('Location: view.php');
        }
    }
?>