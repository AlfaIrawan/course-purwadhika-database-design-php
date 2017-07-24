<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'root';
    $db_name = 'test02';
?>

<html>
    <head></head>
    <body>

        <?php

            $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
            if( mysqli_connect_error() )
            {

                echo "Error : ", mysqli_connect_error();
                die();

            }
            else
            {

                $query = "SELECT * FROM Product";
                $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        ?>
                <table border="1">
                    <tr>
                        <td>Product Id</td>
                        <td>Product Name</td>
                        <td>Qty</td>
                        <td>Price</td>
                    </tr>
        <?php
                while ($row = $result->fetch_assoc())
                {
        ?>

                    <tr>
                        <td><?php echo $row['ProductId']; ?></td>
                        <td><?php echo $row['ProductName']; ?></td>
                        <td><?php echo $row['Qty']; ?></td>
                        <td><?php echo $row['Price']; ?></td>
                    </tr>
        <?php
                }
        ?>
                </table>
        <?php
            }
        ?>
    </body>
</html>
