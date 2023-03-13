<html>
    <body bgcolor="F4C9F1">
        <?php 
            if (isset($_POST["name"]) || isset($_POST["age"])) {
                if (preg_match("/[^A-Za-z'-]/", $_POST["name"])) {
                    die("Invalid name");
                }
                echo "Hello " . $_POST["name"] . "<br/>";
                echo "Your age is " . $_POST["age"] . "<br/>";
                exit();
            }
        ?>
        
        <form method = "POST" action = "<?php $_PHP_SELF?>">
            Name: <input type = "text" name = "name" />
            <br /><br />

            Age: <input type = "text" name = "age" />
            <br /><br />

            <input type = "submit" />
        </form>
    </body>
</html>