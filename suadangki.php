<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8.css">
    <title>Sửa Đăng Kí</title>
</head>
<form action="ketqua.php" method="POST" enctype="multipart/form-data" >
<body>
    <?php
    $servername = "localhost";
    $username_sql = "root";
    $password_sql = "";
    $dbname = "demo";
    // Create connection
    $conn = new mysqli($servername, $username_sql, $password_sql, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   // echo "Connected successfully";
    ?>

    <?php
        $id=(isset($_GET['id']))?$_GET['id']:0;
        //echo 'id= '.$id;

        $sql = "SELECT * FROM user where id=".$id;
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            
            <tr>
            <h1 style= "margin-top:20px;margin-bottom:50px;Text-align: center; color: rgb(255, 151, 53)">SỬA</h1>
        </tr>
            <table style="margin-left: auto; margin-right: auto;background-color:rgb(231, 71, 178)">
               
                <tr>
                    <td>TÊN ĐĂNG NHẬP:</td>
                    <td>
        <input type="text"name="username" value="<?=$row['username']?>">
                </td></tr>
                <tr>
                    <td>MẬT KHẨU:</td>
                    <td>
        <input type="password"name="password" value="<?=$row['password']?>">
                </td></tr>
                <tr>
                    <td>NHẬP LẠI MẬT KHẨU:</td>
                    <td>
        <input type="password"name="nhaplaipassword" value="<?=$row['repassword']?>">
                </td>
            </tr>
                <tr>
                    <td>GIỚI TÍNH:</td>
                    <td>
                        <?php
                        if($row['sex']="Nam"){
                        ?>
                            <input type="radio"name="gioitinh" value="Nam" checked>Nam
                            <input type="radio"name="gioitinh" value="Nữ" >Nữ 
                        <?php
                        }else{
                        ?>
                            <input type="radio"name="gioitinh" value="Nam" >Nam
                            <input type="radio"name="gioitinh" value="Nữ" checked>Nữ 
                        <?php
                        }
                        ?>
        
        
                </td></tr>
                <tr>
                    <td>NGÀY SINH:</td>
                    <td>
        <input type="date"name="ngaysinh" value="<?=$row['birthday']?>">
                </td></tr>
                <tr>
                    <td>ĐỊA CHỈ:</td>
                    <td>
        <textarea name="diachi" id="" cols="30" rows="10"><?=$row['address']?></textarea>
                </td></tr>
                <tr>
                    <td>ẢNH AVATAR:</td>
                    <td>
        <input type="file"name="avatar"><br/>
        <img src="<?= $row['avatar']?>" alt="" width="100px">
                </td></tr>
                <tr>
                    <td>SỞ THÍCH:</td>
                    <td>
                        <?php
                        $xemphim="";
                        $dabong="";
                        $array_sothich = explode("-",$row['hobby']);
                        //var_dump($array_sothich);
                        foreach($array_sothich as $value){
                            if(trim($value) =="Xem Phim"){
                                $xemphim = "checked";
                            }else if(trim($value)=="Đá Bóng"){
                                $dabong = "checked";
                            }
                        }
                        ?>
        <input type="checkbox"name="sothich[]" value="Xem Phim"<?=$xemphim?> >Xem phim
        <input type="checkbox"name="sothich[]" value="Đá Bóng"<?=$dabong?> >Đá bóng
                </td></tr>
                <tr>
                    <td colspan="2"><input type="submit" name ="sua" value="Sua">
                        <input type="reset"value="reset"></td>
                    <td>

                </td></tr>
            </table>
            

            <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close(); 
    ?>
    

    </form>   
</body>
</html>