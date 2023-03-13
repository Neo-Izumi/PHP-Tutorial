<!DOCTYPE html>
<html>

    <head>
        <style>
            .error {color: red; font: size 30px;}
        </style>
    </head>

    <body bgcolor="ECF4C9">
        <?php
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (empty($_POST["name"])) {
                    $nameErr = "This field cannot be empty";
                } else {
                    $name = test_input($_POST["name"]);
                    if (preg_match("/^[a-zA-Z-']*$/", $name)) {
                        $nameErr = "Only letters and white spaces are allowed in this field";
                    }
                }
                if (empty($_POST["email"])) {
                    $emailErr = "Please enter a valid email address";
                } else {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email address";
                    } 
                }
    
                if (empty($_POST["website"])) {
                    $website = "";
                } else {
                    $website = test_input($_POST["website"]);
                    if (!filter_var($website, FILTER_VALIDATE_URL)) {
                        $websiteErr = "Invalid website URL";
                    }
                }
    
                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
    
                if (empty($_POST["gender"])) {
                    $genderErr = "Please select a gender";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <h2> PHP Validation Form Example </h2>
        <p><span class = "error">* required field</span></p>
        <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">\
            Full Name: <input type = "text" name = "name" value = "ex: Nguyễn Văn A">
            <span class = "error">* <?php echo $nameErr?></span>
            <br> <br>

            Email: <input type = "text" name = "email" value = "ex: nguyenvana@gmail.com">
            <span class = "error">* <?php echo $emailErr?></span>
            <br> <br> 

            Website: <input type = "text" name = "website" value = "ex: http://www.nguyenvana.com">
            <span class = "error"><?php echo $websiteErr?></span>
            <br> <br>

            Comment: <textarea name = "comment" rows = "1" cols = "50"></textarea>
            <br> <br>

            Gender: 
            <input type = "radio" name = "gender" value = "male"> male
            <input type = "radio" name = "gender" value = "female"> female
            <span class = "error"><?php echo $genderErr?></span>
            <br> <br>

            <input type = "submit" name = "submit" value = "Submit your Information">
        </form>

        <?php 
            echo "<h2> Your Information: </h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>

    </body>

</html>
