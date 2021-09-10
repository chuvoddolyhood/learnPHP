<?php
    require "connectSQL.php"
?>

<?php
    if(isset($_POST["them"])){
        $Username = $_POST["Username"];
        $Email = $_POST["Email"];
        $Address = $_POST["Address"];

        if($Username == "" || $Email == "" || $Address == ""){
            echo "Vui long nhap day du thong tin <br />";
        }
        else {
            $sql = "INSERT INTO hocsinh(Username, Email, Address) VALUES ('$Username', '$Email', '$Address')";
            $query = mysqli_query($conn, $sql);
            header("location: index.php"); //chuyen huong trang ve index.php
        }
    }
?>

<form method = "POST" action="">
    <label>Username</label>
    <input type="text" name = "Username" />
    </br>

    <label>Email</label>
    <input type="text" name = "Email" />
    </br>

    <label>Address</label>
    <input type="text" name = "Address" />
    </br>

    <input type="submit" name="them" value="Them"/>
</form>