<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="6.css">
    <title>Document</title>
</head>
<body>
<form action="ketqua.php" method="POST" enctype="multipart/form-data" >
<tr>
            <h1 style= "margin-top:50px;margin-bottom:50px;Text-align: center; color: rgb(255, 200, 0)">ĐĂNG KÍ</h1>
        </tr>
            <table style="margin-left: auto; margin-right: auto;background-color:rgb(235, 231, 37)">
            
                    <td>TÊN ĐĂNG NHẬP:</td>
                    <td>
        <input type="text"name="username">
                </td></tr>
                <tr>
                    <td>MẬT KHẨU:</td>
                    <td>
        <input type="password"name="password">
                </td></tr>
                <tr>
                    <td>NHẬP LẠI MẬT KHẨU:</td>
                    <td>
        <input type="password"name="nhaplaipassword">
                </td>
            </tr>
                <tr>
                    <td>GIỚI TÍNH:</td>
                    <td>
        <input type="radio"name="gioitinh" value="Nam">Nam
        <input type="radio"name="gioitinh" value="Nữ">Nữ 
                </td></tr>
                <tr>
                    <td>NGÀY SINH:</td>
                    <td>
        <input type="date"name="ngaysinh">
                </td></tr>
                <tr>
                    <td>ĐỊA CHỈ:</td>
                    <td>
        <textarea name="diachi" id="" cols="30" rows="10"></textarea>
                </td></tr>
                <tr>
                    <td>ẢNH AVATAR:</td>
                    <td>
        <input type="file"name="avatar">
                </td></tr>
                <tr>
                    <td>SỞ THÍCH:</td>
                    <td>
        <input type="checkbox"name="sothich[]" value="Xem Phim">Xem Phim
        <input type="checkbox"name="sothich[]" value="Đá Bóng">Đá Bóng
                </td></tr>
                <tr>
                    <td colspan="2"><input type="submit" name ="ok" value="ok">
                        <input type="reset"value="reset"></td>
                    <td>

                </td></tr>
            </table>
            </form>
</body>
</html>