<!DOCTYPE html>
<html>

    <head></head>
    
    <body bgcolor="ECF4C9">
        <?php
            $fullname = $email = $gender = $comment = $number = $age = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fullname = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $gender = test_input($_POST["gender"]);
                $comment = test_input($_POST["comment"]);
                $number = test_input($_POST["number"]);
                $age = test_input($_POST["age"]);
            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
    </body>

    <h2> Validation Form </h2>

    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Full Name: <input type = "text" name = "name">
        <br> <br>

        Email Address: <input type = "text" name = "email">
        <br> <br>

        Number: <input type = "text" name = "number">
        <br> <br>

        Age: <input type = "text" name = "age">
        <br> <br>

        Comment: <textarea name = "comment" rows = "10" cols = "30"> Type Something Here. </textarea>
        <br> <br>

        Gender: 
        <input type = "radio" name = "gender" value = "female"> Female
        <input type = "radio" name = "gender" value = "male"> Male
        <br> <br>
        <input type = "submit" name = "submit" value = "Submit Your Information">
    </form>

    <?php
        echo "<h2> Your infor: <h2>" ;
        echo $fullname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $number;
        echo "<br>";
        echo $age;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>
</html>