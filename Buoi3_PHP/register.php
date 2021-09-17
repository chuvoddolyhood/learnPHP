<!DOCTYPE html>
<html>
    <head>
        <title>Buoi3 PHP</title>
    </head>
    <body>
        <?php
            if(isset($_POST["submit"])){
                echo $Username = $_POST["username"];
                echo $Password = $_POST["password"];
                echo $Password_againType = $_POST["pass_againType"];
                echo $Avatar = $_POST["myAvatar"];
                echo $gender = $_POST["gender"];
                echo $job = $_POST["job"];
                // $hobby = $_POST["job"];
            }
        ?>
        <form method="POST" value="">
            Tên đăng nhập: <input type="text" name="username"><br>
            Mật khẩu: <input type="password" name="password"><br>
            Gõ lại mật khẩu <input type="password" name="pass_againType"><br>
            Hình đại diện<input type="file" id="myfile" name="myAvatar"><br><br>
            Giới tính <input type="radio" value="male" name="gender" checked> Nam
                        <input type="radio" value="female" name="gender"> Nữ
                        <input type="radio" value="other" name="gender"> Khác <br>
            Nghề nghiệp <select name="job">
                <option value="student">Học sinh/Sinh viên</option>
                <option value="officer">Nhân viên văn phòng</option>
                <option value="teacher">Giáo viên</option>
                <option value="others">Khác</option>
            </select><br>
            Sở thích 
            <input type="checkbox" name="sport" value="Sport"> Thể thao
            <input type="checkbox" name="travel" value="travel"> Du lịch
            <input type="checkbox" name="music" value="music"> Âm nhạc
            <input type="checkbox" name="fashion" value="fashion"> Thời trang<br>

            <input type="submit" value="Đăng Ký">
            <input type="reset" value="Làm lại">
        </form>
    </body>
</html>