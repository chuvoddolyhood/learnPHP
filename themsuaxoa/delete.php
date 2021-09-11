<?php
    require "connectSQL.php";
?>

<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
?>

<?php
    $sql = "DELETE FROM hocsinh WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    header("location: index.php");
?>