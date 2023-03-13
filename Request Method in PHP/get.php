 <html>
    <body bgcolor="C9F4E8">

        <?php 
            if (isset($_GET["name"]) || isset($_GET["age"])) {
                echo "Hi " . $_GET["name"] . "<br>";
                echo "You're " . $_GET["age"] . " years old.";
                exit();
            }
        ?>

        <form method = "get" action = "<?php $_PHP_SELF ?>">
            Name: <input name = "name" type = "text"/>
            <br> <br>
            
            Age: <input name = "age" type = "text"/>
            <br> <br>
            
            <input type = "submit" name = "submit" value = "Submit"/>
        </form>
    </body>
</html>