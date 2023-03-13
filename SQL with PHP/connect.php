<!DOCTYPE html>
<html lang="en">
    <body bgcolor="CFFDC7">
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

            $conn = mysqli_connect('localhost', 'root', '', 'blood donation camp') or die("Connection failed: " . mysqli_connect_error());
            
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $bgroup = $_POST['bgroup'];

                $query = "INSERT INTO `users` (`name`, `email`, `phone`, `bgroup`) VALUES ('$name', '$email', '$phone', '$bgroup')";
                
                $sql = mysqli_query($conn,$query);
                if ($sql) {
                    echo "Successfully Inserted !!!";
                } else {
                    echo "Failed to Insert !!!";
                }
            }
        } 
        ?>
    </body>
</html>

