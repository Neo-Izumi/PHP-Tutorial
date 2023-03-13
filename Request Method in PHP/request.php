<html>
    <body bgcolor="89AEFF">
        <?php
            if (isset($_REQUEST["name"]) || isset($_REQUEST["age"])) {
                echo "Hello " . $_REQUEST["name"] . ".<br/>";
                echo "Your age is " . $_REQUEST["age"] . " years old.<br/>";
                exit();
            } 
        ?>

        <form method = "POST" action = "<?php $_PHP_SELF?>">
            Name: <input name = "name" type = "text" />
            <br> <br>

            Age: <input name = "age" type = "text" />
            <br> <br>

            <input type = "submit" />
        </form>
    </body>
</html>