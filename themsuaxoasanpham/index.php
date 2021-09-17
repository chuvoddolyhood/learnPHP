<?php
    require_once 'config/connectSQL.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>The Gioi Di Dong</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'list':
                    require_once 'sanpham/list.php';
                    break;

                case 'add':
                    require_once 'sanpham/add.php';
                    break;

                case 'modify':
                    require_once 'sanpham/modify.php';
                    break;

                case 'delete':
                    require_once 'sanpham/delete.php';
                    break;

                default:
                    require_once 'sanpham/list.php';
                    break;
            }
        }else {
            require_once 'sanpham/list.php';
        }
    ?>
</body>
</html>