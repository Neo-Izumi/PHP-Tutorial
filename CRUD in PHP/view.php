<?php
    include "config.php";

    $query = "SELECT * FROM `users`";

    $sql = $connect->query($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> View Page </title>
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
        crossorigin="anonymous">
    </head>

    <body bgcolor="89AEFF">
        <div class = "container">
            <h2> Users </h2>
        <table class = "table">
            <head>
                <tr>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Blood Group </th>
                    <th> Action </th>
                </tr>
                <tbody>
                    <?php
                        if ($sql->num_rows > 0) {
                            while ($row = $sql->fetch_assoc()) {
                    ?> 
                        <tr>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <?php echo $row['phone']; ?> </td>
                            <td> <?php echo $row['bgroup']; ?> </td>
                            <td> <a class = "btn btn-danger" href = "update.php?id=<?php echo $row['id']; ?>"> Edit </a>&nbsp;
                            <a class = "btn btn-danger" href = "delete.php?id=<?php echo $row['id']; ?>"> Delete </a>&nbsp;
                            </td>
                        </tr>
                    <?php   }
                        }
                    ?>
                </tbody>
            </head>
        </table>
    </body>
</html>