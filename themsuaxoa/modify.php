<?php
    require "connectSQL.php"
?>

<?php
    //Nhan id
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        // echo $id;
    }
?>

<?php
    $sql = "SELECT * FROM hocsinh WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($query);
?>

<?php
    if(isset($_POST["sua"])){
        $Username = $_POST["Username"];
        $Email = $_POST["Email"];
        $Address = $_POST["Address"];

        if($Username == "" || $Email == "" || $Address == ""){
            echo "Vui long nhap day du thong tin";
        } else {
            $sql = "UPDATE hocsinh SET Username = '$Username', Email = '$Email', Address = '$Address' WHERE id = $id";
            $query = mysqli_query($conn, $sql);
            header("location: index.php");
        }
    }
?>

<form method="POST" value="">
    <label>Username</label>
    <input type="text" name="Username" value="<?php echo $rows["Username"];?>"/>

    <label>Email</label>
    <input type="text" name="Email" value="<?php echo $rows["Email"];?>"/>

    <label>Address</label>
    <input type="text" name="Address" value="<?php echo $rows["Address"];?>"/>

    <input type="submit" name="sua" value="Sua"/>
</form>