<!DOCTYPE html>
<html>
    <head>
        <title>Buoi1 HTML</title>
    </head>
    <body>
        <form action="action_page.php" method="POST">
            Tên đăng nhập: <input type="text" name="username"><br>
            Mật khẩu: <input type="password" name="password"><br>
            Gõ lại mật khẩu <input type="password" name="pass"><br>
            Hình đại diện<input type="file" id="myfile" name="myfile"><br><br>
            Giới tính <input type="radio" value="male" name="gender" checked> Nam
                        <input type="radio" value="female" name="gender"> Nữ
                        <input type="radio" value="other" name="gender"> Khác <br>
            Nghề nghiệp <select name="job">
                <option value="student">Học sinh</option>
                <option value="student">Sinh viên</option>
                <option value="student">Giáo viên</option>
                <option value="student">Khác</option>
            </select><br>
            Sở thích <input type="checkbox" name="sport" value="Sport"> Thể thao
            <input type="checkbox" name="travel" value="travel"> Du lịch
            <input type="checkbox" name="music" value="music"> Âm nhạc
            <input type="checkbox" name="fashion" value="fashion"> Thời trang<br>
            <input type="submit" value="Đăng Ký">
            <input type="reset" value="Làm lại">
        </form>
    </body>
</html>