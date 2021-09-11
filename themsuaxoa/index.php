<?php
    require "connectSQL.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh Sach Hoc Sinh</title>
    </head>
    <body>
        <table border="1" align="center">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th> 
                    <a href="add.php">Them</a>
                </th>
            </tr>
            <?php 
                $sql = "SELECT * FROM hocsinh";
                $qr = mysqli_query($conn, $sql);
                while($rows = mysqli_fetch_assoc($qr)){
            ?>
            <tr>
                <td><?php echo $rows["Username"] ?></td>
                <td><?php echo $rows["Email"] ?></td>
                <td><?php echo $rows["Address"] ?></td>
                <td>
                    <a href="modify.php?id= <?php echo $rows["id"] ?>">Sua</a> | 
                    <a href="delete.php?id= <?php echo $rows["id"] ?>">Xoa</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>